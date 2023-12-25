<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Home</title>
</head>
<body>
    <h1>Welcome to HomePage</h1>

   <div>
    @if(session()->has('success') )

      <div>
         
      {{session('success')}}

      </div>
    @endif

   </div>

<table border="2">
  <tr>
    <th>ID</th>
    <th>Room Number</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>

  @foreach($rooms as $roomItem)
   
  <tr>
    <td>{{$roomItem ->id}}</td>
    <td>{{$roomItem ->room_number}}</td>
    <td>
         
    <a href="{{route('room.editroomFunctio',['room'=>$roomItem])}}">Edit</a>

    </td>

    
    <td>
        <form method="post" action="{{route('room.deleteroomFunction',['room'=> $roomItem])}}"> 
          
         @csrf
         @method('delete')
         <input type="submit" value="Delete">
        </form>
    </td>
  </tr>

  @endforeach

</table>








</body>
</html>