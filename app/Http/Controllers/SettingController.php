<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Http\Requests\StoreSettingRequest;
use App\Http\Requests\UpdateSettingRequest;
use Illuminate\Support\Facades\Session;
use App\Models\Survey;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $survey_ = Survey::where("type", "=", "postulation")
            ->select("url", "id")
            ->get();
        // Almacenar en la sesión
        Session::put('survey_', $survey_);
        //
        $setting = Setting::orderBy('id', 'DESC')->get();
        return view("setting.setting", compact("setting"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $setting = Setting::orderBy('id', 'DESC')->get();
        return view("setting.settingtable", compact("setting"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $setting = new Setting;
        $setting->title = $request->title;
        $setting->description = $request->description;
        for ($i = 1; $i  <= 5; $i++) {

            $property = "image_" . $i;

            if ($request->file($property) != null) {
                $setting->$property = fileStore($request->file($property), "resource");
            }
        }
        for ($i = 1; $i  <= 15; $i++) {

            $property = "color_" . $i;
            $setting->$property = $request->$property;
        }
        //photo


        $setting->save();
       return $this->create();
    }

    /**
     * Display the specified resource.
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $setting =   Setting::find($request["id"]);
        return $setting;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $setting = Setting::find($request["id"])->delete();
        $setting->title = $request->title;
        $setting->description = $request->description;
        for ($i = 1; $i  <= 5; $i++) {

            $property = "image_" . $i;

            if ($request->file($property) != null) {
                $setting->$property = fileUpdate($request->file($property), "resource");
            }
        }
        for ($i = 1; $i  <= 15; $i++) {

            $property = "color_" . $i;
            $setting->$property = $request->$property;
        }
        //photo
        $setting->save();
        return $this->create();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $table = Setting::find($request["id"]);

        for ($i = 1; $i <= 5; $i++) {

            $property = "image_" . $i;

            fileDestroy($table->$property, "resource");
        }

        Setting::find($request["id"])->delete();
        return $this->create();
    }

}
