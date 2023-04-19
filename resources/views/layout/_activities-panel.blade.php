<aside
    dir="rtl"
    class="hidden sml:flex flex-col justify-between col-span-12 sm:col-span-4 sml:col-span-3 xl:col-span-2 py-6 px-4 bg-white dark:bg-slate-800"
>
    <!-- top part contaienr -->
    <div>
        <!-- use profile -->
        <div class="flex items-center justify-around">
            <div class="dark:text-white">
                <h3 class=""><strong>سلام الهه</strong></h3>
                <p class="text-xs">کارشناس فروش و ارتباطات</p>
                <a href="#" class="text-xs font-bold hover:text-red-400"
                >خروج</a
                >
            </div>
            <img
                src="/images/user-profile.jpg"
                class="w-1/4 rounded-full"
                alt=""
            />
        </div>
        <!-- activities -->
        <div
            class="mt-14 bg-gray-100 dark:bg-slate-700 px-3 pt-4 pb-3 text-sm rounded-xl"
        >
            <h5 class="text-md pr-2 text-gray-800 dark:text-white">
                <strong>آخرین فعالیت‌ها</strong>
            </h5>
            <div class="mt-4 bg-white dark:bg-slate-800 px-3 py-2 rounded-xl">
                <ul
                    class="flex flex-col gap-4 lg:gap-3 leading-4 text-xs dark:text-white"
                >
                    <x-activities />
                </ul>
            </div>
        </div>
    </div>
    <!-- exit -->
    <div class="px-4 text-gray-800">
        <div class="border-b pb-2 mb-2 border-gray-100"></div>
        <a
            href="#"
            class="text-sm duration-200 text-red-300 hover:text-red-500"
        >خروج از سامانه</a
        >
    </div>
</aside>
