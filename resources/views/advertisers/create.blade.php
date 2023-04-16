<x-layout>
    <!-- Form -->
    <div class="py-6 px-4">
        <form
            action="/advertisers"
            class="flex flex-col gap-5 text-gray-700 border dark:border-gray-600 p-6 rounded-xl"
            method="POST"
        >
            @csrf
            {{-- Form Header--}}
            <x-form.header
                title="افزودن مجری تبلیغات"
                description="در این صفحه فرد یا شرکت مجری تبلیغات را اضافه کنید."
                cancel_href="/advertisers"
            />

            <!-- setting 1 text -->
            <x-form.input
                name="name"
                label="نام مجری"
                description="نام شرکت یا فرد مجری تبلیغات"
                placeholder="شرکت یکتانت"/>

            <!-- setting 2 text -->
            <x-form.input
                name="work_area"
                label="حوزه فعالیت"
                description="حوزه فعالیت این کسب و کار یا شرکت"
                placeholder="تبلیغات کلیکی وب و موبایل"
                :seperator="false"
            />

            <!-- mobile submit -->
            <div
                class="lg:hidden flex justify-end gap-3 mt-5">
                <x-form.submit/>
                <x-form.cancel href="/advertisers"/>
            </div>
        </form>
    </div>
</x-layout>
