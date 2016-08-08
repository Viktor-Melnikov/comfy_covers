<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Classes\Domains\Category\Commands\CategoryDeleteCommand;
use App\Classes\Domains\Category\Requests\CategoryCreateRequest;
use App\Classes\Domains\Category\Commands\CategoryCreateCommand;
use App\Http\Controllers\Admin\BaseController;
use App\Models\Category;

class CategoryController extends BaseController
{
    public function __construct ()
    {
        parent::__construct();

        $this->url = admin_url('');
    }

    public function index()
    {
        $this->setTitle( 'Категории' );

        $category = Category::all();

        return view( 'admin.dashboard.category.index', compact( 'category' ) );
    }

    /**
     * Страница добавления
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $this->setTitle( 'Новая категория' );

        return view( 'admin.dashboard.category.create' );
    }

    /**
     * Сохранение данных в базу данных
     *
     * @param CategoryCreateRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store( CategoryCreateRequest $request )
    {
        $post = $request->input ();

        $this->dispatch ( new CategoryCreateCommand( $post[ 'name' ] ) );

        return $this->sessionFlash ( 'category' );
    }

    /**
     * Просмотр
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function view($id)
    {
        $this->setTitle( 'Категория' );

        $client = Category::find($id);

        dd($client);
    }

    public function edit( ClientRequest $request ) {}

    public function delete( $id )
    {
        $this->dispatch( new CategoryDeleteCommand($id) );

        return $this->json ();
    }
}
