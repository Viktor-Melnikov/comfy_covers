<?php
/**
 * covers.lc - Clients.php
 * 
 * Initial version by: Viktor Melnikov
 * Initial version created on: 03.04.16
 */

namespace App\Models\Admin;

use Eloquent;

class Client extends Eloquent
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'clients';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'surname', 'phone', 'email'];
}