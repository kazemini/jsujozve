<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Document;
use App\Models\Like;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function index()
    {
        return view('document_explore', ['documents' => Document::with(
            ['logs' => function ($query) {
                $query->latest('created_at')->take(1);
            }, 'liked']
        )->withCount('likes')->simplePaginate(10)
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

    public function bookmarks()
    {
        return view('bookmarks', [
                'documents' => Document::whereHas(
                    'likes', function ($query) {
                    $query->where('user_id', auth()->user()->id);
                })->with([
                    'logs' => function ($query) {
                        $query->latest('created_at')->take(1);
                    }
                ])->simplePaginate(10)
            ]
        );
    }

    public function edit(Document $document)
    {
        return view('document_public_edit', ['document' => $document->load(
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
        ]);

        $fields = [
            'title' => $request['newTitle'],
            'university' => $request['newUniversity'],
            'department' => $request['newDepartment'],
            'professor' => $request['newProfessor'],
            'lesson' => $request['newLesson'],
            'editor_id' => auth()->user()->id,
        ];

        if (!empty($request['newDescription'])) {
            $fields['description'] = $request['newDescription'];
        }

        $document->logs()->create([$fields]);

        return redirect()->route('document.explore')->with(["status" => "با موفقیت ویرایش شد"]);
    }
}
