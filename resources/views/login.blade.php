<!doctype html>
<html lang="en">
   <head>
      <title>Title</title>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
         rel="stylesheet" type="text/css" />
      <style>
         .toggle-password {
         float: right;
         cursor: pointer;
         margin-right: 10px;
         margin-top: -25px;
         }

         .toggle-email {
         float: right;
        
         margin-right: 10px;
         margin-top: -25px;
         }
         .left{
         margin-left: 100px;
         }
         .bg{
         background-image: url("{{asset('assets/image/login.jpg')}}");
         background-repeat: no-repeat;
         }
         #log{
         padding: 40px 60px;
         margin-top:80px;
         -webkit-box-shadow: 11px 4px 67px 26px rgba(0,0,0,0.75);
         -moz-box-shadow: 11px 4px 67px 26px rgba(0,0,0,0.75);
         box-shadow: 11px 4px 67px 26px rgba(228, 131, 131, 0.75);
      
          
         }
         h1{
         color: white; 
         text-align: center;
         font-family: serif;
         }
         label{
         font-size: 20px;
         color: white;
         }

         

      </style>
   </head>
   <body  class="bg">
      <div class="container-fluid  ">
         <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12"> </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
               {{-- <img src="" alt="" class="img img-responsive"> --}}
               <form action="{{url('submitlogin')}}" method="post" id="log">
                {{--  mandatory for post method      --}} 

                @if(Session::has('error'))   {{-- for message showing code use  --}}
                <div class="alert alert-danger">
                   <strong>{{Session::get('error')}}</strong>
                </div>
                @endif
               
                @csrf
                   <h1> Login </h1> 

                  
                  {{-- <div style="flos">
                     <img src="{{asset("assets/image/logo.png")}}" alt="Paris" height="110px" width="70%">
                  </div>
                   --}}
                 
         
                  <div class="mt-4"> <label for="">Email</label>
                     <input type="email"  name="email"  class="form-control" placeholder="  Enter Your Email" autocomplete="off">
                     <i class=" toggle-email fa fa-envelope-o" aria-hidden="true"></i>
                  </div>
                  <div> 
                     <label for="">Password</label>
                     <input type="password" name="password"  class="form-control" placeholder=" Enter Your password"> 
                     <i class="toggle-password fa fa-fw fa-eye-slash"></i>
                  </div>
                  <div class="checkbox">
                     <label > <input type="checkbox"> Remember me</label>
                  </div>
                  <button  type="submit" class="btn btn-success btn-block "> Login</button>
                
                  <p style="color:white; margin-top:15px;">   Don't Have account ? <a href="{{url('signup')}}"  style="color: #f9d363;">Sign-Up</a>
                  </p>
               </form>
               
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12"> </div>
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
C