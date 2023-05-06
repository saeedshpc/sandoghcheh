@props([
    'title' => 'عنوان',
    'middleType' => null,
    'middleValue' => 'متن وسط',
    'bottomType' => null,
    'bottomValue' => 'متن پایین',
    'active' => false])

@php
    $boxClasses = "w-full md:w-[49%] xl:w-full py-4 px-4 rounded-lg md:h-32 border duration-200 border-white";
    $middleText = '';
    $bottomText = '';

        switch ($middleType) {
            case 'expense':
                $middleText = "$middleValue تومان ";
                break;
            case 'people':
                $middleText = "$middleValue نفر ";
                break;
            case 'advertiser':
                 $middleText = "$middleValue مجری ";
                 break;
            case 'media':
                 $middleText = "$middleValue رسانه ";
                 break;
            default:
                 $middleText = 'متن وسط';
        }

        switch ($bottomType) {
            case 'fromExpense':
                $bottomText = "از $bottomValue تومان ";
                break;
            case 'monthlyBudget':
                $bottomText = "بودجه ماهانه: $bottomValue تومان";
                break;
            case 'freelancer':
                $bottomText = "به $bottomValue فریلنسر";
                break;
            case 'advertiser':
                 $bottomText = "به $bottomValue مجری";
                 break;
            case 'topAdvertiser':
                 $bottomText = "برترین مجری بر اساس تعداد تبلیغات: $bottomValue";
                 break;
            case 'topMedia':
                 $bottomText = "برترین رسانه بر اساس تعداد تبلیغات: $bottomValue";
                 break;
            case 'yearTotalSale':
                 $bottomText = "فروش امسال: $bottomValue";
                 break;
            case 'inDays':
                 $bottomText = "در $bottomValue روز";
                 break;
            default:
                 $bottomText = '';
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
        {{ $middleText }}
    </p>

    <p class="{{ $active ? 'text-white' : 'text-gray-600' }} text-xs">
        {{ $bottomText }}
    </p>

</div>
