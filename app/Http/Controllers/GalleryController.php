<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $images = [
            'img1.png',
            'img2.png',
            'img3.png',
            'img4.png',
            'img5.png',
            'img6.png',
            'img7.png',
            'img8.png',
            'img9.png',
            'img10.png',
            'img11.png',
            'img12.png',
        ];

        $images2 = [
            'img13.png',
            'img14.png',
            'img15.png',
            'img16.png',
            'img17.png',
            'img18.png',
            'img19.png',
            'img20.png',
            'img21.png',
            'img22.png',
            'img23.png',
            'img24.png',
        ];
        return view('gallery', compact('images', 'images2'));
    }
}
