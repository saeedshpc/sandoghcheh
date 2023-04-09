@props(['name', 'label' => 'برچسب', 'description' => 'توضیحات', 'seperator' => true ])

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
    <div class="w-full lg:w-auto">
        <input
            id="{{$name}}"
            name="{{$name}}"
            class="w-full lg:w-96 dark:text-white bg-white focus:outline-none text-sm p-4 px-4 rounded-lg border border-gray-200 focus:border-[#0b9b82] focus:outline focus:outline-green-100 dark:bg-slate-700"
            {{$attributes(['value' => old($name)])}}
        />
    </div>
</div>
@if($seperator)
    <div
        class="pb-1 border-b border-gray-100 mx-10 dark:border-gray-700"
    ></div>
@endif
