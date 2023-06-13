@props(['object', 'model'])
@if($object->image ?? false)
    <!-- test new template for images -->
    <div class="relative mt-4 group overflow-hidden w-1/4">
        <img
            class="border rounded p-4 shadow-md hover:scale-110 duration-300"
            src="{{asset('storage/'. $object->image)}}"
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
                href="{{ route('delete-image', ['model' => $model, 'recordId' => $object->id, 'hash' => $randomNumber]) }}"
            ><x-icon name="trash" class="w-4 h-4" /></a
            >

            <a
                class="flex items-center justify-center w-[32px] h-[32px] rounded-full text-white bg-blue-500 hover:bg-blue-600 duration-200"
                href="{{asset('storage/'. $object->image)}}"
                target="_blank"
            >
                <x-icon name="magnifier" class="w-4 h-4" />

            </a>
        </div>
    </div>
@endif
