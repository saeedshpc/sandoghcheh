@if ($paginator->hasPages())
    <div
        class="w-full flex items-center justify-between text-gray-600 dark:text-white py-6 px-4 text-sm mb-10"
    >
        @if ($paginator->onFirstPage())
            <span
                class="text-gray-400 p-2 px-4 rounded-lg bg-white border dark:bg-slate-700 dark:text-white dark:border-gray-600 duration-200 text-xs"
            >صفحه قبل</span
            >
        @else
            <a
                href="{{ $paginator->previousPageUrl() }}"
                class="p-2 px-4 rounded-lg bg-white border hover:bg-gray-100 dark:bg-slate-700 dark:text-white dark:border-gray-600 dark:hover:bg-gray-600 duration-200 text-xs"
            >صفحه قبل</a
            >
        @endif

        <div class="hidden md:flex gap-4">


            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <span aria-disabled="true">
                        <span class="">{{ $element }}</span>
                    </span>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <span href="#" class="text-[#32bba4]">{{ $page }}</span>
                        @else
                            <a href="{{ $url }}" class="hover:text-[#32bba4]">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach
        </div>

        @if ($paginator->hasMorePages())
            <a
                href="{{ $paginator->nextPageUrl() }}"
                class="p-2 px-4 rounded-lg bg-white dark:bg-slate-700 dark:text-white dark:border-gray-600 dark:hover:bg-gray-600 border hover:bg-gray-100 duration-200 text-xs"
            >صفحه بعد</a
        @else
            <span
                class="text-gray-400 p-2 px-4 rounded-lg bg-white border dark:bg-slate-700 dark:text-white dark:border-gray-600 duration-200 text-xs"
            >صفحه بعد</span
        @endif

    >
    </div>
@endif
