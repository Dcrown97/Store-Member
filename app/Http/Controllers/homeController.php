<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function home(Request $dkfhdjd)
    {
        return view('homepage');
    }
    public function aboutUs(Request $dkfhdjd)
    {
        return view('aboutUs');
    }
    public function store()
    {
        $data = [
            ['productName' => 'facecream', 'productImage' => 'image1.jpg', 'productPrice' => '$10'],
            ['productName' => 'rexona', 'productImage' => 'image2.jpg', 'productPrice' => '$20'],
            ['productName' => 'dove', 'productImage' => 'image3.jpg', 'productPrice' => '$30'],
            ['productName' => 'closeup', 'productImage' => 'image4.jpg', 'productPrice' => '$40'],
            ['productName' => 'bodycream', 'productImage' => 'image5.jpg', 'productPrice' => '$50'],
            ['productName' => 'rollon', 'productImage' => 'image6.jpg', 'productPrice' => '$60'],
            ['productName' => 'deodorant', 'productImage' => 'image7.jpg', 'productPrice' => '$70'],
            ['productName' => 'bodyspray', 'productImage' => 'image8.jpg', 'productPrice' => '$80'],
            ['productName' => 'shoes', 'productImage' => 'image9.jpg', 'productPrice' => '$90'],
            ['productName' => 'shirt', 'productImage' => 'image10.jpg', 'productPrice' => '$10'],
            ['productName' => 'belt', 'productImage' => 'image11.png', 'productPrice' => '$11'],
            ['productName' => 'cap', 'productImage' => 'image12.png', 'productPrice' => '$12'],
            ['productName' => 'ball', 'productImage' => 'image13.png', 'productPrice' => '$13'],
            ['productName' => 'bulb', 'productImage' => 'image14.png', 'productPrice' => '$14'],
            ['productName' => 'wood', 'productImage' => 'image15.png', 'productPrice' => '$15'],
            ['productName' => 'food', 'productImage' => 'image16.png', 'productPrice' => '$16'],
            ['productName' => 'phone', 'productImage' => 'image17.png', 'productPrice' => '$17'],
            ['productName' => 'laptop', 'productImage' => 'image18.png', 'productPrice' => '$18'],
            ['productName' => 'desktop', 'productImage' => 'image19.png', 'productPrice' => '$19'],
            ['productName' => 'soap', 'productImage' => 'image20.png', 'productPrice' => '$20']
        ];

        return view('stores', compact('data'));
    }
}
