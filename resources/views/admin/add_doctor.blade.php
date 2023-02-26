<!DOCTYPE html>
<html lang="en">
  <head>
 
   <style type ="text/css">

label {
  display: inline-block;
  width: 140px;
  text-align: right;
}​

    </style>
  @include('admin.css');
  </head>
  <body>
    <div class="container-scroller">

       @include('admin.script')
      @include('admin.sidebar');
     
     @include('admin.navbar');
     
<div class="container-fluid page-body-wrapper">

 
    <div class="container" align="center" style="padding: top 100px;">
    @if(session()->has('message'))
<div class ="alert alert-success">
<button type="button" class "close" data-dismiss="alert">
x 
</button>
{{session()->get('message')}}
</div>

@endif
  
    <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">
    @csrf
        <div style ="padding:15px">
            <label>Doctor Name</label>
            <input type="text"  style ="color:black;" name="name" placeholder="Write doctor name" required="">

</div>
<div style ="padding:15px">
            <label>Phone Number</label>
            <input type="number"  style ="color:black;" name="phone" placeholder="Write the number" required="">

</div>
    <div style ="padding:15px">
                <label>Speciality</label>
                <select name="speciality" style="color:black">
                <option>--Select--</option>
                    <option value ="skin">Skin</option>
                    <option value ="heart">Heart</option>
                    <option value ="nose">Nose</option>
                    <option value ="ear">Ear</option>
    </select>
    </div>
    <div style ="padding:15px">
                <label>Room Number</label>
                <input type="number"  style ="color:black;" name="room" placeholder="Write room number" required="">

    </div>
    <div style ="padding:15px">
                <label>Doctor Image</label>
                <input type="file" name="file" required="">
            
    </div>
    <div style ="padding:15px">
                
                <input type="submit" class="btn btn-success">
            
    </div>
    </form>


    

  </body>
</html>