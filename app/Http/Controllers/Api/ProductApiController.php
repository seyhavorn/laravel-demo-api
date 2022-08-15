<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateProductRequest;
use App\Models\Product;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProductApiController extends Controller
{
    protected Product $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    /**
     * Get List Products
     * @OA\Get (
     *     path="/api/v1/products",
     *     tags={"Products"},
     *     @OA\Response(
     *         response=200,
     *         description="success",
     *         @OA\JsonContent(
     *              @OA\Property(property="id",type="number",example="1"),
     *               @OA\Property(property="name", type="string", example="bags"),
     *               @OA\Property(property="description", type="string", example="this bag for",),
     *               @OA\Property(property="price", type="int", example="99", ),
     *               @OA\Property(property="updated_at", type="string", example="2021-12-11T09:25:53.000000Z"),
     *               @OA\Property( property="created_at", type="string", example="2021-12-11T09:25:53.000000Z")
     *         )
     *     )
     * )
     */

    public function index()
    {
        $product = $this->product->getProduct();
        return response()->json(["Data" => $product]);
    }

    public function create(Request $request)
    {
        //
    }


    /**
     * Create Products
     * @OA\Post (
     *     path="/api/v1/products",
     *     tags={"Products"},
     *     @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 @OA\Property(
     *                      type="object",
     *                      @OA\Property(property="name", type="string"),
     *                      @OA\Property(property="description", type="string"),
     *                      @OA\Property(property="price", type="int"),
     *                 ),
     *                 example={
     *                     "name":"bag",
     *                     "description":"for bag",
     *                     "price": "99",
     *                }
     *             )
     *         )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="success",
     *          @OA\JsonContent(
     *               @OA\Property(property="id",type="number",example="1"),
     *               @OA\Property(property="name", type="string", example="bags"),
     *               @OA\Property(property="description", type="string", example="this bag for",),
     *               @OA\Property(property="price", type="int", example="99", ),
     *               @OA\Property(property="updated_at", type="string", example="2021-12-11T09:25:53.000000Z"),
     *               @OA\Property( property="created_at", type="string", example="2021-12-11T09:25:53.000000Z")
     *          ),
     *      ),
     *      @OA\Response(
     *          response=400,
     *          description="invalid",
     *          @OA\JsonContent(
     *              @OA\Property(property="msg", type="string", example="fail"),
     *          )
     *      )
     * )
     */

    public function store(CreateProductRequest $productRequest): JsonResponse
    {
        $productRequest->validated();
        try {
            $product = Product::create($productRequest->all());
            return response()->json($product);
        } catch (ModelNotFoundException $exception) {
            return response()->json(['message' => $exception->getMessage()], 404);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */

    /**
     * Get Detail Products
     * @OA\Get (
     *     path="/api/v1/products/{id}",
     *     tags={"Products"},
     *     @OA\Parameter(
     *         in="path",
     *         name="id",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="success",
     *         @OA\JsonContent(
     *               @OA\Property(property="id",type="number",example="1"),
     *               @OA\Property(property="name", type="string", example="bags"),
     *               @OA\Property(property="description", type="string", example="this bag for",),
     *               @OA\Property(property="price", type="int", example="99", ),
     *               @OA\Property(property="updated_at", type="string", example="2021-12-11T09:25:53.000000Z"),
     *               @OA\Property( property="created_at", type="string", example="2021-12-11T09:25:53.000000Z")
     *         )
     *     )
     * )
     */

    public function show($id)
    {
        $product = $this->product->getProductBy($id);
        if ($product !== null) {
            return response()->json($product);
        }
        return response()->json(["message" => "Products " . $id . " item not found"], 404);
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
     * @return \Illuminate\Http\JsonResponse
     */

    /**
     * Update Products
     * @OA\Put (
     *     path="/api/v1/products/{id}",
     *     tags={"Products"},
     *     @OA\Parameter(
     *         in="path",
     *         name="id",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 @OA\Property(
     *                      type="object",
     *                      @OA\Property(property="name", type="string"),
     *                      @OA\Property(property="description", type="string"),
     *                      @OA\Property(property="price", type="int"),
     *                 ),
     *                 example={
     *                     "name":"bag",
     *                     "description":"for bag",
     *                     "price": "99",
     *                }
     *             )
     *         )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="success",
     *          @OA\JsonContent(
     *               @OA\Property(property="id",type="number",example="1"),
     *               @OA\Property(property="name", type="string", example="bags"),
     *               @OA\Property(property="description", type="string", example="this bag for",),
     *               @OA\Property(property="price", type="int", example="99", ),
     *               @OA\Property(property="updated_at", type="string", example="2021-12-11T09:25:53.000000Z"),
     *               @OA\Property( property="created_at", type="string", example="2021-12-11T09:25:53.000000Z")
     *          )
     *      )
     * )
     */

    public function update(CreateProductRequest $createProductRequest, $id)
    {
        $createProductRequest->validated();
        try {
            $product = $this->product->updateProduct($id, $createProductRequest->all());
            return response()->json($product);
        } catch (ModelNotFoundException $exception) {
            return response()->json(["Message" => $exception->getMessage()], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */

    /**
     * Delete Products
     * @OA\Delete (
     *     path="/api/v1/products/{id}",
     *     tags={"Products"},
     *     @OA\Parameter(
     *         in="path",
     *         name="id",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="success",
     *         @OA\JsonContent(
     *             @OA\Property(property="msg", type="string", example="delete product success")
     *         )
     *     )
     * )
     */

    public function destroy($id)
    {
        try {
            $product = $this->product->deleteProduct($id);
            return response()->json(["message" => "Product " . $id . " has been deleted"]);
        } catch (ModelNotFoundException $exception) {
            return response()->json(["message" => $exception->getMessage()], 404);
        }
    }

    public function search($name)
    {
        return Product::where('name', 'like', '%' . $name . '%')->get();
    }
}
