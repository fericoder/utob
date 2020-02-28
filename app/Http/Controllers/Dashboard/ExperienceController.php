<?php

namespace App\Http\Controllers\Dashboard;
use Alert;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Experience;
use Illuminate\Support\Facades\Auth;


class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $experiences = Experience::orderBy('created_at', 'desc')->get();
        return view('dashboard.experiences.index', compact('experiences'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.experiences.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->file('video') != null){
            $avatar = $this->uploadFile($request->file('avatar'));
            $image = $this->uploadFile($request->file('image'));
            $video = $this->uploadFile($request->file('video'));
            $flag = $this->uploadFile($request->file('flag'));
            $experience =  Experience::create(['fullName' => $request->fullName, 'country' => $request->country, 'avatar' => $avatar, 'image' => $image, 'body' => $request->body , 'order' => $request->order , 'flag' => $flag , 'video' => $video ]);
        }else{
            $avatar = $this->uploadFile($request->file('avatar'));
            $image = $this->uploadFile($request->file('image'));
            $flag = $this->uploadFile($request->file('flag'));
            $experience =  Experience::create(['fullName' => $request->fullName, 'country' => $request->country, 'avatar' => $avatar, 'image' => $image, 'body' => $request->body , 'order' => $request->order , 'flag' => $flag ]);
        }


        alert()->success('درخواست شما با موفقیت انجام شد.', 'انجام شد');
        return redirect()->route('experience.index');

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
        $experience = Experience::find($id);
        return view('dashboard.experiences.edit', compact('experience'));
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
            $experience = Experience::where('id', $id)->update(['name' => $request->name, 'body' => $request->body ]);
        }elseif($request->file('image') == null && $request->file('icon') != null){
            $icon = $this->uploadFile($request->file('icon'));
            $experience = Experience::where('id', $id)->update(['name' => $request->name, 'icon' => "$icon", 'body' => $request->body ]);
        }elseif($request->file('image') != null && $request->file('icon') == null){
            $image = $this->uploadFile($request->file('image'));
            $experience = Experience::where('id', $id)->update(['name' => $request->name, 'image' => "$image", 'body' => $request->body ]);
        }elseif($request->file('image') != null && $request->file('icon') != null){
            $image = $this->uploadFile($request->file('image'));
            $icon = $this->uploadFile($request->file('icon'));
            $experience = Experience::where('id', $id)->update(['name' => $request->name, 'image' => "$image",'icon' => "$icon", 'body' => $request->body ]);
        }


        alert()->success('درخواست شما با موفقیت انجام شد.', 'انجام شد');
        return redirect()->route('experiences.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Experience $experience, Request $request)
    {

//        if (! Auth::user()->can('delete', $experience )) {
//            alert()->error('شما مجوز مورد نظر را ندارید.', 'انجام نشد');
//            return redirect()->back();
//        }

        Experience::find($request->id)->delete();
        alert()->success('درخواست شما با موفقیت انجام شد.', 'انجام شد');
        return redirect()->back();
    }
}
