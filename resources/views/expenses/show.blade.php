<x-layout createButtonHref="/expenses/create">
    <!-- report section -->
    <div class="py-6 px-4">
        <div
            class="flex flex-col gap-5 text-gray-700 border dark:border-gray-600 p-6 rounded-xl"
        >
            <x-show.header
            label="عنوان هزینه"
            title="{{$expense->title}}"
            description="{{$expense->description}}"
            cancel_href="/expenses"
            edit_href="/expenses/{{$expense->id}}/edit"
            />
            <!-- div 1 -->
            <x-show.data
            label="عنوان هزینه"
            description="این هزینه برای خرید چه کالا یا سرویسی ثبت شده است ؟">
                {{$expense->title}}
            </x-show.data>

            <!-- div 2  select -->
            <x-show.data
                label="شرکت/کسب و کار"
                description="این هزینه جزو هزینه های کدام شرکت/کسب و کار می ‌باشد">
                    {{ $expense->company->name }}
            </x-show.data>
            <!-- div 3 text -->
            <x-show.data
                label="مبلغ هزینه"
                description="مبلغ هزینه شده به تومان">
                    {{ $expense->price }}  تومان
            </x-show.data>
            <!-- div 4 text -->
            <x-show.data
                label="خریدار"
                description="نام شخص خریدار کالا/خدمات">
                    {{ $expense->purchaser }}
            </x-show.data>
            <!-- div 5 textarea -->
            <x-show.data
                label="توضیحات"
                description="توضیحات مرتبط با این هزینه یا پیگیری های مورد نیاز">
                    {{ $expense->description }}
            </x-show.data>
            <!-- div 6 select -->
            <x-show.data
                label="وضعیت پرداخت"
                description="وضعیت پرداختی این هزینه تنخواه">
                    {{$expense->payment_status}}
            </x-show.data>
            <!-- div 7 select -->
            <x-show.data
                label="حساب بانکی پرداختی"
                description="هزینه این خرید از کدام حساب بانکی یا کارت بانکی انجام شده است">
                    {{$expense->bankAccount->name}}
            </x-show.data>
            <!-- div 8 date-time -->
            <x-show.data
                dir="ltr"
                label="تاریخ خرید"
                description="تاریخ خرید کالا یا خدمات">
                    {{ $expense->purchased_date }}
            </x-show.data>
            <!-- div 9 file upload -->
           <x-show.invoice :object="$expense" />
            <!-- mobile actions -->
            <div class="lg:hidden flex justify-end gap-3 mt-5">
                <x-show.edit-button href="/expenses/{{$expense->id}}/edit" />
                <x-form.cancel href="/expenses" />
            </div>
        </div>
    </div>
</x-layout>
