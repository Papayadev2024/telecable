@php
  $noPadding = isset($noPadding);
@endphp

<th scope="col"
  class="{{ $noPadding ? '' : 'px-2 py-1' }} font-medium text-gray-900 whitespace-nowrap dark:text-white border">
  {{ $slot }}
</th>
