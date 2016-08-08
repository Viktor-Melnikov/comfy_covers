<?php
/**
 * covers.lc - CreateClientCommand.php
 *
 * Initial version by: Viktor Melnikov
 * Initial version created on: 29.05.16
 */

namespace App\Classes\Domains\Clients\Commands;

use App\Models\Admin\Client;
use Exception;

class ClientCreateCommand
{
    private $email;

    private $name;

    private $surname;

    private $phone;

    public function __construct ( $email = null, $name = null, $surname = null, $phone = null )
    {
        $this->email   = $email;
        $this->name    = $name;
        $this->surname = $surname;
        $this->phone   = $phone;
    }

    public function handle ()
    {
        try
        {
            Client::create ( [
                                 'name' => $this->name, 'surname' => $this->surname, 'phone' => $this->phone, 'email' => $this->email
                             ] );
            return false;
        }
        catch ( Exception $e )
        {
            // $e->getMessage()

            return true;
        }
    }
}