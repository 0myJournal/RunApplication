<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   Tasks
                </div>
                <div class="p-2 mx-auto w-full ">
                    <div class="flex">
                        <a href="{{ route('addteam') }}"
                         class="w-1/2 border-gray-500 bg-blue-100 hover:bg-blue-300 border-3 text-center p-2 rounded-lg mr-1">
                            Add Team
                        </a>
                        <a href="{{ route('addrunner') }}"
                        class="w-1/2 border-gray-500 bg-blue-100 hover:bg-blue-300 border-3 text-center p-2 rounded-lg">
                            Add Runner
                        </a>
                    </div>
                    <div class="flex mt-1">
                        <a href="{{ route('leaderboards') }}"
                        class="w-1/2 border-gray-500 bg-blue-100 hover:bg-blue-300 border-3 text-center p-2 rounded-lg mr-1">
                            View Leaderboards
                        </a>
                        <a href="{{ route('logrun') }}"
                        class="w-1/2 border-gray-500 bg-blue-100 hover:bg-blue-300 border-3 text-center p-2 rounded-lg">
                            Log Runs
                        </a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</x-app-layout>
