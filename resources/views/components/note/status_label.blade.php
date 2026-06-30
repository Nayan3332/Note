@props(['status' => 'pending'])

@php
    // Separated with spaces instead of commas
    $classes = 'rounded-full px-3 py-1 text-xs font-medium uppercase tracking-wide text-slate-600 ';

    // Added a leading space to each condition so they concatenate cleanly
    if ($status === 'pending') {
        $classes .= 'bg-yellow-300 text-yellow-800';
    } elseif ($status === 'in_progress') {
        $classes .= 'bg-blue-300 text-blue-800';
    } elseif ($status === 'completed') {
        $classes .= 'bg-green-3~~~00 text-green-800';
    }
@endphp

<span {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</span>