<x-layout>
    <!-- buttons and header -->
    <div
        class="flex flex-col md:flex-row md:items-center justify-between gap-4 py-6 px-2 md:px-4"
    >
        <x-reports-title title="مدیریت حساب‌های فریلنسرها" :records="$freelancerExpenses->count()"/>
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
                <x-table-th>نام فریلنسر</x-table-th>
                <x-table-th>توضیحات سفارش</x-table-th>
                <x-table-th>مبلغ</x-table-th>
                <x-table-th>حساب پرداختی</x-table-th>
                <x-table-th>تاریخ پرداخت</x-table-th>
                <x-table-th></x-table-th>
            </x-slot>
            @foreach($freelancerExpenses as $freelancerExpense)
                <x-table-row>
                    <x-table-td>{{$freelancerExpense->id}}</x-table-td>
                    <x-table-td>{{$freelancerExpense->freelancer_name}}</x-table-td>
                    <x-table-td>{{$freelancerExpense->description}}</x-table-td>
                    <x-table-td>{{$freelancerExpense->price}}</x-table-td>
                    <x-table-td>{{$freelancerExpense->description}}</x-table-td>
                    <x-table-td dir="ltr">{{$freelancerExpense->purchased_date}}</x-table-td>


                    <x-table-td>
                        <div class="lg:invisible group-hover:visible">
                            <div
                                class="flex items-center justify-around gap-4 md:gap-2 w-full"
                            >
                                <a
                                    href="/freelancerExpenses/{{$freelancerExpense->id}}/edit"
                                    class="hover:text-greenOne dark:hover:text-green-400"
                                >
                                    <x-icon name="pencil" class="w-5 h-5" />
                                </a>
                                <form
                                    action="/freelancerExpenses/{{$freelancerExpense->id}}"
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