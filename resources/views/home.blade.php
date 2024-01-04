@extends('main')
@section('movie')

   {{-- upside  --}}

<div class="container-fluid p-0 m-0 ">
     <div class=" sticky top-0 bg-opacity-50 z-20">
        <div class=" w-100 bg-black bg-opacity-50 m-0 p-2 z-10 absolute h-16 top-0">
        <div class="row">
          <div class="col text-white">
            <h3 class=" font-extrabold p-2 text-red-600 ml-40" >Netflix</h3>
          </div>
          <div class="col-4 ">
                <div class=" text-white p-3 d-flex justify-around">
                    <span  class="  cursor-pointer hover:-translate-y-2 duration-300 hover:p-1  hover:border-2 hover:bg-red-600 rounded-md border-red-600">Home</span>
                <span class=" cursor-pointer hover:-translate-y-2 duration-300 hover:p-1  hover:border-2 hover:bg-red-600 rounded-md border-red-600">Account</span>
                <span class=" cursor-pointer hover:-translate-y-2 duration-300 hover:p-1  hover:border-2 hover:bg-red-600 rounded-md border-red-600">Category</span>
                <span class=" cursor-pointer hover:-translate-y-2 duration-300 hover:p-1  hover:border-2 hover:bg-red-600 rounded-md border-red-600">Favorite</span>
                </div>
          </div>
        </div>
      </div>
     </div>


     <div class="" style="height:600px">


         <img src="{{asset('homePhoto/368570.jpg')}}"
      class="d-block bg-bottom opacity-85 bg-no-repeat " style="height: 630px; width:100%" alt="...">

      <div class=" bg-slate-300  hover:bg-slate-800 rounded-md bg-opacity-70 p-3 w-96 absolute bottom-16 left-24 text-white">
        <div class=" text-sm"><span>Duration: 1h/30min</span></div>
       <div class="my-2">  <i class="fa-solid fa-star text-yellow-400 text-lg mr-1"></i> <span class="text-lg mr-2">6.5</span> <span class=" text-sm"> Action | Science</span></div>
      <div class=" my-2 text-lg font-extrabold">Star War</div>
      <div class=" text-sm">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quam architecto rem enim vitae dolore neque aliquam incidunt, sit molestias esse cupiditate assumenda.</div>
       <div class="mt-3">
        <button class=" btn btn-danger"> <i class="fa-solid fa-play  mr-1"></i>Watch</button>
        <button class=" btn btn-dark"><i class="fa-solid fa-plus mr-1"></i>Addlist</button>
       </div>



</div>
   {{-- upside  --}}

   {{-- downSide  --}}

   <div class=" text-white mino mt-6 mb-10">
    <h3 class=" text-red-600 font-mono font-bold text-center  cursor-pointer mb-3">All For One Is <span class="  bg-yellow-500 text-white p-1 rounded-md">Here</span></h3>
    <img src="{{asset('homePhoto/netflix.webp')}}" class="" style="width: 100%; height:260px">
   </div>

  <div class=" mt-52 mb-10 flex flex-column justify-center align-items-center"
  data-aos-duration="2000"  data-aos-delay="100" data-aos-easing="ease-in-out" data-aos-once="false"
  data-aos="zoom-in">
    <h4 class=" text-white">Stream Movie & Series <span class=" text-danger">+100</span></h4 >
        <h5 class=" text-balance text-center text-white">Netflix is a streaming service that offers a wide variety of award-winning TV shows, movies, anime, documentaries, and more on thousands of internet-connected devices.
        <div class=" mt-4 mb-6" data-aos="fade-up"
        data-aos-duration="2000"  data-aos-delay="100" data-aos-easing="ease-in-out" data-aos-once="false">
            <button class=" btn btn-danger mr-2 ">Sing in</button> <button class=" btn btn-warning">Log in</button>
        </div>
</h5>
  </div>

   {{-- downSide  --}}

   {{-- comercial  --}}
        <div class="  text-white  mt-40">
          <div class="row">
             {{-- left side  --}}
            <div class="col  flex justify-end p-2"
            data-aos-duration="3000"  data-aos-delay="100" data-aos-easing="ease-in-out" data-aos-once="false"
  data-aos="slide-right">
              <img src="{{asset('homePhoto/minion.png')}}" style="width: 40%">
            </div>
               {{-- left side  --}}

               {{-- right side  --}}
            <div class="col  flex justify-start"
             data-aos-duration="3000"  data-aos-delay="100" data-aos-easing="ease-in-out" data-aos-once="false"
  data-aos="slide-left">
                <div class=" flex flex-col align-items-center mt-20 p-3">
                  <span class=" bg-warning p-1 mb-3">Popular Movie</span>
                  <h3 class=" text-white mb-2">Minion : The Rise Of Gue</h3>
                  <h5 class=" text-red-600">Only in NetFlix</h5>
                  <div class="mt-3">
                    <button class="btn btn-outline-dark text-white mr-2">Review</button>
                    <button class="btn btn-outline-danger text-white">Trailer</button>
                  </div>


                </div>
            </div>
            {{-- right side  --}}
          </div>

        </div>
     {{-- comercial  --}}



      {{-- comercial 2  --}}
        <div class="  text-white mt-44 mb-32">
          <div class="row">
             {{-- left side  --}}
            <div class="col  flex justify-end p-2"
            data-aos-duration="3000"  data-aos-delay="100" data-aos-easing="ease-in-out" data-aos-once="false"
  data-aos="zoom-out-right">
              <img src="{{asset('homePhoto/bat.png')}}" style="width: 27%">
            </div>
               {{-- left side  --}}

               {{-- right side  --}}
            <div class="col  flex justify-start"
             data-aos-duration="3000"  data-aos-delay="100" data-aos-easing="ease-in-out" data-aos-once="false"
  data-aos="zoom-out-left">
                <div class=" flex flex-col align-items-center mt-5 p-3">
                  <span class=" bg-danger p-1 mb-3">Newest 2023</span>
                  <img src="{{asset('homePhoto/logo.png')}}" style="width: 60%"  alt="">
                  <h5 class=" text-yellow-500 my-2">Only in NetFlix</h5>
                  <div class="mt-3">
                    <button class="btn btn-warning text-white mr-2">Review</button>
                    <button class="btn btn-outline-danger text-white">Trailer</button>
                  </div>


                </div>
            </div>
            {{-- right side  --}}
          </div>

        </div>
     {{-- comercial 2  --}}

<div class=" container-md mx-auto  flex justify-center mb-8 mt-20">
   <div class=" flex justify-between w-8/12 p-2">
     <div class=" hover:scale-125   duration-300 delay-100 cursor-pointer"><span class=" font-bold  hover:text-red-500 text-white"><i class="fa-solid fa-clapperboard mr-2"></i>Movies</span></div>
    <div class=" hover:scale-125 duration-300 delay-100 cursor-pointer"><span class=" font-bold  hover:text-red-500 text-white"><i class="fa-regular fa-circle-play mr-2"></i>Series</span></div>
    <div class=" hover:scale-125 duration-300 delay-100 cursor-pointer"><span class=" font-bold text-white"><i class="fa-solid fa-fire mr-2"></i>Popular</span></div>
    <div class=" hover:scale-125 duration-300 delay-100 cursor-pointer"><span class=" font-bold  hover:text-red-500 text-white"><i class="fa-solid fa-magnifying-glass mr-2"></i>Search</span></div>
   </div>
</div>
<div class=" container-md mx-auto h-1 bg-slate-200"></div>

<div class="container-md mx-auto flex justify-between text-white mt-4">
    <span class=" bg-red-600 p-1 text-center rounded-lg w-20">Action</span>
    <span class=" bg-slate-500 p-1 text-center rounded-lg w-24">Adventure</span>
    <span class=" bg-red-600 p-1 text-center rounded-lg w-24">Animation</span>
    <span class=" bg-slate-500 p-1 text-center rounded-lg w-24">Biography</span>
    <span class=" bg-slate-500 p-1 text-center rounded-lg w-24">Crime</span>
    <span class=" bg-red-600 p-1 text-center rounded-lg w-24">Comedy</span>
    <span class=" bg-slate-500 p-1 text-center rounded-lg w-24">Documentry</span>
    <span class=" bg-red-600 p-1 text-center rounded-lg w-24">Drama</span>
</div>

<div class=" container-md mx-auto mt-10">
 <div class="slider">
    <div class="slide-track">


             @foreach ($result as $r)
             <div class="slide">
         <div class=" z-0">
            <a href="{{route('review',$r->id)}}" class=" no-underline">
            <img src="{{asset('storage/'.$r->image)}}" class="  hover:opacity-75 " >
             <h5 class=" text-white mt-3 mb-1">{{$r->title}}</h5>
            <div class="row p-1 text-white">
            <div class="col-4 text-start"><small>{{$r->date}}</small></div>
            <div class="col text-end"><small><i class="fa-solid fa-star text-yellow-400 mr-1"></i>{{$r->rating}}</small></div>
            </div>
            </a>
         </div>
          </div>
         @endforeach










    </div>
 </div>
</div>

 <div class="  ">
        <div class=" flex justify-between  border-t-2 p-3 ">
            <h5 class=" text-danger mt-2">Netflix Page FullStack</h5>
            <small class=" bg-yellow-400 p-2 rounded-sm animate-pulse duration-300">Develope By Hpone Pyae</small>
        </div>
    </div>

</div>





@endsection


