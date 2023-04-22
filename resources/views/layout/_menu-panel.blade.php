<aside
    dir="rtl"
    class="hidden md:block bg-white col-span-3 xl:col-span-2 py-6 px-2 lg:px-6 dark:bg-slate-800 dark:text-white"
>
    <img src="/images/logo.png" class="scale-50 -mt-5" alt=""/>
    <h2 class="text-center -mt-4 font-bold text-xl mb-1">صندوقچه</h2>
    <p class="text-xs tb:text-sm text-center">
        سامانه مالی توکان تجارت آرسس
    </p>

    <!-- menu 1 -->
    <div class="mt-10 mr-2 xl:10 text-xs tb:text-sm">
        <ul
            class="flex flex-col gap-6 font-bold text-gray-400 dark:text-gray-300"
        >
            <li class="{{ request()->is('expenses') ? 'text-gray-800 dark:text-white font-bold' : 'hover:text-gray-800 dark:hover:text-gray-400' }}">
                <a href="/expenses" class="flex items-center gap-2">
                   <x-icon name="home" />
                    <span>داشبورد</span></a
                >
            </li>
            <li
                class="{{ request()->is('expenses') ? 'text-gray-800 dark:text-white font-bold' : 'hover:text-gray-800 dark:hover:text-gray-400' }}"
            >
                <a
                    href="/expenses"
                    class="flex items-center gap-2"
                >
                    <x-icon name="expenses" />
                    <span>مدیریت تنخواه</span></a
                >
            </li>
            <li class="{{ request()->is('freelancerExpenses') ? 'text-gray-800 dark:text-white font-bold' : 'hover:text-gray-800 dark:hover:text-gray-400' }}">
                <a
                    href="/freelancerExpenses"
                    class="flex items-center gap-2"
                >
                   <x-icon name="freelancerExpense" />
                    <span>مدیریت فریلسنرها</span></a
                >
            </li>
            <li class="{{ request()->is('advertisingExpenses') ? 'text-gray-800 dark:text-white font-bold' : 'hover:text-gray-800 dark:hover:text-gray-400' }}">
                <a href="/advertisingExpenses" class="flex items-center gap-2">
                    <x-icon name="advertismentExpense" />
                    <span>مدیریت تبلیغات</span></a
                >
            </li>
        </ul>
    </div>
    <div class="border-b-2 border-b-gray-100 my-10 mx-3"></div>
    <!-- menu 2 -->
    <div class="mt-10 mr-2 xl:10 text-xs tb:text-sm">
        <ul
            class="flex flex-col gap-6 font-bold text-gray-400 dark:text-gray-300"
        >
            <li class="{{ request()->is('settings') ? 'text-gray-800 dark:text-white font-bold' : 'hover:text-gray-800 dark:hover:text-gray-400' }}">
                <a href="/settings" class="flex items-center gap-2">
                    <x-icon name="setting" />
                    <span>تنظیمات</span></a
                >
            </li>
            <li class="{{ request()->is('companies') ? 'text-gray-800 dark:text-white font-bold' : 'hover:text-gray-800 dark:hover:text-gray-400' }}">
                <a href="/companies" class="flex items-center gap-2">
                    <x-icon name="companies" />
                    <span>مدیریت شرکت‌ها</span></a
                >
            </li>

            <li class="{{ request()->is('cards') ? 'text-gray-800 dark:text-white font-bold' : 'hover:text-gray-800 dark:hover:text-gray-400' }}">
                <a href="/cards" class="flex items-center gap-2">
                    <x-icon name="bankAccounts"/>
                    <span>مدیریت حساب‌های بانکی</span></a
                >
            </li>
            <li class="{{ request()->is('freelancers') ? 'text-gray-800 dark:text-white font-bold' : 'hover:text-gray-800 dark:hover:text-gray-400' }}">
                <a href="/freelancers" class="flex items-center gap-2">
                   <x-icon name="freelancers" />
                    <span>همکاران فریلنسر</span></a
                >
            </li>
        </ul>
    </div>
    <div class="border-b-2 border-b-gray-100 my-10 mx-3"></div>
    <!-- menu 3 -->
    <div class="mt-10 mr-2 xl:10 text-xs tb:text-sm">
        <ul
            class="flex flex-col gap-6 font-bold text-gray-400 dark:text-gray-300"
        >
            <li class="{{ request()->is('revenues') ? 'text-gray-800 dark:text-white font-bold' : 'hover:text-gray-800 dark:hover:text-gray-400' }}">
                <a href="/revenues" class="flex items-center gap-2">
                    <x-icon name="revenues" />
                    <span>درآمد و نقدینگی</span></a
                >
            </li>
            <li class="{{ request()->is('advertisers') ? 'text-gray-800 dark:text-white font-bold' : 'hover:text-gray-800 dark:hover:text-gray-400' }}">
                <a href="/advertisers" class="flex items-center gap-2">
                    <x-icon name="advertisers" />

                    <span>مجریان تبلیغات</span></a
                >
            </li>
            <li class="{{ request()->is('activities') ? 'text-gray-800 dark:text-white font-bold' : 'hover:text-gray-800 dark:hover:text-gray-400' }}">
                <a href="/activities" class="flex items-center gap-2">
                    <x-icon name="activities" />
                    <span>فعالیت‌ها</span></a
                >
            </li>
            <li class="{{ request()->is('users') ? 'text-gray-800 dark:text-white font-bold' : 'hover:text-gray-800 dark:hover:text-gray-400' }}">
                <a href="/users" class="flex items-center gap-2">
                    <x-icon name="users" />
                    <span>مدیریت کاربران سامانه</span></a
                >
            </li>
        </ul>
    </div>
</aside>
