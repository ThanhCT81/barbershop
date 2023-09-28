<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductCategoryRequest;
use App\Http\Requests\UpdateProductCategoryRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productCategories = DB::table('product_categories')
            ->orderBy('created_at', 'desc')
            ->paginate(2);
        return view('admin.pages.product_category.list', ['productCategories' => $productCategories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.product_category.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductCategoryRequest $request)
    {
        $check = DB::table('product_categories')->insert([
            "name" => $request->name,
            "status" => $request->status,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);
        $messager = $check ? 'Create Success!!!' : '';
        return redirect()->route('admin.product_category.index')->with('message', $messager);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $productCategory = DB::table('product_categories')->find($id);
        return view('admin.pages.product_category.detail', ['productCategory' => $productCategory]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
    public function update(UpdateProductCategoryRequest $request, $id)
    {
        $check = DB::table('product_categories')->update([
            "name" => $request->name,
            "status" => $request->status,
            "updated_at" => Carbon::now()
        ]);
        $messager = $check ? 'Update Success!!!' : 'Update Failure!!!';
        return redirect()->route('admin.product_category.index')->with('message', $messager);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $check = DB::table('product_categories')->delete($id);
        $message = $check ? 'Delete Success!!!' : 'Delete Failure!!!';
        return redirect()->route('admin.product_category.index')->with('message', $message);
    }
}
