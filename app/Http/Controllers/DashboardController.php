<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('layouts.pages.dashboard');
    }

    // public function admin_login(Request $request)
    // {
    //     $user = User::where('email', $request->email)->first();
    //     if ($user) {
    //         if (Hash::check($request->password, $user->password)) {
    //             if ($user->role == "admin") {
    //                 return route('admin.dashboard');
    //             }
    //         }
    //     }
    // }

    // users
    public function allUsers()
    {
        $allUsers = User::whereNot('id', auth()->user()->id)->get();
        return view('layouts.pages.user.index', get_defined_vars());
    }

    //  CATEGORY
    public function category_index()
    {
        $obj = Category::get();
        return view('layouts.pages.category.index', get_defined_vars());
    }
    public function category_form($id)
    {
        $title = 'New Category';
        $obj = array();
        if (isset($id) && !empty($id)) {
            $obj = Category::whereId($id)->first();
        }

        return view('layouts.pages.category.create', get_defined_vars());
    }

    public function category_store(Request $req, $id)
    {
        $imageUpdateId = $id;
        if (isset($id) && !empty($id)) {
            $obj = Category::whereId($id)->update([
                'title' => $req->title,
            ]);

            return redirect(route('category.index'));
        } else {
            //Create
            $obj = Category::create([
                'title' => $req->title,

            ]);
            $imageUpdateId = $obj->id;
        }
        if ($req->file()) {
            $imageName = time() . '.' . $req->image->extension();
            $req->image->move(public_path('uploads/user'), $imageName);
            Category::whereId($imageUpdateId)->update([
                'image' => $imageName
            ]);
        }
        return redirect(route('category.index'));
    }

    public function category_detail($id)
    {
        $title = 'Category Detail';
        $jobDetail = Category::where('id', $id)->first();
        return view('layouts.pages.category.detail', get_defined_vars());
    }

    public function category_delete(Request $req)
    {

        $delete = Category::destroy($req->id);


        if ($delete == 1) {
            $success = true;
            $message = "Category deleted successfully";
        } else {
            $success = true;
            $message = "Category not found";
        }
        return response()->json([
            'success' => $success,
            'message' => $message,
        ]);
    }

    //  Services
    public function service_index()
    {
        $obj = Service::get();
        return view('layouts.pages.service.index', get_defined_vars());
    }
    public function service_form($id)
    {
        $title = 'New service';
        $obj = array();
        if (isset($id) && !empty($id)) {
            $obj = Service::whereId($id)->first();
        }

        return view('layouts.pages.service.create', get_defined_vars());
    }

    public function service_store(Request $req, $id)
    {

        $imageUpdateId = $id;
        if (isset($id) && !empty($id)) {
            $obj = Service::whereId($id)->update([
                'title' => $req->title,
            ]);

            return redirect(route('service.index'));
        } else {
            //Create
            $obj = Service::create([
                'title' => $req->title,

            ]);
            $imageUpdateId = $obj->id;
        }
        if ($req->file()) {
            $imageName = time() . '.' . $req->image->extension();
            $req->image->move(public_path('uploads/user'), $imageName);
            Service::whereId($imageUpdateId)->update([
                'image' => $imageName
            ]);
        }
        return redirect(route('service.index'));
    }

    public function service_detail($id)
    {
        $title = 'service Detail';
        $jobDetail = Service::where('id', $id)->first();
        return view('layouts.pages.service.detail', get_defined_vars());
    }

    public function service_delete(Request $req)
    {

        $delete = Service::destroy($req->id);


        if ($delete == 1) {
            $success = true;
            $message = "service deleted successfully";
        } else {
            $success = true;
            $message = "service not found";
        }
        return response()->json([
            'success' => $success,
            'message' => $message,
        ]);
    }
}
