<?php

namespace App\Http\Controllers;

use App\Customer;
use App\User;
use App\Customeruser;
use Auth;
use Illuminate\Http\Request;

//https://scotch.io/tutorials/simple-laravel-crud-with-resource-controllers

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //$customer = Customer::all();
        $user = Auth::user();

        $customer = User::find(Auth::id());
        $custom = $customer->customer;

        return view('customer.index', compact('custom','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $all = $request->except('_token');
        $customer = Customer::create($all);

        Customeruser::create(
            array(
                'customer_id' => $customer->id,
                'user_id' => Auth::id(),
                'created_at' => '',
                'updated_at' => ''
            )
        );

        return redirect('/home');
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

        $customer = Customer::find($request->input('id'));
        $all = $request->all();
        $customer->update($all);

        return redirect('/home');
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
