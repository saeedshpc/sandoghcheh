@props(['expense'])
@if($expense->invoice_image ?? false)
<div
    class="flex flex-col gap-4 items-start justify-between md:flex-row md:items-center md:gap-0"
>
    <div>
        <h3 class="text-md font-bold mb-2 dark:text-gray-100">
            تصویر فاکتور و فیش پرداختی
        </h3>
        <p class="text-gray-500 text-sm dark:text-gray-300">
            تصویر فاکتور یا فیش پرداختی این هزینه
        </p>
    </div>
</div>

<!-- test new template for images -->
<div class="relative mt-4 group overflow-hidden w-1/2 md:w-1/4">
    <img
        class="border rounded p-4 shadow-md hover:scale-110 duration-300"
        src="{{asset('storage/'. $expense->invoice_image)}}"
    />
    <div
        class="md:hidden group-hover:flex gap-1 duration-200 absolute top-2 right-2"
    >
        <a
            class="flex items-center justify-center w-[32px] h-[32px] rounded-full text-white bg-blue-500 hover:bg-blue-600 duration-200"
            href="{{asset('storage/'. $expense->invoice_image)}}"
            target="_blank"
        >
            <x-icon name="magnifier" class="w-4 h-4" />

        </a>
    </div>
</div>
@endif
