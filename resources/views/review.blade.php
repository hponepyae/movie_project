<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <script src="https://kit.fontawesome.com/fabd8cbd10.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="{{asset('addition.css')}}">

  <style>
/* width */
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #f1f1f1;
}

/* Handle */
::-webkit-scrollbar-thumb {
  background: #888;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555;
}

.mk1 {
    /* background-image: url("{{ asset('storage/'.$review['image']) }}");
    background-size: 100%;
    background-repeat: no-repeat;
    filter: blur(10px); */


}
</style>
</head>
<body class=" p-0 m-0 mk1 z-0 ">

<div class=" mk1 ">
    <img src="{{asset('storage/'.$review['image'])}}" alt="" class=" relative blur-sm">
   <div class=" absolute top-44  left-96" style=" width:50%">
     <img src="{{asset('storage/'.$review['image'])}}" alt="" class=" rounded-md relative">
    <div class=" absolute top-20 right-16">
         <div class=" text-white text-end ">
            <h1 class=" font-extrabold">{{$review['title']}}</h1>

                <small class=" text-pretty">{{$review['description']}} </small>
                <div class=" d-flex justify-end">
                    <div class="mt-2 w-32 text-center bg-danger ">
                    <small>{{$review['time']}} hour</small>
                    <small>/{{$review['date']}}</small>
                </div></div>
                <div class=" mt-2">
                    <small><i class="fa-solid fa-star text-yellow-400 mr-1"></i>{{$review['rating']}}/10</small>
                    <small class=" text-danger ml-2" > NetFlix Premium</small>
                </div>
                <div class="mt-3">  <small class=" text-yellow-400"><i class="fa-regular fa-circle-play mr-1"></i>Watch now</small>
</div>


         </div>
    </div>
<div class=" text-end  ">
   <a href="{{route('start')}}" class="no-underline">
     <small class=" text-white">back</small>
   </a>

</div>
 </div>
</div>















<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>

