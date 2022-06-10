<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">  
</head>
  <body>
      
    <div class="container">
        <div class="row" style="padding-top: 10px">
          <div class="col-sm">
        
          </div>

          <div class="col-sm y">
            <center> <h1> Form</h1></center> 
            <form  method="post" action="{{url('update')}}">
                @csrf
                
                
             <input type="hidden" value="{{$data->sId}}" class="form-control" name="id" id="exampleInputEmail1" placeholder=" enter your name" aria-describedby="emailHelp">
                 
                    <div class="form-group">
                    <label>Name</label>
                    <input type="name" value="{{$data['sName']}}" class="form-control" name="name" id="exampleInputEmail1" placeholder=" enter your name" aria-describedby="emailHelp">
                  </div>
     
                   
                <div class="form-group">
                    <label>Mobile</label>
                    <input type="number " class="form-control" name="mobile"  value="{{$data->sMobile}}" id="exampleInputEmail1" placeholder="Enter your Number" aria-describedby="emailHelp">
                    
                  </div>
                  <div class="form-group">
                    <label>Addressh</label>
                    <input type="text" class="form-control" name="address" value="{{$data->sAddress}}" id="exampleInputEmail1" placeholder="Enter your addressh" aria-describedby="emailHelp">
                    
                  </div>

                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" value="{{$data->email}}" placeholder="enter your password" aria-describedby="emailHelp">
                    </div>
                   {{-- <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control" name="password" placeholder="Enter your password" value="{{$data->sPassword}}" id="exampleInputPassword1">
                </div>
                   --}}
                <button type="submit" name="update" class="btn btn-primary">Update</button>
              </form>
          </div>
          <div class="col-sm">
            </div>
        </div>
      </div>
    
  </body>
</html>
