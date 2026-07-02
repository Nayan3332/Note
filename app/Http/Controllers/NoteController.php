<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\StoreNoteRequest;
use App\Http\Requests\UpdateNoteRequest;
use App\Models\Note;
use App\NoteStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    { // filter by status
        $user = Auth::user();
        $status = $request->status;
        if (! in_array($status, array_column(NoteStatus::cases(), 'value'))) {
            $status = null;
        }
        $notes = $user->notes()
            ->when($status, fn ($query, $status) => $query->where('status', $status))
            ->get();

        return view('note.index', [
            'notes' => $notes,
            'statusCounts' => Note::StatusCounts($user),
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
        return view('note.show', [
            'note' => $note,
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
    public function destroy(Note $note)
    {
        $note->delete($note);
        return to_route('note.index')->with('success','Note deleted successfully.');
    }
}
