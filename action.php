<?
  if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $dsg=$_POST['designation'];
  $cmpny=$_POST['c_type'];
  $from=$_POST['email'];
  $phone=$_POST['phone'];
  $data=$_POST['services'];
  $msg=$_POST['note'];
  
  $info='info@delveip.com';
  $cc='nikithreddy007@gmail.com';
  $to='davinash917@gmail.com';
  $bcc='avisdew917@gmail.com';

  
  $subject='Form Submission';
  $subject2='no-reply';
  $message="Name: ".$name."\n"."Designation: ".$dsg. "\n"."Company: ".$cmpny."\n". "Phone: ".$phone."\n"."Email: ".$from."\n"."Services: ".$data."\n". "Message: ".$msg."\n";
  
  $message2="Thanks for contacting us..will get back to you " .$name. "\n\n";
  
  $headers="From: ".$from;
  $headers2="From: ".$info;
  
  mail($to, $subject, $message, $headers);
  mail($cc, $subject, $message, $headers);
  mail($from, $subject2, $message2, $headers2);
  }
  ?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Thank You</title>
  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
  <style>
    .modal-content{
      background: linear-gradient(to right, #fff 55%, #99ccff 100%);
    }
    .modal-header {
     border-bottom:0px; 
}
  </style>
</head>

<body>

  <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
   <div class="modal-content">
     <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"><img src="images/logo-1.png" style="align-items: center; "></h4>
        </div>

          <div class="modal-body">
              <p style="text-align: center;font-size: 32px;color: #ec6d37;" ><b>WARM REGARDS</b></p><br>
              <p style="font-size: 17px;text-align: center"> <span>Thank You </span> <span><b><?php echo $name ?></b></span> <span>for requesting our service</span></p>
          </div>

        <div class="modal-footer text-center">
            <button type="button" class="btn btn-success" onclick="window.location.href='http://www.delveip.com'">Home</button>
        </div>

    </div>
  </div>
</div>


<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>

  

    <script>
    	 $(window).load(function(){        
   $('#myModal').modal('show');
    });
    </script>




</body>

</html>