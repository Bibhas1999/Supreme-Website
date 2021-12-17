<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;
use App\Schedule;
use App\Appointment;
class AppointmentController extends Controller
{
    public function view(){

        return view('frontend.appointments');
    }

    public function add($id){
        
        $schedule_id = Schedule::find($id);
        return view('frontend.add-appointments',compact('schedule_id')); 
    }

    public function store(Request $request){
        $app = new Appointment();
        $app->app_no = "APSHC".time();
        $app->patient_name = $request->patient_name;
        $app->patient_ip = $_SERVER['REMOTE_ADDR'];
        $app->patient_email = $request->patient_email;
        $app->patient_mobile = $request->patient_mobile;
        $app->schedule_id = $request->schedule_id;
        $app->date = $request->date; 
        $app->type = "online";
        $app->save();
        if($app->save()){
            return redirect()->route('apps.view')->with('msg','Appointment is Booked.We will connect with you shortly');
         }else{
            return redirect()->back()->with('msg','Appointment Booking Failed.');
         }
    }
}
