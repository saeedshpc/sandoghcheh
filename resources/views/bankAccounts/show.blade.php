<x-layout createButtonHref="/cards/create">
    <!-- report section -->
    <div class="py-6 px-4">
        <div
            class="flex flex-col gap-5 text-gray-700 border dark:border-gray-600 p-6 rounded-xl"
        >
            <x-show.header
            title="{{$bankAccount->name}}"
            description="در این صفحه اطلاعات حساب بانکی را مشاهده می نمایید."
            cancel_href="/cards"
            edit_href="/cards/{{$bankAccount->id}}/edit"
            />

            <!-- data 1 -->
            <x-show.data
            label="نام حساب"
            description="عنوان استفاده این حساب یا کارت بانکی">
                {{$bankAccount->name}}
            </x-show.data>

            <!-- data 2 -->
            <x-show.data
                label="استفاده حساب"
                description="از این حساب برای چه مصارفی استفاده می‌شود">
                    {{ $bankAccount->usage }}
            </x-show.data>

            <!-- data 3 -->
            <x-show.data
                label="نام بانک"
                description="نام بانک این حساب یا کارت">
                {{$bankAccount->bank_name}}
            </x-show.data>

            <!-- data 4 -->
            <x-show.data
                label="دارنده حساب"
                description="نام مالک این حساب یا کارت بانکی">
                {{ $bankAccount->owner }}
            </x-show.data>

            <!-- data 5 -->
            <x-show.data
                label="شماره حساب"
                description="شماره حساب بانکی">
                {{$bankAccount->number}}
            </x-show.data>

            <!-- data 6 -->
            <x-show.data
                label=" شماره کارت "
                description="شماره کارت بانکی">
                {{ $bankAccount->card_number }}
            </x-show.data>

            <!-- mobile actions -->
            <div class="lg:hidden flex justify-end gap-3 mt-5">
                <x-show.edit-button href="/cards/{{$bankAccount->id}}/edit" />
                <x-form.cancel href="/cards" />
            </div>
        </div>
    </div>
</x-layout>
