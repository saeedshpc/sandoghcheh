<x-layout>
    <!-- buttons and header -->
    <div
        class="flex flex-col md:flex-row md:items-center justify-between gap-4 py-6 px-2 md:px-4"
    >
        <x-reports-title title="مدیریت مجریان تبلیغاتی" :records="$advertisers->count()"/>
        <x-reports-filter/>
    </div>
    <!-- boxes -->
    <x-main-info-boxes>
        <x-report-box
            title="جمع هزینه تبلیغات امسال"
            middleType="expense"
            middleValue="5/411/000"
            bottomType="advertiser"
            bottomValue="8"
            :active="true"
        />
        <x-report-box
            title="جمع هزینه های این ماه"
            middleType="expense"
            middleValue="21/200/000"
            bottomType="monthlyBudget"
            bottomValue="2/000/000"
        />
        <x-report-box
            title="جمع هزینه های این ماه"
            middleType="expense"
            middleValue="21/200/000"
            bottomType="monthlyBudget"
            bottomValue="2/000/000"
        />
        <x-report-box
            title="جمع هزینه های این ماه"
            middleType="expense"
            middleValue="21/200/000"
            bottomType="monthlyBudget"
            bottomValue="2/000/000"
        />
    </x-main-info-boxes>
    <!-- table and pagination -->
    <div id="table-pagination-div">
        <!-- tables -->
        <x-table>
            <x-slot name="tableHeader">
                <x-table-th>کد</x-table-th>
                <x-table-th>نام مجری	</x-table-th>
                <x-table-th>حوزه فعالیت</x-table-th>
                <x-table-th>تعداد سفارشات</x-table-th>
                <x-table-th>جمع هزینه سفارشات</x-table-th>
                <x-table-th>تاریخ آخرین سفارش</x-table-th>
                <x-table-th></x-table-th>
            </x-slot>
            @foreach($advertisers as $advertiser)
                <x-table-row>
                    <x-table-td><a class="hover:text-blue-500 duration-200" href="/advertisers/{{$advertiser->id}}">{{$advertiser->id}}</a></x-table-td>
                    <x-table-td><a class="hover:text-blue-500 duration-200" href="/advertisers/{{$advertiser->id}}">{{$advertiser->name}}</a></x-table-td>
                    <x-table-td>{{$advertiser->work_area}}</x-table-td>
                    <x-table-td>15</x-table-td>
                    <x-table-td>140/000/000</x-table-td>
                    <x-table-td>1401-11-04w</x-table-td>

                    <x-table-td>
                        <div class="lg:invisible group-hover:visible">
                            <div
                                class="flex items-center justify-around gap-4 md:gap-2 w-full"
                            >
                                <a
                                    href="/advertisers/{{$advertiser->id}}/edit"
                                    class="hover:text-greenOne dark:hover:text-green-400"
                                >
                                    <x-icon name="pencil" class="w-5 h-5" />
                                </a>
                                <form
                                    action="/advertisers/{{$advertiser->id}}"
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
