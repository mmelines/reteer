<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tasks') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-2">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a>
                        <form method="post" action="{{ url('/tasks') . '/' . $task->id . '/edit' }}">
                            @csrf
                            <input type="submit" value="Edit Task">
                        </form>
                        <div id="time-section">
                            <span>When? </span>
                            @if ($task->start_date != '')
                                <span>{{ $task->start_date }}</span>
                                @if ($task->start_time != '')
                                    <span>@</span>
                                    <span>{{ $task->start_time }}</span>
                                @endif
                            @else
                                <span>
                                    <a href=#>
                                        Add a start date
                                    </a>
                                </span>
                            @endif
                        </div>
                        <div id="name-section">
                            @if ($task->name != '')
                                <div>
                                    <span>Name:</span>
                                    {{ $task->name }}
                                </div>
                            @endif
                        </div>
                        <div id="client-section">
                            <span>Client:</span>
                            {{ $task->client }}
                        </div>
                        <div id="volunteer-section">
                            <span>Volunteer:</span>
                            {{ $task->volunteer }}
                        </div>
                        <div id="description-section">
                            @if ($task->task_description != '')
                                <span>
                                    Description:
                                </span>
                                {{ $task->task_description }}
                            @else
                                A task description is required and one has not been found for this entry.
                                This message indicates a error, please contact your site administrator at
                                <a href="mailto:admin@reteer.org">admin@reteer.org</a>
                            @endif
                        </div>
                        <div id="location-section">
                            <div id="location-address-section">
                                <span>Address:</span>
                                {{ $task->address }}
                            </div>
                            <div>
                                <span>Destination:</span>
                                {{ $task->destination }}
                            </div>
                            <span>
                        </div>
                        <div id="author">
                            <small>
                                Uploaded by {{ $task->author }} via
                                @if ($task->sheets_created_at != '')
                                    Google Sheets at {{ $task->sheets_created_at }}
                                @else
                                    this website at {{ $task->created_at }}
                                @endif
                            </small>
                        </div>
                </div>
            </div>
        </div>
</x-app-layout>
