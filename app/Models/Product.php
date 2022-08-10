<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $fillable = ['name', 'description', 'price'];

    /**
     * @return Product[]|Collection
     */
    public function getProduct(): Collection|array
    {
        return $this::all();
    }

    /**
     * @param array $attributes
     * @return Product
     */
    public function createProduct(array $attributes)
    {
        $product = new self();
        $product->name = $attributes["name"];
        $product->description = $attributes["description"];
        $product->price = $attributes["price"];
        $product->save();
        return $product;
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function getProductBy(int $id)
    {
        return $this->where("id", $id)->first();
    }

    /**
     * @param int   $id
     * @param array $attributes
     * @return mixed
     */
    public function updateProduct(int $id, array $attributes)
    {
        $product = $this->getProductBy($id);
        if ($product == null) {
            throw new ModelNotFoundException("Product ".$id." is not fund!");
        }

        $product->name = $attributes["name"];
        $product->description = $attributes["description"];
        $product->price = $attributes["price"];
        $product->save();
        return $product;
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function deleteProduct(int $id)
    {
        $product = $this->getProductBy($id);
        if ($product == null) {
            throw new ModelNotFoundException("Product ".$id." is not found!");
        }
        return $product->delete();
    }

}
