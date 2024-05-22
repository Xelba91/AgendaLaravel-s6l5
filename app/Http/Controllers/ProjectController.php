<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Models\Project;


class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Project::with('activities')->get()->where('user_id', '=', Auth::user()->id);
        if($request->has('id')){
            $query->where('id', '=', $request->get('id'));
            return view('/projectsdetail', ['projects' => $query->get()]);
        }
        return view('/projects', ['projects' => $query]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('newproject');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->only(['name', 'description', 'type', 'language', 'expiration_date']);
        $data['user_id'] = Auth::user()->id;
        $data['created_at'] = Carbon::now();
        $query = DB::table('projects');
        $query->insert($data);
        if($query){
            return redirect()->action([ProjectController::class, 'index']);
        }else{
            return 'Errore inserimento record';
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('projectdetail', ['project' => $project]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('projectedit', ['project' => $project]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $project['name'] = $request->name;
        $project['description'] = $request->description;
        $project['type'] = $request->type;
        $project['language'] = $request->language;
        $project['expiration_date'] = $request->expiration_date;
        $project['updated_at'] = Carbon::now();

        $project->update();
        return redirect('/projects');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect('/projects');
    }
}
