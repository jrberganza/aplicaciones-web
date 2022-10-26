<?php

namespace App\Http\Controllers;

use App\Models\ProductUser;
use App\Http\Requests\StoreProductUserRequest;
use App\Http\Requests\UpdateProductUserRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $userObj = $request->user();
        return array_map(function ($product) {
            $product->amount = $product->pivot->amount;
            return $product;
        }, [...$userObj->products]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductUserRequest $request)
    {
        $request->expectsJson();
        $body = $request->input();

        $product = Product::find($body["id"]);
        $userObj = $request->user();

        if ($body["amount"] <= 0) {
            $product->users()->detach([$userObj->id]);
        } else {
            $product->users()->syncWithoutDetaching([$userObj->id => ["amount" => $body["amount"]]]);
        }

        return [
            "success" => true,
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductUser  $productUser
     * @return \Illuminate\Http\Response
     */
    public function show(ProductUser $productUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductUserRequest  $request
     * @param  \App\Models\ProductUser  $productUser
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductUserRequest $request, ProductUser $productUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductUser  $productUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductUser $productUser)
    {
        //
    }
}
