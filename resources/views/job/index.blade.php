<x-layout>
  <x-breadcrumbs class="mb-4" :links="['Jobs' => route('jobs.index'),]" />

  <x-card class="mb-4 text-sm" x-data="">
    <form x-ref="filters" action="{{route('jobs.index')}}" method="GET" id="filtering-form">
      <div class="mb-4 grid grid-cols-2 gap-4">
        <div>
          <div class="mb-1 font-semibold">Search</div>
          <x-text-input name="search" value="{{request('search')}}" form-ref="filters"
            placeholder="Search for any text" />
        </div>
        <div>
          <div class="mb-1 font-semibold">Salary</div>
          <div class="flex gap-2">
            <x-text-input name="min_salary" value="{{request('min_salary')}}" form-ref="filters" placeholder="From" />
            <x-text-input name="max_salary" value="{{request('max_salary')}}" form-ref="filters" placeholder="To" />
          </div>
        </div>
        <x-radio-group name='experience' :options="\App\Models\Job::$experience" />
        <x-radio-group name='category' :options="\App\Models\Job::$category" />
      </div>
      <x-button class="w-full">Filter</x-button>
    </form>
  </x-card>

  @foreach ($jobs as $job)
  <x-job-card :job="$job">
    <div>
      <x-link-button :href="route('jobs.show', $job)">
        Show
      </x-link-button>
    </div>
  </x-job-card>
  @endforeach
</x-layout>