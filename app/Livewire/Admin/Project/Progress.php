<?php

namespace App\Livewire\Admin\Project;

use App\Models\Project;
use Livewire\Component;
use Filament\Tables\Table;

use Filament\Support\Colors\Color;
use Filament\Forms\Components\Grid;
use Filament\Tables\Actions\Action;
use Filament\Support\Enums\MaxWidth;
use Filament\Forms\Components\Select;

use Filament\Forms\Components\Toggle;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Contracts\HasTable;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Actions\DeleteAction;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Tables\Concerns\InteractsWithTable;

class Progress extends Component implements HasForms, HasTable
{
    use InteractsWithTable;
    use InteractsWithForms;
    public $project_id;
    public function mount($project_id)
    {
        $this->project_id = $project_id;
    }
    public function table(Table $table): Table
    {
        return $table
            ->query(\App\Models\Division::query()->with('divisionInfo')->where('project_id', $this->project_id)->latest())

            ->columns([
                ImageColumn::make('profile')
                    ->circular()->defaultImageUrl(asset('images/preview.png'))->url(fn($record) => '/storage/'.$record->profile)->openUrlInNewTab()->disableClick(fn($record) => !!$record->profile ? false : true),
                TextColumn::make('division')->state(fn ($record) => $record->divisionInfo?->division_name),
                TextColumn::make('progress')->state(fn ($record) => $record->percent),
                TextColumn::make('date_updated')->state(fn ($record) => $record->updated_at),

            ])
            ->filters([
                // ...
            ])
            ->actions([
                EditAction::make()->label('update')->color(Color::Green)
                    ->beforeFormFilled(function ($record) {

                       $record['division'] = $record->divisionInfo?->division_name;
                        return $record;
                    })

                    ->form([

                         TextInput::make('division')->disabled(true),
                          TextInput::make('percent')->numeric()->maxValue(100),
                          FileUpload::make('profile')->required()->directory('/project/division')->image(),

                    ])->action(function ($data,$record) {


                       $record->update($data);
                        Notification::make()
                            ->title('Updated successfully')
                            ->success()
                            ->send();
                    })->modalWidth(MaxWidth::Small)->closeModalByClickingAway(false),

            ]);
    }
    public function render()
    {
        $projectInfo = Project::with(['divisions.divisionInfo'])->where('id', $this->project_id)->first();
        return view('livewire.admin.project.progress', compact('projectInfo'));
    }
}
