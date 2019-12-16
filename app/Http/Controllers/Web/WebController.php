<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WebController extends Controller
{
    protected $viewPath = "site.";

    public function __construct()
    {}

    public function index()
    {
        return view($this->viewPath."index");
    }
}
