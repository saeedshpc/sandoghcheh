<x-layout>
    <!-- Form -->
    <div class="py-6 px-4">
        <div
            class="flex flex-col gap-5 text-gray-700 border dark:border-gray-600 p-6 rounded-xl"
        >
            <x-show.header
            title="گزارش 1"
            description="توضیحات گزارش 1"
            cancel_href="#"
            edit_href="#"
            />
            <!-- div 1 -->
            <x-show.data
            label="لیبل"
            description="توضیحات لیبل">
            </x-show.data>

            <!-- div 2  select -->
            <x-show.data
                label="لیبل"
                description="توضیحات لیبل">
            </x-show.data>
            <!-- div 3 text -->
            <x-show.data
                label="لیبل"
                description="توضیحات لیبل">
            </x-show.data>
            <!-- div 4 text -->
            <x-show.data
                label="لیبل"
                description="توضیحات لیبل">
            </x-show.data>
            <!-- div 5 textarea -->
            <x-show.data
                label="لیبل"
                description="توضیحات لیبل">
            </x-show.data>
            <!-- div 6 select -->
            <x-show.data
                label="لیبل"
                description="توضیحات لیبل">
            </x-show.data>
            <!-- div 7 select -->
            <x-show.data
                label="لیبل"
                description="توضیحات لیبل">
            </x-show.data>
            <!-- div 8 date-time -->
            <x-show.data
                label="لیبل"
                description="توضیحات لیبل">123
            </x-show.data>
            <!-- div 9 file upload -->
            <div
                class="flex flex-col gap-4 items-start justify-between md:flex-row md:items-center md:gap-0"
            >
                <div>
                    <h3 class="text-md font-bold mb-2 dark:text-gray-100">
                        تصویر فاکتور و فیش پرداختی
                    </h3>
                    <p class="text-gray-500 text-sm dark:text-gray-300">
                        تصویر فاکتور یا فیش پرداختی این هزینه
                    </p>
                </div>
            </div>

            <div class="relative mt-4 group overflow-hidden w-1/2 md:w-1/4">
                <img
                    class="border rounded p-4 shadow-md hover:scale-110 duration-300"
                    src="/assets/images/logo.png"
                />
                <div
                    class="hidden group-hover:flex gap-1 duration-200 absolute top-2 right-2"
                >
                    <a
                        class="flex items-center justify-center w-[32px] h-[32px] rounded-full text-white bg-blue-500 hover:bg-blue-600 duration-200"
                        href="#"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="w-4 h-4 text-white dark:text-white"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"
                            />
                        </svg>
                    </a>
                </div>
            </div>
            <!-- mobile actions -->
            <div class="lg:hidden flex justify-end gap-3 mt-5">
                <a
                    class="p-2 px-8 rounded-lg ml-2 bg-blue-800 text-white duration-200 hover:bg-blue-500 text-sm dark:bg-slate-600 dark:border dark:border-gray-300"
                >
                    ویرایش
                </a>
                <a
                    href="#"
                    class="p-2 px-2 rounded-lg bg-white border hover:bg-gray-100 duration-200 text-sm"
                >انصراف</a
                >
            </div>
        </div>
    </div>
</x-layout>
