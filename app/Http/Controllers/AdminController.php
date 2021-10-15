<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Customer;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Http\Request;
use Validator;
use Auth;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login');
    }

    public function checklogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|alphaNum|min:5'
        ]);
        $user_data = array(
            'email' => $request->get('email'),
            'password' => $request->get('password')
        );
        $customer=Customer::where('email','=',$request->get('email'))->where('password','=',$request->get('password'))->first();
        $employee=Employee::where('email','=',$request->get('email'))->where('password','=',$request->get('password'))->first();

        if(Auth::attempt($user_data))
        {
            return redirect('/das');
        }
        if($customer != null)
        {
            $customer=DB::table('customers')->where('email',$request->get('email'))->where('password',$request->get('password'))->first();
            return view('customer.dashboard',compact('customer'));
        }
        if($employee != null)
        {
            $employee=DB::table('employees')->where('email',$request->get('email'))->where('password',$request->get('password'))->first();
            return view('employee.dashboard',compact('employee'));
        }
        else{
            return back()->with('error','Wrong Login Details');
        }
    }
    public function display()
    {
        return view('dashboard.admin');
    }
    public function detail()
    {
        return view('dashboard.adminDetail');
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
    function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
