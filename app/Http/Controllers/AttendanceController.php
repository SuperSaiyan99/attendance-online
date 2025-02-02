<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance as ModelsAttendance;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
    public function storeAttendanceIn(Request $request)
    {

        try {
            $currentTime = date("g:i:s a");
            $currentDate = date("d/m/Y");
            $attendance = new ModelsAttendance();

            if (!isset($request->middleName)) {
                $attendance->info_mname = "N/A";
            } else {
                $attendance->info_mname = $request->middleName;
            }

            $attendance->info_sid = $request->schoolID;
            $attendance->info_fname = $request->firstName;
            $attendance->info_lname = $request->lastName;
            $attendance->info_yr_lvl = $request->exampleRadios;
            $attendance->info_course = 'IT';
            $attendance->date = $currentDate;
            $attendance->time_in = $currentTime;

            if (strtotime('08:00:00') <= strtotime($currentTime) && 
                    strtotime($currentTime) <= strtotime('09:00:00')) {
                         $attendance->sched_type = 'morning';
                         $attendance->sched_entry = 'time in';
            } 
            else if (strtotime('11:00:00') <= strtotime($currentTime) && 
                    strtotime($currentTime) <= strtotime('11:30:00')) {
                         $attendance->sched_type = 'morning';
                         $attendance->sched_entry = 'time out';
            } 
            else if (strtotime('12:30:00') <= strtotime($currentTime) &&
                    strtotime($currentTime) <= strtotime('13:00:00')) {
                        $attendance->sched_type = 'afternoon';
                        $attendance->sched_entry = 'time in';
            } 
            else if (strtotime('16:00:00') <= strtotime($currentTime) && 
                    strtotime($currentTime) <= strtotime('17:00:00')) {
                        $attendance->sched_type = 'afternoon';
                        $attendance->sched_entry = 'time Out';
            } 
            else {
                        $attendance->sched_type = 'test';
                        $attendance->sched_entry = 'test';
            }

            if ($attendance->save()) {
                return redirect()->route('thank-you');
            } else {
                return view('existing');
            }
            
        } catch (\Throwable $th) {
            $error = $th->getMessage();
            return view('ErrorPages.Exception', compact('error'));
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
        //
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
        //
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
    }
}
