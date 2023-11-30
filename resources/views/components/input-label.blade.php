@props(['value'])

<label {{ $attributes->merge(['class' => 'block text-left font-medium text-sm text-gray-900']) }}>
    {{ $value ?? $slot }}
</label>
