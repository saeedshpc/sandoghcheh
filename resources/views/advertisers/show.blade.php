<x-layout>
    <!-- report section -->
    <div class="py-6 px-4">
        <div
            class="flex flex-col gap-5 text-gray-700 border dark:border-gray-600 p-6 rounded-xl"
        >
            <x-show.header
            title="{{$advertiser->name}}"
            description="در این صفحه اطلاعات مجری تبلیغات را مشاهده می نمایید."
            cancel_href="/advertisers"
            edit_href="/advertisers/{{$advertiser->id}}/edit"
            />
            <!-- div 1 -->
            <x-show.data
            label="نام مجری"
            description="نام شرکت یا فرد مجری تبلیغات">
                {{$advertiser->name}}
            </x-show.data>

            <!-- div 2  select -->
            <x-show.data
                label=" حوزه فعالیت "
                description=" حوزه فعالیت این کسب و کار یا شرکت">
                    {{ $advertiser->work_area }}
            </x-show.data>
            <!-- mobile actions -->
            <div class="lg:hidden flex justify-end gap-3 mt-5">
                <x-show.edit-button href="/advertisers/{{$advertiser->id}}/edit" />
                <x-form.cancel href="/advertisers" />
            </div>
        </div>
    </div>
</x-layout>
