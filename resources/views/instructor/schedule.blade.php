<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-300 leading-tight">
            Schedule a Class
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-dark overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-10 text-gray-300">
                    <form action="{{ route('schedule.store') }}" method="post" class="max-w-lg">
                        @csrf
                        <div class="space-y-6">
                            <div>
                                <label class="text-sm">Select type of class</label>
                                <select name="class_type_id"
                                    class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm mt-1 block w-full">
                                    @foreach ($classTypes as $classType)
                                        <option value="{{ $classType->id }}">{{ $classType->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="flex gap-6">
                                <div class="flex-1">
                                    <label class="text-sm">Date</label>
                                    <input type="date" name="date"
                                        class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm mt-1 block w-full"
                                        min="{{ date('d-m-Y', strtotime('tomorrow')) }}">
                                </div>
                                <div class="flex-1">
                                    <label class="text-sm">Time</label>
                                    <select type="time" name="time"
                                        class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm mt-1 block w-full">
                                        <option value="05:00:00">5 am</option>
                                        <option value="06:00:00">6 am</option>
                                        <option value="07:00:00">7 am</option>
                                        <option value="08:00:00">8 am</option>
                                        <option value="17:00:00">5 pm</option>
                                        <option value="18:00:00">6 pm</option>
                                        <option value="19:00:00">7 pm</option>
                                        <option value="20:00:00">8 pm</option>
                                    </select>
                                </div>
                            </div>
                            <div>
                                @error('date_time')
                                    <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                            <div>
                                <x-primary-button>Schedule</x-primary-button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
