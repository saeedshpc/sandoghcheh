<x-layout createButtonHref="/users/create" createButtonText="افزودن کاربر">
    <!-- Form -->
    <div class="py-6 px-4">
        <form
            action="/users"
            class="flex flex-col gap-5 text-gray-700 border dark:border-gray-600 p-6 rounded-xl"
            method="POST"
            enctype="multipart/form-data"
        >
            @csrf
            {{-- Form Header--}}
            <x-form.header
                title="ثبت کاربر سامانه جدید"
                description="در این صفحه کاربر جدید برای سامانه ثبت می‌نمایید."
                cancel_href="/users"
            />

            <!-- input 1 text -->
            <x-form.input
                name="firstName"
                label="نام"
                description="نام کوچک کاربر سامانه"
                placeholder="سعید"/>

            <!-- input 2 text -->
            <x-form.input
                name="lastName"
                label="نام خانوادگی"
                description="نام خانوادگی کاربر سامانه"
                placeholder="شیخ الاسلامی"/>

            <!-- input 2 text -->
            <x-form.input
                type="email"
                name="email"
                label="آدرس ایمیل"
                description="ایمیل کاربر در سامانه"
                placeholder="saeed.shpc@gmail.com"/>

            <!-- input 3 select -->
            <x-form.select
                name="company_id"
                label="محل خدمت"
                description="نام شرکت یا کسب و کاری که کاربر در آن شاغل است" >
                @foreach( $companies as $company )
                    <option value="{{ $company->id }}">{{$company->name}}</option>
                @endforeach
            </x-form.select>

            <!-- input 4 text -->
            <x-form.input
                name="position"
                label="عنوان شغلی"
                description="عنوان شغلی کاربر سامانه در محل خدمت"
                placeholder="برنامه نویس..."/>

            <!-- input 5 text -->
            <x-form.input
                name="username"
                label="نام کاربری"
                description="نام کاربری برای ورود به صندوقچه ( به انگلیسی )"
                placeholder="myUserName"/>

            <!-- input 6 text -->
            <x-form.input
                type="password"
                name="password"
                label="رمز عبور"
                description="رمز عبور برای ورود به صندوقچه"
                placeholder="hgJl@1?pw58A1bm"/>

            <!-- input 7 select -->
            <x-form.select
                name="access_level"
                label="سطح دسترسی"
                description="سطح دسترسی کاربر در صندوقچه" >
                @foreach( \App\Enums\AccessLevels::cases() as $accessLevel )
                    <option value="{{ $accessLevel->value }}">{{$accessLevel->value}}</option>
                @endforeach
            </x-form.select>

            <!-- input 8 file -->
            <x-form.file
                name="image"
                dir="ltr"
                label="تصویر پروفایل"
                description="تصویر پروفایل کاربر"
            />

            <!-- mobile submit -->
            <div
                class="lg:hidden flex justify-end gap-3 mt-5">
                <x-form.submit/>
                <x-form.cancel href="/users"/>
            </div>
        </form>
    </div>
</x-layout>
