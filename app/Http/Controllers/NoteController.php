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
        $note = Note::create([
            'user_id' => Auth::id(),
            'company_id' => $request->company_id,
            'company_field' => $request->note_radio,
            'text' => $request->text,
        ]);

        return redirect()->back()->with("success", "Заметка успешно добавлена!");
    }
}
