<x-card class="mb-4">
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-lg font-medium">
            {{$job->title}}
        </h2>
        <span class="text-slate-500">
            ${{number_format($job->salary)}}
        </span>
    </div>

    <div class="mb-4 flex justify-between items-center text-sm text-slate-500">
        <div class="flex gap-4">
            <div>Company name</div>
            <div>{{$job->location}}</div>
        </div>
        <div class="flex gap-1 text-xs">
            <x-tag>{{Str::ucfirst($job->experience)}}</x-tag>
            <x-tag>{{$job->category}}</x-tag>
        </div>
    </div>

    {{$slot}}
</x-card>