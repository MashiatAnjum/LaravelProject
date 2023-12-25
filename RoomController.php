<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Building;
use Illuminate\Support\Facades\DB;

class RoomController extends Controller
{
    //

   public function roomHomeFunction(){
    $rooms = Room::all();
    return view('rooms.roomhome',['rooms'=>$rooms]);
   }

//function for create room page
   public function createroomFunction(){

    $buildings = Building::all();
    return view('rooms.createroom', ['buildings'=>$buildings]);

 

    // return view('rooms.createroom');
}

//function for storing room number
public function storeroomFunction(Request $request){

    // dd($request->id);
    $room = new Room;
    $room->room_number=$request->RoomNumber;
    // Associate the room with the building using the building_id
    $building = Building::find($request->id);
    $room->building()->associate($building);
    $room->save();
    return redirect('room');

}


public function editroomFunction(Room $room){

    //   dd($room);

    return view('rooms.editroom',['room'=>$room]);

  
}

public function updateroomFunction(Room $room, Request $request){

    $room->room_number=$request->RoomNumber;
    $room->update();
    return redirect(route('room.roomHomeFunction'))->with('success','Updated Successfully');

}


public function deleteroomFunction(Room $room){
 $room->delete();
 return redirect(route('room.roomHomeFunction'))->with('success','deleted Successfully');


}



}
