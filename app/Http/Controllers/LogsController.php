<?php

namespace App\Http\Controllers;

use App\Models\Logs;
use App\Models\Projects;
use App\Http\Requests\StoreLogsRequest;
use App\Http\Requests\UpdateLogsRequest;
use Illuminate\Support\Facades\Auth;

class LogsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($project_api_key)
    { {
            $user = Auth::user();
            //dd($user);
            $user_id = $user->id;
            //$project_for_user = Projects::all()->where('user_id', "=", $user_id);


            $project = Projects::all()->where('user_id', "=", $user_id)->where('project_api_key', "=", $project_api_key)->first();
            $logs_paginated = Logs::all()->where('project_id', '=', $project->id);
            return view('log-views', compact('logs_paginated'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLogsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Logs $logs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Logs $logs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLogsRequest $request, Logs $logs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Logs $logs)
    {
        //
    }
}
