<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\PaketMakanans;
use Exception;
use Illuminate\Http\Request;


class PaketMakananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pakets = PaketMakanans::all();
        return response()->json($pakets, 200);
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
        $pakets = $request->validate([
            'paket_name' => ['required', 'max:20'],
            'paket_info' => ['required', 'max:255'],
            'paket_price' => ['required', 'max:11'],
        ]);
        try {
            $response = PaketMakanans::create($pakets);
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
        $pakets = $request->validate([
            'paket_name' => ['required', 'max:20'],
            'paket_info' => ['required', 'max:255'],
            'paket_price' => ['required', 'max:11'],
        ]);
        try {
            $paket = PaketMakanans::find($id);
            $response = $paket->update($pakets);
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
            $paket = PaketMakanans::find($id);
            $paket->delete();
            return response()->json([
                'success' => true,
                'message' => 'success',
                'data' => $paket,
            ]);
        } catch (Exception $e) {
            return response()->json([
                'message' => 'error',
                'error' => $e->getMessage(),
            ]);
        }
    }
}
