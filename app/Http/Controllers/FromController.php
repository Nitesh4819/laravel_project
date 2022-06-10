<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use DB;
use Validator;
use Auth;
use Session;
//use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;  //use this code for paasword encryption or decryption


class FromController extends Controller
{
function __construct() 
    {
        date_default_timezone_set("Asia/Kolkata");   //India time (GMT+5:30)
        $this->error_code=null;

    } 
    
    function signup()
    // signup page load hear
    {
      
      return view("signup");
    
    }



 function store(Request $request)
 {
  //echo '<pre>'  ;
    //print_r($request->all()); // all data check to take input use all();
     //die;
     //to insert data in in data base via function
     //return $request->all();     
     //$validator = Validator::make($request->all(), [
     //'password' =>'required|same:confirm_password',
     //'confirm_password'=>'required',
     //]);
    //if($validator->fails()){
    //return redirect()->back()->with('success',$validator->messages()->first());
    // }
      if($request->password==$request->cpassword)
      {
        $data=User::where('sMobile',$request->mobile)->first();
      
        if($data)
        {
          return redirect('signup')->with("error","mobile number already exist");
        }

else{
  $insertData= User::create([
        'sName'=>$request->name,
        'sMobile'=>$request->mobile,
        'sAddress'=>$request->address, 
        'email'=>$request->email,
        'password'=>Hash::make($request->password),//hash password encryption 
        ]);
         
    if($insertData)
          {
       //use function with() to showing message 
       return redirect('signup')->with("success","successfully Registration ");
       //return view('view');
          }
          else
          {
        echo 'faild';
    }

  }

 }

 else
 {
  //  echo  'wrong'; die; 
  return redirect('signup')->with("error","Password and confirm password mismatch");
 }

}


///list function for view data
 function show()
 {
     $data= User::get();
     //$data= Registration::paginate(5);// use for pagination this code 
     return view('data_table_list',compact('data'));
 }
//edit function
  public function edit($sId)
  {
  //echo $id; die;
  //$sId=$id;
  $data=User::where('sId',$sId)->first();
  return view('editform',compact('data'));
  }
public function update(Request $request)//for update query  
{  
  User::where('sId',$request->id)->update([
  'sName'=>$request->name,
  'sMobile'=>$request->mobile,
  'sAddress'=>$request->address,
  'email'=>$request->email,
     
]);

return redirect('data_table_list')->with('success','Update');
}
 
public function destroy($sId)//for delete method use here
{
  //$data=Registration::find($sId);
 
  $data=User::where('sId',$sId)->delete();
 
return redirect('data_table_list')->with('success','deleted data successfully');
}

// public function login(Request $request)
// {
//   echo'<pre>';
//   print_r($request->all());
//   die;
//   $email=$request->email;
//   $pass=$request->password;
//   $getDetail=User::where(['sEmail'=>$email, 'sPassword'=>$pass])->first();
//   if($getDetail){
// print_r($getDetail);
//   }
//   else{
//     echo 'no data';
//   }
//   //die;
//  //return Registration::where('sEmail', $request->input('email'))->get();
// }
public function viewlogin()
{
  return view('login');
}

// user login code here define
public function userLogin(Request $request) {
        
  try{
 
  $email=$request->input('email');
  $password=$request->input('password');   

  // $this->validate($request,[
  //  'email'    =>  'required',
  //  'password' =>  'required',
  // ]);
    $request->validate([
    'email' => 'required',
    'password' => 'required',
]);
if (Auth::attempt(['email' => $email, 'password' => $password ])) {
      // $CheckUser=User::select('*')->where(['email' =>$email])->first();
     return redirect('dashboard');           
  }
  else 
  {
   return redirect()->back()->with('error','You have entered wrong username or password');
  }
  }
    catch(\Exception $e)
  {
    
  return redirect()->back()->with('error',$e->getMessage());
  }
  
}
// logout funtion 
public function logout(Request $request)
  {
      
  Auth::logout();
   return redirect('/login');

  }






// APi through insert data in data base 
public function addata(Request $request)
{
    try
    {
      $validator = Validator::make($request->all(),[ 
        'name'=> 'required',
        'mobile'=> 'required',
        'address'=>  'required',
        'email'=> + 'required',
        'password'=> 'required',
      ]);

    if($validator->fails())
        {
            return response()->json(['success'=>false,'errors'=> $validator->messages()], 422);
        }
        else
        {
        $insertData= User::create([
          'sName'=>$request->name,
          'sMobile'=>$request->mobile,
          'sAddress'=>$request->address, 
          'email'=>$request->email,
          'password'=>Hash::make($request->password), // hash passwsord encryption
           ])->id;
            
         //$this->response['last_id']=$insertData;
        $results['last_id']=$insertData;
      }
    }
      catch(\Exception $e)
      {
          $this->error_code = 500;
          
         $this->response = $e->getMessage().' on line number '. $e->getLine() . ' in '. $e->getFile();
        }

      //$result = array('ErrorCode'=> $this->error_code, 'ErrorMessage' => 'success', 'Response' => $this->response);
      $result = array('ErrorCode' => $this->error_code, 'ErrorMessage' => 'success', 'Response' => $results);
  
      return response()->json($result); 

  }



// get data vai api through from data base


public function getdata()
{
   echo"fbhf";
   die;
  return   User::get();

}
// end


// update  via APi through update query 
function updates(Request $request)
{
  

try{
  // echo 'aedcad'; die;
// dd($request->input());
      $update=User::where('sId',$request->id)->update([
        'sName'=>$request->name,
        'sMobile'=>$request->mobile,
        'sAddress'=>$request->address,
        'email'=>$request->email,
      ]);

        if($update){
          $abc='Success update';
        }else{
          $abc='nooooo';
        }
      // print_r($update); die;


}
catch(\Exception $e)
{
    $this->error_code = 500;
    
   $this->response = $e->getMessage().' on line number '. $e->getLine(). '  in '. $e->getFile();
  }

//$result = array('ErrorCode'=> $this->error_code, 'ErrorMessage' => 'success', 'Response' => $this->response);
$result = array('ErrorCode'=> $this->error_code, 'ErrorMessage' => 'success', 'Response' =>$abc);
// dd($result);
return response()->json($result); 

}

// end update

//  api through Delete i am here using 
public function delt(Request $req)
{
//  return $req->all();
//  die; 
 
 return  User::where('sId', $req->id)->delete();
}
// end +

}



 



