<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Document;
use App\Models\Log;
use Illuminate\Http\Request;


class CreateDocumentController extends Controller
{
    public function index()
    {
        return view('create_document');
    }

    public function create(Request $request)
    {
        $requestData = $request->all();
        $fileName = $request->file('document')->getClientOriginalName() . '_' . time();

        $path = $request->file('document')->storeAs('documents', $fileName, 'public');
        $newDoc = Document::create([
            'download_link' => $path,
            'author_id' => auth()->user()->id,
        ]);
        $newDoc->logs()->create([
            'title' => $requestData['title'],
            'description' => $requestData['description'],
            'university' => $requestData['university'],
            'department' => $requestData['department'],
            'professor' => $requestData['professor'],
            'lesson' => $requestData['lesson'],
            'editor_id' => $newDoc->author_id,
        ]);

        return redirect()->back()->with('status','با موفقیت ایجاد شد ;)');
    }
}
