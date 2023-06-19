<x-layout createButtonHref="/users/create">
    <!-- report section -->
    <div class="py-6 px-4">
        <div
            class="flex flex-col gap-5 text-gray-700 border dark:border-gray-600 p-6 rounded-xl"
        >
            <x-show.header
                title="{{$user->title}}"
                description="در این صفحه اطلاعات کاربر سامانه را مشاهده می‌نمایید."
                cancel_href="/users"
                edit_href="/users/{{$user->id}}/edit"
            />
            <!-- data 1 -->
            <x-show.data
                label="نام"
                description="نام کامل کاربر در سامانه">
                {{$user->firstName}} {{$user->lastName}}
            </x-show.data>

            <!-- data 2  -->
            <x-show.data
                label="آدرس ایمیل"
                description="ایمیل کاربر در سامانه">
                {{ $user->email }}
            </x-show.data>

            <!-- data 3  -->
            <x-show.data
                label="محل خدمت"
                description="نام شرکت یا کسب و کاری که کاربر در آن شاغل است">
                {{ $user->company->name }}
            </x-show.data>

            <!-- data 4  -->
            <x-show.data
                label="عنوان شغلی"
                description="عنوان شغلی کاربر سامانه در محل خدمت">
                {{ $user->position }}
            </x-show.data>

            <!-- data 5  -->
            <x-show.data
                label="نام کاربری"
                description="نام کاربری برای ورود به صندوقچه ( به انگلیسی )">
                {{$user->username}}
            </x-show.data>

            <!-- data 6  -->
            <x-show.data
                label="سطح دسترسی"
                description="سطح دسترسی کاربر در صندوقچه">
                {{$user->access_level}}
            </x-show.data>

            <!-- div 7  -->
            <x-show.invoice :object="$user" />

            <!-- mobile actions -->
            <div class="lg:hidden flex justify-end gap-3 mt-5">
                <x-show.edit-button href="/users/{{$user->id}}/edit" />
                <x-form.cancel href="/users" />
            </div>
        </div>
    </div>
</x-layout>
