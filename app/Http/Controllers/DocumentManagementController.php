<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Document;
use Illuminate\Http\Request;

class DocumentManagementController extends Controller
{
    public function index()
    {
        return view('document_management', ['documents' => Document::with(
            ['logs' => function ($query) {
                $query->latest('created_at')->take(1);
            }]
        )->where('author_id', auth()->user()->id)->get()]);
    }

    public function destroy(Document $document)
    {
        $document->delete();
        return redirect()->back()->with(["status" => "با موفقیت حذف شد"]);
    }
}
