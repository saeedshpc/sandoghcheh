<x-layout>
    <!-- Form -->
    <div class="py-6 px-4">
        <form
            action="/expenses/{{$expense->id}}"
            class="flex flex-col gap-5 text-gray-700 border dark:border-gray-600 p-6 rounded-xl"
            method="POST"
            enctype="multipart/form-data"
        >
            @csrf
            @method('PATCH')

            {{-- Form Header--}}
            <x-form.header
                title="ویرایش هزینه تنخواه : {{ $expense->expense_title }}"
                description="در این صفحه هزینه جدید برای تنخواه شرکت ها ثبت می‌نمایید."
                cancel_href="/expenses"
            />

            <!-- setting 1 text -->
            <x-form.input
                name="expense_title"
                label="عنوان هزینه"
                description="این هزینه برای خرید چه کالا یا سرویسی ثبت می‌شود؟"
                placeholder="خرید بسته اینترنت"
                :value="old('expense_title', $expense->expense_title)" />

            <!-- setting 2 select -->
            <x-form.select
                name="company_id"
                label="شرکت/کسب و کار"
                description="این هزینه جزو هزینه های کدام شرکت/کسب و کار می ‌باشد" >
                @foreach( $companies as $company )
                    <option
                        value="{{ $company->id }}"
                        {{old('company_id', $expense->company_id) == $company->id ? 'selected' : ''}}>
                        {{$company->company_name}}</option>
                @endforeach
            </x-form.select>

            <!-- setting 3 text -->
            <x-form.input
                name="expense_price"
                label="مبلغ هزینه"
                description="مبلغ هزینه شده به تومان"
                placeholder="11500 تومان"
                :value="old('expense_price', $expense->expense_price )"/>

            <!-- setting 4 text -->
            <x-form.input
                name="expense_purchaser"
                label="خریدار"
                description="نام شخص خریدار کالا/خدمات"
                placeholder="میثم جوادی"
                :value="old('expense_purchaser', $expense->expense_purchaser)"/>

            <!-- setting 5 textarea -->
            <x-form.textarea
                name="expense_description"
                label="توضیحات"
                description="توضیحات مرتبط با این هزینه یا پیگیری های مورد نیاز"
                rows="5"
                placeholder="توضیحات خرید (اختیاری)">
                {{ old('expense_description', $expense->expense_description) }}
            </x-form.textarea>

            <!-- setting 6 select -->
            <x-form.select
                name="expense_payment_status"
                label="وضعیت پرداخت"
                description="وضعیت پرداختی این هزینه تنخواه" >
                @foreach( \App\Enums\PaymentStatus::cases() as $paymentStatus )
                    <option
                        value="{{ $paymentStatus->value }}"
                        {{old('expense_payment_status', $expense->expense_payment_status->value) == $paymentStatus->value ? 'selected' : ''}} >
                        {{$paymentStatus->value}}</option>
                @endforeach
            </x-form.select>

            <!-- setting 7 select -->
            <x-form.select
                name="bank_account_id"
                label="حساب بانکی پرداختی"
                description="هزینه این خرید از کدام حساب بانکی یا کارت بانکی انجام شده است" >
                @foreach( $bankAccounts as $bankAccount )
                    <option
                        value="{{ $bankAccount->id }}"
                        {{old('bank_account_id', $expense->bank_account_id) == $bankAccount->id ? 'selected' :''}} >
                        {{$bankAccount->account_name}}</option>
                @endforeach
            </x-form.select>

            <!-- setting 8 dateTime -->
            <x-form.input
                type="datetime-local"
                dir="ltr"
                name="expense_purchased_date"
                label="تاریخ خرید"
                description="تاریخ خرید کالا یا خدمات"
                :value="old('expense_purchased_date', $expense->expense_purchased_date)"
            />

            <!-- setting 8 file -->
            <div class="flex">
                <div class="flex-1">
                    <x-form.file
                        name="expense_invoice_image"
                        dir="ltr"
                        label="تصویر فاکتور یا فیش پرداختی"
                        description="تصویر فاکتور یا فیش پرداختی این هزینه"
                        :seperator="false"
                    />
                </div>

                @if($expense->expense_invoice_image ?? false)
                    <a href="{{asset('storage/'. $expense->expense_invoice_image)}}" target="_blank">
                        <img src="{{asset('storage/'. $expense->expense_invoice_image)}}" width="100" alt="">
                    </a>
                @endif
            </div>


            <!-- mobile submit -->
            <div
                class="lg:hidden flex justify-end gap-3 mt-5">
                <x-form.submit/>
                <x-form.cancel href="/expenses"/>
            </div>
        </form>
    </div>
</x-layout>
