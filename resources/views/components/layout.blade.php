<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link
        href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@400;700&display=swap"
        rel="stylesheet"
    />
    <script src="/js/script.js" defer></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.0/dist/cdn.min.js"></script>
    <title>صندوقچه</title>
{{--    <link rel="stylesheet" href="/css/style.css"/>--}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<section>
    <div class="grid grid-cols-12 min-h-screen">
        <!-- activites -->
       @include('layout._activities-panel')
        <!-- main part -->
        <main
            dir="rtl"
            class="bg-white dark:bg-slate-800 border-x border-gray-100 dark:border-gray-600 col-span-12 md:col-span-9 sml:col-span-6 xl:col-span-8 px-4"
        >
            <!-- use profile -->
            <div
                class="flex md:hidden items-center justify-around my-5 dark:text-white"
            >
                <!-- mobile menu button -->
                <div class="block z-50">
                    <button type="buton" id="menu-btn" class="block z-10 hamburger">
                        <span class="hamburger-top dark:bg-white"></span>
                        <span class="hamburger-middle dark:bg-white"></span>
                        <span class="hamburger-bottom dark:bg-white"></span>
                    </button>
                </div>
                <div>
                    <h3><strong>سلام الهه</strong></h3>
                    <p class="text-xs">کارشناس فروش و ارتباطات</p>
                    <!-- <a href="#" class="text-xs font-bold hover:text-red-400">خروج</a> -->
                </div>
                <img
                    src="/images/user-profile.jpg"
                    class="w-1/5 rounded-full dark:border-2 dark:border-white"
                    alt=""
                />
            </div>

            <!-- search and create -->
            <header
                class="flex items-center justify-between gap-4 border-b border-gray-100 py-6 px-4"
            >
                <div
                    class="group flex flex-1 w-full bg-white dark:bg-slate-700 p-2 px-4 rounded-lg border  border-gray-200 dark:border-gray-600 focus-within:border-[#0b9b82] duration-200 "
                >
                    <input
                        type="text"
                        placeholder="جستجو..."
                        class="w-full focus:outline-none text-xs dark:bg-slate-700 dark:text-white"
                    />
                    <x-icon name="magnifier" class="w-6 h-6 group-focus-within:text-[#0b9b82]"/>
                </div>

                <a href="{{ $createButtonHref ?? '/expenses/create' }}"
                   class="p-3 px-6 rounded-lg bg-[#0b9b82] text-white duration-200 hover:bg-[#32bba4] text-sm"
                >{{ $createButtonText ?? 'افزودن هزینه' }}</a>

                <a
                    href="#"
                    class="p-2 px-2 rounded-lg bg-white dark:bg-slate-700 dark:text-white border dark:border-gray-600 hover:bg-gray-100 dark:hover:bg-gray-600 duration-200 text-sm"
                >
                    <x-icon name="pencil" class="w-6 h-6"/>
                </a>
            </header>
            {{$slot}}
        </main>

        <!-- SideBar menu -->
        @include('layout._menu-panel')
        <!-- mobile menu -->
       @include('layout._mobile-menu')
    </div>
</section>
<x-flash/>
</body>
</html>
