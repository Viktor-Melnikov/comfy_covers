<?php
/**
 * covers.lc - CategoryGetAllQuery.php
 * 
 * Initial version by: Viktor Melnikov
 * Initial version created on: 30.05.16
 */

namespace App\Classes\Domains\Category\Queries;

use App\Models\Category;
use Exception;

class CategoryGetAllQuery
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
            return Category::all();
        }
        catch(Exception $e)
        {
            return false;
        }
    }
}