<x-layout createButtonHref="/companies/create" createButtonText="افزودن کسب و کار">
    <!-- buttons and header -->
    <div
        class="flex flex-col md:flex-row md:items-center justify-between gap-4 py-6 px-2 md:px-4"
    >
        <x-reports-title title="مدیریت شرکت‌ها" :records="$companies->count()"/>
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
            :active="true"
        />
        <x-report-box
            title="جمع هزینه‌های امسال فروشگاه لباس"
            middleType="expense"
            middleValue="41/07/000"
            bottomType="yearTotalSale"
            bottomValue="950/000/000"
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
                <x-table-th>نام کسب و کار</x-table-th>
                <x-table-th>حوزه فعالیت</x-table-th>
                <x-table-th>جمع فروش سال</x-table-th>
                <x-table-th>جمع هزینه‌های سال</x-table-th>
                <x-table-th>جمع فروش سال گذشته</x-table-th>
                <x-table-th>جمع هزینه‌ تنخواه سال</x-table-th>
                <x-table-th>جمع تبلیغات سال</x-table-th>
                <x-table-th></x-table-th>
            </x-slot>
            @foreach($companies as $company)
                <x-table-row>
                    <x-table-td><a class="hover:text-blue-500 duration-200" href="/companies/{{$company->id}}">{{$company->id}}</a></x-table-td>
                    <x-table-td><a class="hover:text-blue-500 duration-200" href="/companies/{{$company->id}}">{{$company->name}}</a></x-table-td>
                    <x-table-td>{{$company->work_area}}</x-table-td>
                    <x-table-td>54/000/000</x-table-td>
                    <x-table-td>140/000/000</x-table-td>
                    <x-table-td>44/000/000</x-table-td>
                    <x-table-td>41/000/000</x-table-td>
                    <x-table-td>140/000/000</x-table-td>

                    <x-table-td>
                        <div class="lg:invisible group-hover:visible">
                            <div
                                class="flex items-center justify-around gap-4 md:gap-2 w-full"
                            >
                                <a
                                    href="/companies/{{$company->id}}/edit"
                                    class="hover:text-greenOne dark:hover:text-green-400"
                                >
                                    <x-icon name="pencil" class="w-5 h-5" />
                                </a>
                                <form
                                    action="/companies/{{$company->id}}"
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
        <div>
            {{ $companies->links() }}
        </div>
{{--        <x-pagination></x-pagination>--}}
    </div>
</x-layout>
