<?php

namespace App\Http\Controllers;

use App\Services\PdfService;
use App\Services\ExcelService;

class MainController extends Controller
{
   

    protected $services;

    public function __construct(PdfService $pdfService, ExcelService $excelService) {
        $this->services = [
            1 => $pdfService,
            2 => $excelService,
        ];
    }

    public function test($id) {
        return ($this->services[$id] ?? null) ? $this->services[$id]->getString() : null;
    }
}
