<?php

namespace App\Http\Controllers\Lawyer;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    public function index()
    {
        $data = Service::where('user_id', Auth::id())->get();
        return view('front-layouts.pages.lawyer.service.list', get_defined_vars());
    }

    public function create()
    {
        $id = 0;
        $categories = Category::get();
        return view('front-layouts.pages.lawyer.service.create', get_defined_vars());
    }

    public function update(Request $request)
    {
        $service = Service::where('id', $request->id)->first();
        $id = $request->id;
        $categories = Category::get();
        return view('front-layouts.pages.lawyer.service.create', get_defined_vars());
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'location' => 'required|string',
            'amount' => 'required|numeric',
            'categories_id' => 'required',
            'start_day' => 'required',
            'end_day' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'add_extra_day' => 'required',
            'cover_image' => 'required'
        ]);

        $update_id = $request->id;
        if ($update_id) {
            $service = Service::where('id', $request->id)->first();
            $service->title = $request->title;
            $service->location = $request->location;
            $service->amount = $request->amount;
            $service->categories_id = implode(',', $request->categories_id);
            $service->start_day = $request->start_day;
            $service->end_day = $request->end_day;
            $service->start_time = $request->start_time;
            $service->end_time = $request->end_time;
            $service->add_extra_day = $request->add_extra_day;
            $service->extra_day = $request->extra_day;
            $service->extra_day_start_time = $request->extra_day_start_time;
            $service->extra_day_end_time = $request->extra_day_end_time;
            $service->user_id = Auth::id();

            if ($request->file()) {
                $imageName = rand(0, 9999) . time() . '.' . $request->image->extension();
                $request->file('cover_image')->move(public_path('uploads/lawyer/service'), $imageName);
                $service->image = $imageName;
            }
            $service->update();
            return redirect()->route('lawyer.service.list')->with('message', 'Service Updated Successfully');
        } else {
            $service = new Service;
            $service->title = $request->title;
            $service->location = $request->location;
            $service->amount = $request->amount;
            $service->categories_id = $request->categories_id;
            $service->start_day = $request->start_day;
            $service->end_day = $request->end_day;
            $service->start_time = $request->start_time;
            $service->end_time = $request->end_time;
            $service->add_extra_day = $request->add_extra_day;
            $service->extra_day = $request->extra_day;
            $service->extra_day_start_time = $request->extra_day_start_time;
            $service->extra_day_end_time = $request->extra_day_end_time;
            $service->user_id = Auth::id();

            if ($request->file()) {
                $imageName = rand(0, 9999) . time() . '.' . $request->image->extension();
                $request->file('image')->move(public_path('uploads/lawyer/service'), $imageName);
                $service->cover_image = $imageName;
            }
            $service->save();
            return redirect()->route('lawyer.service.list')->with('message', 'Service Added Successfully');
        }
    }
    public function detail()
    {
        //
    }

    public function delete(Request $request)
    {
        //
    }

    public function category_list()
    {
        //
    }
}
