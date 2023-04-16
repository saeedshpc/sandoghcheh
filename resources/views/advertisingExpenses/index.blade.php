<x-layout>
    <!-- buttons and header -->
    <div
        class="flex flex-col md:flex-row md:items-center justify-between gap-4 py-6 px-2 md:px-4"
    >
        <x-reports-title title="مدیریت هزینه‌های تبلیغات" :records="$advertisingExpenses->count()"/>
        <x-reports-filter/>
    </div>
    <!-- boxes -->
    <x-main-info-boxes>
        <x-report-box name="advertise-A" :active="true"/>
        <x-report-box name="advertise-B"/>
        <x-report-box name="advertise-B"/>
        <x-report-box name="advertise-B"/>
    </x-main-info-boxes>
    <!-- table and pagination -->
    <div id="table-pagination-div">
        <!-- tables -->
        <x-table>
            <x-slot name="tableHeader">
                <x-table-th>کد</x-table-th>
                <x-table-th>عنوان</x-table-th>
                <x-table-th>کسب و کار</x-table-th>
                <x-table-th>توضیحات</x-table-th>
                <x-table-th>مبلغ</x-table-th>
                <x-table-th>مجری تبلیغ</x-table-th>
                <x-table-th>رسانه تبلیغاتی</x-table-th>
                <x-table-th>حساب پرداختی</x-table-th>
                <x-table-th>تاریخ پرداخت</x-table-th>
                <x-table-th></x-table-th>
            </x-slot>
            @foreach($advertisingExpenses as $expense)
                <x-table-row>
                    <x-table-td>{{$expense->id}}</x-table-td>
                    <x-table-td>{{$expense->title}}</x-table-td>
                    <x-table-td>{{$expense->company->name}}</x-table-td>
                    <x-table-td>{{$expense->description}}</x-table-td>
                    <x-table-td>{{$expense->price}}</x-table-td>
                    <x-table-td>{{$expense->advertiser->name}}</x-table-td>
                    <x-table-td>{{$expense->advertising_media}}</x-table-td>
                    <x-table-td>{{$expense->payment_status}}</x-table-td>
                    <x-table-td>{{$expense->purchased_date}}</x-table-td>

                    <x-table-td>
                        <div class="lg:invisible group-hover:visible">
                            <div
                                class="flex items-center justify-around gap-4 md:gap-2 w-full"
                            >
                                <a
                                    href="/advertisingExpenses/{{$expense->id}}/edit"
                                    class="hover:text-greenOne dark:hover:text-green-400"
                                >
                                    <x-icon name="pencil" class="w-5 h-5" />
                                </a>
                                <form
                                    action="/advertisingExpenses/{{$expense->id}}"
                                    class="flex items-center justify-center"
                                    method="POST" >
                                    @csrf
                                    @method('DELETE')
                                    <button class="hover:text-greenOne dark:hover:text-green-400">
                                        <x-icon name="trash" class="w-5 h-5" />
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
