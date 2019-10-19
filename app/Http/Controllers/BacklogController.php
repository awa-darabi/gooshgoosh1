<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BacklogController extends Controller
{
    public function index()
    {
        return view('backlog/backlog');
    }

    public function store(TasksRequest $request): RedirectResponse
    {
        $task = Task::create(
        	$request->only(
        		[
        			'title',
			        'who',
			        'ticketNo',
			        'userId',
			        'definition'
			    ]
        	)
        );

        echo 'success';
    }
}
