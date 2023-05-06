@props(['title' => 'عنوان','middleType' => null, 'middleValue' => 'متن وسط', 'below' => 'متن پایین', 'active' => false])

@php
    $boxClasses = "w-full md:w-[49%] xl:w-full py-4 px-4 rounded-lg md:h-32 border duration-200 border-white";
    $middle = '';
        switch ($middleType) {
            case 'expense':
                $middle = "$middleValue تومان ";
                break;
            case 'people':
                $middle = "$middleValue نفر ";
                break;
            case 'advertiser':
                 $middle = "$middleValue مجری ";
                 break;
            case 'media':
                 $middle = "$middleValue رسانه ";
                 break;
            default:
                 $middle = 'متن وسط';
        }

        if($active) {
            $boxClasses .= " bg-gradient-to-b from-[#13bda0] to-[#0b9b82] hover:border-blue-300";
        } else {
            $boxClasses .= " bg-gray-100 dark:bg-slate-700 dark:border-gray-600 dark:hover:border-gray-400 hover:border-gray-200";
        }


@endphp

<div class="{{ $boxClasses }}">
    <p class="{{ $active ? 'text-white' : 'text-gray-600' }} dark:text-white mb-1">
        {{ $title }}
    </p>
    <p class="{{ $active ? 'text-white' : 'text-gray-800' }} dark:text-white text-sm font-bold mb-1">
        {{ $middle }}
    </p>
    <p class="{{ $active ? 'text-white' : 'text-gray-600' }} text-xs">از 500/000</p>
</div>
