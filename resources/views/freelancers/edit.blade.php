<x-layout createButtonHref="/freelancers/create" createButtonText="افزودن فریلنسر">
    <!-- Form -->
    <div class="py-6 px-4">
        <form
            action="/freelancers/{{$freelancer->id}}"
            class="flex flex-col gap-5 text-gray-700 border dark:border-gray-600 p-6 rounded-xl"
            method="POST"
        >
            @csrf
            @method('PATCH')

            {{-- Form Header--}}
            <x-form.header
                title="ویرایش اطلاعات : {{ $freelancer->fullName }}"
                description="در این صفحه همکار فریلنسر جدیدی ثبت می‌نمایید."
                cancel_href="/freelancers"
            />

            <!-- input 1 text -->
            <x-form.input
                name="fullName"
                label="نام"
                description="نام فریلنسر جدید"
                placeholder="بهروز جوادی"
                :value="old('fullName', $freelancer->fullName)"/>

            <!-- input 2 text -->
            <x-form.input
                name="expertise"
                label="تخصص"
                description="حوزه فعالیت و ارائه خدمات"
                placeholder="تولید کننده محتوا"
                :value="old('expertise', $freelancer->expertise)"/>

            <!-- input 3 text -->
            <x-form.input
                name="bank"
                label="بانک"
                description="نام بانک دارنده حساب"
                placeholder="ملی"
                :value="old('bank', $freelancer->bank)"/>


            <!-- input 4 text -->
            <x-form.input
                name="bank_account_number"
                label="شماره حساب"
                description="شماره حساب بانکی"
                placeholder="0322822822009(اختیاری)"
                :value="old('bank_account_number', $freelancer->bank_account_number)"/>

            <!-- input 5 text -->
            <x-form.input
                name="card_number"
                label="شماره کارت"
                description="شماره کارت بانکی"
                placeholder="6037998119485349"
                :value="old('card_number', $freelancer->card_number)"/>


            <!-- mobile submit -->
            <div
                class="lg:hidden flex justify-end gap-3 mt-5">
                <x-form.submit/>
                <x-form.cancel href="/freelancers"/>
            </div>
        </form>
    </div>
</x-layout>
