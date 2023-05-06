@props(['title' => 'عنوان'])
<div
    class="bg-gray-100 dark:bg-slate-700 dark:border-gray-600 dark:hover:border-gray-400 w-full md:w-[49%] xl:w-full py-4 px-4 rounded-lg md:h-32 border duration-200 border-white hover:border-gray-200"
>
    <p class="text-gray-600 dark:text-white mb-1">
        {{ $title }}
    </p>
    <p class="text-gray-800 dark:text-white text-sm font-bold mb-1">
        317/000 تومان
    </p>
    <p class="text-gray-600 dark:text-white text-xs">از 500/000</p>
</div>
