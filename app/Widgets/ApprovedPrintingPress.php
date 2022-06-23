<?php

namespace App\Widgets;

use App\Models\ApprovedPrintingPress as ModelsApprovedPrintingPress;
use App\Models\Person;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use TCG\Voyager\Widgets\BaseDimmer;

class ApprovedPrintingPress extends BaseDimmer
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count = ModelsApprovedPrintingPress::count();
        $string = 'Approved Printing Press';

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-file-text',
            'title'  => "{$count} {$string}",
            'text'   => __('voyager::dimmer.page_text', ['count' => $count, 'string' => Str::lower($string)]),
            'button' => [
                'text' => 'View all Appreoved Printing Press',
                'link' => route('voyager.approved-printing-presses.index'),
            ],
            'image' => voyager_asset('images/widget-backgrounds/03.jpg'),
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return true;
    }
}