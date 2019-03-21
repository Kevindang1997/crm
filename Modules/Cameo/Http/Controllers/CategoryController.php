<?php

namespace Modules\Cameo\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Cameo\Libs\Classes\BaseController;
use Modules\Cameo\Models\CategoryModel;
use Modules\Cameo\Http\Requests\CategoryRequest;


class CategoryController extends BaseController
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('cameo::category.index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create(CategoryModel $model)
    {
        $allList = $model->getArrayWithFormatLabel();
        return view('cameo::category.create',['allList'=>$allList]);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(CategoryRequest $request, CategoryModel $model)
    {
        $model->saveDatas($request->all());
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('cameo::category.show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('cameo::category.edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
