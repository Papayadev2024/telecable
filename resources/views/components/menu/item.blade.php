<li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(2), [$id ?? ''])) {{ 'bg-slate-900' }} @endif">
  <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if (in_array(Request::segment(2), [$id ?? ''])) {{ 'hover:text-slate-200' }} @endif"
    href="{{ $href ?? '' }}">
    <div class="flex items-center">
      <i class="shrink-0 {{$icon ?? ''}} w-6 h-6 text-lg text-center"></i>
      <span
        class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">{{ $slot }}</span>
    </div>
  </a>
</li>
