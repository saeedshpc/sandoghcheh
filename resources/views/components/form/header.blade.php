@props(['title' => 'عنوان فرم ', 'description' => 'توضیحات فرم', 'cancel_href' => '#'])
<div
    class="flex flex-col items-start justify-between lg:flex-row lg:items-center"
>
    <div>
        <h2 class="text-lg font-bold mb-2 dark:text-gray-100">
            {{ $title }}
        </h2>
        <p class="text-gray-500 text-sm dark:text-gray-300">
            {{$description}}
        </p>
    </div>
    <div class="hidden lg:flex">
        <x-form.submit />
        <x-form.cancel href="{{$cancel_href}}" />
    </div>
</div>
<div
    class="pb-1 border-b border-gray-100 mx-10 dark:border-gray-700"
></div>
