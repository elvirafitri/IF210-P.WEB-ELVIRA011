<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListController extends Controller
{
    public function getData()
    {
        $data = [
            ["id" => 1, "produk" => "Kaktus"],
            ["id" => 2, "produk" => "Mawar"],
            ["id" => 3, "produk" => "Rose"],
            ["id" => 4, "produk" => "Matahari"],
        ];
        return $data;
    }

    public function index()
    {
        $data = $this->getData();

        return view("list_product", compact("data"));
    }
}
