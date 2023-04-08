<div class="overflow-x-auto relative py-2 px-4 dark:text-white">
    <table class="table-auto w-full text-sm mb-10 overflow-x-visible">
        <thead>
        <tr class="text-right text-gray-500 dark:text-white">
            {{ $tableHeader }}
        </tr>
        </thead>
        <tbody>
            {{ $slot }}
        </tbody>
    </table>
</div>
