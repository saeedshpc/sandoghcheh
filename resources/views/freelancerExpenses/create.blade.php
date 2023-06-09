<x-layout>
    <!-- Form -->
    <div class="py-6 px-4">
        <form
            action="/freelancerExpenses"
            class="flex flex-col gap-5 text-gray-700 border dark:border-gray-600 p-6 rounded-xl"
            method="POST"
            enctype="multipart/form-data"
        >
            @csrf
            {{-- Form Header--}}
            <x-form.header
                title="ثبت هزینه برای فریلسنر"
                description="در این صفحه هزینه جدید برای فریلنسر ها ثبت می‌نمایید."
                cancel_href="/freelancerExpenses"
            />


            <!-- input 1 select -->
            <x-form.select
                name="freelancer_id"
                label="نام فریلنسر"
                description="نام فریلنسر را انتخاب کنید" >
                @foreach( $freelancers as $freelancer )
                    <option value="{{ $freelancer->id }}">{{$freelancer->fullName}}</option>
                @endforeach
            </x-form.select>

            <!-- input 2 text -->
            <x-form.input
                name="title"
                label="عنوان هزینه"
                description="این هزینه برای چه خدمات یا سرویسی ثبت می‌شود؟"
                placeholder="سفارش طراحی لوگو"/>

            <!-- input 3 text -->
            <x-form.input
                name="price"
                label="مبلغ هزینه"
                description="مبلغ هزینه شده به تومان"
                placeholder="11500 تومان"/>

            <!-- input 4 textarea -->
            <x-form.textarea
                name="description"
                label="توضیحات"
                description="توضیحات مرتبط با این هزینه یا پیگیری های مورد نیاز"
                rows="5"
                placeholder="توضیحات سفارش (اختیاری)">
            </x-form.textarea>

            <!-- input 5 select -->
            <x-form.select
                name="bank_account_id"
                label="حساب بانکی پرداختی"
                description="هزینه این خرید از کدام حساب بانکی یا کارت بانکی انجام شده است" >
                @foreach( $bankAccounts as $bankAccount )
                    <option value="{{ $bankAccount->id }}">{{$bankAccount->name}}</option>
                @endforeach
            </x-form.select>

            <!-- input 6 select -->
            <x-form.select
                name="payment_status"
                label="وضعیت پرداخت"
                description="وضعیت پرداخت این سفارش" >
                @foreach( \App\Enums\PaymentStatus::cases() as $paymentStatus )
                    <option value="{{ $paymentStatus->value }}">{{$paymentStatus->value}}</option>
                @endforeach
            </x-form.select>

            <!-- input 7 dateTime -->
            <x-form.input
                type="datetime-local"
                dir="ltr"
                name="purchased_date"
                label="تاریخ پرداخت"
                description="تاریخ واریز هزینه سفارش"
            />

            <!-- input 8 file -->
            <x-form.file
                name="image"
                dir="ltr"
                label="تصویر فیش پرداختی"
                description="تصویر فیش پرداختی این سفارش"
            />

            <!-- mobile submit -->
            <div
                class="lg:hidden flex justify-end gap-3 mt-5">
                <x-form.submit/>
                <x-form.cancel href="/freelancerExpenses"/>
            </div>
        </form>
    </div>
</x-layout>
