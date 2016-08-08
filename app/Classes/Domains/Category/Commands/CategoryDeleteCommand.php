<?php
/**
 * covers.lc - CategoryDeleteCommand.php
 *
 * Initial version by: Viktor Melnikov
 * Initial version created on: 29.05.16
 */

namespace App\Classes\Domains\Category\Commands;

use App\Classes\Domains\Category\Exceptions\FailCategoryCommandException;
use App\Models\Category;
use Exception;

class CategoryDeleteCommand
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
            $res = Category::find ( $this->id );

            if ( $res )
            {
                $res->delete ();
            }
            else
            {
                throw new Exception( 'Запись с id ' . $this->id . ' отсутствует' );
            }
        }
        catch ( Exception $e )
        {
            throw new FailCategoryCommandException( $e, true );
        }
    }
}