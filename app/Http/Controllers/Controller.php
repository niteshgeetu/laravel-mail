<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use \App\Jobs\TestEmailJob;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
public function index()
{
 $details['email'] = '<EMAIL ADDRESS>';
 $details = ['email' => 'nitish@geekinformatic.com'];

    dispatch(new  TestEmailJob($details));
    return response()->json(['message'=>'Mail Send Successfully!!']);
}
}
