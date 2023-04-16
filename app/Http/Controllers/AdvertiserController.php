<?php

namespace App\Http\Controllers;

use App\Models\Advertiser;
use Illuminate\Http\Request;

class AdvertiserController extends Controller
{
    public function index()
    {
        return view('advertisers.index', [
            'advertisers' => Advertiser::latest()->get(),
        ]);
    }
}
