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
        $categories = Category::all();
        return view('dashboard.Treatments.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TreatmentRequest $request)
    {
        $images = $this->uploadFile($request->file('image'));
            if ($request->file('attachment') != null){
                $attachment = $this->uploadFile($request->file('attachment'));
                $Treatment = Treatment::create(['user_id' => Auth::user()->id , 'title' => $request->title, 'description' => $request->description, 'category_id' => $request->category, 'published_at' => $request->published_at, 'images' => $images, 'attachment' => "$attachment", 'telegram' => $request->telegram, 'episodesCount' => $request->episodesCount, 'type' => $request->type, 'body' => $request->body ]);
            }else{
                $Treatment = Treatment::create(['user_id' => Auth::user()->id , 'title' => $request->title, 'description' => $request->description, 'category_id' => $request->category, 'published_at' => $request->published_at, 'images' => $images, 'telegram' => $request->telegram,'episodesCount' => $request->episodesCount, 'type' => $request->type, 'body' => $request->body ]);
            }

            // Run Telegram Event
        if ($request->published_at < \Carbon\Carbon::now()->toDateTimeString()){
            $this->dispatchNow(new Telegram($Treatment));
        }

        alert()->success('درخواست شما با موفقیت انجام شد.', 'انجام شد');
        return redirect()->route('Treatment.index');

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
        $Treatment = Treatment::find($id);

        if (! Auth::user()->can('update', $Treatment )) {
            alert()->error('شما مجوز مورد نظر را ندارید.', 'عدم دسترسی');
            return redirect()->back();
        }

        $categories = Category::all();
        return view('dashboard.Treatments.edit', compact('Treatment', 'categories'));
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
        if ($request->file('attachment') == null && $request->file('image') == null){
            $Treatment = Treatment::where('id', $id)->update(['user_id' => Auth::user()->id , 'title' => $request->title, 'description' => $request->description, 'category_id' => $request->category, 'published_at' => $request->published_at, 'telegram' => $request->telegram, 'body' => $request->body ]);
        }elseif($request->file('image') == null && $request->file('attachment') != null){
            $attachment = $this->uploadFile($request->file('attachment'));
            $Treatment = Treatment::where('id', $id)->update(['user_id' => Auth::user()->id , 'title' => $request->title, 'description' => $request->description, 'category_id' => $request->category, 'published_at' => $request->published_at, 'attachment' => "$attachment", 'telegram' => $request->telegram, 'body' => $request->body ]);
        }elseif($request->file('image') != null && $request->file('attachment') == null){
            $image = $this->uploadFile($request->file('image'));
            $Treatment = Treatment::where('id', $id)->update(['user_id' => Auth::user()->id , 'title' => $request->title, 'description' => $request->description, 'category_id' => $request->category, 'published_at' => $request->published_at, 'image' => "$image", 'telegram' => $request->telegram, 'body' => $request->body ]);
        }elseif($request->file('image') != null && $request->file('attachment') != null){
            $image = $this->uploadFile($request->file('image'));
            $attachment = $this->uploadFile($request->file('attachment'));
            $Treatment = Treatment::where('id', $id)->update(['user_id' => Auth::user()->id , 'title' => $request->title, 'description' => $request->description, 'category_id' => $request->category, 'published_at' => $request->published_at, 'image' => "$image",'attachment' => "$attachment", 'telegram' => $request->telegram, 'body' => $request->body ]);
        }


        alert()->success('درخواست شما با موفقیت انجام شد.', 'انجام شد');
        return redirect()->route('Treatment.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Treatment $Treatment, Request $request)
    {

//        if (! Auth::user()->can('delete', $Treatment )) {
//            alert()->error('شما مجوز مورد نظر را ندارید.', 'انجام نشد');
//            return redirect()->back();
//        }

        Treatment::find($request->id)->delete();
        alert()->success('درخواست شما با موفقیت انجام شد.', 'انجام شد');
        return redirect()->back();
    }
}
