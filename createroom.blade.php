<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CreateRoom</title>
</head>
<body>


<h1>Enter Room Number Here :</h1>
<form method="post" action="{{route('room.storeroomFunction')}}">
    @csrf
    @method('post')
    
    <label for="">Enter Room Number</label>
    <input type="name" name="RoomNumber" placeholder="Room Number">
    <label for="buildingNames">Choose a building name</label>
        <select id="buildingNames" name="buildingNames">
            @foreach($buildings as $buildingitems)
                <option value="{{ $buildingitems->id }}">{{ $buildingitems->name }}</option>
            @endforeach
        </select>
    <input type="submit" value="save">
</form>

</body>
</html>
