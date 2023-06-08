<x-layout>
    <!-- Form -->
    <div class="py-6 px-4">
        <form
            action="/advertisingExpenses/{{$expense->id}}"
            class="flex flex-col gap-5 text-gray-700 border dark:border-gray-600 p-6 rounded-xl"
            method="POST"
            enctype="multipart/form-data"
        >
            @csrf
            @method('PATCH')
            {{-- Form Header--}}
            <x-form.header
                title="ویرایش تبلیغات: {{ $expense->title }}"
                description="در این صفحه اطلاعات تبلیغات را ویرایش می‌نمایید."
                cancel_href="/advertisingExpenses"
            />

            <!-- input 1 text -->
            <x-form.input
                name="title"
                label="عنوان هزینه"
                description="این هزینه برای کدام تبلیغ ثبت می‌شود؟"
                placeholder="تبلیغ کمپین یلدا..."
                :value="old('title', $expense->title)"/>


            <!-- input 2 select -->
            <x-form.select
                name="company_id"
                label="شرکت/کسب و کار"
                description="این هزینه جزو هزینه های کدام شرکت/کسب و کار می ‌باشد" >
                @foreach( $companies as $company )
                    <option value="{{ $company->id }}"
                    {{old('company_id', $expense->company_id) == $company->id ? 'selected' : ''}}>{{$company->name}}</option>
                @endforeach
            </x-form.select>

            <!-- input 3 text -->
            <x-form.input
                name="price"
                label="مبلغ هزینه"
                description="مبلغ هزینه شده به تومان"
                placeholder="11500 تومان"
                :value="old('price', $expense->price)"/>

            <!-- input 4 textarea -->
            <x-form.textarea
                name="description"
                label="توضیحات"
                description="توضیحات مرتبط با این هزینه یا پیگیری های مورد نیاز"
                rows="5"
                placeholder="توضیحات سفارش (اختیاری)">{{old('description', $expense->description)}}
            </x-form.textarea>

            <!-- input 5 select -->
            <x-form.select
                name="advertiser_id"
                label="مجری تبلیغ"
                description="این تبلیغ توسط کدام مجری انجام شده است" >
                @foreach( $advertisers as $advertiser )
                    <option value="{{ $advertiser->id }}"
                        {{old('advertiser_id', $expense->advertiser_id) == $advertiser->id ? 'selected' : ''}}>{{$advertiser->name}}</option>
                @endforeach
            </x-form.select>

            <!-- input 6 select -->
            <x-form.select
                name="advertising_media"
                label="رسانه تبلیغاتی"
                description="این تبلیغ توسط چه بستری انجام شده است" >
                @foreach( \App\Enums\AdvertisingMedia::cases() as $advertisingMedia )
                    <option value="{{ $advertisingMedia->value }}"
                        {{old('advertising_media', $expense->advertising_media->value) == $advertisingMedia->value ? 'selected' : ''}}>{{$advertisingMedia->value}}</option>
                @endforeach
            </x-form.select>

            <!-- input 7 select -->
            <x-form.select
                name="bank_account_id"
                label="حساب بانکی پرداختی"
                description="هزینه این خرید از کدام حساب بانکی یا کارت بانکی انجام شده است" >
                @foreach( $bankAccounts as $bankAccount )
                    <option value="{{ $bankAccount->id }}"
                        {{old('bank_account_id', $expense->bank_account_id) == $bankAccount->id ? 'selected' : ''}}>{{$bankAccount->name}}</option>
                @endforeach
            </x-form.select>

            <!-- input 8 select -->
            <x-form.select
                name="payment_status"
                label="وضعیت پرداخت"
                description="وضعیت پرداخت این تبلیغ" >
                @foreach( \App\Enums\PaymentStatus::cases() as $paymentStatus )
                    <option value="{{ $paymentStatus->value }}"
                        {{old('payment_status', $expense->payment_status->value) == $paymentStatus->value ? 'selected' : ''}}>{{$paymentStatus->value}}</option>
                @endforeach
            </x-form.select>

            <!-- input 9 dateTime -->
            <x-form.input
                type="datetime-local"
                dir="ltr"
                name="purchased_date"
                label="تاریخ پرداخت"
                description="تاریخ واریز هزینه تبلیغ"
                :value="old('purchased_date', $expense->purchased_date)"
            />

            <!-- input 10 file -->
            <x-form.file
                name="invoice_image"
                dir="ltr"
                label="تصویر فیش پرداختی"
                description="تصویر فیش پرداختی این سفارش"
            />

            @if($expense->invoice_image ?? false)
                <!-- test new template for images -->
                <div class="relative mt-4 group overflow-hidden w-1/4">
                    <img
                        class="border rounded p-4 shadow-md hover:scale-110 duration-300"
                        src="{{asset('storage/'. $expense->invoice_image)}}"
                    />
                    <div
                        class="hidden group-hover:flex gap-1 duration-200 absolute top-2 right-2"
                    >
                        @php
                            // to check if it's a valid request from edit page
                            $randomNumber = str()->random(24);
                            session()->flash('imageDeleteHash', $randomNumber)
                        @endphp
                        <a
                            class="flex items-center justify-center w-[32px] h-[32px] rounded-full text-white bg-red-500 hover:bg-red-600 duration-200"
                            href="{{ route('delete-image', ['model' => 'advertisingExpense', 'recordId' => $expense->id, 'hash' => $randomNumber]) }}"
                        ><x-icon name="trash" class="w-4 h-4" /></a
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

            <!-- mobile submit -->
            <div
                class="lg:hidden flex justify-end gap-3 mt-5">
                <x-form.submit/>
                <x-form.cancel href="/advertisingExpenses"/>
            </div>
        </form>
    </div>
</x-layout>
