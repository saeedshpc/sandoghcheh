<x-layout>
    <!-- report section -->
    <div class="py-6 px-4">
        <div
            class="flex flex-col gap-5 text-gray-700 border dark:border-gray-600 p-6 rounded-xl"
        >
            <x-show.header
            title="{{$freelancer->name}}"
            description="در این صفحه اطلاعات فریلنسر را مشاهده می نمایید."
            cancel_href="/freelancers"
            edit_href="/freelancers/{{$freelancer->id}}/edit"
            />
            <!-- data 1 -->
            <x-show.data
            label="نام"
            description="نام فریلنسر جدید">
                {{$freelancer->fullName}}
            </x-show.data>

            <!-- data 2 -->
            <x-show.data
                label="تخصص"
                description="حوزه فعالیت و ارائه خدمات">
                    {{ $freelancer->expertise }}
            </x-show.data>

            <!-- data 3 -->
            <x-show.data
                label="بانک"
                description="نام بانک دارنده حساب">
                {{ $freelancer->bank }}
            </x-show.data>

            <!-- data 4 -->
            <x-show.data
                label="شماره حساب"
                description="شماره حساب بانکی">
                {{ $freelancer->bank_account_number }}
            </x-show.data>

            <!-- data 5 -->
            <x-show.data
                label=" شماره کارت "
                description="شماره کارت بانکی">
                {{ $freelancer->card_number }}
            </x-show.data>

            <!-- mobile actions -->
            <div class="lg:hidden flex justify-end gap-3 mt-5">
                <x-show.edit-button href="/freelancers/{{$freelancer->id}}/edit" />
                <x-form.cancel href="/freelancers" />
            </div>
        </div>
    </div>
</x-layout>
