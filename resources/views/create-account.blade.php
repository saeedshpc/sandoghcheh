<x-layout>
    <!-- Form -->
    <div class="py-6 px-4">
        <form
            action="#"
            class="flex flex-col gap-5 text-gray-700 border dark:border-gray-600 p-6 rounded-xl"
            method="POST"
        >
            <div
                class="flex flex-col items-start justify-between lg:flex-row lg:items-center"
            >
                <div>
                    <h2 class="text-lg font-bold mb-2 dark:text-gray-100">
                        افزودن حساب بانکی جدید
                    </h2>
                    <p class="text-gray-500 text-sm dark:text-gray-300">
                        در این صفحه حساب یا کارت بانکی جدیدی را ثبت می‌نمایید.
                    </p>
                </div>
                <div class="hidden lg:flex">
                    <button
                        type="submit"
                        class="p-2 px-8 rounded-lg ml-2 bg-slate-900 text-white duration-200 hover:bg-slate-700 text-sm dark:bg-slate-600 dark:border dark:border-gray-300"
                    >
                        ذخیره
                    </button>
                    <a
                        href="#"
                        class="p-2 px-2 rounded-lg bg-white border hover:bg-gray-100 duration-200 text-sm"
                    >انصراف</a
                    >
                </div>
            </div>
            <div
                class="pb-1 border-b border-gray-100 mx-10 dark:border-gray-700"
            ></div>
            <!-- setting 1 text -->
            <div
                class="flex flex-col gap-4 items-start justify-between lg:flex-row lg:items-center lg:gap-0"
            >
                <div>
                    <h3 class="text-md font-bold mb-2 dark:text-gray-100">
                        نام حساب
                    </h3>
                    <p class="text-gray-500 text-sm dark:text-gray-300">
                        عنوان استفاده این حساب یا کارت بانکی
                    </p>
                </div>
                <div class="w-full lg:w-auto">
                    <input
                        type="text"
                        placeholder="   کارت تنخواه بانوریس..."
                        class="w-full lg:w-96 dark:text-white bg-white focus:outline-none text-sm p-4 px-4 rounded-lg border border-gray-200 focus:border-[#0b9b82] focus:outline focus:outline-green-100 dark:bg-slate-700"
                    />
                </div>
            </div>
            <div
                class="pb-1 border-b border-gray-100 mx-10 dark:border-gray-700"
            ></div>

            <!-- setting 2 text -->
            <div
                class="flex flex-col gap-4 items-start justify-between lg:flex-row lg:items-center lg:gap-0"
            >
                <div>
                    <h3 class="text-md font-bold mb-2 dark:text-gray-100">
                        استفاده حساب
                    </h3>
                    <p class="text-gray-500 text-sm dark:text-gray-300">
                        از این حساب برای چه مصارفی استفاده می‌شود
                    </p>
                </div>
                <div class="w-full lg:w-auto">
                    <input
                        type="text"
                        placeholder="خریدهای شرکت بانوریس"
                        class="w-full lg:w-96 dark:text-white bg-white focus:outline-none text-sm p-4 px-4 rounded-lg border border-gray-200 focus:border-[#0b9b82] focus:outline focus:outline-green-100 dark:bg-slate-700"
                    />
                </div>
            </div>
            <div
                class="pb-1 border-b border-gray-100 mx-10 dark:border-gray-700"
            ></div>
            <!-- setting 3 text -->
            <div
                class="flex flex-col gap-4 items-start justify-between lg:flex-row lg:items-center lg:gap-0"
            >
                <div>
                    <h3 class="text-md font-bold mb-2 dark:text-gray-100">
                        نام بانک
                    </h3>
                    <p class="text-gray-500 text-sm dark:text-gray-300">
                        نام بانک این حساب یا کارت
                    </p>
                </div>
                <div class="w-full lg:w-auto">
                    <input
                        type="text"
                        placeholder="ملی"
                        class="w-full lg:w-96 dark:text-white bg-white focus:outline-none text-sm p-4 px-4 rounded-lg border border-gray-200 focus:border-[#0b9b82] focus:outline focus:outline-green-100 dark:bg-slate-700"
                    />
                </div>
            </div>
            <div
                class="pb-1 border-b border-gray-100 mx-10 dark:border-gray-700"
            ></div>
            <!-- setting 4 text -->
            <div
                class="flex flex-col gap-4 items-start justify-between lg:flex-row lg:items-center lg:gap-0"
            >
                <div>
                    <h3 class="text-md font-bold mb-2 dark:text-gray-100">
                        دارنده حساب
                    </h3>
                    <p class="text-gray-500 text-sm dark:text-gray-300">
                        نام مالک این حساب یا کارت بانکی
                    </p>
                </div>
                <div class="w-full lg:w-auto">
                    <input
                        type="text"
                        placeholder="سعید شیخ الاسلامی"
                        class="w-full lg:w-96 dark:text-white bg-white focus:outline-none text-sm p-4 px-4 rounded-lg border border-gray-200 focus:border-[#0b9b82] focus:outline focus:outline-green-100 dark:bg-slate-700"
                    />
                </div>
            </div>
            <div
                class="pb-1 border-b border-gray-100 mx-10 dark:border-gray-700"
            ></div>
            <!-- setting 5 text -->
            <div
                class="flex flex-col gap-4 items-start justify-between lg:flex-row lg:items-center lg:gap-0"
            >
                <div>
                    <h3 class="text-md font-bold mb-2 dark:text-gray-100">
                        شماره حساب
                    </h3>
                    <p class="text-gray-500 text-sm dark:text-gray-300">
                        شماره حساب بانکی
                    </p>
                </div>
                <div class="w-full lg:w-auto">
                    <input
                        type="text"
                        placeholder="0322822822009"
                        class="w-full lg:w-96 dark:text-white bg-white focus:outline-none text-sm p-4 px-4 rounded-lg border border-gray-200 focus:border-[#0b9b82] focus:outline focus:outline-green-100 dark:bg-slate-700"
                    />
                </div>
            </div>
            <div
                class="pb-1 border-b border-gray-100 mx-10 dark:border-gray-700"
            ></div>
            <!-- setting 6 text -->
            <div
                class="flex flex-col gap-4 items-start justify-between lg:flex-row lg:items-center lg:gap-0"
            >
                <div>
                    <h3 class="text-md font-bold mb-2 dark:text-gray-100">
                        شماره کارت
                    </h3>
                    <p class="text-gray-500 text-sm dark:text-gray-300">
                        شماره کارت بانکی
                    </p>
                </div>
                <div class="w-full lg:w-auto">
                    <input
                        type="text"
                        placeholder="6037998119485349"
                        class="w-full lg:w-96 dark:text-white bg-white focus:outline-none text-sm p-4 px-4 rounded-lg border border-gray-200 focus:border-[#0b9b82] focus:outline focus:outline-green-100 dark:bg-slate-700"
                    />
                </div>
            </div>
            <div
                class="pb-1 border-b border-gray-100 mx-10 dark:border-gray-700"
            ></div>

            <!-- mobile submit -->
            <div class="lg:hidden flex justify-end gap-3 mt-5">
                <button
                    type="submit"
                    class="p-2 px-8 rounded-lg ml-2 bg-slate-900 text-white duration-200 hover:bg-slate-700 text-sm dark:bg-slate-600 dark:border dark:border-gray-300"
                >
                    ذخیره
                </button>
                <a
                    href="#"
                    class="p-2 px-2 rounded-lg bg-white border hover:bg-gray-100 duration-200 text-sm"
                >انصراف</a
                >
            </div>
        </form>
    </div>
</x-layout>
