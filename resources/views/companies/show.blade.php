<x-layout createButtonHref="/cards/create">
    <!-- report section -->
    <div class="py-6 px-4">
        <div
            class="flex flex-col gap-5 text-gray-700 border dark:border-gray-600 p-6 rounded-xl"
        >
            <x-show.header
            title="{{$company->name}}"
            description="در این صفحه اطلاعات شرکت را مشاهده می نمایید."
            cancel_href="/companies"
            edit_href="/companies/{{$company->id}}/edit"
            />
            <!-- div 1 -->
            <x-show.data
            label=" نام شرکت یا کسب و کار"
            description=" نام برند کسب کار یا شرکت ">
                {{$company->name}}
            </x-show.data>

            <!-- div 2  select -->
            <x-show.data
                label=" حوزه فعالیت "
                description=" حوزه فعالیت این کسب و کار یا شرکت">
                    {{ $company->work_area }}
            </x-show.data>
            <!-- mobile actions -->
            <div class="lg:hidden flex justify-end gap-3 mt-5">
                <x-show.edit-button href="/companies/{{$company->id}}/edit" />
                <x-form.cancel href="/companies" />
            </div>
        </div>
    </div>
</x-layout>
