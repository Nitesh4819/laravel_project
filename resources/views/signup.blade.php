<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title> singup</title>
      {{-- bootstrap cdn link --}}
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
         integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
      {{-- custom css link --}}
      <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
         rel="stylesheet" type="text/css" />

      <style>
         .bg{
         background-image: url("{{asset('assets/image/back.jpg')}}");
         
         background-repeat: no-repeat, repeat;
         }
         .toggle-number{
         float: right;
         
         margin-right: 10px;
         margin-top: -25px;
         }

         .toggle-password {
         float: right;
         cursor: pointer;
         margin-right: 10px;
         margin-top: -25px;
         }

       .toggle-mail {
         float: right;
         cursor: pointer;
         margin-right: 10px;
         margin-top: -25px;
         }

      </style>
   </head>
   <body  class="bg">
      <div class="container form">
      <div class="row">
         <div class="container">
            <div class="row">
               <div class="col-sm-3">
               </div>
 
               <div class="col-sm-6 in">
                  
                     <center>
                        <h1 style="text-align:center;" > REGISTRATION </h1>
                     </center>
                  
                  <form  method="post" action="{{url('sumbit')}}" >
                    
                   @if(Session::has('error'))   {{-- for message showing code use  --}}
                     <div class="alert alert-danger">
                        <strong>{{Session::get('error')}}</strong>
                     </div>
                     @endif
                   
                     @if(Session::has('success'))   {{-- for message showing code use  --}}
                     <div class="alert alert-success">
                        <strong>{{Session::get('success')}}</strong>
                     </div>
                     @endif

                    @csrf
                     <div class="py-2 mx-4" class="form-group"> 
                        <input type="name" required  class="form-control border-info" name="name" id="exampleInputEmail1" placeholder=" Enter Your Name" aria-describedby="emailHelp">
                     </div>

                     <div class="py-2 mx-4" class="form-group"> 
                       
                        <input type="number" required class="form-control border-info" name="mobile" id="exampleInputEmail1" placeholder="Enter Your Mobile Number" aria-describedby="emailHelp">
                        <i class="fa fa-mobile toggle-number"  aria-hidden="true"></i>
                    </div>

                    

                 <div class="py-2 mx-4" class="form-group"> 
                        
                  <input type="email" required class="form-control border-info"  name="email" id="exampleInputEmail1" placeholder=" Enter Your Email " aria-describedby="emailHelp">
                  <i class="fa fa-envelope toggle-mail" aria-hidden="true"></i>
   
               </div>

                     <div class="py-2 mx-4" class="form-group"> 
                        
                        <input type="password" required class="form-control border-info" name="password" placeholder="Enter Your Password" id="exampleInputPassword1">
                        <i class="toggle-password fa fa-fw fa-eye-slash"></i>
                     </div> 
                      
                     <div class="py-2 mx-4" class="form-group"> 
                        <input type="password" required class="form-control border-info" name="cpassword" placeholder="Enter Your Confirm Password" id="exampleInputPassword1">
                        <i class="toggle-password fa fa-fw fa-eye-slash"></i>
                     </div>


                      <div class="py-2 mx-4" class="form-group"> 
                     <input type="text" required  class="form-control border-info" name="address" id="exampleInputEmail1" placeholder="Enter Your Address" aria-describedby="emailHelp">
                 </div>
                     {{-- <div  class="form-group" style="">--}}


                        <input type="submit" required class="form-control btn-info mt-4"  value="REGISTRATON" style="width: 130px; margin-left:190px;">
                      {{-- </div>                 --}}
                     
                     </form> 
      
                  <footer class="footer footer-alt mt-2">
                     <p class="">Already have account? <a href="{{url('/login')}}" class="text-muted ml-1"><b>Login</b></a></p>
                 </footer>
               </div>
               <div class="col-sm-3">
               </div>
            </div>
         </div>
      </div>



      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script>
         $(".toggle-password").click(function() {
           $(this).toggleClass("fa-eye fa-eye-slash");
           input = $(this).parent().find("input");
           if (input.attr("type") == "password") {
               input.attr("type", "text");
           } else {
               input.attr("type", "password");
           }
         });
      </script>
 
   </body>
</html>