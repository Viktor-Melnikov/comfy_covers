<?php
/**
 * covers.lc - CategoryGetByIdQuery.php
 * 
 * Initial version by: Viktor Melnikov
 * Initial version created on: 30.05.16
 */

namespace App\Classes\Domains\Category\Queries;

use App\Models\Category;
use Exception;

class CategoryGetByIdQuery
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
            return Category::findOrFail($this->userId);
        }
        catch(Exception $e)
        {
            return false;
        }
    }
}