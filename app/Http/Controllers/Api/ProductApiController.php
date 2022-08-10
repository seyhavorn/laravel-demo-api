<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductApiController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\JsonResponse
     */
	public function index()
	{
		$product = Product::all();
		return response()->json($product);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create(Request $request)
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\JsonResponse
     */
	public function store(Request $request)
	{
		$product = Product::create($request->all());
		return response()->json($product);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param int $id
	 * @return \LaravelIdea\Helper\App\Models\_IH_Product_C|Product|Product[]
     */
	public function show($id)
	{
		$product = Product::find($id);
		return $product;
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param int $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @param int                      $id
	 * @return array
     */
	public function update(Request $request, $id)
	{
		$product = Product::find($id);
		$success = $product->update($request->all());

		return [
			'success' => $success,
			'data'    => $product,
			'status'  => 'Product has been update',
		];

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param int $id
	 * @return array
     */
	public function destroy($id)
	{
		$success = Product::destroy($id);

		return [
			'success' => $success,
			'status'  => 'Products has been delete',
		];
	}
}