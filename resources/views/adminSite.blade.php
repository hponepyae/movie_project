<form action="{{route('insert')}}" method="post" enctype="multipart/form-data">
   @csrf
    title: <input type="text" name="title"> <br>
   description: <input type="text" name="description"> <br>
    time: <input type="number" name="time"> <br>
     rating: <input type="number" name="rating"> <br>
      image: <input type="file" name="image"> <br>
       date: <input type="number" name="date"> <br>
       <button type="submit">click</button>

</form>
