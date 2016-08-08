<?php
/**
 * covers.lc - ProductGetAllQuery.php
 * 
 * Initial version by: Viktor Melnikov
 * Initial version created on: 30.05.16
 */

namespace App\Classes\Domains\Product\Queries;

use App\Models\Product;
use Exception;

class ProductGetAllQuery
{
    /**
     * Create a new job instance.
     *
     */
    public function __construct() {}

    /**
     * Execute the job.
     */
    public function handle()
    {
        try
        {
            return Product::all();
        }
        catch(Exception $e)
        {
            return false;
        }
    }
}