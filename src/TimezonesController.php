<?php

namespace Biswassinchann\Timezones;

use App\Http\Controllers\Controller;
use Carbon\Carbon;

class TimezonesController extends Controller
{

    public function index($timezone=null)
    {
        $time = ($timezone)
            ? Carbon::now(str_replace('-', '/', $timezone))
            : Carbon::now();
        echo $time->toDateTimeString();
    }

}
