<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Document;
use App\Models\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PhpParser\Comment\Doc;

class DocumentManagementController extends Controller
{
    public function index()
    {
        return view('document_management', ['documents' => Document::with(
            ['logs' => function ($query) {
                $query->latest('created_at')->take(1);
            }]
        )->where('author_id', auth()->user()->id)->simplePaginate(10)]);
    }

    public function edit(Document $document)
    {
        return view('document_edit', ['document' => $document->load(
            ['logs' => function ($query) {
                $query->latest('created_at')->take(1);
            }]
        )]);
    }

    public function update(Request $request, Document $document)
    {
        $validated = $request->validate([
            'newTitle' => 'required|string|min:3|max:100',
            'newDescription' => 'max:1000',
            'newUniversity' => 'required|string|min:2|max:100',
            'newDepartment' => 'required|string|min:2|max:100',
            'newProfessor' => 'required|string|min:3|max:100',
            'newLesson' => 'required|string|min:3|max:100',
            "newDocument" => 'mimes:pdf|max:20000',
        ]);

        if ($request->hasFile('newDocument')) {
            $fileName = time() . '_' . $request->file('newDocument')->getClientOriginalName();

            Storage::disk('public')->delete($document->download_link);

            $path = $request->file('newDocument')->storeAs('documents', $fileName, 'public');
            $document->download_link = $path;
            $document->save();
        }

        $fields = [
            'title' => $request['newTitle'],
            'university' => $request['newUniversity'],
            'department' => $request['newDepartment'],
            'professor' => $request['newProfessor'],
            'lesson' => $request['newLesson'],
            'editor_id' => $document->author_id,
        ];

        if (!empty($request['newDescription'])) {
            $fields['description'] = $request['newDescription'];
        }

        $document->logs()->create($fields);

        return redirect()->route('document.management')->with(["status" => "با موفقیت ویرایش شد"]);
    }

    public function logs(Document $document)
    {
        return view('document_logs', [
            'logs' => Log::where('document_id', $document->id)->latest()->simplePaginate(10),
        ]);
    }

    public function destroy(Document $document)
    {
        $document->delete();
        return redirect()->back()->with(["status" => "با موفقیت حذف شد"]);
    }
}
