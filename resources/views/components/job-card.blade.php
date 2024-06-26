<x-card class="mb-4">
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-lg font-medium">
            {{ $job->title }}
        </h2>
        <span class="text-slate-500">
            ${{ number_format($job->salary) }}
        </span>
    </div>

    <div class="mb-4 flex justify-between items-center text-sm text-slate-500">
        <div class="flex gap-4 items-center">
            <div>{{ $job->employer->company_name }}</div>
            <div>{{ $job->location }}</div>
            @if ($job->deleted_at)
                <span class="text-xs text-red-500">Deleted</span>
            @endif
        </div>
        <div class="flex gap-1 text-xs">
            <x-tag>
                <a href="{{ route('jobs.index', ['experience' => $job->experience]) }}">
                    {{ Str::ucfirst($job->experience) }}
                </a>
            </x-tag>
            <x-tag>
                <a href="{{ route('jobs.index', ['category' => $job->category]) }}">
                    {{ $job->category }}
                </a>
            </x-tag>
        </div>
    </div>

    {{ $slot }}
</x-card>
