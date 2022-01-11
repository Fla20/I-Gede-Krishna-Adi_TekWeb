<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Details;
use Exception;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $details = Details::all();
        return response()->json($details, 200);
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
        $details = $request->validate([
            'id_transaction' => ['required'],
            'id_paket' => ['required'],
            'total' => ['required', 'max:11'],
            'total_price' => ['required', 'max:11']
        ]);
        try {
            $response = Details::create($details);
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
        $details = $request->validate([
            'id_transaction' => ['required'],
            'id_paket' => ['required'],
            'total' => ['required', 'max:11'],
            'total_price' => ['required', 'max:11']
        ]);
        try {
            $detail = Details::find($id);
            $response = $detail->update($details);
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
            $detail = Details::find($id);
            $detail->delete();
            return response()->json([
                'success' => true,
                'message' => 'success',
                'data' => $detail,
            ]);
        } catch (Exception $e) {
            return response()->json([
                'message' => 'error',
                'error' => $e->getMessage(),
            ]);
        }
    }
}
