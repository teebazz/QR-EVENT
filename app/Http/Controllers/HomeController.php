<?php

namespace App\Http\Controllers;

use App\Attendee;
use App\Qr;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['registered'] = Attendee::where(['status' => 'registered'])->count();
        $data['unregistered'] = Attendee::where(['status' => null])->count();
        $data['attendees'] = Attendee::all();
        return view('home',$data);
    }


    public function verify($qr_code)
    {
        if(!empty($qr_code)){
            $checkQrExits = Qr::where(['code' => $qr_code])->first();
            if(!empty($checkQrExits)){
                $data['exist_flag'] = 'yes';
                //check if qr is used
                $qrDetails = Attendee::where(['qr_code' => $qr_code])->first();
                if(!empty($qrDetails)){
                    return redirect()->route('get-attendant',['qr_code' =>$qr_code]);
                }
            }else{
                $data['exist_flag'] = 'no';
            }
        }else{
            $data['exist_flag'] = 'no';
        }
        $data['qr_code'] = $qr_code;
        return view('verify-qr',$data);
    }


    public function verifyAttendant(Request $request)
    {
        $request->validate(([
            'email' => 'required|exists:attendees,email'
        ]));
        $data['qr_code'] = $request->qr_code;
        $data['details'] = Attendee::where(['email' => $request->email])->first();
        return view('attendant',$data);
    }


    public function registerAttendant(Request $request,$id)
    {
        $request->validate(([
            'qr_code' => 'required'
        ]));
        // dd($request->qr_code);
        $details = Attendee::find($id);
        $details->update([
            'qr_code' => $request->qr_code,
            'status' => 'registered'
        ]);
        return redirect()->route('get-attendant',['qr_code' => $request->qr_code]);
        // return view('attendant',$data);
    }

    public function getAttendant($qr_code)
    {
        $data['details'] = Attendee::where(['qr_code' => $qr_code])->first();
        return view('attendant',$data);
    }




}
