<?php
/**
 * covers.lc - Employees.php
 * 
 * Initial version by: Viktor Melnikov
 * Initial version created on: 03.04.16
 */

namespace App\Models\Admin;

use Eloquent;

class Employees extends Eloquent
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users';
}