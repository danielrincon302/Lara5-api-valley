<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use App\Product;
use App\User;
use App\NotifyProduct;
use Validator;


class RestApiDemoController extends Controller
{
    // REST APIs code place here

    public function list(){
        try{
            $products = Product::select('id','name','description','price')->get();
            
            return Response::json(['data' => $products],200);
        }catch(Exception $e){
            return Response::json(['errors' => 'Bad Request'], 400);
        }
    }  

    public function Vendedorlist(){
        try{
            $vendedores = User::select('id','name','email')->get();
            
            return Response::json(['data' => $vendedores],200);
        }catch(Exception $e){
            return Response::json(['errors' => 'Bad Request'], 400);
        }
    }    

public function create(Request $request){

    try{
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:5',
            'description' => 'required',
            'price' => 'required'
        ]);

        if ($validator->fails()) {
            return Response::json(['errors' => $validator->errors()], 400);
        }

        $product = new Product;

        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->save();
        
        return Response::json(['data' => 'added successfully'],200);

    }catch(Exception $e){
        return Response::json(['errors' => 'Bad Request'], 400);
    }

}

public function show($id){
    try{
        $product = Product::select('id','name','description','price')->where('f100_id_f200_id_fk1', $id)->get();
    
        return Response::json(['data' => $product],200);
    }catch(Exception $e){
        return Response::json(['errors' => 'Bad Request'], 400);
    }
}

public function Notifyshow($id){
    try{
        $productNotify = NotifyProduct::select('id','nota')->where('f1_id_f2_id_fk1', $id)->get();
    
        return Response::json(['data' => $productNotify],200);
    }catch(Exception $e){
        return Response::json(['errors' => 'Bad Request'], 400);
    }
}

public function NotifyUnique($id){
    try{
        $productNotify = NotifyProduct::select('id','nota')->where('id', $id)->get();
    
        return Response::json(['data' => $productNotify],200);
    }catch(Exception $e){
        return Response::json(['errors' => 'Bad Request'], 400);
    }
}

public function updateNotify($id, Request $request){
    try{
            
        $validator = Validator::make($request->all(), [
            'nota' => 'required|min:5'
        ]);

        if ($validator->fails()) {
            return Response::json(['errors' => $validator->errors()],400);
        }

        $productN = NotifyProduct::where('id', $id)->first();

        $productN->nota = $request->nota;
        $productN->update();
        
        return Response::json(['data' => 'updated successfully'],200);
    }catch(Exception $e){
        return Response::json(['errors' => 'Bad Request'], 400);
    }

}

public function createNotify(Request $request){
    try{
            
        $validator = Validator::make($request->all(), [
            'nota' => 'required|min:5'
        ]);

        if ($validator->fails()) {
            return Response::json(['errors' => $validator->errors()],400);
        }

        $productN = new NotifyProduct;

        $productN->nota = $request->nota;
        $productN->f1_id_f2_id_fk1 = $request->id;
        $productN->save();
        
        return Response::json(['data' => 'updated successfully'],200);
    }catch(Exception $e){
        return Response::json(['errors' => 'Bad Request'], 400);
    }

}
public function update($id, Request $request){
    try{
            
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:5',
            'description' => 'required',
            'price' => 'required'
        ]);

        if ($validator->fails()) {
            return Response::json(['errors' => $validator->errors()],400);
        }

        $product = Product::where('id', $id)->first();

        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->update();
        
        return Response::json(['data' => 'updated successfully'],200);
    }catch(Exception $e){
        return Response::json(['errors' => 'Bad Request'], 400);
    }

}

public function delete($id){
    try{
        $productN = NotifyProduct::where('id', $id)->delete();
        
        return Response::json(['data' => 'deleted successfully'],200);
    }catch(Exception $e){
        return Response::json(['errors' => 'Bad Request'], 400);
    }
}
}
