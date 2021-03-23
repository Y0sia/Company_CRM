<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddNote;
use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NoteController extends Controller
{
    /**
     *
     * @param AddNote $request
     */
    public function create(AddNote $request)
    {
        dd($request->input());
        $note = Note::create([
            'user_id' => Auth::id(),
            'company_field' => $request->note_radio,
            'text' => $request->text,
        ]);
    }
}
