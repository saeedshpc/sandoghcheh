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
            @foreach($bankAccounts as $bankAccount)
            <x-table-row>
                <x-table-td>{{$bankAccount->account_code}}</x-table-td>
                <x-table-td>{{$bankAccount->account_name}}</x-table-td>
                <x-table-td>{{$bankAccount->account_usage}}</x-table-td>
                <x-table-td>{{$bankAccount->account_bank_name }}</x-table-td>
                <x-table-td>{{$bankAccount->account_owner}}</x-table-td>
                <x-table-td>{{$bankAccount->account_card_number ?? $bankAccount->account_number }}</x-table-td>
                <x-table-td>23/000/000</x-table-td>
                <x-table-td>500/000</x-table-td>
                <x-table-td>1401-02-3</x-table-td>
                <x-table-td>
                    <div class="lg:invisible group-hover:visible">
                        <div
                            class="flex items-center justify-around gap-4 md:gap-2 w-full"
                        >
                            <a
                                href="/cards/{{$bankAccount->id}}"
                                class="hover:text-greenOne dark:hover:text-green-400"
                            >
                               <x-icon name="pencil" class="w-5 h-5" />
                            </a>
                            <a
                                href="#"
                                class="hover:text-greenOne dark:hover:text-green-400"
                            >
                               <x-icon name="trash" class="w-5 h-5" />
                            </a>
                        </div>
                    </div>
                </x-table-td>

            </x-table-row>
            @endforeach

        </x-table>

        <!-- pagination -->
        <x-pagination></x-pagination>
    </div>
</x-layout>
