<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Document;
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
        )->where('author_id', auth()->user()->id)->get()]);
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

        if($request->hasFile('newDocument')) {
            $fileName = time().'_'.$request->file('newDocument')->getClientOriginalName();

            Storage::disk('public')->delete($document->download_link);

            $path = $request->file('newDocument')->storeAs('documents', $fileName, 'public');
            $document->download_link = $path;
            $document->save();
        }

        $document->logs()->create([
            'title' => $request['newTitle'],
            'description' => $request['newDescription'],
            'university' => $request['newUniversity'],
            'department' => $request['newDepartment'],
            'professor' => $request['newProfessor'],
            'lesson' => $request['newLesson'],
            'editor_id' => $document->author_id,
        ]);

        return redirect()->route('document.management')->with(["status" => "با موفقیت ویرایش شد"]);
    }

    public function logs(Document $document)
    {
        return view('document_logs', ['document' => $document->load(
            ['logs' => function ($query) {
                $query->latest();
            }]
        )]);
    }

    public function destroy(Document $document)
    {
        $document->delete();
        return redirect()->back()->with(["status" => "با موفقیت حذف شد"]);
    }
}
