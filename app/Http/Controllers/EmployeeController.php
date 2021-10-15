<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Employee;
use App\Models\Order;
use Illuminate\Http\Request;
use Validator;
use Auth;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees= Employee::all();
        return view('dashboard.employee.index',compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'mobile' => 'required',
            'password' => 'required|alphaNum|min:5',
        ]);
        
  
        Employee::create($request->all());
        return redirect()->route('employees.index')->with('success','Employee Enroll Successfully!');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        return view('dashboard.employee.show',compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        return view("dashboard.employee.edit",compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'mobile' => 'required',
            'password' => 'required',
        ]);
        $employee->update($request->all());
        return redirect()->route('employees.index')->with('success', 'Employee updated successfully!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employees.index')->with('success', 'Employee deleted Successfully!');
    } 
    public function detail(Employee $employee)
    {       
        return view('employee.employeeDetail',compact('employee'));
    }

    public function My_Order(Employee $employee)
    {
        $orders=Order::all()->where('EID',$employee->id)->where('status','null');
        $E_orders=Order::all()->where('EID',$employee->id)->whereIn('status',['Cancelled','Delivered']);
        
        return view('employee.myorder',compact('employee','orders','E_orders'));
    }    

    public function reset(Employee $employee)
    {
       return view('employee.resetPW',compact('employee'));
    }
    public function new_password(Request $request,Employee $employee)
    {
        $old_password=Employee::where('password','=',$request->get('current_password'))->first();
        $new_password=Employee::where('password','=',$request->get('password'))->first();
        $confirm=Employee::where('password','=',$request->get('confirm_password'))->first();
        if($old_password != null)
        {
            if($new_password==$confirm)
            {
                $request->validate([
                    'password' => 'required',
                ]);
                $employee->update($request->only('password'));
                return redirect('/')->with('success', 'Employee updated successfully!');
            }   
        }
    }
    public function delivered(Order $order ,Employee $employee)
    {
        return view('employee.confirm_yes',compact('order','employee'));
       
    }
    public function confirm_delivery(Order $order,Request $request)
    {
        $request->validate([
            'status' => 'required',
        ]);

        $order->update($request->only('status'));       
        return back()->with('success', 'order cancelled successfully!');
    }
}
