<x-layout createButtonHref="/companies/create" createButtonText="افزودن کسب و کار">
    <!-- Form -->
    <div class="py-6 px-4">
        <form
            action="/companies/{{$company->id}}"
            class="flex flex-col gap-5 text-gray-700 border dark:border-gray-600 p-6 rounded-xl"
            method="POST"
        >
            @csrf
            @method('PATCH')
            {{-- Form Header--}}
            <x-form.header
                :title=" 'ویرایش کسب و کار : '. $company->name"
                description="در این صفحه اطلاعات کسب و کار را ویرایش میکنید."
                cancel_href="/companies"
            />

            <!-- setting 1 text -->
            <x-form.input
                name="name"
                label=" نام شرکت یا کسب و کار"
                description=" نام برند کسب کار یا شرکت "
                placeholder="بانوریس"
                :value="old('name', $company->name)"
            />

            <!-- setting 2 text -->
            <x-form.input
                name="work_area"
                label=" حوزه فعالیت "
                description=" حوزه فعالیت این کسب و کار یا شرکت "
                placeholder="فروش خرد یا عمده پارچه"
                :value="old('work_area', $company->work_area)"
                :seperator="false"/>
            <!-- mobile submit -->
            <div
                class="lg:hidden flex justify-end gap-3 mt-5">
                <x-form.submit/>
                <x-form.cancel href="/companies"/>
            </div>
        </form>
    </div>
</x-layout>
