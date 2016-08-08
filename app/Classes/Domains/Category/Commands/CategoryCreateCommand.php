<?php
/**
 * covers.lc - CreateCategoryCommand.php
 *
 * Initial version by: Viktor Melnikov
 * Initial version created on: 29.05.16
 */

namespace App\Classes\Domains\Category\Commands;

use App\Classes\Helper;
use App\Models\Category;
use Exception;

class CategoryCreateCommand
{
    private $name;

    public function __construct ( $name = null )
    {
        $this->name = $name;
    }

    public function handle ()
    {
        try
        {
            Category::create ( [
                                   'name'  => $this->name,
                                   'alias' => strtolower ( Helper::translit ( $this->name ) )
                               ] );
        }
        catch ( Exception $e )
        {

        }
    }
}