<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Building;

class BuildingController extends Controller
{
    //
    public function indexFunction(){

        $buildings = Building::all();
        $data['page_title'] =  "Building List";
        $data['buildings']= $buildings;
       // return view('buildings.index',['buildings'=>$buildings]);
        $data["container"] = view("admin/buildings/index", ['data' =>
        $data])->render();
    
        return view("admin_template", ['data' => $data]);
       }

    //function for create building page
   public function createbuildingFunction(){

    return view('buildings.create');
}

//function for storing building name
public function storebuildingFunction(Request $request){

    //  dd($request);
    $building = new Building;
    $building->building_name=$request->Name;
    // $building->created_by=3;
    $building->save();
    
    return redirect(route('building.indexFunction'));

}
////edit building

public function editbuildingFunction(Building $building){

    //   dd($room);

    return view('buildings.editbuilding',['building'=>$building]);

  
}
//-----------------------------update------------------
public function updatebuildingFunction(Building $building, Request $request){

    $building->building_name=$request->Name;
    // $building->modified_date=@date("Y-m-d");
    // $building->modified_by=3;
    $building->update();
    return redirect(route('building.indexFunction'))->with('success','Updated Successfully');

}

//-----------------------------delete----------------

public function deletebuildingFunction(Building $building){
    $building->delete();
    return redirect(route('building.indexFunction'))->with('success','Deleted Successfully');
   
   
   }


}
