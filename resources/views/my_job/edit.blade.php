<x-layout>
    <x-breadcrumbs :links="[
        'My Jobs' => route('my-jobs.index'),
        'Edit Job' => '#',
    ]" class="mb-4" />
    <x-card class="mb-8">
        <form action="{{ route('my-jobs.update', $job) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4 grid grid-cols-2 gap-4">
                <div>
                    <x-label for="title" required>
                        Job Title
                    </x-label>
                    <x-text-input name="title" :value="$job->title" />
                </div>

                <div>
                    <x-label for="location" required>
                        Location
                    </x-label>
                    <x-text-input name="location" :value="$job->location" />
                </div>

                <div class="col-span-2">
                    <x-label for="salary" required>
                        Salary
                    </x-label>
                    <x-text-input name="salary" type="number" :value="$job->salary" />
                </div>

                <div class="col-span-2">
                    <x-label for="description" required>
                        Description
                    </x-label>
                    <x-text-input name="description" type="textarea" :value="$job->description" />
                </div>

                <div>
                    <x-label for="experience" required>
                        Experience
                    </x-label>
                    <x-radio-group name="experience" :value="$job->experience" :allOptions="false" :options="\App\Models\Job::$experience" />
                </div>
                <div>
                    <x-label for="category" required>
                        Category
                    </x-label>
                    <x-radio-group name="category" :value="$job->category" :allOptions="false" :options="\App\Models\Job::$category" />
                </div>

                <x-button class="col-span-2">Edit Job</x-button>
            </div>
        </form>
    </x-card>
</x-layout>
