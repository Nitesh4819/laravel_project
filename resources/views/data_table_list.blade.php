<!doctype html>
<html lang="en">
   <head>
      <title>Table demo</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
         integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <link rel="stylesheet" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
   </head>
   <body>
      <div class="container" style="margin-top:50px; ">
         @if(Session::has('success'))   {{-- for message showing code use  --}}
         <div class="alert alert-success">
	             <strong>{{Session::get('success')}}</strong>
         </div>
         @endif
         {{-- end --}}

         <a class="btn btn-primary" href="{{url('dashboard')}}" >Back</a>

         <table class="table table-striped">
            <thead>
               <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Name</th>
                  <th scope="col">Mobile </th>
                  <th scope="col">Address</th>
                  <th scope="col">email</th>
                  <th scope="col">Create date</th>
                  <th scope="col">Action</th>
               </tr>
            </thead>
            <tbody>
               @foreach( $data as $reg)
               <tr>
                  <td>{{$reg['sId']}}</td>
                  <td>{{$reg['sName']}}</td>
                  <td>{{$reg['sMobile']}}</td>
                  <td>{{$reg['sAddress']}}</td>
                  <td>{{$reg['email']}}</td>
                  <td>{{$reg['created_at']}}</td>
                  <td>
                     <a  style="text-decoration: none; border:1px solid green; "  class="btn btn-primary" href="{{url('edit/'.$reg['sId'])}}" >Edit</a>
                     <a  style="text-decoration: none; border:1px solid red; "  class="btn btn-danger" href="{{url('delete/'.$reg['sId'])}}" >Delete</a>
                  </td>
               </tr>
               @endforeach
            </tbody>
         </table>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
         integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
         crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"
         integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
         crossorigin="anonymous"></script>
      <script src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>   
      <script>
         $(document).ready( function () {
          $('.table').DataTable();
         } );
      </script>
   </body>

</html>