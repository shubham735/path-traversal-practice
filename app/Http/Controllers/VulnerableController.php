<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class VulnerableController extends Controller
{
    public function readFile(Request $request)
    {
        $filename = $request->input('file');
        $filepath = storage_path('app/public/files/' . $filename);
        
        Log::info("Attempting to read file: " . $filepath);
        
        if (file_exists($filepath)) {
            Log::info("File exists, returning contents");
            return response()->file($filepath);
        } else {
            Log::info("File not found");
            return "File not found. Attempted path: " . $filepath;
        }
    }
}