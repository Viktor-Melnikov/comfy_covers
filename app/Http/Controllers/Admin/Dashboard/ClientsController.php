<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Classes\Domains\Clients\Commands\ClientCreateCommand;
use App\Classes\Domains\Clients\Requests\ClientCreateRequest;
use App\Http\Controllers\Admin\BaseController;
use App\Models\Admin\Client;

class ClientsController extends BaseController
{
    public function index ()
    {
        $this->setTitle ( 'Клиенты' );

        $clients = Client::all ();

        return view ( 'admin.dashboard.clients.index', compact ( 'clients' ) );
    }

    /**
     * Страница добавления
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create ()
    {
        $this->setTitle ( 'Новый клиент' );

        return view ( 'admin.dashboard.clients.create' );
    }

    /**
     * Сохранение данных в базу данных
     *
     * @param ClientCreateRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store ( ClientCreateRequest $request )
    {
        $post = $request->input ();

        $result = $this->dispatch ( new ClientCreateCommand( $post[ 'email' ], $post[ 'name' ], $post[ 'surname' ], $post[ 'password' ] ) );

        return $this->sessionFlash ( 'clients', (bool)$result );
    }

    /**
     * Просмотр клиента
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function view ( $id )
    {
        /*$this->setTitle ( 'Клиент' );

        $client = ClientCommand::get ( $id );

        dd ( $client );*/
    }

    public function edit ( ClientCreateRequest $request ) { }

    public function delete ( $id )
    {
        /*$res = ClientCommand::delete ( $id );

        return response ()->json ( $res );*/
    }
}
