<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\StoreNoteRequest;
use App\Http\Requests\UpdateNoteRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Note;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notes=Auth::user()->notes()->get();
        return view('note.index',[
            'notes'=>$notes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): void
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNoteRequest $request): void
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Note $note)
    {
        return view('note.show',[
            'note'=>$note
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Note $note): void
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNoteRequest $request, Note $note): void
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $note): void
    {
        //
    }
}
