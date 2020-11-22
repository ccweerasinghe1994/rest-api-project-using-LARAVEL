<?php

namespace App\Http\Controllers\Buyer;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Buyer;
use Illuminate\Http\Response;

class BuyerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $buyers = Buyer::has('transactions')->get();
        return response()->json(['data'=>$buyers],200);
    }


    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function show(int $id): JsonResponse
    {

       $buyer = Buyer::has('transactions')->findOrFail($id);
       return response()->json(['data'=>$buyer],200);
    }

}
