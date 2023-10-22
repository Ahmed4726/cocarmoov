<?php

namespace App\Http\Controllers;


class PDFController extends Controller
{
    public function generateCGVPDF()
    {
        $filePath = public_path('assets/CGV-CCarmoov-vf.pdf');
    
        if (file_exists($filePath)) {
            return response()->file($filePath);
        } else {
            return abort(404);
        }
    }
    

    public function generateCGUPDF()
    {
        $filePath = public_path('assets/CGU-CoCarmoov-VF.pdf');
    
        if (file_exists($filePath)) {
            return response()->file($filePath);
        } else {
            return abort(404);
        }
    }


}
