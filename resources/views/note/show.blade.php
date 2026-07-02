<x-layout>
    <div @class(['mx-auto', 'max-w-7xl', 'px-4', 'py-12', 'sm:px-6', 'lg:px-8', 'overflow-hidden'])>
        
        <div @class(['mb-8', 'flex', 'flex-col', 'gap-4', 'md:flex-row', 'md:items-center', 'md:justify-between'])>
            <div>
                <p @class(['text-xs', 'font-semibold', 'uppercase', 'tracking-[0.26em]', 'text-sky-600'])>Notebook</p>
                <h1 @class(['mt-3', 'text-4xl', 'font-bold', 'tracking-tight', 'text-slate-900'])>{{ $note->title }}</h1>
                <p @class(['mt-3', 'max-w-2xl', 'text-sm', 'leading-6', 'text-slate-500'])>A clean summary view of your note with status, description, and quick actions.</p>
                <div class="mt-3 flex flex-wrap items-center gap-3">
                    <x-note.status_label status="{{ $note->status }}">
                        {{ $note->status }}
                    </x-note.status_label>
                    <p @class(['rounded-full', 'bg-slate-100', 'px-3', 'py-1', 'text-xs', 'font-medium', 'uppercase', 'text-slate-600'])>
                        {{ $note->created_at->diffForHumans() }}
                    </p>
                </div>
                
            </div>

            <div @class(['flex', 'flex-wrap', 'items-center', 'justify-end', 'gap-3'])>
                <a href="{{ route('note.index') }}" @class(['rounded-full','flex', 'items-center', 'gap-2', 'border', 'border-slate-200', 'bg-white', 'px-4', 'py-2', 'text-sm', 'font-medium', 'text-slate-700', 'transition', 'duration-200', 'hover:bg-slate-50'])>
                    <x-icons.arrow_back />
                    Back to notes
                </a>
                <a href="{{ route('note.edit', $note) }}" @class(['rounded-full', 'flex', 'items-center', 'gap-2', 'bg-sky-100', 'px-4', 'py-2', 'text-sm', 'font-medium', 'text-white', 'transition', 'duration-200', 'hover:bg-sky-300'])>
                    Edit
                </a>

                <form action="{{ route('note.destroy', $note) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this note?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" @class(['rounded-full', 'flex', 'items-center', 'gap-2', 'border', 'border-red-200', 'bg-red-50', 'px-4', 'py-2', 'text-sm', 'font-medium', 'text-red-600', 'transition', 'duration-200', 'hover:bg-red-100'])>
                        Delete
                    </button>
                </form>
            </div>
        </div> <div @class(['grid', 'gap-6', 'lg:grid-cols-[1.5fr_0.8fr]'])>
            <section @class(['min-w-0', 'rounded-3xl', 'border', 'border-slate-200', 'bg-white', 'p-8', 'shadow-sm'])>
                <h2 @class(['text-xl', 'font-semibold', 'text-slate-900'])>Description</h2>
                <p @class(['mt-4', 'text-base', 'leading-7', 'text-slate-600', 'break-words'])>{{ $note->description }}</p>
            </section>

            <aside @class(['min-w-0', 'space-y-4'])>
                <div @class(['rounded-3xl', 'border', 'border-slate-200', 'bg-slate-50', 'p-6', 'shadow-sm'])>
                    <p @class(['text-sm', 'font-semibold', 'text-slate-500'])>Created</p>
                    <p @class(['mt-2', 'text-lg', 'font-medium', 'text-slate-900'])>{{ $note->created_at->format('F j, Y') }}</p>
                    <p @class(['mt-1', 'text-sm', 'text-slate-500'])>{{ $note->created_at->diffForHumans() }}</p>
                </div>

                <div @class(['rounded-3xl', 'border', 'border-slate-200', 'bg-slate-50', 'p-6', 'shadow-sm'])>
                    <p @class(['text-sm', 'font-semibold', 'text-slate-500'])>Last updated</p>
                    <p @class(['mt-2', 'text-lg', 'font-medium', 'text-slate-900'])>{{ $note->updated_at->format('F j, Y') }}</p>
                    <p @class(['mt-1', 'text-sm', 'text-slate-500'])>{{ $note->updated_at->diffForHumans() }}</p>
                </div>
            </aside>
        </div>

    </div>
</x-layout>