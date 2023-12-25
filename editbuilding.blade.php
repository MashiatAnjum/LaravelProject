<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EditRoom</title>
</head>
<body>


<h1>Edit Room Number</h1>
<form method="post" action="">
    @csrf
    @method('put')
    
    <label for="">Enter Room Number</label>
    <input type="name" name="Name" placeholder="building name" value="{{$building->building_name}}">
    <input type="submit" value="update">
</form>

</body>
</html>