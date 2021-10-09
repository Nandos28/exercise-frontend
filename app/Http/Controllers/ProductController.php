<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

class ProductController extends Controller
{
    // /**
    //  * Handle the incoming request.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function __invoke(Request $request)
    // {
    //     $products = [
    //         ['id'=>'BD001', 'name'=>'SanDisk SSD 1 TB', 'price'=>'1500000', 'stock'=> '132', 'photo'=>'img/sandisk_ssd.jpg'],
    //         ['id'=>'BD002', 'name'=>'Logitech Mouse', 'price'=>'98500', 'stock'=> '9', 'photo'=>'img/logitech_mouse.png'],
    //         ['id'=>'BD003', 'name'=>'Casio Calculator', 'price'=>'120000', 'stock'=> '24', 'photo'=>'img/casio.jpg'],
    //         ['id'=>'BD004', 'name'=>'LG Monitor 24"', 'price'=>'1345000', 'stock'=> '9', 'photo'=>'img/lg_monitor.jpg'],
    //         ['id'=>'BD005', 'name'=>'Insignia Wireless Keyboard + Mouse', 'price'=>'375000', 'stock'=> '10', 'photo'=>'img/insignia_wireless.jpg'],
    //         ['id'=>'BD006', 'name'=>'Fifine K678 Microphone', 'price'=>'567000', 'stock'=> '30', 'photo'=>'img/fifine_microphone.jpg'],
    //         ];

    //         return view('product/list', ['produk'=>$products]);
    // }

    public function produk()
    {
        $products = [
            ['id'=>'BD001', 'name'=>'SanDisk SSD 1 TB', 'price'=>'1500000', 'stock'=> '132', 'photo'=>'img/sandisk_ssd.jpg'],
            ['id'=>'BD002', 'name'=>'Logitech Mouse', 'price'=>'98500', 'stock'=> '9', 'photo'=>'img/logitech_mouse.png'],
            ['id'=>'BD003', 'name'=>'Casio Calculator', 'price'=>'120000', 'stock'=> '24', 'photo'=>'img/casio.jpg'],
            ['id'=>'BD004', 'name'=>'LG Monitor 24"', 'price'=>'1345000', 'stock'=> '9', 'photo'=>'img/lg_monitor.jpg'],
            ['id'=>'BD005', 'name'=>'Insignia Wireless Keyboard + Mouse', 'price'=>'375000', 'stock'=> '10', 'photo'=>'img/insignia_wireless.jpg'],
            ['id'=>'BD006', 'name'=>'Fifine K678 Microphone', 'price'=>'567000', 'stock'=> '30', 'photo'=>'img/fifine_microphone.jpg'],
            ];

            return view('/product/list', compact('products'));
    }
}
