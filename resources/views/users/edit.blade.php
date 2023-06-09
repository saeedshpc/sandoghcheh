<x-layout>
    <!-- Form -->
    <div class="py-6 px-4">
        <form
            action="/users/{{$user->id}}"
            class="flex flex-col gap-5 text-gray-700 border dark:border-gray-600 p-6 rounded-xl"
            method="POST"
            enctype="multipart/form-data"
        >
            @csrf
            @method('PATCH')
            {{-- Form Header--}}
            <x-form.header
                title="ویرایش اطلاعات کاربر: {{ $user->firstName .' '. $user->lastName }}"
                description="در این صفحه کاربر جدید برای سامانه ثبت می‌نمایید."
                cancel_href="/users"
            />

            <!-- input 1 text -->
            <x-form.input
                name="firstName"
                label="نام"
                description="نام کوچک کاربر سامانه"
                placeholder="سعید"
                :value="old('firstName', $user->firstName)"/>

            <!-- input 2 text -->
            <x-form.input
                name="lastName"
                label="نام خانوادگی"
                description="نام خانوادگی کاربر سامانه"
                placeholder="شیخ الاسلامی"
                :value="old('lastName', $user->lastName)"/>

            <!-- input 2 text -->
            <x-form.input
                type="email"
                name="email"
                label="آدرس ایمیل"
                description="ایمیل کاربر در سامانه"
                placeholder="saeed.shpc@gmail.com"
                :value="old('email', $user->email)"/>

            <!-- input 3 select -->
            <x-form.select
                name="company_id"
                label="محل خدمت"
                description="نام شرکت یا کسب و کاری که کاربر در آن شاغل است" >
                @foreach( $companies as $company )
                    <option value="{{ $company->id }}"
                    {{old('company_id', $user->company_id) == $company->id ? 'selected' : ''}}>{{$company->name}}</option>
                @endforeach
            </x-form.select>

            <!-- input 4 text -->
            <x-form.input
                name="position"
                label="عنوان شغلی"
                description="عنوان شغلی کاربر سامانه در محل خدمت"
                placeholder="برنامه نویس..."
                :value="old('position', $user->position)"/>

            <!-- input 5 text -->
            <x-form.input
                name="username"
                label="نام کاربری"
                description="نام کاربری برای ورود به صندوقچه ( به انگلیسی )"
                placeholder="myUserName"
                :value="old('username', $user->username)"/>

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
                    <option value="{{ $accessLevel->value }}"
                        {{old('access_level', $user->access_level->value) == $accessLevel->value ? 'selected' : ''}}>{{$accessLevel->value}}</option>
                @endforeach
            </x-form.select>

            <!-- input 8 file -->
            <x-form.file
                name="image"
                dir="ltr"
                label="تصویر پروفایل"
                description="تصویر پروفایل کاربر"
            />

            @if($user->image ?? false)
                <!-- test new template for images -->
                <div class="relative mt-4 group overflow-hidden w-1/4">
                    <img
                        class="border rounded p-4 shadow-md hover:scale-110 duration-300"
                        src="{{asset('storage/'. $user->image)}}"
                    />
                    <div
                        class="hidden group-hover:flex gap-1 duration-200 absolute top-2 right-2"
                    >
                        @php
                            // to check if it's a valid request from edit page
                            $randomNumber = str()->random(24);
                            session()->flash('imageDeleteHash', $randomNumber)
                        @endphp
                        <a
                            class="flex items-center justify-center w-[32px] h-[32px] rounded-full text-white bg-red-500 hover:bg-red-600 duration-200"
                            href="/users/{{$user->id}}/image/{{$randomNumber }}"
                        ><x-icon name="trash" class="w-4 h-4" /></a
                        >

                        <a
                            class="flex items-center justify-center w-[32px] h-[32px] rounded-full text-white bg-blue-500 hover:bg-blue-600 duration-200"
                            href="{{asset('storage/'. $user->image)}}"
                            target="_blank"
                        >
                            <x-icon name="magnifier" class="w-4 h-4" />

                        </a>
                    </div>
                </div>
            @endif

            <!-- mobile submit -->
            <div
                class="lg:hidden flex justify-end gap-3 mt-5">
                <x-form.submit/>
                <x-form.cancel href="/users"/>
            </div>
        </form>
    </div>
</x-layout>
