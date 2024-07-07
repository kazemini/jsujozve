<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Document;
use App\Models\DocumentForum;
use App\Models\Forum;
use Illuminate\Http\Request;

class DocumentForumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function addDocument(Request $request, Forum $forum)
    {
        $searchTerm = $request->search ?? '';
        $documents = Document::with(['logs' => function ($query) {
            $query->latest('created_at')->take(1);
        }])->whereDoesntHave('forums', function ($query2) use ($forum) {
            $query2->where('forum_id', $forum->id);
        })->whereHas('logs', function ($query) use ($searchTerm) {
            if (!empty($searchTerm)) {
                $query->where(function ($q) use ($searchTerm) {
                    $q->where('title', 'like', '%' . $searchTerm . '%')
                        ->orWhere('description', 'like', '%' . $searchTerm . '%')
                        ->orWhere('university', 'like', '%' . $searchTerm . '%')
                        ->orWhere('department', 'like', '%' . $searchTerm . '%')
                        ->orWhere('professor', 'like', '%' . $searchTerm . '%')
                        ->orWhere('lesson', 'like', '%' . $searchTerm . '%');
                });
            }
        })->simplePaginate(10);

        return view('forum_document_add', ['documents' => $documents,'forum'=>$forum]);
    }

    public function removeDocument(Request $request, Forum $forum)
    {
        $searchTerm = $request->search ?? '';
        $documents = Document::with(['logs' => function ($query) {
            $query->latest('created_at')->take(1);
        }])->whereHas('forums', function ($query2) use ($forum) {
            $query2->where('forum_id', $forum->id);
        })->whereHas('logs', function ($query) use ($searchTerm) {
            if (!empty($searchTerm)) {
                $query->where(function ($q) use ($searchTerm) {
                    $q->where('title', 'like', '%' . $searchTerm . '%')
                        ->orWhere('description', 'like', '%' . $searchTerm . '%')
                        ->orWhere('university', 'like', '%' . $searchTerm . '%')
                        ->orWhere('department', 'like', '%' . $searchTerm . '%')
                        ->orWhere('professor', 'like', '%' . $searchTerm . '%')
                        ->orWhere('lesson', 'like', '%' . $searchTerm . '%');
                });
            }
        })->simplePaginate(10);

        return view('forum_document_remove', ['documents' => $documents,'forum'=>$forum]);
    }

    public function attach(Forum $forum, Document $document)
    {
        DocumentForum::create([
            'forum_id' => $forum->id,
            'document_id' => $document->id,
        ]);
        return redirect()->route('document-forum.add-document', ['forum' => $forum])->with(["status" => "با موفقیت افزوده شد"]);
    }

    public function detach(Forum $forum, Document $document)
    {
        $documentForum = DocumentForum::where('forum_id', $forum->id)->where('document_id', $document->id)->get();
        $documentForum->first()->delete();

        return redirect()->route('document-forum.remove-document', ['forum' => $forum])->with(["status" => "با موفقیت حذف شد"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
