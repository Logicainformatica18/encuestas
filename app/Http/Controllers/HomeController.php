<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Survey;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');


    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      return redirect('perfil');
    }
    public function sistema()
    {
       $users= Auth::user();
       $survey_ = Survey::where("type", "=", "postulation")
       ->select("url", "id")
       ->get();
   
   // Almacenar en la sesión
   Session::put('survey_', $survey_);


      return view('sistema',compact("users","survey_"));
    }
}
