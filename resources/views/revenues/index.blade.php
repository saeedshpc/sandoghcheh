<x-layout>
    <!-- buttons and header -->
    <div
        class="flex flex-col md:flex-row md:items-center justify-between gap-4 py-6 px-2 md:px-4"
    >
        <x-reports-title title="مدیریت درآمد و نقدینگی" :records="$revenues->count()"/>
        <x-reports-filter/>
    </div>
    <!-- boxes -->
    <x-main-info-boxes>
        <x-report-box name="revenue" :active="true"/>
        <x-report-box name="revenue"/>
        <x-report-box name="revenue"/>
        <x-report-box name="revenue"/>
    </x-main-info-boxes>
    <!-- table and pagination -->
    <div id="table-pagination-div">
        <!-- tables -->
        <x-table>
            <x-slot name="tableHeader">
                <x-table-th>کد</x-table-th>
                <x-table-th>کسب و کار</x-table-th>
                <x-table-th>ماه</x-table-th>
                <x-table-th>جمع فروش ماه	</x-table-th>
                <x-table-th>فروش آنلاین</x-table-th>
                <x-table-th>فروش آفلاین</x-table-th>
                <x-table-th>جمع فروش امسال</x-table-th>
                <x-table-th>فروش سال پیش	</x-table-th>
                <x-table-th>تاریخ ثبت</x-table-th>
                <x-table-th></x-table-th>
            </x-slot>
            @foreach($revenues as $revenue)
                <x-table-row>
                    <x-table-td>{{$revenue->id}}</x-table-td>
                    <x-table-td>{{$revenue->company->name}}</x-table-td>
                    <x-table-td>{{$revenue->month_of_year}}</x-table-td>
                    <x-table-td>{{$revenue->total_sale}}</x-table-td>
                    <x-table-td>{{$revenue->online_sale_share}}</x-table-td>
                    <x-table-td>{{$revenue->offline_sale_share}}</x-table-td>
                    <x-table-td>250/000/000</x-table-td>
                    <x-table-td>200/000/000</x-table-td>
                    <x-table-td dir="ltr">{{$revenue->created_at}}</x-table-td>


                    <x-table-td>
                        <div class="lg:invisible group-hover:visible">
                            <div
                                class="flex items-center justify-around gap-4 md:gap-2 w-full"
                            >
                                <a
                                    href="/revenues/{{$revenue->id}}/edit"
                                    class="hover:text-greenOne dark:hover:text-green-400"
                                >
                                    <x-icon name="pencil" class="w-5 h-5" />
                                </a>
                                <form
                                    action="/revenues/{{$revenue->id}}"
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
