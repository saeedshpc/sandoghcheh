@props(['label' => 'برچسب', 'description' => 'توضیحات', 'seperator' => true])
<div
    class="flex flex-col gap-4 items-start justify-between lg:flex-row lg:items-center lg:gap-0"
>
    <div>
        <h3 class="text-md font-bold mb-2 dark:text-gray-100">
            {{$label}}
        </h3>
        <p class="text-gray-500 text-sm dark:text-gray-300">
            {{$description}}
        </p>
    </div>
    <div class="w-full lg:w-auto lg:basis-1/2 text-right">
        <p {{$attributes(['class' => 'pr-2 border-r-2 border-purple-500'])}}>
            {{ $slot }}
        </p>
    </div>
</div>

@if($seperator)
<div
    class="pb-1 border-b border-gray-100 mx-10 dark:border-gray-700"
></div>
@endif
