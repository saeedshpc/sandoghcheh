<x-layout>
    <!-- buttons and header -->
    <div
        class="flex flex-col md:flex-row md:items-center justify-between gap-4 py-6 px-2 md:px-4"
    >
        <x-reports-title title="مدیریت تنخواه" :records="$expenses->count()"/>
        <x-reports-filter/>
    </div>
    <!-- boxes -->
    <x-main-info-boxes>
        <x-report-box name="simple"/>
        <x-report-box name="simple"/>
        <x-report-box name="simple" :active="true"/>
        <x-report-box name="simple"/>
    </x-main-info-boxes>
    <!-- table and pagination -->
    <div id="table-pagination-div">
        <!-- tables -->
        <x-table>
            <x-slot name="tableHeader">
                <x-table-th>کد</x-table-th>
                <x-table-th>عنوان هزینه</x-table-th>
                <x-table-th>مبلغ (تومان)</x-table-th>
                <x-table-th>خریدار</x-table-th>
                <x-table-th>وضعیت پرداخت</x-table-th>
                <x-table-th>حساب پرداختی</x-table-th>
                <x-table-th>تاریخ ثبت</x-table-th>
                <x-table-th></x-table-th>
            </x-slot>
            @foreach($expenses as $expense)
                @php
                    $statusColor = '';
                     switch($expense->expense_payment_status->name) {
                         case 'Paid' :
                             $statusColor = 'text-green-600';
                             break;
                         case 'Pending' :
                             $statusColor = 'text-orange-500';
                             break;
                         case 'Check' :
                             $statusColor = 'text-purple-600';
                             break;
                     }
                @endphp
                <x-table-row>
                    <x-table-td>{{$expense->id}}</x-table-td>
                    <x-table-td>{{$expense->expense_title}}</x-table-td>
                    <x-table-td>{{$expense->expense_price}}</x-table-td>
                    <x-table-td>{{$expense->expense_purchaser}}</x-table-td>
                    <x-table-td class="{{$statusColor}}">{{$expense->expense_payment_status}}</x-table-td>
                    <x-table-td>{{$expense->bankAccount->account_name}}</x-table-td>
                    <x-table-td>{{$expense->expense_purchased_date }}</x-table-td>

                    <x-table-td>
                        <div class="lg:invisible group-hover:visible">
                            <div
                                class="flex items-center justify-around gap-4 md:gap-2 w-full"
                            >
                                <a
                                    href="/expenses/{{$expense->id}}/edit"
                                    class="hover:text-greenOne dark:hover:text-green-400"
                                >
                                    <x-icon name="pencil" class="w-5 h-5"/>
                                </a>
                                <form
                                    action="/expenses/{{$expense->id}}"
                                    class="flex items-center justify-center"
                                    method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="hover:text-greenOne dark:hover:text-green-400">
                                        <x-icon name="trash" class="w-5 h-5"/>
                                    </button>
                                </form>
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
