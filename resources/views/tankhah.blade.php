<x-layout>
    <!-- buttons and header -->
    <div
        class="flex flex-col md:flex-row md:items-center justify-between gap-4 py-6 px-2 md:px-4"
    >
        <div>
            <h2 class="text-lg font-bold text-gray-700 dark:text-white mb-1">
                مدیریت تنخواه
            </h2>
            <p class="text-xs dark:text-white">230 مورد ثبت شده</p>
        </div>
        <div class="flex gap-2 md:gap-4 justify-between text-gray-700">
            <a
                href="#"
                class="p-2 px-2 rounded-lg bg-white dark:bg-slate-700 dark:text-white dark:border-gray-600 dark:hover:bg-gray-600 border hover:bg-gray-100 duration-200"
            >
            <x-icon name="filter" />
            </a>
            <a
                href="#"
                class="p-3 px-3 xs:px-4 rounded-lg text-xs xs:text-sm bg-white dark:bg-slate-700 dark:text-white dark:border-gray-600 dark:hover:bg-gray-600 border hover:bg-gray-100 duration-200"
            >مرتب سازی : بر اساس تاریخ</a
            >
            <a
                href="#"
                class="p-3 px-3 xs:px-4 rounded-lg text-xs xs:text-sm bg-white border hover:bg-gray-100 dark:bg-slate-700 dark:text-white dark:border-gray-600 dark:hover:bg-gray-600 duration-200"
            >
                < آبان 1401 ></a
            >
        </div>
    </div>
    <!-- boxes -->
    <x-main-info-boxes></x-main-info-boxes>
    <!-- table and pagination -->
    <div id="table-pagination-div">
        <!-- tables -->
        <x-table></x-table>
        <!-- pagination -->
        <x-pagination></x-pagination>
    </div>
</x-layout>
