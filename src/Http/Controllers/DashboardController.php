<?php

namespace Breuermarcel\Survey\Http\Controllers;

use Breuermarcel\Survey\Models\Survey;

class DashboardController extends Controller
{
    public function index()
    {
        $survey = Survey::all();

        return view("survey::default")->with(["survey"=> $survey]);
    }

    public function show()
    {

    }

    public function create()
    {
    }

    public function store()
    {
    }

    public function edit()
    {
    }

    public function destroy()
    {
    }
}
