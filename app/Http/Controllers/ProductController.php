<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Services\FileService;
use InvalidArgumentException;
use App\Imports\ProductImport;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    use FileService;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Product::All();
        return view( 'admin.pages.products.product', compact('pages'));
    }

    public function importFiles(Request $req)
    {
        try {   
            if ($req->hasFile('fileImport')) {
                $this->importExcel(new ProductImport(), $req->file('fileImport'));
                return \Response::json('sucess');
            }else{
                throw new InvalidArgumentException('archive not found');
            }
        }catch (\Exception $e){
            return \Response::json($e->getMessage());
        }
    }

    public function getAllProduct()
    {
        return \Response::json(Product::All());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show( Product $product)
    {
        try {
            return \Response::json($product);
        }catch (\Exception $e){
            throw $e->getMessage();
            
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        try {
            $product->update($request->all());
            return \Response::json('update success');
        } catch (Exception $e) {
            return $e->getmessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        try {
            $product->delete();
            return \Response::json('delete success');
        } catch (Exception $e) {
            return $e->getmessage();   
        }
    }
}
