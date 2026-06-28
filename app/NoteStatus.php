<?php

declare(strict_types=1);

namespace App;

enum NoteStatus: string
{
    case Pending = 'pending';
    case In_Progress = 'in_progress';
    case Completed = 'completed';
}
