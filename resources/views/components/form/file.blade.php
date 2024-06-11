@php
  $required = isset($required);
  $type = isset($type) ? $type : 'text';
@endphp

<div class="max-w-sm mx-auto mb-2">
  @if (isset($label) && $label != null && $type != 'hidden')
    <label for="{{ $id ?? '' }}" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">
      {{ $label }}
      @if ($required)
        <b class="text-red-500">*</b>
      @endif
      @isset ($content)
        {{ $content }}
      @endisset
    </label>
  @endif
  <input type="file" name="{{ $id ?? '' }}" id="{{ $id ?? '' }}" data-id="{{ $dataId ?? '' }}"
    data-name="{{ $dataName ?? '' }}" data-type="{{ $dataType ?? '' }}"
    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
    aria-describedby="{{ $id ?? 'input_file' }}_help" {{ $required ? 'required' : '' }} {{ $attributes->merge(['class' => 'alert']) }}>
</div>
