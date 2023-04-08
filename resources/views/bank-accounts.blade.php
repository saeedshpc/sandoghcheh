<x-layout>
    <!-- buttons and header -->
    <div
        class="flex flex-col md:flex-row md:items-center justify-between gap-4 py-6 px-2 md:px-4"
    >
        <x-reports-title title="مدیریت حساب‌های بانکی" records="6"/>
        <x-reports-filter/>
    </div>
    <!-- boxes -->
    <x-main-info-boxes>
        <x-report-box name="financial"/>
        <x-report-box name="financial"/>
        <x-report-box name="financial" :active="true"/>
        <x-report-box name="financial"/>
    </x-main-info-boxes>
    <!-- table and pagination -->
    <div id="table-pagination-div">
        <!-- tables -->
        <x-table>
            <x-slot name="tableHeader">
                <x-table-th>کد</x-table-th>
                <x-table-th>نام حساب</x-table-th>
                <x-table-th>استفاده حساب</x-table-th>
                <x-table-th>نام بانک</x-table-th>
                <x-table-th>دارنده حساب</x-table-th>
                <x-table-th>شماره حساب/کارت</x-table-th>
                <x-table-th>هزینه کرد امسال</x-table-th>
                <x-table-th>هزینه کرد این ماه</x-table-th>
                <x-table-th>تاریخ آخرین تراکنش</x-table-th>
                <x-table-th></x-table-th>
            </x-slot>
            <x-table-row>
                <x-table-td>BA-005</x-table-td>
                <x-table-td>کارت فریلنسرها</x-table-td>
                <x-table-td>پرداختی های فریلنسرها</x-table-td>
                <x-table-td>ملی</x-table-td>
                <x-table-td>سعید شیخ الاسلامی</x-table-td>
                <x-table-td>6037992123142512</x-table-td>
                <x-table-td>23/000/000</x-table-td>
                <x-table-td>500/000</x-table-td>
                <x-table-td>1401-02-3</x-table-td>
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
                                        d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"
                                    />
                                </svg>
                            </a>
                        </div>
                    </div>
                </td>

            </x-table-row>

        </x-table>

        <!-- pagination -->
        <x-pagination></x-pagination>
    </div>
</x-layout>
