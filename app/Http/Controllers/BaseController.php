<?php

namespace App\Http\Controllers;

use App\Http\Middleware\OnlyAjaxRequests;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Boolean;

class BaseController extends Controller
{
    protected $ajax;
    protected $crud;
    protected $entity;
    protected $table;

    /**
     * Create a controller instance.
     *
     * @param Model $entity
     * @param Model|null $table
     * @param bool $ajax
     */
    protected function __construct(Model $entity, bool $ajax = false, Model $table = null )
    {
        $this->ajax = $ajax;
        $this->entity = $entity;
        $this->crud = $this->entity->getTable();
        $this->table = is_null($table) ? $entity : $table;
       /* $this->middleware('ajax')->except('index');
        $this->middleware('permission:' . $this->crud->getTable() . '.destroy')->only('destroy');
        $this->middleware('permission:' . $this->crud->getTable() . '.show')->only(['index', 'show', 'showBase']);
        $this->middleware('permission:' . $this->crud->getTable() . '.store')->only(['store', 'storeBase']);
        $this->middleware('permission:' . $this->crud->getTable() . '.update')->only(['update', 'updateBase']);*/
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected function index()
    {
        return view('app.' . $this->crud);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    protected function storeBase(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    protected function showBase($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    protected function updateBase(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    protected function destroyBase($id)
    {
        //
    }
}
