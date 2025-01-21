<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resource;
use App\Http\Requests\StoreResourceRequest;
use App\Http\Requests\UpdateResourceRequest;

class ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */   
     public function __construct()
    {
        $this->middleware('auth');


    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
          //
          $Resource = Resource::orderBy('id','DESC')->get();
          return view("Resource.Resource", compact("Resource"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Resource = Resource::orderBy('id','DESC')->get();
        return view("Resource.Resourcetable", compact("Resource"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Resource = new Resource;
        $Resource->title = $request->title;
        $Resource->description = $request->description;
        $Resource->detail = $request->detail;
        $request->file = fileStore($request->file('file'), "resource");
        $Resource->file = $request->file;
        $Resource->save();
        return $this->create();
    }

    /**
     * Display the specified resource.
     */
    public function show(Resource $Resource)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $Resource=Resource::find($request->id);
        return $Resource;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $Resource = Resource::find($request->id);
        $Resource->title = $request->title;
        $Resource->description = $request->description;
        $Resource->detail = $request->detail;
        //eliminar imagen anterior
        $table = Resource::find($request["id"]);
        fileDestroy($table->file, "resource");
        //guarda la nueva
        fileUpdate($request->file('file'), "resource", $Resource->file);
        $Resource->save();
        return $this->create();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $table = Resource::find($request["id"]);
        fileDestroy($table->file, "resource");
        Resource::find($request->id)->delete();
        return $this->create();
    }
    public function destroyAll(Request $request)
    {
        foreach ($request->deleteAll as $deleteAllId) {
            
            $table = Resource::find($deleteAllId);
            fileDestroy($table->file, "resource");
            Resource::find($deleteAllId)->delete();
            
        }
       return $this->create();
      
    }
}
