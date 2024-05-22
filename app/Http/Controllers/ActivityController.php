<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return view('newactivity', ['project_id'=>$request->id]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->only(['name', 'description', 'priority', 'start_date', 'end_date', 'project_id']);
        $data['created_at'] = Carbon::now();
        $query = DB::table('activities');
        $query->insert($data);
        if($query){
            return redirect('/projects/'.$request->project_id);
        }else{
            return 'Errore inserimento record';
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Activity $activity)
    {
        return view('activity', ['activity' => $activity]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Activity $activity)
    {
        return view('activityedit', ['activity' => $activity]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Activity $activity)
    {
        $activity['name'] = $request->name;
        $activity['description'] = $request->description;
        $activity['priority'] = $request->priority;
        $activity['start_date'] = $request->start_date;
        $activity['end_date'] = $request->end_date;
        $activity['updated_at'] = Carbon::now();
        $activity->update();
        return redirect('/projects/' . $activity->project_id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Activity $activity)
    {
        $activity->delete();
        return redirect('/projects/' . $activity->project_id);
    }
}
