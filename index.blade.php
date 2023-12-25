<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span> Welcome to Admin Panel
              </h3>
            </div>
            <div class="row">
              <div class="col-md-12 stretch-card grid-margin">
              <h1>Input Building Name Hrere</h1>


<div>
@if(session()->has('success') )

  <div>
     
  {{session('success')}}

  </div>
@endif

</div>

<div>

<table border="2">
<tr>
<th>ID</th>
<th>Building Name</th>
<th>Edit</th>
<th>Deletes</th>
</tr>

@foreach($data->buildings as $buildingItem)

<tr>
<td>{{$buildingItem ->id}}</td>
<td>{{$buildingItem ->building_name}}</td>
<td>
     
     <a href="{{route('building.editbuildingFunction',['building'=>$buildingItem])}}">Edit</a>
 
     </td>
 
     
     <td>
         <form method="post" action="{{route('building.deletbuildingFunction',['building'=> $buildingItem])}}"> 
           
          @csrf
          @method('delete')
          <input type="submit" value="Delete">
         </form>
     </td>


</tr>
@endforeach
</div>
              </div>
              
              
              
              
            </div>
            
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <!-- <footer class="footer">
            <div class="container-fluid d-flex justify-content-between">
              <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © bootstrapdash.com 2021</span>
              <span class="float-none float-sm-end mt-1 mt-sm-0 text-end"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin template</a> from Bootstrapdash.com</span>
            </div>
          </footer> -->
          <!-- partial -->
        </div>
    
