<?php

namespace App\Http\Controllers\Dashboard;
use Alert;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Hotel;
use Illuminate\Support\Facades\Auth;


class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hotels = Hotel::orderBy('created_at', 'desc')->get();
        return view('dashboard.hotels.index', compact('hotels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.hotels.create');
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
                $hotel = Hotel::create(['name' => $request->name, 'image' => $image, 'city' => $request->city, 'price' => $request->price, 'stars' => $request->stars, 'body' => $request->body , 'order' => $request->order ]);

            // Run Telegram Event
//        if ($request->published_at < \Carbon\Carbon::now()->toDateTimeString()){
//            $this->dispatchNow(new Telegram($hotel));
//        }

        alert()->success('درخواست شما با موفقیت انجام شد.', 'انجام شد');
        return redirect()->route('hotel.index');

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
        $hotel = Hotel::find($id);
        return view('dashboard.hotels.edit', compact('hotel'));
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
            $hotel = Hotel::where('id', $id)->update(['name' => $request->name, 'body' => $request->body ]);
        }elseif($request->file('image') == null && $request->file('icon') != null){
            $icon = $this->uploadFile($request->file('icon'));
            $hotel = Hotel::where('id', $id)->update(['name' => $request->name, 'icon' => "$icon", 'body' => $request->body ]);
        }elseif($request->file('image') != null && $request->file('icon') == null){
            $image = $this->uploadFile($request->file('image'));
            $hotel = Hotel::where('id', $id)->update(['name' => $request->name, 'image' => "$image", 'body' => $request->body ]);
        }elseif($request->file('image') != null && $request->file('icon') != null){
            $image = $this->uploadFile($request->file('image'));
            $icon = $this->uploadFile($request->file('icon'));
            $hotel = Hotel::where('id', $id)->update(['name' => $request->name, 'image' => "$image",'icon' => "$icon", 'body' => $request->body ]);
        }


        alert()->success('درخواست شما با موفقیت انجام شد.', 'انجام شد');
        return redirect()->route('hotel.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hotel $hotel, Request $request)
    {

//        if (! Auth::user()->can('delete', $hotel )) {
//            alert()->error('شما مجوز مورد نظر را ندارید.', 'انجام نشد');
//            return redirect()->back();
//        }

        Hotel::find($request->id)->delete();
        alert()->success('درخواست شما با موفقیت انجام شد.', 'انجام شد');
        return redirect()->back();
    }
}
