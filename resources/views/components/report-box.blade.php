@props(['name' , 'active' => false])

@if(!$active && $name === 'simple')
    <div
        class="bg-gray-100 dark:bg-slate-700 dark:border-gray-600 dark:hover:border-gray-400 w-full md:w-[49%] xl:w-full py-4 px-4 rounded-lg md:h-32 border duration-200 border-white hover:border-gray-200"
    >
        <p class="text-gray-600 dark:text-white mb-1">
            بودجه باقی مانده توکان
        </p>
        <p class="text-gray-800 dark:text-white text-sm font-bold mb-1">
            317/000 تومان
        </p>
        <p class="text-gray-600 dark:text-white text-xs">از 500/000</p>
    </div>
@endif
@if($active && $name === 'simple')
<div
    class="bg-gradient-to-b md:w-[49%] xl:w-full from-[#13bda0] to-[#0b9b82] w-full py-4 px-4 rounded-lg md:h-32 border duration-200 border-white hover:border-blue-300"
>
    <p class="text-white dark:text-white mb-1">
        بودجه باقی مانده بانوریس
    </p>
    <p class="text-white dark:text-white text-sm font-bold mb-1">
        317/000 تومان
    </p>
    <p class="text-white dark:text-white text-xs">از 500/000</p>
</div>
@endif

@if(!$active && $name === 'financial')
    <div
        class="bg-gray-100 dark:bg-slate-700 dark:border-gray-600 dark:hover:border-gray-400 w-full md:w-[49%] xl:w-full py-4 px-4 rounded-lg md:h-32 border duration-200 border-white hover:border-gray-200"
    >
        <p class="text-gray-600 dark:text-white mb-1">
            جمع هزینه‌های امسال بانوریس
        </p>
        <p class="text-gray-800 dark:text-white text-sm font-bold mb-1">
            5/3400/000 تومان
        </p>
        <p class="text-gray-600 dark:text-white text-xs">
            فروش امسال: 700/000/000
        </p>
    </div>
@endif
@if($active && $name === 'financial')
    <div
        class="bg-gradient-to-b md:w-[49%] xl:w-full from-[#13bda0] to-[#0b9b82] w-full py-4 px-4 rounded-lg md:h-32 border duration-200 border-white hover:border-blue-300"
    >
        <p class="text-white dark:text-white mb-1">
            جمع هزینه‌های امسال فروشگاه آرایشی
        </p>
        <p class="text-white dark:text-white text-sm font-bold mb-1">
            31/220/000 تومان
        </p>
        <p class="text-white dark:text-white text-xs">
            فروش امسال: 2/856/00/000
        </p>
    </div>
@endif

@if(!$active && $name === 'budget')
    <div
        class="bg-gray-100 dark:bg-slate-700 dark:border-gray-600 dark:hover:border-gray-400 w-full md:w-[49%] xl:w-full py-4 px-4 rounded-lg md:h-32 border duration-200 border-white hover:border-gray-200"
    >
        <p class="text-gray-600 dark:text-white mb-1">
            بودجه فریلنسرها
        </p>
        <p class="text-gray-800 dark:text-white text-sm font-bold mb-1">
            21/870/000 تومان
        </p>
        <p class="text-gray-600 dark:text-white text-xs">
            بودجه ماهانه 2/000/000
        </p>
    </div>
@endif

@if(!$active && $name === 'freelancer')
    <div
        class="bg-gray-100 dark:bg-slate-700 dark:border-gray-600 dark:hover:border-gray-400 w-full md:w-[49%] xl:w-full py-4 px-4 rounded-lg md:h-32 border duration-200 border-white hover:border-gray-200"
    >
        <p class="text-gray-600 dark:text-white mb-1">
            واریزی های 30 روز گذشته
        </p>
        <p class="text-gray-800 dark:text-white text-sm font-bold mb-1">
            1/420/000 تومان
        </p>
        <p class="text-gray-600 dark:text-white text-xs">
            به 7 فریلنسر
        </p>
    </div>
@endif

@if($active && $name === 'freelancer')
<div
    class="bg-gradient-to-b md:w-[49%] xl:w-full from-[#13bda0] to-[#0b9b82] w-full py-4 px-4 rounded-lg md:h-32 border duration-200 border-white hover:border-blue-300"
>
    <p class="text-white dark:text-white mb-1">
        جمع واریزی‌های سال
    </p>
    <p class="text-white dark:text-white text-sm font-bold">
        5/350/000 تومان
    </p>
    <p class="text-white dark:text-white text-xs">به 7 فریلنسر</p>
</div>
@endif

@if(!$active && $name === 'freelancer_number')
<div
    class="bg-gray-100 dark:bg-slate-700 dark:border-gray-600 dark:hover:border-gray-400 w-full md:w-[49%] xl:w-full py-4 px-4 rounded-lg md:h-32 border duration-200 border-white hover:border-gray-200"
>
    <p class="text-gray-600 dark:text-white mb-1">
        تعداد فریلنسرها
    </p>
    <p class="text-gray-800 dark:text-white text-sm font-bold">
        14 نفر
    </p>
</div>
@endif
