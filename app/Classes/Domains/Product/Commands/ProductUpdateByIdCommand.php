<?php
/**
 * covers.lc - ProductEditCommand.php
 *
 * Initial version by: Viktor Melnikov
 * Initial version created on: 29.05.16
 */

namespace App\Classes\Domains\Product\Commands;

use App\Classes\Helper;
use App\Models\Product;
use Exception;

class ProductUpdateByIdCommand
{
    /**
     * @var
     */
    private $id;
    /**
     * @var
     */
    private $fields;

    public function __construct ( $id, array $fields )
    {
        $this->id     = $id;
        $this->fields = $fields;
    }

    public function handle ()
    {
        try
        {
            $res = Product::findOrFail ( $this->id );

            if ( $res )
            {
                $res->update($this->fields);

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