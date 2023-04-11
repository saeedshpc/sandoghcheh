@props(['name', 'label' => 'برچسب', 'description' => 'توضیحات', 'seperator' => true ])

<div
    class="flex flex-col gap-4 items-start justify-between md:flex-row md:items-center md:gap-0"
>
    <div>
        <h3 class="text-md font-bold mb-2 dark:text-gray-100">
            {{$label}}
        </h3>
        <p class="text-gray-500 text-sm dark:text-gray-300">
            {{$description}}
        </p>
    </div>
    <div>
        <label class="block">
            <span class="sr-only">تصویر لوگو را انتخاب کنید</span>
            <input
                id="{{$name}}"
                name="{{$name}}"
                type="file"
                class="block w-full text-sm text-slate-500 dark:text-gray-300 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-violet-50 file:text-violet-700 hover:file:bg-violet-100"
                {{ $attributes }}
            />
            <x-form.error name="{{$name}}" />
        </label>
    </div>
</div>
@if($seperator)
    <div
        class="pb-1 border-b border-gray-100 mx-10 dark:border-gray-700"
    ></div>
@endif
