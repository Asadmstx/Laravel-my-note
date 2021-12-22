<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\NoteRequest;
use App\Models\Note;

class AddnoteController extends Controller{
    public function submit(NoteRequest $req) {
        $note = new Note();
        $note->name = $req->input('name');
        $note->title = $req->input('title');
        $note->note = $req->input('note');
        $note->save();

        return redirect()->route('list')->with('success', 'Note has been added!');
    }

    public function getData() {
        $note = Note::all();
        return view('list', ['data' => $note->sortByDesc('id')]);
    }

    public function editData($id) {
        $note = new Note;
        return view('edit', ['data' => $note->find($id)]);
    }

    public function editDataSubmit($id, NoteRequest $req) {
        $note = Note::find($id);
        $note->name = $req->input('name');
        $note->title = $req->input('title');
        $note->note = $req->input('note');
        $note->save();

        return redirect()->route('list')->with('success', 'Note has been updated!');
    }

    public function deleteData($id) {
        $note = Note::find($id)->delete();
        return redirect()->route('list')->with('success', 'Note has been deleted!');
    }

}
