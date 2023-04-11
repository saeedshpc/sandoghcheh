<x-layout>
    <!-- Form -->
    <div class="py-6 px-4">
        <form
            action="/expenses"
            class="flex flex-col gap-5 text-gray-700 border dark:border-gray-600 p-6 rounded-xl"
            method="POST"
        >
            @csrf
            {{-- Form Header--}}
            <x-form.header
                title="ثبت هزینه تنخواه"
                description="در این صفحه هزینه جدید برای تنخواه شرکت ها ثبت می‌نمایید."
                cancel_href="/expenses"
            />

            <!-- setting 1 text -->
            <x-form.input
                name="expense_title"
                label="عنوان هزینه"
                description="این هزینه برای خرید چه کالا یا سرویسی ثبت می‌شود؟"
                placeholder="خرید بسته اینترنت"/>

            <!-- setting 2 select -->
            <x-form.select
                name="company_id"
                label="شرکت/کسب و کار"
                description="این هزینه جزو هزینه های کدام شرکت/کسب و کار می ‌باشد" >
                @foreach( $companies as $company )
                    <option value="{{ $company->id }}">{{$company->company_name}}</option>
                @endforeach
            </x-form.select>

            <!-- setting 3 text -->
            <x-form.input
                name="expense_price"
                type="number"
                label="مبلغ هزینه"
                description="مبلغ هزینه شده به تومان"
                placeholder="11500 تومان"/>

            <!-- setting 4 text -->
            <x-form.input
                name="expense_purchaser"
                label="خریدار"
                description="نام شخص خریدار کالا/خدمات"
                placeholder="میثم جوادی"/>

            <!-- setting 5 textarea -->
            <x-form.textarea
                name="expense_description"
                label="توضیحات"
                description="توضیحات مرتبط با این هزینه یا پیگیری های مورد نیاز"
                rows="5"
                placeholder="توضیحات خرید (اختیاری)"/>

            <!-- setting 6 select -->
            <x-form.select
                name="expense_payment_status"
                label="وضعیت پرداخت"
                description="وضعیت پرداختی این هزینه تنخواه" >
                @foreach( \App\Enums\PaymentStatus::cases() as $paymentStatus )
                    <option value="{{ $paymentStatus->name }}">{{$paymentStatus->value}}</option>
                @endforeach
            </x-form.select>

            <!-- mobile submit -->
            <div
                class="lg:hidden flex justify-end gap-3 mt-5">
                <x-form.submit/>
                <x-form.cancel href="/expenses"/>
            </div>
        </form>
    </div>
</x-layout>
