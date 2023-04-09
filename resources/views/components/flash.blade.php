@if(session()->has('message'))
    <div x-data="{show: true}"
         x-init="setTimeout(()=> show = false, 4000)"
         x-show="show"
         class="fixed text-sm bottom-4 right-4 flex items-center gap-4 px-8 py-3 bg-blue-500 text-white rounded-xl shadow-xl"
    >
        <p>{{ session('message') }}</p>
        <div class="animate-ping pb-2 pl-2 rounded-full bg-white"></div>
    </div>
@endif
