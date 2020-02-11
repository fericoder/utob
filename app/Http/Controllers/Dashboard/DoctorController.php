<?php

namespace App\Http\Controllers\Dashboard;
use Alert;
use App\Category;
use App\Events\DoctorSent;
use App\Http\Requests\DoctorRequest;
use App\Jobs\Telegram;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Doctor;
use Illuminate\Support\Facades\Auth;


class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = Doctor::orderBy('created_at', 'desc')->get();
        return view('dashboard.doctors.index', compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.doctors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            if ($request->file('avatar') != null){
                $avatar = $this->uploadFile($request->file('avatar'));
                $doctor =  Doctor::create(['fullName' => $request->fullName, 'title' => $request->title, 'avatar' => $avatar, 'body' => $request->body ]);
            }else{
                $doctor =  Doctor::create(['fullName' => $request->fullName, 'title' => $request->title, 'body' => $request->body ]);
            }

            // Run Telegram Event
//        if ($request->published_at < \Carbon\Carbon::now()->toDateTimeString()){
//            $this->dispatchNow(new Telegram(doctor));
//        }

        alert()->success('درخواست شما با موفقیت انجام شد.', 'انجام شد');
        return redirect()->route('doctor.index');

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
        $doctor =  Doctor::find($id);
        return view('dashboard.doctors.edit', compact('doctor'));
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

        if ($request->file('avatar') != null){
            $avatar = $this->uploadFile($request->file('avatar'));
            $doctor =  Doctor::where('id', $id)->update(['fullName' => $request->fullName, 'title' => $request->title, 'avatar' => $avatar, 'body' => $request->body ]);
        }else{
            $doctor =  Doctor::where('id', $id)->update(['fullName' => $request->fullName, 'title' => $request->title, 'body' => $request->body ]);
        }


        alert()->success('درخواست شما با موفقیت انجام شد.', 'انجام شد');
        return redirect()->route('doctors.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor, Request $request)
    {

//        if (! Auth::user()->can('delete', doctor )) {
//            alert()->error('شما مجوز مورد نظر را ندارید.', 'انجام نشد');
//            return redirect()->back();
//        }

        Doctor::find($request->id)->delete();
        alert()->success('درخواست شما با موفقیت انجام شد.', 'انجام شد');
        return redirect()->back();
    }
}
