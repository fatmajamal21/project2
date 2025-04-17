<?php

namespace App\Http\Controllers\EasyFolioFolder;

use App\Http\Controllers\Controller;  // تأكد من استيراد هذا الكلاس
use Illuminate\Http\Request;

class EasyFolioController extends Controller
{
    public function home()
    {
        return "مرحبًا بك في الصفحة الرئيسية!";
    }
}
