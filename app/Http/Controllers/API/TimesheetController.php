<?php

namespace App\Http\Controllers\API;

use Exception;
use App\Models\Project;
use App\Models\Timesheet;
use Illuminate\Http\Request;
use App\Helpers\ApiFormatter;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TimesheetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Timesheet::join('projects', 'tr_timesheet.ms_project_id', '=', 'projects.id')
            ->select('tr_timesheet.*', 'projects.project_name')
            ->get();

        if ($data) {
            return ApiFormatter::createApi(200, 'Success', $data);
        } else {
            return ApiFormatter::createApi(400, 'Failed');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'ms_employee_id' => 'required',
                'ms_project_id' => 'required',
                'work_date' => 'required',
                'workhour_start' => 'required',
                'workhour_end' => 'required',
                'work_location' => 'required',
                'task' => 'required',
                'completed_task' => 'required',
                'todo_task' => 'required',
            ]);

            $timesheet = Timesheet::create([
                'ms_employee_id' => $request->ms_employee_id,
                'ms_project_id' => $request->ms_project_id,
                'work_date' => $request->work_date,
                'workhour_start' => $request->workhour_start,
                'workhour_end' => $request->workhour_end,
                'work_location' => $request->work_location,
                'task' => $request->task,
                'completed_task' => $request->completed_task,
                'todo_task' => $request->todo_task,
            ]);

            $data = Timesheet::where('id', '=', $timesheet->id)->get();

            if ($data) {
                return ApiFormatter::createApi(200, 'Success', $data);
            } else {
                return ApiFormatter::createApi(400, 'Failed');
            }
        } catch (Exception $error) {
            return ApiFormatter::createApi(400, 'Failed');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Ambil Data 1 aja
        $data = Timesheet::when($id, function ($query) use ($id) {
            // If $id is provided, join with the projects table
            $query->join('projects', 'tr_timesheet.ms_project_id', '=', 'projects.id')
                  ->where('tr_timesheet.id', '=', $id)
                  ->select('tr_timesheet.*', 'projects.project_name');
        })
        ->get();

        if ($data) {
            return ApiFormatter::createApi(200, 'Success', $data);
        } else {
            return ApiFormatter::createApi(400, 'Failed');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Update Data
        try {
            $request->validate([
                'ms_employee_id' => 'required',
                'ms_project_id' => 'required',
                'work_date' => 'required',
                'workhour_start' => 'required',
                'workhour_end' => 'required',
                'work_location' => 'required',
                'task' => 'required',
                'completed_task' => 'required',
                'todo_task' => 'required',
            ]);

            $timesheet = Timesheet::findOrFail($id);

            $timesheet->update([
                'ms_employee_id' => $request->ms_employee_id,
                'ms_project_id' => $request->ms_project_id,
                'work_date' => $request->work_date,
                'workhour_start' => $request->workhour_start,
                'workhour_end' => $request->workhour_end,
                'work_location' => $request->work_location,
                'task' => $request->task,
                'completed_task' => $request->completed_task,
                'todo_task' => $request->todo_task,
            ]);

            $data = Timesheet::where('id', '=', $timesheet->id)->get();

            if ($data) {
                return ApiFormatter::createApi(200, 'Success', $data);
            } else {
                return ApiFormatter::createApi(400, 'Failed');
            }
        } catch (Exception $error) {
            return ApiFormatter::createApi(400, 'Failed');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        try {
            $timesheet = Timesheet::findOrFail($id);

            $data = $timesheet->delete();

            if ($data) {
                return ApiFormatter::createApi(200, 'Success Destroy Data');
            } else {
                return ApiFormatter::createApi(400, 'Failed');
            }
        } catch (Exception $error) {
            return ApiFormatter::createApi(400, 'Failed');
        }
    }


    public function gettimesheet($id)
    {
        $projectName = DB::table('tr_timehsheet')
            ->select('projects.project_name')
            ->join('tr_timesheet', 'projects.id', '=', 'tr_timesheet.ms_project_id')
            ->where('projects.id', '=', $id)
            ->get();
        return response()->json($projectName);
    }

    // public function getProjectName($id)
    // {
    //     $projectName = DB::table('projects')
    //         ->select('projects.project_name')
    //         ->join('tr_timesheet', 'projects.id', '=', 'tr_timesheet.ms_project_id')
    //         ->where('projects.id', '=', $id)
    //         ->get();
    //     return response()->json($projectName);
    // }
}
