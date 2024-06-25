<x-layout>
    <x-breadcrumbs :links="[
        'My Jobs' => route('my-jobs.index'),
        'Create' => '#',
    ]" class="mb-4" />
    <x-card class="mb-8">
        <form action="{{ route('my-jobs.store') }}" method="POST">
            @csrf
            <div class="mb-4 grid grid-cols-2 gap-4">
                <div>
                    <x-label for="title" required>
                        Job Title
                    </x-label>
                    <x-text-input name="title" />
                </div>

                <div>
                    <x-label for="location" required>
                        Location
                    </x-label>
                    <x-text-input name="location" />
                </div>

                <div class="col-span-2">
                    <x-label for="salary" required>
                        Salary
                    </x-label>
                    <x-text-input name="salary" type="number" />
                </div>

                <div class="col-span-2">
                    <x-label for="description" required>
                        Description
                    </x-label>
                    <x-text-input name="description" type="textarea" />
                </div>

                <div>
                    <x-label for="experience" required>
                        Experience
                    </x-label>
                    <x-radio-group name="experience" :value="old('experience')" :allOptions="false" :options="\App\Models\Job::$experience" />
                </div>
                <div>
                    <x-label for="category" required>
                        Category
                    </x-label>
                    <x-radio-group name="category" :value="old('category')" :allOptions="false" :options="\App\Models\Job::$category" />
                </div>

                <x-button class="col-span-2">Create Job</x-button>
            </div>
        </form>
    </x-card>
</x-layout>
