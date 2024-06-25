<div>
    @if ($allOptions)
        <label for="{{ $name }}" class="mb-1 flex items-center">
            <input type="radio" name="{{ $name }}" value="" @checked(!request($name)) />
            <span class="ml-2">All</span>
        </label>
    @endif

    @foreach ($options as $option)
        <label for="{{ $name }}" class="mb-1 flex items-center">
            <input type="radio" name="{{ $name }}" value="{{ $option }}" @checked($option == ($value ?? request($name))) />
            <span class="ml-2">{{ ucfirst($option) }}</span>
        </label>
    @endforeach

    @error($name)
        <p class="mt-1 text-xs text-red-500">
            {{ $message }}
        </p>
    @enderror
</div>
