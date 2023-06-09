<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageDeletionController extends Controller
{
    public function __invoke($model, $recordId, $hash): RedirectResponse
    {
        //  find the model
        $modelClass = 'App\Models\\' . ucfirst($model);
        //   check if the model exists
        if (!class_exists($modelClass)) {
            abort(404);
        }

        //  find the record in the model
        $record = $modelClass::findOrFail($recordId);


        // check if it is a valid request that has been sent from edit page
        if ($hash !== session('imageDeleteHash')) {
            abort(404);
        }

        if (!is_null($record->image)) {
            Storage::delete($record->image);
            $record->update([
                'image' => null
            ]);

            $message = 'تصویر فاکتور از این هزینه حذف شد.';
        } else {
            $message = 'تصویری در دیتابیس ثبت نشده است';
        }


        return back()->with([
            'message' => $message
        ]);
    }
}
