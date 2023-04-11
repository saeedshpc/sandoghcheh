@props(['name', 'label' => 'برچسب', 'description' => 'توضیحات', 'seperator' => true ])

@php
    $classes = "w-full lg:w-96 dark:text-white
    focus:outline-none text-sm p-4 px-4 rounded-lg border
     focus:outline dark:bg-slate-700 ";

    $withErrorStyles = "border-red-200 bg-red-200 bg-opacity-20 focus:border-red-400 focus:outline-red-100";
    $withoutErrorStyle = "bg-white border-gray-200 focus:border-[#0b9b82] focus:outline-green-100";


@endphp

<div
    class="flex flex-col gap-4 items-start justify-between lg:flex-row lg:items-start lg:gap-0"
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
                  <textarea
                      name="{{$name}}"
                      id="{{$name}}"
                      class="{{$classes}} @error($name) {{$withErrorStyles}} @else {{$withoutErrorStyle}} @enderror"
                      {{ $attributes }}
                  >{{$slot ?? old($name)}}</textarea>
        <x-form.error name="{{$name}}" />
    </div>
</div>
@if($seperator)
    <div
        class="pb-1 border-b border-gray-100 mx-10 dark:border-gray-700"
    ></div>
@endif
