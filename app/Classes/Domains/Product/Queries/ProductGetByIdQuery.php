<?php
/**
 * covers.lc - ProductGetByIdQuery.php
 * 
 * Initial version by: Viktor Melnikov
 * Initial version created on: 30.05.16
 */

namespace App\Classes\Domains\Product\Queries;

use App\Models\Product;
use Exception;

class ProductGetByIdQuery
{
    /**
     * @var
     */
    private $userId;

    /**
     * Create a new job instance.
     *
     * @param $userId
     */
    public function __construct($userId)
    {
        $this->userId = $userId;
    }

    /**
     * Execute the job.
     */
    public function handle()
    {
        try
        {
            return Product::findOrFail($this->userId);
        }
        catch(Exception $e)
        {
            return false;
        }
    }
}