<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Http\Resources\ProductResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class ProductController extends Controller
{
public function index()
{
$products = Product::latest()->paginate(10);
return ProductResource::collection($products);
}
public function store(Request $request)
{
$validator = Validator::make($request->all(), [
'name' => 'required|string|max:255',
'description' => 'nullable|string',
'price' => 'required|numeric|min:0',
'stock' => 'required|integer|min:0',
]);
if ($validator->fails()) {
return response()->json(['errors' => $validator->errors()], 422);
}
$product = Product::create($request->all());
return (new ProductResource($product))
->additional(['message' => 'Product created successfully'])
->response()
->setStatusCode(201);
}
public function show(Product $product)
{
return new ProductResource($product);
}
public function update(Request $request, Product $product)
{
$validator = Validator::make($request->all(), [
'name' => 'sometimes|required|string|max:255',
'description' => 'nullable|string',
'price' => 'sometimes|required|numeric|min:0',
'stock' => 'sometimes|required|integer|min:0',
]);
if ($validator->fails()) {
return response()->json(['errors' => $validator->errors()], 422);
}
$product->update($request->all());
return (new ProductResource($product))
->additional(['message' => 'Product updated successfully']);
}
public function destroy(Product $product)
{
$product->delete();
return response()->json(['message' => 'Product deleted successfully'], 200);
}
}