<x-layout>
    <!-- buttons and header -->
    <div
        class="flex flex-col md:flex-row md:items-center justify-between gap-4 py-6 px-2 md:px-4"
    >
        <x-reports-title title="مدیریت کاربران سامانه" :records="$activities->count()"/>
        <x-reports-filter/>
    </div>

    <!-- table and pagination -->
    <div id="table-pagination-div">
        <!-- tables -->
        <x-table>
            <x-slot name="tableHeader">
                <x-table-th>کد</x-table-th>
                <x-table-th>نام</x-table-th>
                <x-table-th>کسب و کار</x-table-th>
                <x-table-th>عملیات</x-table-th>
                <x-table-th>بخش</x-table-th>
                <x-table-th>تاریخ</x-table-th>
                @chief
                <x-table-th></x-table-th>
                @endchief
            </x-slot>
            @foreach($activities as $activity)
                <x-table-row>
                    <x-table-td>{{$activity->id}}</x-table-td>
                    <x-table-td>{{$activity->user->firstName .' '. $activity->user->lastName}}</x-table-td>
                    <x-table-td>{{$activity->company->name}}</x-table-td>
                    <x-table-td>{{$activity->activity}}</x-table-td>
                    <x-table-td>{{$activity->table}}</x-table-td>
                    <x-table-td dir="ltr">{{$activity->created_at}}</x-table-td>

                    @chief
                    <x-table-td>
                        <div class="lg:invisible group-hover:visible">
                            <div
                                class="flex items-center justify-around gap-4 md:gap-2 w-full"
                            >
                                <form
                                    action="/users/{{$activity->id}}"
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
                    @endchief

                </x-table-row>
            @endforeach

        </x-table>

        <!-- pagination -->
        <x-pagination></x-pagination>
    </div>
</x-layout>
