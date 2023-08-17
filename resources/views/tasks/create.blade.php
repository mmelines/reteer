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
                    <div>
                        @if ($task->start_date != '')
                            <span>{{ $task->start_date }}</span>
                            <span>@</span>
                            <span>{{ $task->start_time }}</span>
                        @endif
                    </div>
                    {{ $task->task_description }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
