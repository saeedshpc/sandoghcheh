<x-layout createButtonHref="/cards/create" createButtonText="افزودن حساب">
    <!-- buttons and header -->
    <div
        class="flex flex-col md:flex-row md:items-center justify-between gap-4 py-6 px-2 md:px-4"
    >
        <x-reports-title title="مدیریت حساب‌های بانکی" :records="$bankAccounts->count()"/>
        <x-reports-filter/>
    </div>
    <!-- boxes -->
    <x-main-info-boxes>
        <x-report-box
            title="جمع هزینه‌های امسال بانوریس"
            middleType="expense"
            middleValue="3/317/000"
            bottomType="yearTotalSale"
            bottomValue="500/000/000"
        />
        <x-report-box
            title="جمع هزینه‌های امسال فروشگاه لباس"
            middleType="expense"
            middleValue="41/07/000"
            bottomType="yearTotalSale"
            bottomValue="950/000/000"
            :active="true"
        />
        <x-report-box
            title="جمع هزینه های امسال فروشگاه آرایشی"
            middleType="expense"
            middleValue="11/300/000 "
            bottomType="yearTotalSale"
            bottomValue="3/100/400/000"
        />
        <x-report-box
            title="جمع هزینه‌های امسال فروشگاه ماگ"
            middleType="expense"
            middleValue="22/980/000"
            bottomType="yearTotalSale"
            bottomValue="215/00/000"
        />
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
                <x-table-td><a class="hover:text-blue-500 duration-200" href="/cards/{{$bankAccount->id}}">{{$bankAccount->id}}</a></x-table-td>
                <x-table-td><a class="hover:text-blue-500 duration-200" href="/cards/{{$bankAccount->id}}">{{$bankAccount->name}}</a></x-table-td>
                <x-table-td>{{$bankAccount->usage}}</x-table-td>
                <x-table-td>{{$bankAccount->bank_name }}</x-table-td>
                <x-table-td>{{$bankAccount->owner}}</x-table-td>
                <x-table-td>{{$bankAccount->card_number ?? $bankAccount->number }}</x-table-td>
                <x-table-td>23/000/000</x-table-td>
                <x-table-td>500/000</x-table-td>
                <x-table-td>1401-02-3</x-table-td>
                <x-table-td>
                    <div class="lg:invisible group-hover:visible">
                        <div
                            class="flex items-center justify-around gap-4 md:gap-2 w-full"
                        >
                            <a
                                href="/cards/{{$bankAccount->id}}/edit"
                                class="hover:text-greenOne dark:hover:text-green-400"
                            >
                               <x-icon name="pencil" class="w-5 h-5" />
                            </a>
                            <form
                                action="/cards/{{$bankAccount->id}}"
                                class="flex items-center justify-center"
                                method="POST">
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
        <div>
            {{ $bankAccounts->links() }}
        </div>
    </div>
</x-layout>
