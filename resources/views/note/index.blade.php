<x-layout>
    <div @class(['mx-auto', 'max-w-5xl', 'px-4', 'py-8', 'sm:px-6', 'lg:px-8'])>
        <header @class(['mb-8', 'flex', 'items-center', 'justify-between'])>
            <div>
                <p @class(['text-sm', 'font-semibold', 'uppercase', 'tracking-[0.2em]', 'text-slate-500'])>Notebook</p>
                <h1 @class(['text-3xl', 'font-bold', 'text-slate-900'])>Your Notes</h1>
            </div>
            <a href="#create" @class(['rounded-full', 'bg-sky-600', 'px-4', 'py-2', 'text-sm', 'font-medium', 'text-white', 'shadow-sm', 'transition', 'duration-200', 'hover:bg-sky-700'])>
                + New Note
            </a>
        </header>
        <div @class(['mb-6','flex','flex-wrap','items-center','gap-2'])>
            <a href="{{ route('note.index') }}" @class(['rounded-full','px-3','py-1','text-sm','font-medium','uppercase','tracking-wide','transition','duration-200',
                request('status') === null
                    ? 'bg-green-600 text-white shadow-sm hover:bg-green-700'
                    : 'bg-slate-300 text-slate-700 hover:bg-slate-200 hover:text-slate-900',
            ])>
                All
            </a>
            @foreach (App\NoteStatus::cases() as $status)
                <a href="{{ route('note.index',['status' => $status->value]) }}" @class(['rounded-full','px-3','py-1','text-sm','font-semibold','uppercase','tracking-wide','transition','duration-200',
                    request('status') === $status->value
                        ? 'bg-sky-400 text-white shadow-sm hover:bg-sky-600'
                        : 'bg-slate-100 text-slate-700 hover:bg-slate-200 hover:text-slate-900',
                ])>
                    {{ $status->name }}<span @class(['ml-1', 'rounded-full', 'bg-slate-200', 'px-2', 'py-0.5', 'text-xs', 'font-semibold', 'text-slate-600'])>
                        {{ $statusCounts->get($status->value) }}
                    </span>
                </a>
                
            @endforeach
            
        </div>
        <div @class(['grid', 'gap-6', 'md:grid-cols-2', 'xl:grid-cols-3'])>
            @forelse($notes as $note)
                <article @class(['rounded-2xl', 'border', 'border-slate-200', 'bg-white', 'p-6', 'shadow-sm', 'transition', 'hover:-translate-y-1', 'hover:shadow-md', 'flex', 'flex-col'])>
                    <div @class(['mb-4', 'flex', 'items-center', 'justify-between'])>
                        <h2 @class(['text-xl', 'font-semibold', 'text-slate-900'])>{{ $note->title }}</h2>
                        <x-note.status_label status="{{ $note->status }}">
                            {{ $note->status }}
                        </x-note.status_label>

                    </div>
                    <div @class(['flex-1'])>
                        <p @class(['mb-4', 'line-clamp-3', 'text-sm', 'leading-6', 'text-slate-600'])>{{ $note->description }}</p>
                        <a href="{{ route('note.show',$note) }}" @class(['text-sm', 'font-semibold', 'text-sky-600', 'transition', 'duration-200', 'hover:text-sky-800'])>
                            View note →
                        </a>
                    </div>

                    <p @class(['mt-6', 'self-start', 'rounded-full', 'bg-slate-100', 'px-3', 'py-1', 'text-xs', 'font-medium', 'uppercase', 'tracking-wide', 'text-slate-600'])>
                        {{ $note->created_at->diffForHumans() }}
                    </p>

                </article>
            @empty
                <div @class(['rounded-2xl', 'border', 'border-dashed', 'border-slate-300', 'bg-slate-50', 'p-8', 'text-center', 'md:col-span-2', 'xl:col-span-3'])>
                    <p @class(['text-lg', 'font-medium', 'text-slate-700'])>You have no notes yet.</p>
                    <p @class(['mt-2', 'text-sm', 'text-slate-500'])>Start by creating a new note to capture your ideas.</p>
                </div>
            @endforelse
        </div>
    </div>
</x-layout>
