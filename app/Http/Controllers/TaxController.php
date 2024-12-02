<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaxController extends Controller
{
    public function index()
    {
        return view('pages.tax'); // 假設對應的視圖檔案是 resources/views/tax_service/index.blade.php
    }
}
