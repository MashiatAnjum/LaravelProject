<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Building Page</title>
</head>
<body>
    <h1>Create New Building</h1>

    <div>
       
    <form method="post" action="{{route('building.storebuildingFunction')}}">
    @csrf
    @method('post')
    
    <label for="">Enter Building Name</label>
    <input type="text" name="Name" placeholder="Building name">
    <input type="submit" value="save">
    </form>



    </div>
</body>
</html>