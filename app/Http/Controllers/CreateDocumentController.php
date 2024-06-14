<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Document;
use App\Models\Log;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;
use function PHPUnit\Framework\isNull;


class CreateDocumentController extends Controller
{
    public function index()
    {
        return view('create_document');
    }

    public function create(Request $request)
    {

        $validated = $request->validate([
            'title' => 'required|string|min:3|max:100',
            'description' => 'max:1000',
            'university' => 'required|string|min:2|max:100',
            'department' => 'required|string|min:2|max:100',
            'professor' => 'required|string|min:3|max:100',
            'lesson' => 'required|string|min:3|max:100',
            "document" => 'required|mimes:pdf|max:20000',
        ]);

        $requestData = $request->all();
        $fileName = time().'_'.$request->file('document')->getClientOriginalName();

        $path = $request->file('document')->storeAs('documents', $fileName, 'public');
        $newDoc = Document::create([
            'download_link' => $path,
            'author_id' => auth()->user()->id,
        ]);

$fields =  [
            'title' => $requestData['title'],
            'university' => $requestData['university'],
            'department' => $requestData['department'],
            'professor' => $requestData['professor'],
            'lesson' => $requestData['lesson'],
            'editor_id' => $newDoc->author_id,
        ];

        if(!isNull($requestData['description'])) {
            $fields['description'] = $requestData['description'];
        }

        $newDoc->logs()->create($fields);

        return redirect()->back()->with('status','با موفقیت ایجاد شد ;)');
    }
}
