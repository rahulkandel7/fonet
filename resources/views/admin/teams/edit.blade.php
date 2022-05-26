@extends('layouts.admin.app')

@section('main')
@include('layouts.message')
    <div class="flex-1">
        <div class="px-5 py-5">
            <h3 class="text-primary text-3xl text-[#5977E9] font-bold">
                Update:- {{$membership->name}} info
            </h3>
            <hr class="border-[#5977E9] dark:border-gray-500">
    
            @if($errors->any())
                <p class="my-3 text-red-400 font-bold">
                    {{$errors->first()}}
                </p>
              @endif
    
            <form method="post" action="{{route('admin.memberships.update',$membership->id)}}" enctype="multipart/form-data">
                @method('put')
                @csrf
                {{-- For Title --}}
                <div class="mt-5">
                    <label for="name" class="block font-bold text-gray-600 dark:text-gray-200">Name</label>
                    <input type="text" name="name" id="name" class="border-[#5976e970] border-2 rounded-md w-full focus:ring-transparent focus:border-[#5977E9] bg-transparent mt-2" required value="{{$membership->name}}">
                </div>
    
                {{-- For selecting Image --}}
                <div class="mt-5">
                    <label for="photopath" class="block font-bold text-gray-600 dark:text-gray-200">Select Image</label>
                    <input type="file" name="photopath" id="photopath" class="border-0 w-full focus:ring-transparent focus:border-primary bg-transparent mt-2 file:border-none file:text-white file:bg-[#5977E9] file:rounded-md file:hover:bg-[#415dce] file:cursor-pointer">
                </div>

                {{-- For Post --}}
                <div class="mt-5">
                    <label for="post" class="block font-bold text-gray-600 dark:text-gray-200">Post</label>
                    <input type="text" name="post" id="post" class="border-[#5976e970] border-2 rounded-md w-full focus:ring-transparent focus:border-[#5977E9] bg-transparent mt-2"  value="{{$membership->post}}">
                </div>

                {{-- For address --}}
                <div class="mt-5">
                    <label for="address" class="block font-bold text-gray-600 dark:text-gray-200">Address</label>
                    <input type="text" name="address" id="address" class="border-[#5976e970] border-2 rounded-md w-full focus:ring-transparent focus:border-[#5977E9] bg-transparent mt-2"  value="{{$membership->address}}">
                </div>

                {{-- For Email --}}
                    <div class="mt-5">
                        <label for="email" class="block font-bold text-gray-600 dark:text-gray-200">Email Address</label>
                        <input type="email" name="email" id="email" class="border-[#5976e970] border-2 rounded-md w-full focus:ring-transparent focus:border-[#5977E9] bg-transparent mt-2"  value="{{$membership->email}}">
                    </div>
    
                    {{-- For Type --}}
                    <div class="mt-5">
                        <label for="email" class="block font-bold text-gray-600 dark:text-gray-200">Select Type</label>
                        <select name="type" id="type" class="border-[#5976e970] border-2 rounded-md w-full focus:ring-transparent focus:border-[#5977E9] bg-transparent mt-2">
                            <option value="Honorable Members" @if($membership->type == "Honorable Members") selected @endif>Honorable Members</option>
                            <option value="Life Members" @if($membership->type == "Life Members") selected @endif>Life Members</option>
                            <option value="General Members" @if($membership->type == "General Members") selected @endif>General Members</option>
                            <option value="Ex-President" @if($membership->type == "Ex-President") selected @endif>Ex-President</option>
                            <option value="Staff Members" @if($membership->type == "Staff Members") selected @endif>Staff Members</option>
                            <option value="Executive Committee" @if($membership->type == "Executive Committee") selected @endif>Executive Committee</option>
                        </select>
                    </div>
                
    
                
                {{--  Add and Discard Button --}}
                
                <div class="mt-4">
                    <button type="submit" class="px-6 py-1 border-0 shadow-sm hover:shadow-md bg-[#5977E9] hover:bg-[#3c56c0] rounded-md text-white">
                        Add
                    </button>
                    
                    <button class="px-6 py-1 border-0 shadow-sm hover:shadow-md bg-red-500 hover:bg-red-600 rounded-md text-white mx-5">
                        <a href="{{ route('admin.memberships.index') }}" >Cancel</a>
                    </button>
                </div>
            </form>
    
            
        </div>
    </div>
@endsection
