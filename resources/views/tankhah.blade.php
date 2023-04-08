<x-layout>
    <!-- buttons and header -->
    <div
        class="flex flex-col md:flex-row md:items-center justify-between gap-4 py-6 px-2 md:px-4"
    >
        <x-reports-title title="مدیریت تنخواه" records="52"/>
        <x-reports-filter />
    </div>
    <!-- boxes -->
    <x-main-info-boxes>
        <x-report-box name="simple" />
        <x-report-box name="simple" :active="true" />
        <x-report-box name="simple" />
        <x-report-box name="simple" />
    </x-main-info-boxes>
    <!-- table and pagination -->
    <div id="table-pagination-div">
        <!-- tables -->
        <x-table></x-table>
        <!-- pagination -->
        <x-pagination></x-pagination>
    </div>
</x-layout>
