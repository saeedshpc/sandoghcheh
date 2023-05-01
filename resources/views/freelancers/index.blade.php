<x-layout>
    <!-- buttons and header -->
    <div
        class="flex flex-col md:flex-row md:items-center justify-between gap-4 py-6 px-2 md:px-4"
    >
        <x-reports-title title="مدیریت همکاران فریلنسر" :records="$freelancers->count()"/>
        <x-reports-filter/>
    </div>
    <!-- boxes -->
    <x-main-info-boxes>
        <x-report-box name="budget"/>
        <x-report-box name="freelancer"/>
        <x-report-box name="freelancer" :active="true"/>
        <x-report-box name="freelancer_number"/>
    </x-main-info-boxes>
    <!-- table and pagination -->
    <div id="table-pagination-div">
        <!-- tables -->
        <x-table>
            <x-slot name="tableHeader">
                <x-table-th>کد</x-table-th>
                <x-table-th>نام فریلنسر</x-table-th>
                <x-table-th>تخصص</x-table-th>
                <x-table-th>سفارشات</x-table-th>
                <x-table-th>آخرین پرداختی</x-table-th>
                <x-table-th>بانک</x-table-th>
                <x-table-th>شماره حساب/کارت</x-table-th>
                <x-table-th>جمع پرداختی‌ها</x-table-th>
                <x-table-th></x-table-th>
            </x-slot>
            @foreach($freelancers as $freelancer)
                <x-table-row>
                    <x-table-td><a class="hover:text-blue-500 duration-200" href="/freelancers/{{$freelancer->id}}">{{$freelancer->id}}</a></x-table-td>
                    <x-table-td><a class="hover:text-blue-500 duration-200" href="/freelancers/{{$freelancer->id}}">{{$freelancer->fullName}}</a></x-table-td>
                    <x-table-td>{{$freelancer->expertise}}</x-table-td>
                    <x-table-td>14</x-table-td>
                    <x-table-td>1402-01-22</x-table-td>
                    <x-table-td>{{$freelancer->bank}}</x-table-td>
                    <x-table-td>{{$freelancer->card_number ?? $freelancer->bank_account_number}}</x-table-td>
                    <x-table-td>23/300/000</x-table-td>
                    <x-table-td>
                        <div class="lg:invisible group-hover:visible">
                            <div
                                class="flex items-center justify-around gap-4 md:gap-2 w-full"
                            >
                                <a
                                    href="/freelancers/{{$freelancer->id}}/edit"
                                    class="hover:text-greenOne dark:hover:text-green-400"
                                >
                                    <x-icon name="pencil" class="w-5 h-5" />
                                </a>
                                <form
                                    action="/freelancers/{{$freelancer->id}}"
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
