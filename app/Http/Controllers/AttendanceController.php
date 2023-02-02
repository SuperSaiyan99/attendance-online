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

    public function checkDateToView(){
        $currentTime = (int)date("Hi");
        if ($currentTime >= 800 && $currentTime <= 900) {
        return view('markAttendance');
        } else if ($currentTime >= 1100 && $currentTime <= 1200) {
        return view('markAttendance');
        } else if ($currentTime >= 1230 && $currentTime <= 1300) {
        return view('markAttendance');
        } else if ($currentTime >= 1600 && $currentTime <= 1630) {
        return view('markAttendance');
        } else {
        return redirect('unavailable');
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
    public function storeAttendance(Request $request)
        {
        
        $currentTime = date('H:i:s');
        $attendance = new ModelsAttendance();
        
        if (strtotime('08:00:00') <= strtotime($currentTime) && strtotime($currentTime) <= strtotime('09:00:00')) {
            $attendance->status = 'morning';
            $attendance->entry = 'time in';
        } else if (strtotime('11:00:00') <= strtotime($currentTime) && strtotime($currentTime) <= strtotime('11:30:00')) {
            $attendance->status = 'morning';
            $attendance->entry = 'time out';
        } else if (strtotime('12:30:00') <= strtotime($currentTime) && strtotime($currentTime) <= strtotime('13:00:00')) {
            $attendance->status = 'afternoon';
            $attendance->entry = 'time in';
        }else if (strtotime('16:00:00') <= strtotime($currentTime) && strtotime($currentTime) <= strtotime('17:00:00')) {
            $attendance->status = 'afternoon';
            $attendance->entry = 'time Out';
        }else{
            return view('existing');
        }
    
        $attendance->schoolID = $request->schoolID;
        $attendance->firstName = $request->firstName;
        $attendance->middleName = $request->middleName;
        $attendance->lastName = $request->lastName;
        $attendance->yearLevel = $request->yearLevel;
        $attendance->course = 'IT';
        $attendance->time_in = $currentTime;
        $attendance->save();
        return redirect()->route('thank_you')->with('success', 'Attendance Record Successfully Added!');
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
