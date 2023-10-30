<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Complaint') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="bg-white rounded-lg shadow-sm p-4">
                    <div class="flex justify-between items-center">
                        <h2 class="text-xl">Klacht indienen</h2>
                    </div>
                    @if ($errors->any())
                        <div class="p-2 bg-red-400 text-red-100 leading-none rounded-lg" role="alert">
                            <div class="flex flex-grow items-center pb-2">
                                <span class="flex rounded-full bg-red-300 uppercase px-2 py-1 text-xs font-bold mr-3">Alert</span>
                                <span class="font-semibold mr-2 text-left flex-auto">Input not correct</span>
                            </div>
                            <ul class="pl-16">
                                @foreach ($errors->all() as $error)
                                    <li>
                                        {{ $error }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    
                    <form action="{{route('complaint.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="flex justify-start flex-wrap gap-3 py-3">
                            <div class="w-full">
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="complainttype_id">Klacht type</label>
                                <select class="rounded bg-slate-100 w-full" name="complainttype_id" id="complainttype_id">
                                    @foreach ($complainttypes as $complainttype)
                                        <option value={{$complainttype->id}}>{{$complainttype->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="basis-full w-full">
                                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Klacht descriptie</label>
                                <textarea id="description" name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Wat is uw klacht..."></textarea>
                            </div>
                        </div>
                        <button class="inline-block bg-blue-500 hover:bg-blue-600 text-white mt-2 py-2.5 w-28 text-center font-bold rounded text-white shadow-md" type="submit">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>