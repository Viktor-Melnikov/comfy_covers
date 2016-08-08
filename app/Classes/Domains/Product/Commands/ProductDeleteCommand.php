<?php
/**
 * covers.lc - ProductDeleteCommand.php
 * 
 * Initial version by: Viktor Melnikov
 * Initial version created on: 29.05.16
 */

namespace App\Classes\Domains\Product\Commands;

use App\Models\Product;
use Exception;

class ProductDeleteCommand
{
    private $id;

    public function __construct ( $id = null )
    {
        $this->id = $id;
    }

    public function handle ()
    {
        try
        {
            $res = Product::find ( $this->id );

            if ($res)
            {
                $res->delete();

                return false;
            }

            throw new Exception( 'Запись отсутствует' );
        }
        catch ( Exception $e )
        {
            // $e->getMessage()

            return true;
        }
    }
}