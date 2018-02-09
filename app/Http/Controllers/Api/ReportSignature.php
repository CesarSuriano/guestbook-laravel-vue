<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Signature;

class ReportSignature extends Controller
{
    public function update(Signature $signature) {
        $signature->flag();
        
        return $signature;
    }
}
