<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Customer;
use App\Models\Employee;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Product;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    public function index()
    {
        $customers= Customer::all();
        return view('customer.register',compact('customers'));
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
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'mobile' => 'required',
            'password' => 'required',

        ]);

        Customer::create($request->all());
        return redirect('/')->with('success','Customer Enroll Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer,$id)
    {
        $customer=DB::table('customers')->where('id',$id)->first();

        return view('customer.customerDetail',compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    
    public function order(Product $products,$id)
    {
        $products = Product::all();
        $customer=DB::table('customers')->where('id',$id)->first();

        return view('customer.orders.order',compact('products','customer'));
    }
    public function place_oder(Employee $employee,$product,$customer)
    {
        $employees=Employee::all();
        $product=DB::table('products')->where('id',$product)->first();
        $customer=DB::table('customers')->where('id',$customer)->first();
        return view('customer.orders.show',compact('employees','product','customer'));
    }


    public function myorder(Customer $customer)
    {
        //$orders=Order::all();
        $orders=Order::all()->where('CID',$customer->id)->where('status','null');
        $C_orders=Order::all()->where('CID',$customer->id)->whereIn('status',['Cancelled','Delivered']);
        
        return view('customer.orders.myorder',compact('customer','orders','C_orders'));
       
    }


    public function cansal_order(Order $order ,Customer $customer)
    {
        return view('customer.orders.cansalorder',compact('order','customer'));
    }
    public function cancell_confirm(Request $request,Order $order)
    {   
        $request->validate([
            'status' => 'required',
        ]);

        $order->update($request->only('status'));       
        return back()->with('success', 'order cancelled successfully!');

        
        
    }
}
