<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SurveysController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('pages.survey.createSurvey');
    }
    public function showListofSurveys(){
        return view('pages.survey.listOfSurvey');
    }
}
