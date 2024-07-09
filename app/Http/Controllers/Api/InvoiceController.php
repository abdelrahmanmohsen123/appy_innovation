<?php

namespace App\Http\Controllers\Api;

use Exception;
use App\Models\Unit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Invoice\InvoiceIndexResource;
use App\Models\InvoiceDetail;
use Illuminate\Support\Facades\Response;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $invoice_details = InvoiceDetail::all();
        try{

            return Response::json([
                'data' => InvoiceIndexResource::collection($invoice_details)
            ], 200); // Status code here

        }catch(Exception $e){

            return Response::json([
                'error' => $e->getMessage()
            ], 404); // Status code here
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
