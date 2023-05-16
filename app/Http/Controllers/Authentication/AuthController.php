<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use App\Mail\Send_Forgot_Link;
use App\Mail\Verify_User_Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\users;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function log(){
        $data['data'] = 'Login';
        if (session()->has('Admin.role')=="admin"){
            return redirect('admin/home');
        }elseif(session()->has('User.role')=="user"){
            return redirect('user/home');
        }
        return view('auth.login', $data);
    }
    public function login(Request $request)
    {
        $rules=[
            'user_email' => 'required',
            'user_password' => 'required',
        ];
        $message=[
            'user_email.required' => 'Email is required',
            'user_password.required' => 'Password is required',
        ];
        $validator = Validator::make($request->all(), $rules, $message);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $email =$request->user_email;
        $password =$request->user_password;

        $user = DB::table('users')->where('user_email', $email)->first();
        if($user){
            if($user->account_status=='VERIFIED'){
                if(password_verify($password, $user->user_password)){
                    $data =[
                        'user_id'=>$user->user_id,
                        'user_fname'=>$user->user_fname,
                        'user_mname'=>$user->user_mname,
                        'user_lname'=>$user->user_lname,
                        'gender'=>$user->gender,
                        'birthdate'=>$user->birthdate,
                        'user_country'=>$user->user_country,
                        'user_province'=>$user->user_province,
                        'user_municipality'=>$user->user_municipality,
                        'user_barangay'=>$user->user_barangay,
                        'user_street'=>$user->user_street,
                        'user_zipcode'=>$user->user_zipcode,
                        'user_phonenum'=>$user->user_phonenum,
                        'user_email'=>$user->user_email,
                        'user_password'=>$user->user_password,
                        'account_status'=>$user->account_status,
                        'avatar'=>$user->avatar,
                    ];

                    if($user->role == 'USER') {
                        session()->put('User', $data);
                        return redirect('user/landlog')->with('success', "Login Success");
                    }
                    else if($user->role == 'ADMIN') {
                        session()->put('Admin', $data);
                        return redirect('admin/home')->with('success', "Login Success");
                    }
                    else {
                        return redirect()->back()->with('failed', "Invalid Role");
                    }
                }
                else{
                    return redirect()->back()->with('failed', "Wrong Password");
                }
            }
            else{
                return redirect()->back()->with('failed', "Verify your account first");
            }
        }
        else{
            return redirect()->back()->with('failed', "Account does not exist");
        }
    }

    public function register(Request $request)
    {
        $rules = [
            'user_fname' => 'required',
            'user_mname' => 'required',
            'user_lname' => 'required',
            'gender' => 'required',
            'birthdate' => 'required',
            'user_email' => 'required|unique:App\Models\User',
            'user_password' => 'required|min:8|max:16|confirmed',
            'user_password_confirmation' => 'required',
            'user_country' => 'required',
            'user_province' => 'required',
            'user_municipality' => 'required',
            'user_barangay' => 'required',
            'user_street' => 'required',
            'user_zipcode' => 'required',
            'user_phonenum' => 'required|min:11|max:11',
            'role' => 'required',
        ];
        $message = [
            'user_fname.required' => 'First name is required',
            'user_mname.required' => 'Middle name is required',
            'user_lname.required' => 'Last name is required',
            'gender.required' => 'Your gender is required',
            'birthdate.required' => 'Your birthday is required',
            'user_email.required' => 'Email is required',
            'user_email.unique' => 'Email already exist',
            'user_password.required' => 'Password is required',
            'user_password.min' => 'Password must be atleast 8 to 16 characters',
            'user_password.max' => 'Password must be atleast 8 to 16 characters',
            'user_password_confirmation.required' => 'Password Confirmation is required',
            'user_country.required' => 'Country is required',
            'user_province.required' => 'Province is required',
            'user_municipality.required' => 'Municipality is required',
            'user_barangay.required' => 'Barangay is required',
            'user_street.required' => 'Street Address is required',
            'user_zipcode.required' => 'Zipcode is required',
            'user_zipcode.numeric' => 'This field accept numbers only',
            'user_phonenum.required' => 'Phone Nummber is required',
            'user_phonenum.min' => 'Invalid phone number',
            'user_phonenum.max' => 'Invalid phone number',
            'role.required' => 'Role is required',
            'user_phonenum.numeric' => 'This field do not accept characters',
        ];

        $validator = Validator::make($request->all(), $rules, $message);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $random = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!@#$%^&";
        $token =substr(str_shuffle($random),0,50);



        $user_fname=$request->user_fname;
        $user_mname=$request->user_mname;
        $user_lname=$request->user_lname;
        $gender=$request->gender;
        $birthdate=$request->birthdate;
        $user_country=$request->user_country;
        $user_province = $request->user_province;
        $user_municipality=$request->user_municipality;
        $user_barangay=$request->user_barangay;
        $user_street=$request->user_street;
        $user_zipcode=$request->user_zipcode;
        $user_phonenum=$request->user_phonenum;
        $user_email=$request->user_email;
        $user_password=$request->user_password;
        $account_status='NOT VERIFIED';
        $status='OFFLINE';
        $role=$request->role;

        $user =new users();
        $user->user_fname=$user_fname;
        $user->user_mname=$user_mname;
        $user->gender=$gender;
        $user->birthdate=$birthdate;
        $user->user_lname=$user_lname;
        $user->user_country=$user_country;
        $user->user_province = $user_province;
        $user->user_municipality =$user_municipality;
        $user->user_barangay = $user_barangay;
        $user->user_street = $user_street;
        $user->user_zipcode = $user_zipcode;
        $user->user_phonenum = $user_phonenum;
        $user->user_email = $user_email;
        $user->user_password =password_hash($user_password, PASSWORD_DEFAULT);
        $user->account_status =$account_status;
        $user->status = $status;
        $user->remember_token= $token;
        $user->role = strtoupper($role);


        $mail=[
            'token' => $token
        ];
        $sent = Mail::to($user_email)->send(new Verify_User_Account($mail));
        if($sent){
            $success= $user->save();

            if($success){
             return redirect('/')->with('success', "Kindly check your email to verify your account");
            }
            else{
                return redirect()->back()->with('failed', "Something went wrong");
            }
        }
        else{
            return redirect()->back()->with('failed', "Please check you internet connection");
        }
    }
    public function verify_account($token){
        $random = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!@#$%^&";
        $new_token =substr(str_shuffle($random),0,50);
        $data=[
            'account_status' => 'VERIFIED',
            'remember_token' => $new_token
        ];
        $success = DB::table('users')->where('remember_token', $token)->update($data);
        if($success){
            return redirect('/')->with('success', "Your acccount has been verified");
        }
        else{
            return redirect('/')->with('failed', "Invalid link");
        }
    }
    public function send_email(Request $request){
        $rules=[
            'email' => 'required'
        ];
        $message=[
            'email.required' => "Email is required"
        ];
        $validator = Validator::make($request->all(), $rules, $message);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $email = $request->email;
        $match = DB::table('users')->where('user_email', $email)->first();
        if($match){
           if($match->account_status=='VERIFIED'){
            $mail=[
                'token' => $match->remember_token
            ];
            $sent = Mail::to($email)->send(new Send_Forgot_Link($mail));
            if($sent){
                return redirect()->back()->with('success',"Check your email to confirm your account reset");
            }
            else{
                return redirect()->back()->with('failed',"Invalid Email");
            }
           }
           else{
            return redirect()->back()->with('failed', "Account is not yet verified.");
           }
        }
        else{
            return redirect()->back()->with('failed', "Invalid email.");
        }
    }
    public function verify_reset($token){
        $match = DB::table('users')->where('remember_token',$token)->first();
        if($match){
            return redirect('auth/reset-form')->with('token',$match->remember_token);
        }
        else{
            echo 'dito';
        }

    }

    public function confirm_reset(Request $request){

        $rules=[
            'password' => 'required|confirmed|min:8|max:16',
            'password_confirmation' => 'required'
        ];
        $message=[
            'password.required' => "Password is required",
            'password.max' => "Password must atleast 8 to 16 characters",
            'password.min' => "Password must atleast 8 to 16 characters",
            'password_confirmation' => "Password Confirmation is required",
        ];
        $validator = Validator::make($request->all(), $rules, $message);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $token = $request->token;
        $password = $request->password;

        $random = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!@#$%^&";
        $new_token =substr(str_shuffle($random),0,50);
        $data=[
            'remember_token' => $new_token,
            'user_password' => password_hash($password, PASSWORD_DEFAULT)
        ];
        $updated = DB::table('users')->where('remember_token', $token)->update($data);
        if($updated){
            return redirect('auth/signin')->with('success', "Account reset successful");
        }
        else{
            return redirect()->back()->with('failed', "Account reset failed");
        }
    }

    public function updateProfile(Request $request)
    {
        // Get the authenticated user
        $user_id = session('User')['user_id'];
        $user = DB::table('users')->where('user_id', $user_id)->first();

        // Update the user's profile information
        $user->user_fname = $request->input('user_fname');
        $user->user_mname = $request->input('user_mname');
        $user->user_lname = $request->input('user_lname');
        $user->user_province = $request->input('user_province');
        $user->user_municipality = $request->input('user_municipality');
        $user->user_barangay = $request->input('user_barangay');
        $user->user_street = $request->input('user_street');
        $user->user_zipcode = $request->input('user_zipcode');
        $user->user_email = $request->input('user_email');
        $user->user_password = $request->input('user_password');
        $user->user_phonenum = $request->input('user_phonenum');
        $user->gender = $request->input('gender');
        $user->birthdate = $request->input('birthdate');

        // Handle the avatar upload
        if ($request->hasFile('avatar')) {
            // Get the uploaded file
            $avatar = $request->file('avatar');

            // Generate a unique filename for the uploaded file
            $filename = time() . '_' . $avatar->getClientOriginalName();

            // Save the file to the storage/app/public/avatars directory
            // $avatar->storeAs('avatars', $filename, 'public');
            $avatar->move(public_path('avatars'), $filename);

            // Update the user's avatar column with the filename
            $user->avatar = $filename;
        }

        // Save the updated user profile information to the database
        DB::table('users')->where('user_id', $user_id)->update((array) $user);

        // Redirect the user to their profile page
        return redirect('myprofile')->with('success', 'Profile updated successfully');
    }

    public function displayProfile(){
        $user_id = session('User')['user_id'];
        $users = DB::table('users')->where('user_id', $user_id)->get();
        return view('user.pages.profile.userprofile', ['users' => $users]);
    }
    public function updateAdminProfile(Request $request)
    {
        // Get the authenticated user
        $user_id = session('Admin')['user_id'];
        $user = DB::table('users')->where('user_id', $user_id)->first();

        // Update the user's profile information
        $user->user_fname = $request->input('user_fname');
        $user->user_mname = $request->input('user_mname');
        $user->user_lname = $request->input('user_lname');
        $user->user_province = $request->input('user_province');
        $user->user_municipality = $request->input('user_municipality');
        $user->user_barangay = $request->input('user_barangay');
        $user->user_street = $request->input('user_street');
        $user->user_zipcode = $request->input('user_zipcode');
        $user->user_email = $request->input('user_email');
        $user->user_password = $request->input('user_password');
        $user->user_phonenum = $request->input('user_phonenum');
        $user->gender = $request->input('gender');
        $user->birthdate = $request->input('birthdate');

        // Handle the avatar upload
        if ($request->hasFile('avatar')) {
            // Get the uploaded file
            $avatar = $request->file('avatar');

            // Generate a unique filename for the uploaded file
            $filename = time() . '_' . $avatar->getClientOriginalName();

            // Save the file to the storage/app/public/avatars directory
            // $avatar->storeAs('avatars', $filename, 'public');
            $avatar->move(public_path('avatars'), $filename);

            // Update the user's avatar column with the filename
            $user->avatar = $filename;
        }

        // Save the updated user profile information to the database
        DB::table('users')->where('user_id', $user_id)->update((array) $user);

        // Redirect the user to their profile page
        return redirect('admin-myprofile')->with('success', 'Profile updated successfully');
    }

    public function displayAdminProfile(){
        $user_id = session('Admin')['user_id'];
        $users = DB::table('users')->where('user_id', $user_id)->get();
        return view('admin.pages.profile.profile', ['users' => $users]);
    }





    public function logout() {
        session()->forget('User');
        return redirect('/');
    }
}
