<!DOCTYPE html>
<html lang="en">
<head>
 @include('user.script');
 <style>
    table 
    {
        border: 1px solid black;
    }
 </style>
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

@include('user.header');
 <div align="center" style="padding:20px">
    <table cellspacing="0">
        <tr style="background-color:yellow">
            <th style="padding:10px;font-size:20px;color:black">Doctor Name</th>
            <th style="padding:10px;font-size:20px;color:black">Date</th>
            <th style="padding:10px;font-size:20px;color:black">Message</th>
            <th style="padding:10px;font-size:20px;color:black">Status</th>
            <th style="padding:10px;font-size:20px;color:black">Cancel Appointment</th>
        </tr>
       @foreach($appointment as $app)
        <tr align="center">
            <td style="padding:10px">{{$app->doctor}}</td>
            <td style="padding:10px">{{$app->date}}</td>
            <td style="padding:10px">{{$app->message}}</td>
            <td style="padding:10px">{{$app->status}}</td>
           
           <td> <a href="{{url('cancel_appointment')}}" class="btn btn-danger" style="padding-top :10px">Cancel</a></td>
        </tr>
        @endforeach
    </table>
 </div>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>