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
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="w-6 h-6"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M10.5 6h9.75M10.5 6a1.5 1.5 0 11-3 0m3 0a1.5 1.5 0 10-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-9.75 0h9.75"
                    />
                </svg>
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
    <div class="py-6 px-4">
        <!-- report boxes -->
        <div
            class="flex flex-col mb-5 items-center flex-wrap xl:flex-nowrap justify-around gap-2 lg:gap-2 xl:gap-4 md:flex-row"
        >
            <!-- box1 -->
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
            <!-- box2 -->
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
            <!-- box3 -->
            <div
                class="bg-gray-100 dark:bg-slate-700 dark:border-gray-600 dark:hover:border-gray-400 w-full md:w-[49%] xl:w-full py-4 px-4 rounded-lg md:h-32 border duration-200 border-white hover:border-gray-200"
            >
                <p class="text-gray-600 dark:text-white mb-1">
                    هزینه بانوریس از اول سال
                </p>
                <p class="text-gray-800 dark:text-white text-sm font-bold mb-1">
                    317/000 تومان
                </p>
                <p class="text-gray-600 dark:text-white text-xs">از 500/000</p>
            </div>
            <!-- box4 -->
            <div
                class="bg-gray-100 dark:bg-slate-700 dark:border-gray-600 dark:hover:border-gray-400 w-full md:w-[49%] xl:w-full py-4 px-4 rounded-lg md:h-32 border duration-200 border-white hover:border-gray-200"
            >
                <p class="text-gray-600 dark:text-white mb-1">
                    هزینه توکان از اول سال
                </p>
                <p class="text-gray-800 dark:text-white text-sm font-bold mb-1">
                    317/000 تومان
                </p>
                <p class="text-gray-600 dark:text-white text-xs">از 500/000</p>
            </div>
        </div>
    </div>
    <!-- table and pagination -->
    <div id="table-pagination-div">
        <!-- tables -->
        <div class="overflow-x-auto relative py-2 px-4 dark:text-white">
            <table class="table-auto w-full text-sm mb-10 overflow-x-visible">
                <thead>
                <tr class="text-right text-gray-500 dark:text-white">
                    <th class="table-th">کد</th>
                    <th class="table-th">عنوان هزینه</th>
                    <th class="table-th">مبلغ (تومان)</th>
                    <th class="table-th">خریدار</th>
                    <th class="table-th">وضعیت پرداخت</th>
                    <th class="table-th">حساب پرداختی</th>
                    <th class="table-th">تاریخ ثبت</th>
                    <th class="table-th"></th>
                </tr>
                </thead>
                <tbody>
                <tr class="table-row group">
                    <td class="table-td">bn-002</td>
                    <td class="table-td">خرید چسب</td>
                    <td class="table-td">11/500</td>
                    <td class="table-td">الهه خداپرست</td>
                    <td class="table-td text-green-600">پرداخت شده</td>
                    <td class="table-td">کارت تنخواه بانوریس</td>
                    <td class="table-td">1401-08-21</td>
                    <td class="table-td">
                        <div class="lg:invisible group-hover:visible">
                            <div
                                class="flex items-center justify-around gap-4 md:gap-2 w-full"
                            >
                                <a
                                    href="#"
                                    class="hover:text-greenOne dark:hover:text-green-400"
                                >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="w-5 h-5"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125"
                                        />
                                    </svg>
                                </a>
                                <a
                                    href="#"
                                    class="hover:text-greenOne dark:hover:text-green-400"
                                ><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="w-5 h-5"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"
                                        />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr class="table-row group">
                    <td class="table-td">bn-001</td>
                    <td class="table-td">خرید خودکار</td>
                    <td class="table-td">5/000</td>
                    <td class="table-td">الهه خداپرست</td>
                    <td class="table-td text-green-600">پرداخت شده</td>
                    <td class="table-td">کارت تنخواه بانوریس</td>
                    <td class="table-td">1401-08-22</td>
                    <td class="table-td">
                        <div class="lg:invisible group-hover:visible">
                            <div
                                class="flex items-center justify-around gap-4 md:gap-2 w-full"
                            >
                                <a
                                    href="#"
                                    class="hover:text-greenOne dark:hover:text-green-400"
                                >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="w-5 h-5"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125"
                                        />
                                    </svg>
                                </a>
                                <a
                                    href="#"
                                    class="hover:text-greenOne dark:hover:text-green-400"
                                ><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="w-5 h-5"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"
                                        />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr class="table-row group">
                    <td class="table-td">TTA-001</td>
                    <td class="table-td">شارژ اینترنت</td>
                    <td class="table-td">112/500</td>
                    <td class="table-td">سعید شیخ الاسلامی</td>
                    <td class="table-td text-orange-5 00">در انتظار پرداخت</td>
                    <td class="table-td">کارت شخصی</td>
                    <td class="table-td">1401-08-21</td>
                    <td class="table-td">
                        <div class="lg:invisible group-hover:visible">
                            <div
                                class="flex items-center justify-around gap-4 md:gap-2 w-full"
                            >
                                <a
                                    href="#"
                                    class="hover:text-greenOne dark:hover:text-green-400"
                                >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="w-5 h-5"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125"
                                        />
                                    </svg>
                                </a>
                                <a
                                    href="#"
                                    class="hover:text-greenOne dark:hover:text-green-400"
                                ><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="w-5 h-5"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"
                                        />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr class="table-row group">
                    <td class="table-td">TTA-001</td>
                    <td class="table-td">شارژ اینترنت</td>
                    <td class="table-td">112/500</td>
                    <td class="table-td">سعید شیخ الاسلامی</td>
                    <td class="table-td text-red-600">چک مدت دار</td>
                    <td class="table-td">کارت شخصی</td>
                    <td class="table-td">1401-08-21</td>
                    <td class="table-td">
                        <div class="lg:invisible group-hover:visible">
                            <div
                                class="flex items-center justify-around gap-4 md:gap-2 w-full"
                            >
                                <a
                                    href="#"
                                    class="hover:text-greenOne dark:hover:text-green-400"
                                >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="w-5 h-5"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125"
                                        />
                                    </svg>
                                </a>
                                <a
                                    href="#"
                                    class="hover:text-greenOne dark:hover:text-green-400"
                                ><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="w-5 h-5"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"
                                        />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr class="table-row group">
                    <td class="table-td">bn-002</td>
                    <td class="table-td">خرید چسب</td>
                    <td class="table-td">11/500</td>
                    <td class="table-td">الهه خداپرست</td>
                    <td class="table-td text-green-600">پرداخت شده</td>
                    <td class="table-td">کارت تنخواه بانوریس</td>
                    <td class="table-td">1401-08-21</td>
                    <td class="table-td">
                        <div class="lg:invisible group-hover:visible">
                            <div
                                class="flex items-center justify-around gap-4 md:gap-2 w-full"
                            >
                                <a
                                    href="#"
                                    class="hover:text-greenOne dark:hover:text-green-400"
                                >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="w-5 h-5"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125"
                                        />
                                    </svg>
                                </a>
                                <a
                                    href="#"
                                    class="hover:text-greenOne dark:hover:text-green-400"
                                ><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="w-5 h-5"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"
                                        />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr class="table-row group">
                    <td class="table-td">bn-001</td>
                    <td class="table-td">خرید خودکار</td>
                    <td class="table-td">5/000</td>
                    <td class="table-td">الهه خداپرست</td>
                    <td class="table-td text-green-600">پرداخت شده</td>
                    <td class="table-td">کارت تنخواه بانوریس</td>
                    <td class="table-td">1401-08-22</td>
                    <td class="table-td">
                        <div class="lg:invisible group-hover:visible">
                            <div
                                class="flex items-center justify-around gap-4 md:gap-2 w-full"
                            >
                                <a
                                    href="#"
                                    class="hover:text-greenOne dark:hover:text-green-400"
                                >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="w-5 h-5"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125"
                                        />
                                    </svg>
                                </a>
                                <a
                                    href="#"
                                    class="hover:text-greenOne dark:hover:text-green-400"
                                ><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="w-5 h-5"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"
                                        />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr class="table-row group">
                    <td class="table-td">bn-002</td>
                    <td class="table-td">خرید چسب</td>
                    <td class="table-td">11/500</td>
                    <td class="table-td">الهه خداپرست</td>
                    <td class="table-td text-green-600">پرداخت شده</td>
                    <td class="table-td">کارت تنخواه بانوریس</td>
                    <td class="table-td">1401-08-21</td>
                    <td class="table-td">
                        <div class="lg:invisible group-hover:visible">
                            <div
                                class="flex items-center justify-around gap-4 md:gap-2 w-full"
                            >
                                <a
                                    href="#"
                                    class="hover:text-greenOne dark:hover:text-green-400"
                                >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="w-5 h-5"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125"
                                        />
                                    </svg>
                                </a>
                                <a
                                    href="#"
                                    class="hover:text-greenOne dark:hover:text-green-400"
                                ><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="w-5 h-5"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"
                                        />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr class="table-row group">
                    <td class="table-td">bn-001</td>
                    <td class="table-td">خرید خودکار</td>
                    <td class="table-td">5/000</td>
                    <td class="table-td">الهه خداپرست</td>
                    <td class="table-td text-green-600">پرداخت شده</td>
                    <td class="table-td">کارت تنخواه بانوریس</td>
                    <td class="table-td">1401-08-22</td>
                    <td class="table-td">
                        <div class="lg:invisible group-hover:visible">
                            <div
                                class="flex items-center justify-around gap-4 md:gap-2 w-full"
                            >
                                <a
                                    href="#"
                                    class="hover:text-greenOne dark:hover:text-green-400"
                                >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="w-5 h-5"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125"
                                        />
                                    </svg>
                                </a>
                                <a
                                    href="#"
                                    class="hover:text-greenOne dark:hover:text-green-400"
                                ><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="w-5 h-5"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"
                                        />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <!-- pagination -->
        <div
            class="w-full flex items-center justify-between text-gray-600 dark:text-white py-6 px-4 text-sm mb-10"
        >
            <a
                href="#"
                class="p-2 px-4 rounded-lg bg-white border hover:bg-gray-100 dark:bg-slate-700 dark:text-white dark:border-gray-600 dark:hover:bg-gray-600 duration-200 text-xs"
            >صفحه قبل</a
            >
            <div class="flex gap-4">
                <a href="#" class="hover:text-[#32bba4]">1</a>
                <a href="#" class="hover:text-[#32bba4]">2</a>
                <a href="#" class="font-bold hover:text-[#32bba4]">3</a>
                <a href="#">...</a>
                <a href="#" class="hover:text-[#32bba4]">9</a>
            </div>
            <a
                href="#"
                class="p-2 px-4 rounded-lg bg-white dark:bg-slate-700 dark:text-white dark:border-gray-600 dark:hover:bg-gray-600 border hover:bg-gray-100 duration-200 text-xs"
            >صفحه بعد</a
            >
        </div>
    </div>
</x-layout>
