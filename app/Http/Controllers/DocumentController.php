<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function index()
    {
        return view('document_explore', ['documents' => Document::with(
            ['logs' => function ($query) {
                $query->latest('created_at')->take(1);
            }]
        )->get()
        ]);
    }
}
