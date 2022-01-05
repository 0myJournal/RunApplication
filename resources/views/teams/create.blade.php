<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Team') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Teams
                 </div>
                 <div class="bg-white w-full flex-wrap p-5">
                    @foreach ($teams as $team)
                    {{-- show team --}}
                    @endforeach
                    <div class="bg-gray-100 w-1/4  p-2">
                        <form action="/team/store" method="post" enctype="multipart/form-data">
                            @csrf
                            <h1 class="underline">Add team</h1>
                            <h2>Name:</h2>
                            <input id="name" 
                            type="text" 
                            name="name" 
                            placeholder="Team name"
                            class="h-8 p-1" autofocus>
                            @error('name')
                                <span class="text-red text-sm-center" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <h2>Image:</h2>
                            <div class="flex items-center ">
                                <img src="images\defaultteam.jpg" 
                                id="formimage" 
                                class="w-36 rounded">
                                <div class="mt-auto ">
                                    <label for="image">
                                    <div title="Edit Image" 
                                    class="cursor-pointer text-center -mb-1 -ml-9 bg-green-500 hover:bg-white hover:text-green-500 text-white w-11 p-1 rounded-full">
                                        Edit
                                    </div>
                                    </label>
                                </div>
    
                            </div>
                            <input type="file" onchange="getImage(this,'formimage'); 
                            " class=" hidden" name="image" id="image"
                            accept=".png, .jpg, .jpeg, .gif, .jfif">
                            
                                <button class=" block text-white p-2 text-lg rounded-lg mt-3 bg-indigo-500 hover:bg-indigo-600 focus:outline-none">
                                    Add team
                                </button>
                        
                        </form>
                    </div>
                </div>
                
                
            </div>
        </div>
    </div>
</x-app-layout>