<?php

namespace App\Http\Controllers;

use App\Jobs\CreateUser;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Render index page.
     *
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function index()
    {
        for ($i = 0; $i <= 10; $i++) {
            dispatch(
                (new CreateUser())->onQueue('default')
                    ->delay(Carbon::now()->addSeconds(60 * $i))
            );
        }

        return response('Success');
    }
}
