<?php
/**
 * covers.lc - Clients.php
 * 
 * Initial version by: Viktor Melnikov
 * Initial version created on: 03.04.16
 */

namespace App\Classes\Domains\Clients\Commands;

use App\Models\Admin\Client;
use Exception;
use Session;

class ClientCommand
{
    /**
     * Добавление клиента
     *
     * @param array $data
     */
    public static function add(array $data)
    {
        try
        {
            Client::create( [
                'name'    => $data[ 'name' ],
                'surname' => $data[ 'surname' ],
                'phone'   => $data[ 'phone' ],
                'email'   => $data[ 'email' ],
            ] );

            Session::flash( 'result', [
                'status' => true,
                'msg'    => 'Добавление выполнено успешно',
            ] );
        }
        catch ( Exception $e )
        {
            Session::flash( 'result', [
                'status' => false,
                'msg'    => 'В процессе выполнения произошла ошибка; ' . $e->getMessage(),
            ] );
        }
    }

    /**
     * Список всех клиентов
     *
     * @return array|\Illuminate\Database\Eloquent\Collection|static[]
     */
    public static function all()
    {
        $clients = [];

        try
        {
            $clients = Client::orderBy('id')->get();
        }
        catch ( Exception $e )
        {
            Session::flash( 'result', [
                'status' => false,
                'msg'    => 'В процессе выполнения произошла ошибка; ' . $e->getMessage(),
            ] );
        }
        finally
        {
            return $clients;
        }
    }

    /**
     * Информация по выбранному клиенту
     *
     * @param $id
     *
     * @return array|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model|null|static|static[]
     */
    public static function get($id)
    {
        $client = [];

        try
        {
            $client = Client::find($id);
        }
        catch ( Exception $e )
        {
            Session::flash( 'result', [
                'status' => false,
                'msg'    => 'В процессе выполнения произошла ошибка; ' . $e->getMessage(),
            ] );
        }
        finally
        {
            return $client;
        }
    }

    public static function delete($id)
    {
        try
        {
            Client::find($id)->delete();

            return [
                'status'  => 'success',
                'message' => 'Запись успешно удалена'
            ];
        }
        catch ( Exception $e )
        {
            return [
                'status'  => 'error',
                'message' => 'Изменения не были внесены. Запись не удалена; ' . $e->getMessage()
            ];
        }
    }

}