<x-layout createButtonHref="/advertisers/create" createButtonText="افزودن مجری">
    <!-- Form -->
    <div class="py-6 px-4">
        <form
            action="/advertisers/{{$advertiser->id}}"
            class="flex flex-col gap-5 text-gray-700 border dark:border-gray-600 p-6 rounded-xl"
            method="POST"
        >
            @csrf
            @method('PATCH')
            {{-- Form Header--}}
            <x-form.header
                :title=" 'ویرایش اطلاعات مجری : '. $advertiser->name"
                description="در این صفحه اطلاعات مجری تبلیغات را ویرایش میکنید."
                cancel_href="/advertisers"
            />

            <!-- setting 1 text -->
            <x-form.input
                name="name"
                label=" نام شرکت یا کسب و کار"
                description="نام شرکت یا فرد مجری تبلیغات"
                placeholder="شرکت یکتانت"
                :value="old('name', $advertiser->name)"
            />

            <!-- setting 2 text -->
            <x-form.input
                name="work_area"
                label=" حوزه فعالیت "
                description=" حوزه فعالیت این کسب و کار یا شرکت "
                placeholder="تبلیغات کلیکی وب و موبایل"
                :value="old('work_area', $advertiser->work_area)"
                :seperator="false"/>
            <!-- mobile submit -->
            <div
                class="lg:hidden flex justify-end gap-3 mt-5">
                <x-form.submit/>
                <x-form.cancel href="/advertisers"/>
            </div>
        </form>
    </div>
</x-layout>
