<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Hash;
use Response;
use Session;
use Validator;
class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('vendor/login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
  {
    $rules=[
      'email'=>'required',
      'password'=>'required',
    ];
    $messages=[
      'email.required'=>'This field is required',
      'password.required'=>'This field is required',
    ];
      $validator=\Validator::make($request->all(),$rules,$messages);
       if ($validator->fails()) {
            return back()->withErrors($validator);
        }
        $user_data = [
        'email' => $request->email,
        'password'=>$request->password,
        ];
        if(Auth::attempt($user_data))
        {
           
            return view('vendor/products');
                
            }
    else
    {
        return back()->with('message','Incorrect email or password');
    }
    
  }
//    public function index()
//    {
//     if(Auth::check())
//     {
//       $users=User::all();
//     return view('admin.users',compact('users'));
//     }
//     else
//     {
//         return redirect('admin')->with('message','Ooops! You do not have access.<br> Please login first');
//     }
// }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function save(Request $request)
    {
        // return $request->all();
        $rules = [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8','regex:/^(?=.*?[a-z])(?=.*?[0-9])/'],
            'password-confirm' => ['required','same:password'],
        ];
        $messages = array(
            'password.regex' => 'Password must include at least one letter, one number, and one special character',
            'password-confirm.required'=>'Confirm password field is required',
        );

        $validator = Validator::make($request->all(), $rules, $messages);

 if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
else{

     
            $user =User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
        ]);
        Session::flash('message', 'You has been successfully registered .go to login page');
         return back();
    }
}

  public function logout()
   {
     Auth::logout();
     return view('vendor/login');
   }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
