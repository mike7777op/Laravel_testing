<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function show(Request $request)
    {
        // order =>訂單
        // product =>商品
        // prefix => 前綴
        $id = $request->input('id');

        $products = [
            [
                "imageUrl" => asset('images/cat1.jpg')
            ],
            [
                "imageUrl" => asset('images/cat2.jpg')
            ]
        ];

        $product = $products[$id];

        var_dump($product);
        // $imageUrl = asset('images/cat1.jpg');
        // return view('product.show',[
        //     'imageUrl' => $imageUrl
        // ]);
        return view('product.show',[
            'product' => $product
        ]);
    }
}
