<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customers;
use Exception;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customers::all();
        return response()->json($customers, 200);
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
        $customers = $request->validate([
            'customer_name' => ['required', 'max:50'],
            'customer_address' => ['required', 'max:255'],
            'customer_sex' => ['required'],
        ]);
        try {
            $response = Customers::create($customers);
            return response()->json([
                'success' => true,
                'message' => 'success',
                'data' => $response,
            ]);
        } catch (Exception $e) {
            return response()->json([
                'message' => 'error',
                'error' => $e->getMessage(),
            ]);
        }
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
        $customers = $request->validate([
            'customer_name' => ['required', 'max:50'],
            'customer_address' => ['required', 'max:255'],
            'customer_sex' => ['required'],
        ]);
        try {
            $customer = Customers::find($id);
            $response = $customer->update($customers);
            return response()->json([
                'success' => true,
                'message' => 'success',
                'data' => $response,
            ]);
        } catch (Exception $e) {
            return response()->json([
                'message' => 'error',
                'error' => $e->getMessage(),
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $customer = Customers::find($id);
            $customer->delete();
            return response()->json([
                'success' => true,
                'message' => 'success',
                'data' => $customer,
            ]);
        } catch (Exception $e) {
            return response()->json([
                'message' => 'error',
                'error' => $e->getMessage(),
            ]);
        }
    }
}
