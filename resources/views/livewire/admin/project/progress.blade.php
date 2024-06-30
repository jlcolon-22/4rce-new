<div x-data="{ aside: true }">
    <div class="flex">
        @include('components.layouts.admin.aside')
        <main class="w-full max-h-[100svh] px-4 md:px-10 pb-10">
            {{-- top nav --}}
            <div class="flex justify-between items-center py-4">
                <button x-on:click="aside = !aside">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>

                </button>

                <div class="avatar">
                    <div class="w-14 rounded-full">
                        <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                    </div>
                </div>
            </div>

            {{-- main content --}}
            <section class="max-h-[84svh] overflow-y-auto scrollContent">
                <div class="text-sm breadcrumbs">
                    <ul>
                        <li><a href="{{ route('admin.dashboard') }}" class="text-blue-600">Dashboard</a></li>
                        <li>Project Management</li>
                        <li>Project List</li>
                    </ul>
                </div>
                <div class="mt-8 flex gap-2">
                    {{-- {{ $this->table }} --}}
                    <div class="min-w-[20rem] h-fit bg-white rounded-md p-2 space-y-1">
                        <img src="{{ asset('images/project_preview.jpg') }}" class="h-[14rem] w-full border" alt="">
                        <div class="flex gap-2">
                            <h2 class="font-bold">Project Name:</h2>
                            <span>{{ $projectInfo->project_name }}</span>
                        </div>
                        <div class="flex gap-2">
                            <h2 class="font-bold">Start Date:</h2>
                            <span>{{ $projectInfo->start_date }}</span>
                        </div>
                        <div class="flex gap-2">
                            <h2 class="font-bold">Deadline:</h2>
                            <span>{{ $projectInfo->deadline }}</span>
                        </div>
                        <div class="flex gap-2">
                            <h2 class="font-bold">Location:</h2>
                            <span>{{ $projectInfo->project_location }}</span>
                        </div>
                        <div class="flex gap-2">
                            <h2 class="font-bold">Project Cost:</h2>
                            <span>{{ $projectInfo->cost }}</span>
                        </div>
                        <div class="flex gap-2">
                            <h2 class="font-bold">Client Name:</h2>
                            <span>{{ $projectInfo->customer }}</span>
                        </div>
                        <div class="flex gap-2">
                            <h2 class="font-bold">Proposed project:</h2>
                            <span>{{ $projectInfo->proposed_project }}</span>
                        </div>
                        <div class="flex gap-2">
                            <h2 class="font-bold">Project Status:</h2>
                            <span>{{ $projectInfo->status }}</span>
                        </div>
                    </div>
                    <div class="w-full  space-y-2">

                       <div >
                        @livewire(\App\Livewire\Admin\Project\Chart::class,['data'=>$projectInfo->divisions])
                       </div>
                       {{ $this->table }}
                    </div>

                </div>
            </section>
        </main>
    </div>
  {{-- <x-filament-actions::modals /> --}}
    @livewire('notifications')


</div>
