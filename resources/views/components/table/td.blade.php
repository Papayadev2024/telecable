@php
  $noPadding = isset($noPadding);
@endphp
<td class="{{$noPadding ? '' : 'px-2 py-1'}} border">
  {{ $slot }}
</td>
