<x-layout createButtonHref="/users/create" createButtonText="افزودن کاربر">
    <!-- buttons and header -->
    <div
        class="flex flex-col md:flex-row md:items-center justify-between gap-4 py-6 px-2 md:px-4"
    >
        <x-reports-title title="مدیریت کاربران سامانه" :records="$users->count()"/>
        <x-reports-filter/>
    </div>

    <!-- table and pagination -->
    <div id="table-pagination-div">
        <!-- tables -->
        <x-table>
            <x-slot name="tableHeader">
                <x-table-th>کد</x-table-th>
                <x-table-th>نام</x-table-th>
                <x-table-th>نام کاربری</x-table-th>
                <x-table-th>محل خدمت	</x-table-th>
                <x-table-th>عنوان شغلی</x-table-th>
                <x-table-th>سطح دسترسی</x-table-th>
                <x-table-th>تاریخ ثبت نام</x-table-th>
                <x-table-th></x-table-th>
            </x-slot>
            @foreach($users as $user)
                <x-table-row>
                    <x-table-td><a class="hover:text-blue-500 duration-200" href="/users/{{$user->id}}">{{$user->id}}</a></x-table-td>
                    <x-table-td><a class="hover:text-blue-500 duration-200" href="/users/{{$user->id}}">{{$user->firstName .' ' .  $user->lastName}}</a></x-table-td>
                    <x-table-td>{{$user->username}}</x-table-td>
                    <x-table-td>{{$user->company?->name}}</x-table-td>
                    <x-table-td>{{$user->position}}</x-table-td>
                    <x-table-td>{{$user->access_level}}</x-table-td>
                    <x-table-td dir="ltr">{{$user->created_at}}</x-table-td>


                    <x-table-td>
                        <div class="lg:invisible group-hover:visible">
                            <div
                                class="flex items-center justify-around gap-4 md:gap-2 w-full"
                            >
                                <a
                                    href="/users/{{$user->id}}/edit"
                                    class="hover:text-greenOne dark:hover:text-green-400"
                                >
                                    <x-icon name="pencil" class="w-5 h-5" />
                                </a>
                                <form
                                    action="/users/{{$user->id}}"
                                    class="flex items-center justify-center"
                                    method="POST" >
                                    @csrf
                                    @method('DELETE')
                                    <button class="hover:text-greenOne dark:hover:text-green-400">
                                        <x-icon name="trash" class="w-5 h-5" />
                                    </button>
                                </form>
                            </div>
                        </div>
                    </x-table-td>

                </x-table-row>
            @endforeach

        </x-table>

        <!-- pagination -->
        <div>
            {{ $users->links() }}
        </div>
    </div>
</x-layout>
