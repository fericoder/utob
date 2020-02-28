<?php

namespace App\Http\Controllers\Dashboard;
use Alert;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Hospital;
use Illuminate\Support\Facades\Auth;


class HospitalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hospitals = Hospital::orderBy('created_at', 'desc')->get();
        return view('dashboard.hospitals.index', compact('hospitals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.hospitals.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $this->uploadFile($request->file('image'));
                $hospital = Hospital::create(['name' => $request->name, 'image' => $image, 'city' => $request->city, 'price' => $request->price, 'body' => $request->body , 'order' => $request->order ]);


        alert()->success('درخواست شما با موفقیت انجام شد.', 'انجام شد');
        return redirect()->route('hospital.index');

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
        $hospital = Hospital::find($id);
        return view('dashboard.hospitals.edit', compact('hospital'));
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
        if ($request->file('icon') == null && $request->file('image') == null){
            $hospital = Hospital::where('id', $id)->update(['name' => $request->name, 'body' => $request->body ]);
        }elseif($request->file('image') == null && $request->file('icon') != null){
            $icon = $this->uploadFile($request->file('icon'));
            $hospital = Hospital::where('id', $id)->update(['name' => $request->name, 'icon' => "$icon", 'body' => $request->body ]);
        }elseif($request->file('image') != null && $request->file('icon') == null){
            $image = $this->uploadFile($request->file('image'));
            $hospital = Hospital::where('id', $id)->update(['name' => $request->name, 'image' => "$image", 'body' => $request->body ]);
        }elseif($request->file('image') != null && $request->file('icon') != null){
            $image = $this->uploadFile($request->file('image'));
            $icon = $this->uploadFile($request->file('icon'));
            $hospital = Hospital::where('id', $id)->update(['name' => $request->name, 'image' => "$image",'icon' => "$icon", 'body' => $request->body ]);
        }


        alert()->success('درخواست شما با موفقیت انجام شد.', 'انجام شد');
        return redirect()->route('hospital.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hospital $hospital, Request $request)
    {

//        if (! Auth::user()->can('delete', $hospital )) {
//            alert()->error('شما مجوز مورد نظر را ندارید.', 'انجام نشد');
//            return redirect()->back();
//        }

        Hospital::find($request->id)->delete();
        alert()->success('درخواست شما با موفقیت انجام شد.', 'انجام شد');
        return redirect()->back();
    }
}
