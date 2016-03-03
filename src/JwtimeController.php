<?php

namespace Jwdaily\Timezones;

use App\Http\Controllers\Controller;
use Carbon\Carbon;


class JwtimeController extends Controller
{
	public function index($timezone=NULL)
	{
		$time = ($timezone) ? Carbon::now(str_replace('-', '/', $timezone)) :Carbon::now();
		echo $time->toDateTimeString();
		return view('timezones::time', compact('time'));
		//echo __DIR__;
	}
}