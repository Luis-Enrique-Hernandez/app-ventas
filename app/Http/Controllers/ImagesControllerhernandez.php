<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductImage;
use File;

class ImagesControllerhernandez extends Controller
{
    public function index($id)
    {
    	$producthernandez=Product::find($id);
    	$imageshernandez=$producthernandez->image;
    	return view('admin.products.images.index')->with(compact('producthernandez', 'imageshernandez'));
    }
    public function store(Request $request, $id)
    {
    	//guardar la img en nuestro proyecto
    	$file=$request->file('photo');
    	$path=public_path() . '/images/products';
    	$fileName=uniqid() . $file->getClientOriginalName();
    	$moved=$file->move($path, $fileName);

    	//Crear 1 registro en la tabla Product_images
    	if ($moved) {
    		$productImage=new ProductImage();
	    	$productImage->image=$fileName;
	    	//$productImage->featured=false;
	    	$productImage->product_id=$id;
	    	$productImage->save();  //inserta
	    	return back();// una ves inserta lo devuelve a la pagina principal
    	}
    	
    	
    }
    public function destroy(Request $request, $id)
    {
    	// eliminar el archivo
    	$productImage=ProductImage::find($request->image_id);
    	if (substr( $productImage->image, 0, 4)==="http" ) {
    	$deleted=true;
    } else {
    	$fullPath=public_path() . '/images/products/' . $productImage->image;
    	$deleted=File::delete($fullPath);
          }

    if ($deleted) {
    	$productImage->delete();
    }
    return back();
    }
}
