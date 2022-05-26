@extends('layouts.admin.app')

@section('main')
@include('layouts.message')
    <div class="flex-1">
        <div class="px-5 py-5">
            <h3 class="text-primary text-3xl text-[#5977E9] font-bold">
                {{$article->title}}
            </h3>
            <hr class="border-[#5977E9] dark:border-gray-500">
    
           @if ($article->photopath)
               <img src="/storage/{{$article->photopath}}" class="px-10 py-2 rounded-md shadow-lg">
           @endif

           <p class="my-2 px-5 text-lg">
                {!! $article->description !!}
           </p>
            
    
            
        </div>
    </div>
@endsection
