<?php
/**
 * covers.lc - Product.php
 * 
 * Initial version by: Viktor Melnikov
 * Initial version created on: 29.05.16
 */

namespace App\Models;

use Eloquent;

class Product extends Eloquent
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'product';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'category_id', 'new', 'amount', 'sum', 'picture', 'percentage', 'rating', 'description'
    ];
}