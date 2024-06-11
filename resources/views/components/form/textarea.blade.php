@php
  $required = isset($required);
@endphp

<div class="max-w-sm mx-auto mb-2">
  @if (isset($label) && $label != null)
    <label for="{{ $id ?? '' }}" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">
      {{ $label }}
      @if ($required)
        <b class="text-red-500">*</b>
      @endif
    </label>
  @endif
  <textarea id="{{ $id ?? '' }}" name="{{ $id ?? '' }}" data-id="{{ $dataId ?? '' }}"
    data-name="{{ $dataName ?? '' }}" data-type="{{ $dataType ?? '' }}" rows="{{ $rows ?? 4 }}"
    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
    placeholder="{{ $placeholder ?? '' }}" {{ $required ? 'required' : '' }} {{ $attributes->merge(['class' => 'alert']) }}>{{ $slot }}</textarea>
</div>
