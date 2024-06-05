@php
  $required = isset($required);
  $type = isset($type) ? $type : 'text';
@endphp

<div class="{{ $type != 'hidden' ? 'col-span-2' : 'hidden' }}">
  @if (isset($label) && $type != 'hidden')
    <label for="{{ $id ?? '' }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
      {{ $label }}
      @if ($required)
        <b class="text-red-500">*</b>
      @endif
    </label>
  @endif
  <input type="{{ $type ?? 'text' }}" name="{{ $id ?? '' }}" id="{{ $id ?? '' }}"
    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
    placeholder="{{ $placeholder ?? '' }}" {{ $required ? 'required' : '' }}>
</div>
