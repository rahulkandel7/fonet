@if($errors->any())

<div class="animate__animated animate__slideInRight dismissible fixed right-8 top-4 z-50">
    @foreach($errors->all() as $error)
    <div class="w-auto rounded-md p-2 mt-2  shadow-lg bg-gray-100 dark:bg-gray-600">
        <p class="border-l-4 border-red-500 px-2 text-red-500 dark:text-red-200 font-bold"><span class="fa fa-times bg-red-500 text-white px-2 py-0.5 rounded-full font-normal text-sm"></span> {{$error}}</p>
    </div>
    @endforeach
</div>

<script>
   $(function() {
        setTimeout(function(){
            $(".dismissible").addClass('animate__slideOutRight').fadeOut(1000);
        }, 2000);
   });

</script>

@endif

@if(Session::has('success'))
<div class="animate__animated animate__slideInRight dismissible fixed right-8 top-4 z-50">
    <div class="w-auto rounded-md p-2 shadow-lg bg-gray-100 dark:bg-gray-600">
        <p class="border-l-4 border-indigo-400 px-2 text-indigo-900 dark:text-indigo-300 font-bold"><span class="fa fa-check bg-indigo-400 text-white px-1.5 py-0.5 rounded-full font-normal text-sm"></span> {{session('success')}}</p>
    </div>
</div>
<script>
   $(function() {
        setTimeout(function(){
            $(".dismissible").addClass('animate__slideOutRight').fadeOut(1000);
        }, 2000);
   });

</script>
@endif