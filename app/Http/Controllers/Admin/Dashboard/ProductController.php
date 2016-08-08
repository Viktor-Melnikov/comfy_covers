<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Classes\Domains\Product\Commands\ProductCreateCommand;
use App\Classes\Domains\Category\Queries\CategoryGetAllQuery;
use App\Classes\Domains\Product\Commands\ProductDeleteCommand;
use App\Classes\Domains\Product\Commands\ProductUpdateByIdCommand;
use App\Classes\Domains\Product\Queries\ProductGetAllQuery;
use App\Classes\Domains\Product\Queries\ProductGetByIdQuery;
use App\Classes\Domains\Product\Requests\ProductCreateRequest;
use App\Classes\Domains\Product\Requests\ProductEditRequest;
use App\Http\Controllers\Admin\BaseController;
use App\Http\Requests;
use Image;

class ProductController extends BaseController
{
    public function index ()
    {
        $this->setTitle ( 'Товары' );

        if ( !$products = $this->dispatch ( new ProductGetAllQuery() ) )
        {
            return $this->sessionFlash ( '/', false );
        }

        return view ( 'admin.dashboard.product.index', compact ( 'products' ) );
    }

    /**
     * Страница добавления
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create ()
    {
        $this->setTitle ( 'Новый товар' );

        if ( !$categories = $this->dispatch ( new CategoryGetAllQuery() ) )
        {
            return $this->sessionFlash ( '/', false );
        }

        return view ( 'admin.dashboard.product.create',  compact ( 'categories' ) );
    }

    /**
     * Сохранение данных в базу данных
     *
     * @param ProductCreateRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store ( ProductCreateRequest $request )
    {
        $post = $request->input ();

        $img = Image::make ( $request->file ( 'picture' )->getRealPath () );

        if ( $img->getWidth () > 200 )
        {
            $img->resize ( 200,
                           null,
                function ( $constraint )
                {
                    $constraint->aspectRatio ();
                } );
        }

        $img->save ( public_path ( 'img/products/' . $request->file ( 'picture' )->getClientOriginalName () ) );

        $result = $this->dispatch ( new ProductCreateCommand( $post[ 'name' ],
                                                              $post[ 'amount' ],
                                                              'img/products/' . $request->file ( 'picture' )->getClientOriginalName (),
                                                              $post[ 'category_id' ],
                                                              $post[ 'sum' ],
                                                              $post[ 'description' ] ) );

        return $this->sessionFlash ( 'product', !(bool)$result );
    }

    /**
     * Просмотр клиента
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function view ( $id )
    {
        if ( !$product = $this->dispatch ( new ProductGetByIdQuery( $id ) ) )
        {
            return $this->sessionFlash ( '', false );
        }

        if ( !$categories = $this->dispatch ( new CategoryGetAllQuery() ) )
        {
            return $this->sessionFlash ( '/', false );
        }

        $this->setTitle ( 'Товар "' . $product->name . ' ' );

        return view ( 'admin.dashboard.product.edit', compact ( 'product', 'categories' ) );
    }

    public function edit ( ProductEditRequest $request, $id )
    {
        $post = $request->input ();

        if ($request->hasFile( 'picture' ))
        {
            $img = Image::make ( $request->file ( 'picture' )->getRealPath () );

            if ( $img->getWidth () > 200 )
            {
                $img->resize ( 200,
                               null,
                    function ( $constraint )
                    {
                        $constraint->aspectRatio ();
                    } );
            }

            $img->save ( public_path ( 'img/products/' . $request->file ( 'picture' )->getClientOriginalName () ) );

            $post['picture'] = 'img/products/' . $request->file ( 'picture' )->getClientOriginalName ();
        }

        unset($post['_token']);

        $result = $this->dispatch ( new ProductUpdateByIdCommand( $id, $post ) );

        return $this->sessionFlash ( 'product', !(bool)$result );
    }

    public function delete ( $id )
    {
        $result = $this->dispatch ( new ProductDeleteCommand( $id ) );

        return $this->json ( !(bool)$result, [ 'url' => admin_url ( 'admin/category' ) ] );
    }
}
