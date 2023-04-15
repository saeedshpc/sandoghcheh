<x-layout>
    <!-- Form -->
    <div class="py-6 px-4">
        <form
            action="/cards"
            class="flex flex-col gap-5 text-gray-700 border dark:border-gray-600 p-6 rounded-xl"
            method="POST"
        >
            @csrf
            {{-- Form Header--}}
            <x-form.header
                title="افزودن حساب بانکی جدید"
                description="در این صفحه حساب یا کارت بانکی جدیدی را ثبت می‌نمایید."
                cancel_href="/cards"
            />

            <!-- setting 1 text -->
            <x-form.input
                name="name"
                label="نام حساب"
                description="عنوان استفاده این حساب یا کارت بانکی"
                placeholder="   کارت تنخواه بانوریس..."/>

            <!-- setting 2 text -->
            <x-form.input
                name="usage"
                label=" استفاده حساب"
                description="از این حساب برای چه مصارفی استفاده می‌شود"
                placeholder="خریدهای شرکت بانوریس"/>

            <!-- setting 3 text -->
            <x-form.input
                name="bank_name"
                label="نام بانک"
                description="نام بانک این حساب یا کارت"
                placeholder="ملی"/>

            <!-- setting 4 text -->
            <x-form.input
                name="owner"
                label="دارنده حساب"
                description="نام مالک این حساب یا کارت بانکی"
                placeholder="سعید شیخ الاسلامی"/>

            <!-- setting 5 text -->
            <x-form.input
                name="number"
                label="شماره حساب"
                description="شماره حساب بانکی"
                placeholder="0322822822009"/>

            <!-- setting 6 text -->
            <x-form.input
                name="card_number"
                label="شماره کارت"
                description="شماره کارت بانکی"
                placeholder="6037998119485349"
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
