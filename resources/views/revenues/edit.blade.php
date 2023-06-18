<x-layout createButtonHref="/revenues/create">
    <!-- Form -->
    <div class="py-6 px-4">
        <form
            action="/revenues/{{$revenue->id}}"
            class="flex flex-col gap-5 text-gray-700 border dark:border-gray-600 p-6 rounded-xl"
            method="POST"
        >
            @csrf
            @method('PATCH')
            {{-- Form Header--}}
            <x-form.header
                title="ویرایش درآمد: {{$revenue->company->name}} در {{$revenue->month_of_year}}"
                description="در این صفحه درآمد کسب و کار خود را ویرایش کنید."
                cancel_href="/revenues"
            />


            <!-- input 1 select -->
            <x-form.select
                name="company_id"
                label="نام کسب و کار"
                description="این درآمد متعلق به کدام کسب و کار است." >
                @foreach( $companies as $company )
                    <option value="{{ $company->id }}"
                     {{old('company_id', $revenue->company_id) == $company->id ? 'selected' : ''}}>{{$company->name}}</option>
                @endforeach
            </x-form.select>

            <!-- input 2 select -->
            <x-form.select
                name="month_of_year"
                label="ماه سال"
                description="این درآمد متعلق به کدام ماه در سال است" >
                @foreach( \App\Enums\MonthOfYear::cases() as $monthOfYear )
                    <option value="{{ $monthOfYear->value }}"
                        {{old('month_of_year', $revenue->month_of_year->value) == $monthOfYear->value ? 'selected' : ''}} >{{$monthOfYear->value}}</option>
                @endforeach
            </x-form.select>

            <!-- input 3 text -->
            <x-form.input
                name="total_sale"
                label="جمع فروش ماه"
                description="جمع فروش این ماه به تومان"
                placeholder="73/000/000 تومان"
                :value="old('total_sale', $revenue->total_sale)"/>

            <!-- input 4 text -->
            <x-form.input
                name="online_sale_share"
                label="سهم فروش آنلاین"
                description="سهم فروش آنلاین از فروش کل ماه به تومان"
                placeholder="51/000/000 تومان"
                :value="old('online_sale_share', $revenue->online_sale_share)"/>

            <!-- input 5 text -->
            <x-form.input
                name="offline_sale_share"
                label="سهم فروش آفلاین"
                description="سهم فروش آفلاین از فروش کل ماه به تومان"
                placeholder="12/000/000 تومان"
                :value="old('offline_sale_share', $revenue->offline_sale_share)" />

            <!-- input 6 textarea -->
            <x-form.textarea
                name="description"
                label="توضیحات"
                description="توضیحات مرتبط با این هزینه یا پیگیری های مورد نیاز"
                rows="5"
                placeholder="توضیحات درآمد (اختیاری)">{{old('description', $revenue->description)}}
            </x-form.textarea>


            <!-- mobile submit -->
            <div
                class="lg:hidden flex justify-end gap-3 mt-5">
                <x-form.submit/>
                <x-form.cancel href="/revenues"/>
            </div>
        </form>
    </div>
</x-layout>
