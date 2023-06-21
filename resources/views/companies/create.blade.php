<x-layout createButtonHref="/companies/create">
    <!-- Form -->
    <div class="py-6 px-4">
        <form
            action="/companies"
            class="flex flex-col gap-5 text-gray-700 border dark:border-gray-600 p-6 rounded-xl"
            method="POST"
        >
            @csrf
            {{-- Form Header--}}
            <x-form.header
                title="افزودن شرکت جدید"
                description="در این صفحه شرکت یا کسب و کار جدیدی ثبت می‌نمایید."
                cancel_href="/companies"
            />

            <!-- setting 1 text -->
            <x-form.input
                name="name"
                label="نام شرکت یا کسب و کار"
                description="نام برند کسب کار یا شرکت"
                placeholder="بانوریس"/>

            <!-- setting 2 text -->
            <x-form.input
                name="work_area"
                label="حوزه فعالیت"
                description="حوزه فعالیت این کسب و کار یا شرکت"
                placeholder="فروش خرد یا عمده پارچه"
                :seperator="false"
            />

            <!-- mobile submit -->
            <div
                class="lg:hidden flex justify-end gap-3 mt-5">
                <x-form.submit/>
                <x-form.cancel href="/companies"/>
            </div>
        </form>
    </div>
</x-layout>
