<?php

namespace App\Http\Controllers;

use App\Jobs\FailingJob;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FailingJobController extends Controller
{
    public function __invoke(Request $request): Response
    {
        FailingJob::dispatch();

        return response(['status' => 'dispatched']);
    }
}


