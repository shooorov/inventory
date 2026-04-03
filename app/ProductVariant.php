<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $product_id
 * @property int $variant_id
 * @property int $position
 * @property string $item_code
 * @property float|int $additional_price
 * @property int|float $qty
 */
class ProductVariant extends Model
{
    protected $fillable = ['product_id', 'variant_id', 'position', 'item_code', 'additional_price', 'qty'];

    public function scopeFindExactProduct($query, $product_id, $variant_id)
    {
    	return $query->where([
            ['product_id', $product_id],
            ['variant_id', $variant_id]
        ]);
    }

    public function scopeFindExactProductWithCode($query, $product_id, $item_code)
    {
    	return $query->where([
            ['product_id', $product_id],
            ['item_code', $item_code],
        ]);
    }
}
