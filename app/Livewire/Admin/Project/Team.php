<?php

namespace App\Livewire\Admin\Project;

use Livewire\Component;
use Filament\Tables\Table;
use Filament\Support\Colors\Color;
use Filament\Tables\Actions\Action;
use Filament\Support\Enums\MaxWidth;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Components\Repeater;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Contracts\HasTable;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Tables\Actions\DeleteAction;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Tables\Concerns\InteractsWithTable;

class Team extends Component implements HasForms, HasTable
{
    use InteractsWithTable;
    use InteractsWithForms;


    public function table(Table $table): Table
    {
        return $table
            ->query(\App\Models\ProjectTeam::query()->with('foremanInfo')->latest())
            ->heading('Teams')
            ->headerActions([
                Action::make('add team')->color(Color::Green)->icon('heroicon-o-plus')
                    ->form([
                        TextInput::make('team_name'),
                        Toggle::make('status')->onColor(Color::Green)->default(true),
                        Select::make('foreman')->options(\App\Models\EmployeeAccount::where('position_id',1)->get()->pluck('fullname','id')),
                        Select::make('members')->options(\App\Models\EmployeeAccount::where('position_id','!=',1)->get()->pluck('fullname','id'))->multiple()

                    ])->action(function ($data) {
                        $data['members'] = json_encode( $data['members']);
                        \App\Models\ProjectTeam::create($data);
                        Notification::make()
                            ->title('Created successfully')
                            ->success()
                            ->send();
                    })->modalWidth(MaxWidth::Small)->closeModalByClickingAway(false)
            ])
            ->columns([
                TextColumn::make('team_name'),
                TextColumn::make('foreman')->state(fn($record)=> $record->foremanInfo?->fullname) ,
                IconColumn::make('status')
    ->boolean()
            ])
            ->filters([
                // ...
            ])
            ->actions([
                EditAction::make()->color(Color::Green)
                ->beforeFormFilled(function($record){

                     $record['members'] = json_decode($record->members);
                     return $record;
                })

                ->form([
                    TextInput::make('team_name'),
                    Toggle::make('status')->onColor(Color::Green)->default(true),
                    Select::make('foreman')->options(\App\Models\EmployeeAccount::where('position_id',1)->get()->pluck('fullname','id')),
                    Select::make('members')->options(\App\Models\EmployeeAccount::where('position_id','!=',1)->get()->pluck('fullname','id'))->multiple()
                ])->action(function ($data, $record) {
                    $data['members'] = json_encode( $data['members']);
                    $record->update($data);
                    Notification::make()
                        ->title('Updated successfully')
                        ->success()
                        ->send();
                })->modalWidth(MaxWidth::Small)->closeModalByClickingAway(false),
                DeleteAction::make()->closeModalByClickingAway(false)
            ]);
    }
    public function render()
    {
        return view('livewire.admin.project.team');
    }
}
