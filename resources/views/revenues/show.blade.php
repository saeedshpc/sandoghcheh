<x-layout>
    <!-- report section -->
    <div class="py-6 px-4">
        <div
            class="flex flex-col gap-5 text-gray-700 border dark:border-gray-600 p-6 rounded-xl"
        >
            <x-show.header
            title="{{$revenue->name}}"
            description="در این صفحه اطلاعات درآمد کسب و کار را مشاهده می نمایید."
            cancel_href="/revenues"
            edit_href="/revenues/{{$revenue->id}}/edit"
            />
            <!-- data 1 -->
            <x-show.data
            label="نام کسب و کار"
            description="این درآمد متعلق به کدام کسب و کار است.">
                {{$revenue->company->name}}
            </x-show.data>

            <!-- data 2  -->
            <x-show.data
                label="ماه سال"
                description="این درآمد متعلق به کدام ماه در سال است">
                    {{ $revenue->month_of_year }}
            </x-show.data>

            <!-- data 3  -->
            <x-show.data
                label="جمع فروش ماه"
                description="جمع فروش این ماه به تومان">
                {{ $revenue->total_sale }}
            </x-show.data>

            <!-- data 4  -->
            <x-show.data
                label="سهم فروش آنلاین"
                description="سهم فروش آنلاین از فروش کل ماه به تومان">
                {{ $revenue->online_sale_share }}
            </x-show.data>

            <!-- data 5  -->
            <x-show.data
                label="سهم فروش آفلاین"
                description="سهم فروش آفلاین از فروش کل ماه به تومان">
                {{ $revenue->offline_sale_share }}
            </x-show.data>

            <!-- data 6  -->
            <x-show.data
                label="توضیحات"
                description="توضیحات مرتبط با این هزینه یا پیگیری های مورد نیاز">
                {{ $revenue->description }}
            </x-show.data>

            <!-- mobile actions -->
            <div class="lg:hidden flex justify-end gap-3 mt-5">
                <x-show.edit-button href="/revenues/{{$revenue->id}}/edit" />
                <x-form.cancel href="/revenues" />
            </div>
        </div>
    </div>
</x-layout>
