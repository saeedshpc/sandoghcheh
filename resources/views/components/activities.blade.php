@foreach($activities as $activiy)
    @php
        $borderColor = '';
        $textColor = '';
        switch($activiy->event->value) {
            case 'افزودن':
                $borderColor = 'border-green-300';
                $textColor= 'text-green-600 dark:text-green-400';
                break;
            case 'ویرایش':
                $borderColor = 'border-purple-300';
                $textColor= 'text-purple-500 dark:text-purple-400';
                break;
            case 'حذف':
                $borderColor = 'border-blue-300';
                $textColor= 'text-red-500 dark:text-blue-400';
                break;
        }

    @endphp
    <li class="h-8 border-r-4 {{$borderColor}} pr-2">
        <a href="#" class="{{$textColor}}"
        >{{ $activiy->event_info }}</a
        > توسط {{ $activiy->user->firstName ?? 'کاربر حذف شده' .' ' . $activiy->user?->lastName }}
        <span class="text-xs text-gray-400">{{$activiy->created_at->diffForHumans()}}</span>
    </li>
@endforeach
