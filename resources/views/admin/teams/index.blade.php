@extends('layouts.admin.app')

@section('css')
    <style>
        .white-card {
            background: rgba(49, 79, 162, 0.15);
            box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
            backdrop-filter: blur( 7.5px );
            -webkit-backdrop-filter: blur( 7.5px );
            border-radius: 10px;
            border: 1px solid rgba( 255, 255, 255, 0.18 );
        }
    </style>
@endsection
@section('main')
    @include('layouts.message')
    <div class="flex-1">
        <div class="px-5 py-5">
            <h3 class="text-[#5977E9] text-4xl font-bold">
                Team Member
            </h3>
            <hr>
    
                <div class="w-44 h-32 mx-4 mt-4 p-2 shadow-md dark:shadow-indigo-800 rounded-md bg-indigo-500 shadow-indigo-200 hover:shadow-sm hover:cursor-pointer">
                    <h2 class="text-xl font-bold text-white">No of Members</h2>
                    <div class="flex justify-between">
                        <i class="fa fa-users fa-2x text-white opacity-70"></i>
                    <h1 class="text-4xl font-bold text-right text-white mr-4">{{count($memberships)}}</h1>
                    </div>
                </div>

    
    
            <table class="border border-gray-200 w-full mt-10 shadow-md rounded-md ">
                <tr>
                    <td class="text-gray-600 font-semibold px-5 border  dark:text-white">
                        S.No
                    </td>
                    <td class="text-gray-600 font-semibold px-5 border dark:text-white">
                        Name
                    </td>
                    <td class="text-gray-600 font-semibold px-5 border  dark:text-white">
                        Image
                    </td>
                    <td class="text-gray-600 font-semibold px-5 border  dark:text-white">
                        Type
                    </td>
                    <td class="text-gray-600 font-semibold px-5 border  dark:text-white">
                        Actions
                    </td>
                </tr>
                @php
                    $i = 0;
                @endphp
    
                @foreach ($memberships as $membership)
                    <tr>
                        <td class="text-gray-900 font-semibold px-5 border  dark:text-white">
                            {{++$i}} 
                        </td>
                        <td class="text-gray-900 font-bold px-5 border dark:text-white">
                            <a href="{{route('admin.memberships.show',$membership->id)}}" class="cursor-pointer">
                                {{$membership->name}} 
                            </a>
                        </td>
                        <td class="text-gray-900 font-bold px-5 border w-52 dark:text-white">

                            <img src="/storage/{{$membership->photopath}}">

                        </td>
                        <td class="text-gray-900 font-bold px-5 border dark:text-white">

                                {{$membership->type}} 

                        </td>
                        <td class="text-gray-600 font-semibold px-5 border  py-2">
                            <a href="{{ route('admin.memberships.edit', $membership->id) }}">
                                <i class="far fa-edit hover:text-blue-900 font-bold cursor-pointer text-xl dark:text-blue-300 dark:hover:text-blue-500"></i>
                            </a>
                            
                            <button onclick="showdelete({{$membership->id}})">
                                <i class="fas fa-trash hover:text-red-500 font-bold cursor-pointer text-xl ml-3 dark:text-red-300 dark:hover:text-red-600"></i>
                            </button>
                       
                        </td>
                    </tr>
    
                @endforeach
    
            </table>
    
            <div class="my-4">
                
            </div>
    
             {{-- Modal For Delete --}}
    
                        <!-- Main modal -->
                        <div id="deletemodal"  class="white-card hidden dark:bg-white dark:bg-opacity-10 overflow-y-auto overflow-x-hidden fixed right-0 left-0 top-20 z-50 justify-center items-center md:h-full md:inset-0  align-middle"  >
                            <div class="relative px-4 w-full max-w-md h-full md:h-auto mx-auto ">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                
                                    <form class="px-6 pb-4 space-y-6 lg:px-8 sm:pb-6 xl:pb-8" method="POST" action="{{route('admin.memberships.delete')}}">
                                    @csrf
                                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white pt-6 mb-0 text-center">Are You Sure to Delete ?</h3>
                                        <p class="text-center mt-0 text-red-500">The action is irreversible</p>
                                        
                                        <input type="hidden" id="dataid" name="dataid">
                                        
                                        <div class="flex justify-center">
                                        <button type="submit" class="py-2 px-4 mx-2 rounded-md text-white bg-indigo-600 shadow-md shadow-indigo-200 hover:bg-indigo-800 hover:shadow-sm dark:shadow-gray-600">Yes ! Delete</button>
                                        <a class="py-2 px-4 mx-2 rounded-md cursor-pointer text-white bg-red-500 shadow-md shadow-red-200 hover:bg-red-600 hover:shadow-sm dark:shadow-gray-600" onclick="hidedelete()">Cancel</a>
                                        </div>
                                        
                                    </form>
                                </div>
                            </div>
                        </div> 
            
            {{-- End Modal For Delete --}}
    
            <div class="fixed bottom-3 right-7">
                <a href="{{ route('admin.memberships.create') }}">
                    <div class="bg-[#5977E9] w-14 h-14 rounded-full bg-primary text-white text-lg cursor-pointer">
                        <div class="flex justify-center pt-5">
                                <i class="fas fa-plus"></i>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection

@section('js')
<script>
    function showdelete($id){
        $('#deletemodal').removeClass('hidden');
        $('#deletemodal').addClass('flex');
        document.getElementById('dataid').value = $id;
    }

    function hidedelete(){
        $('#deletemodal').removeClass('flex');
        $('#deletemodal').addClass('hidden');
    }
</script>
@endsection