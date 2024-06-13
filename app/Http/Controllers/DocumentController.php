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

    public function like(Document $document)
    {
        $like = Like::where('user_id', auth()->user()->id)->where('document_id', $document->id)->get();

        if ($like->isEmpty()) {
            Like::create([
                'user_id' => auth()->user()->id,
                'document_id' => $document->id,
            ]);
        } else {
            $like->first()->delete();
        }

        return redirect()->back();
    }
}
