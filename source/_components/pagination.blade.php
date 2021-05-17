<div class="py-12">
    <nav class="border-t border-gray-200 px-4 flex items-center justify-between sm:px-0">
        @if ($previous = $pagination->previous)
            <div class="-mt-px w-0 flex-1 flex">
                <a href="{{ $page->baseUrl }}{{ $pagination->first }}" class="border-t-2 border-transparent pt-4 pr-1 inline-flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300">
                    <!-- Heroicon name: solid/arrow-narrow-left -->
                    <svg class="mr-3 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd" />
                    </svg>
                    Previous
                </a>
            </div>
        @endif

        <div class="hidden md:-mt-px md:flex">
            @foreach ($pagination->pages as $pageNumber => $path)
                <a
                    href="{{ $page->baseUrl }}{{ $path }}"
                    class="{{ $pagination->currentPage === $pageNumber ? 'border-indigo-500 text-indigo-600' : 'border-transparent' }}  hover:underline hover:text-gray-700 dark:hover:text-gray-100 hover:border-gray-300 border-t-2 pt-4 px-4 inline-flex items-center text-sm font-medium"
                >
                    {{ $pageNumber }}
                </a>
            @endforeach
        </div>

        @if ($next = $pagination->next)
            <div class="-mt-px w-0 flex-1 flex justify-end">
                <a href="{{ $page->baseUrl }}{{ $next }}" class="border-t-2 border-transparent pt-4 pl-1 inline-flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300">
                    Next
                    <!-- Heroicon name: solid/arrow-narrow-right -->
                    <svg class="ml-3 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        @endif
{{-- <nav class="flex justify-between text-sm md:text-base">
@if ($previous = $pagination->previous)
<a href="{{ $page->baseUrl }}{{ $pagination->first }}">&lt;&lt;</a>
<a href="{{ $page->baseUrl }}{{ $previous }}">&lt;</a>
@else
&lt;&lt; &lt;
@endif
@foreach ($pagination->pages as $pageNumber => $path)
<a href="{{ $page->baseUrl }}{{ $path }}"
class="{{ $pagination->currentPage == $pageNumber ? 'selected' : '' }}">
{{ $pageNumber }}
</a>
@endforeach

@if ($next = $pagination->next)
<a href="{{ $page->baseUrl }}{{ $next }}">&gt;</a>
<a href="{{ $page->baseUrl }}{{ $pagination->last }}">&gt;&gt;</a>
@else
&gt; &gt;&gt;
@endif
</nav> --}}
    </nav>
</div>