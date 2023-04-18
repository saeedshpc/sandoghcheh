<x-layout>
    <!-- Form -->
    <div class="py-6 px-4">
        <form
            action="/settings"
            class="flex flex-col gap-5 text-gray-700 border dark:border-gray-600 p-6 rounded-xl"
            method="POST"
        >
            @csrf
            @method('PATCH')
            {{-- Form Header--}}
            <x-form.header
                title="تنظیمات پروفایل"
                description="در این صفحه تنظیمات داشبورد را اعمال کنید."
                cancel_href="/settings"
            />


            <!-- input 1 text -->
            <x-form.input
                name="banoris_expenses_budget"
                label="بودجه تنخواه بانوریس"
                description="بودجه ماهانه کارت تنخواه بانوریس، مبلغ فعلی : {{$setting->banoris_expenses_budget}} تومان"
                placeholder="تنخواه بانوریس..."
                :value="old('banoris_expenses_budget', $setting->banoris_expenses_budget)"/>

            <!-- input 2 text -->
            <x-form.input
                name="toucan_expenses_budget"
                label="بودجه تنخواه توکان"
                description="بودجه ماهانه کارت تنخواه توکان، مبلغ فعلی : {{$setting->toucan_expenses_budget}} تومان"
                placeholder="تنخواه توکان..."
                :value="old('toucan_expenses_budget', $setting->toucan_expenses_budget)"/>

            <!-- input 3 text -->
            <x-form.input
                name="freelancers_budget"
                label="بودجه فریلنسرها"
                description="بودجه ماهانه فریلنسرها، مبلغ فعلی : {{$setting->freelancers_budget}} تومان"
                placeholder="بودجه فریلنسرها..."
                :value="old('freelancers_budget', $setting->freelancers_budget)"/>

            <!-- input 4 text -->
            <x-form.input
                name="advertising_budget"
                label="بودجه تبلیغات شرکت ها"
                description="بودجه ماهانه تبلیغات، مبلغ فعلی : {{$setting->advertising_budget}} تومان"
                placeholder="بودجه تبلیغات..."
                :value="old('advertising_budget', $setting->advertising_budget)"/>




            <!-- mobile submit -->
            <div
                class="lg:hidden flex justify-end gap-3 mt-5">
                <x-form.submit/>
                <x-form.cancel href="/settings"/>
            </div>
        </form>
    </div>
</x-layout>
