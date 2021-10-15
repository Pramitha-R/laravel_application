<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Order;
use App\Models\Product;
use App\Models\Customer;
use App\Models\Employee;
use Illuminate\Http\Request;
Use \Carbon\Carbon;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function store_order(Request $request)
    {
       
        
        $request->validate([
            'PID' => 'required',
            'EID' => 'required',
            'CID' => 'required',
            'emp_name'=>'required',
            'product' => 'required',
            'detail' => 'required',
            'price' => 'required',
            'cust_name' => 'required',
            'cust_address' => 'required',
            'cust_mobile' => 'required',
            'status'=>'required',
        ]);
        
        $employee=Employee::where('id','=',$request->get('EID'))->where('name','=',$request->get('emp_name'))->first();
        if($employee !=null)
        {
            Order::create($request->all());
            return back();
        }
        else
        {
            return back()->with('error','Employee selection Wrong Detail');
        }

    }

    

    
    public function index()
    {
        //
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
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        
    }
   
}
