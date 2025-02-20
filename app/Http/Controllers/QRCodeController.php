<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QRCodeController extends Controller
{
    public function index()
    {
        $qrCode = QrCode::size(200)->margin(1)->generate('https://example.com');
        return view('home', compact('qrCode'));
    }
}