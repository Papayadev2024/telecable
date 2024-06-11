@php
  $required = isset($required);
  $type = isset($type) ? $type : 'text';
@endphp

<div class="max-w-sm mx-auto mb-2">
  @if (isset($label) && $type != 'hidden')
    <label for="{{ $id ?? '' }}" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">
      {{ $label }}
      @if ($required)
        <b class="text-red-500">*</b>
      @endif
    </label>
  @endif
  <div class="flex">
    <span
      class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
      <i class="{{ $icon ?? 'fa fa-file' }}"></i>
    </span>
    <input type="{{ $type ?? 'text' }}" name="{{ $id ?? '' }}" id="{{ $id ?? '' }}" data-id="{{ $dataId ?? '' }}"
      data-name="{{ $dataName ?? '' }}" data-type="{{ $dataType ?? '' }}"
      class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm px-2 py-1  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
      placeholder="{{ $placeholder ?? '' }}" {{ $required ? 'required' : '' }} value="{{ $value ?? '' }}" {{ $attributes->merge(['class' => 'alert']) }}> 
  </div>
</div>
