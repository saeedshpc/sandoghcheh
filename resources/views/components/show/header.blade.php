@props(['label' => null, 'title' => 'عنوان گزارش', 'description' => 'توضیحات گزارش', 'cancel_href' => '#', 'edit_href' => '#'])
<div
    class="flex flex-col items-start justify-between lg:flex-row lg:items-center"
>
    <div>
        <h2 class="text-lg font-bold mb-2 dark:text-gray-100">
            {{$label ?? 'نمایش' }} :
            <span class="font-normal"
            > {{ $title }} </span
            >
        </h2>
        <p class="text-gray-500 text-sm dark:text-gray-300">
            {{ $description }}
        </p>
    </div>
    <div class="hidden lg:flex">
        <x-show.edit-button href="{{$edit_href}}" />
        <x-form.cancel href="{{$cancel_href}}" />
    </div>
</div>
<div
    class="pb-1 border-b border-gray-100 mx-10 dark:border-gray-700"
></div>
