<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LifeCycleTestController extends Controller
{
    //
    public function showServiceContainerTest()
    {
        app()->bind('LifeCycleTest', function () {
            return 'ライフサイクルテスト';
        });

        $test = app()->make('LifeCycleTest');

        dd($test, app());
    }
}
