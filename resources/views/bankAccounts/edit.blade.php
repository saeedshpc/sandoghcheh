<x-layout>
    <!-- Form -->
    <div class="py-6 px-4">
        <form
            action="/cards/{{$bankAccount->id}}"
            class="flex flex-col gap-5 text-gray-700 border dark:border-gray-600 p-6 rounded-xl"
            method="POST"
        >
            @csrf
            @method('PATCH')
            {{-- Form Header--}}
            <x-form.header
                :title="'ویرایش حساب : '.$bankAccount->account_name"
                description="در این صفحه حساب یا کارت بانکی جدیدی را ثبت می‌نمایید."
                cancel_href="/cards"
            />

            <!-- setting 1 text -->
            <x-form.input
                name="account_name"
                label="نام حساب"
                description="عنوان استفاده این حساب یا کارت بانکی"
                placeholder="کارت تنخواه بانوریس..."
                :value="old('account_name', $bankAccount->account_name)"
            />

            <!-- setting 2 text -->
            <x-form.input
                name="account_usage"
                label=" استفاده حساب"
                description="از این حساب برای چه مصارفی استفاده می‌شود"
                placeholder="خریدهای شرکت بانوریس"
                :value="old('account_usage', $bankAccount->account_usage)"
            />

            <!-- setting 3 text -->
            <x-form.input
                name="account_bank_name"
                label="نام بانک"
                description="نام بانک این حساب یا کارت"
                placeholder="ملی"
                :value="old('account_bank_name', $bankAccount->account_bank_name)" />

            <!-- setting 4 text -->
            <x-form.input
                name="account_owner"
                label="دارنده حساب"
                description="نام مالک این حساب یا کارت بانکی"
                placeholder="سعید شیخ الاسلامی"
                :value="old('account_owner', $bankAccount->account_owner)"/>

            <!-- setting 5 text -->
            <x-form.input
                name="account_number"
                label="شماره حساب"
                description="شماره حساب بانکی"
                placeholder="0322822822009"
                :value="old('account_number', $bankAccount->account_number)"/>

            <!-- setting 6 text -->
            <x-form.input
                name="account_card_number"
                label="شماره کارت"
                description="شماره کارت بانکی"
                placeholder="6037998119485349"
                :value="old('account_card_number', $bankAccount->account_card_number)"
                :seperator="false"/>

            <!-- mobile submit -->
            <div
                class="lg:hidden flex justify-end gap-3 mt-5">
                <x-form.submit/>
                <x-form.cancel href="/cards"/>
            </div>
        </form>
    </div>
</x-layout>
