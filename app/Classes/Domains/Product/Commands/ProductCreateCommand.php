<?php
/**
 * covers.lc - ProductCreateCommand.php
 *
 * Initial version by: Viktor Melnikov
 * Initial version created on: 29.05.16
 */

namespace App\Classes\Domains\Product\Commands;

use App\Classes\Helper;
use App\Models\Product;
use Exception;

class ProductCreateCommand
{
    private $name;

    private $picture;

    private $category_id;

    private $sum;

    private $description;

    private $amount;

    public function __construct ( $name = null, $amount = null, $picture = null, $category_id = null, $sum = null, $description = null )
    {
        $this->name        = $name;
        $this->amount      = $amount;
        $this->picture     = $picture;
        $this->category_id = $category_id;
        $this->sum         = $sum;
        $this->description = $description;
    }

    public function handle ()
    {
        try
        {
            Product::create ( [
                                  'name'        => $this->name,
                                  'amount'      => $this->amount,
                                  'picture'     => $this->picture,
                                  'category_id' => $this->category_id,
                                  'sum'         => $this->sum,
                                  'description' => $this->description
                              ] );

            return false;
        }
        catch ( Exception $e )
        {
            return true;
        }
    }
}