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

  <select name="{{ $id ?? '' }}" id="{{ $id ?? '' }}" data-id="{{ $dataId ?? '' }}"
    data-name="{{ $dataName ?? '' }}" data-type="{{ $dataType ?? '' }}"
    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
    {{ $required ? 'required' : '' }} style="width: 100%" {{ $attributes->merge(['class' => 'alert']) }}>
    {{ $slot }}
  </select>
</div>
