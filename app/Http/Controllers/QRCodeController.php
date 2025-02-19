<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\View\View;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Response;

class QRCodeController extends Controller
{
    public function generateQrCode(Request $request)
    {
        $text = $request->input('qrCode'); 
        $size = $request->input('size', 150); 
    
        // Generate QR Code
        $qrCode = QrCode::size($size)->generate($text);
    
        return back()->with([
            'qrCode' => $qrCode,
            'text' => $text,
            'size' => $size,
        ]);
    }
}