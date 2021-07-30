<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Hap;
use Illuminate\Http\Request;

class HapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hap = Hap::all();
        return response()->json($hap);
    }

    public function store(Request $request)
    {
        //
    }

    /**
     *
     * @param string $hash
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(string $hash)
    {
        $hap = Hap::where('hash', $hash)->first();
        return response()->json($hap);
    }


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
