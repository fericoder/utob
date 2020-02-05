<?php

namespace App\Http\Controllers\Dashboard;
use Alert;
use App\Category;
use App\Events\TreatmentSent;
use App\Http\Requests\TreatmentRequest;
use App\Jobs\Telegram;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Treatment;
use Illuminate\Support\Facades\Auth;


class TreatmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $treatments = Treatment::orderBy('created_at', 'desc')->get();
        return view('dashboard.treatments.index', compact('treatments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.treatments.create');
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
            if ($request->file('icon') != null){
                $icon = $this->uploadFile($request->file('icon'));
                $treatment = Treatment::create(['name' => $request->name, 'image' => $image, 'icon' => "$icon", 'body' => $request->body ]);
            }else{
                $treatment = Treatment::create(['name' => $request->name, 'image' => $image, 'body' => $request->body ]);
            }

            // Run Telegram Event
//        if ($request->published_at < \Carbon\Carbon::now()->toDateTimeString()){
//            $this->dispatchNow(new Telegram($treatment));
//        }

        alert()->success('درخواست شما با موفقیت انجام شد.', 'انجام شد');
        return redirect()->route('treatment.index');

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
        $treatment = Treatment::find($id);
        return view('dashboard.treatments.edit', compact('treatment'));
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
            $treatment = Treatment::where('id', $id)->update(['name' => $request->name, 'body' => $request->body ]);
        }elseif($request->file('image') == null && $request->file('icon') != null){
            $icon = $this->uploadFile($request->file('icon'));
            $treatment = Treatment::where('id', $id)->update(['name' => $request->name, 'icon' => "$icon", 'body' => $request->body ]);
        }elseif($request->file('image') != null && $request->file('icon') == null){
            $image = $this->uploadFile($request->file('image'));
            $treatment = Treatment::where('id', $id)->update(['name' => $request->name, 'image' => "$image", 'body' => $request->body ]);
        }elseif($request->file('image') != null && $request->file('icon') != null){
            $image = $this->uploadFile($request->file('image'));
            $icon = $this->uploadFile($request->file('icon'));
            $treatment = Treatment::where('id', $id)->update(['name' => $request->name, 'image' => "$image",'icon' => "$icon", 'body' => $request->body ]);
        }


        alert()->success('درخواست شما با موفقیت انجام شد.', 'انجام شد');
        return redirect()->route('treatment.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Treatment $treatment, Request $request)
    {

//        if (! Auth::user()->can('delete', $treatment )) {
//            alert()->error('شما مجوز مورد نظر را ندارید.', 'انجام نشد');
//            return redirect()->back();
//        }

        Treatment::find($request->id)->delete();
        alert()->success('درخواست شما با موفقیت انجام شد.', 'انجام شد');
        return redirect()->back();
    }
}
