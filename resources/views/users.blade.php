<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{-- {{ __("You're logged in!") }} --}}

                    <button class="float-right rounded-full bg-sky-500 p-1 hover:bg-sky-700">Add Users</button>

                    {{-- Users Table --}}
                    <table class="table-auto w-full">
                        <thead>
                            <tr>
                                <th>Song</th>
                                <th>Artist</th>
                                <th>Year</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>The Sliding Mr. Bones (Next Stop, Pottersville)</td>
                                <td class="text-center">Malcolm Lockyer</td>
                                <td class="text-center">1961</td>
                                <td class="text-center">
                                    <button class="rounded-full bg-sky-500 p-1 hover:bg-sky-700">Update</button>
                                    <button class="rounded-full bg-sky-500 p-1 hover:bg-sky-700">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Witchy Woman</td>
                                <td class="text-center">The Eagles</td>
                                <td class="text-center">1972</td>
                                <td class="text-center">
                                    <button class="rounded-none bg-slate-900">Save</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Shining Star</td>
                                <td class="text-center">Earth, Wind, and Fire</td>
                                <td class="text-center">1975</td>
                                <td class="text-center">
                                    <button class="rounded-full bg-sky-500 p-1 hover:bg-sky-700">Update</button>
                                    <button class="rounded-full bg-sky-500 p-1 hover:bg-sky-700">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>        
                    

                    {{-- End Table --}}


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
