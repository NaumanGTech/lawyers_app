<?php

namespace App\Http\Controllers\Lawyer;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Flash;

class LawyerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        if (Auth::user()->is_document_submit == 0) {
            return redirect()->route('lawyer.document.verification');
        } else {
            return view('front-layouts.pages.lawyer.dashboard');
        }
    }

    public function document_submission()
    {
        return view('front-layouts.pages.lawyer.document-verification');
    }

    public function submit_documents(Request $request)
    {
        $auth_user = Auth::user();
        $user = User::where('id', $auth_user->id)->first();
        if ($request->hasFile('degree')) {
            $imageName = uniqid() . '_' . time() . '_' . $request->file("degree")->getClientOriginalName();
            $image = $request->file('degree');
            $image->move(public_path('uploads/lawyer/documents'), $imageName);
            $user->degree = $imageName;
        }
        if ($request->hasFile('images')) {
            $images = $request->file('images');
            $uploadedImages = [];

            foreach ($images as $image) {
                // Generate a unique name for the image
                $imageName = uniqid() . '_' . time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('uploads/lawyer/documents'), $imageName);
                $uploadedImages[] = 'uploads/lawyer/documents' . $imageName;
            }
            $user->certificates = $uploadedImages;
            $user->is_document_submit = 1;
            $user->update();
            return redirect()->route('lawyer.dashboard')->with(['message' => 'Images uploaded successfully', 'images' => $uploadedImages]);
        }
    }

    public function profile_setting()
    {
        $user = User::where('id', Auth::user()->id)->first();
        return view('front-layouts.pages.lawyer.profile', compact('user'));
    }

    public function profile_submit(Request $request)
    {
        $request->validate([
            'name' => "required|string|min:3",
            'email' => "required|email|unique:users,email," . Auth::user()->id,
            'phone' => "required|regex:/^[0-9]{10,}$/",
            'date_of_birth' => "required|date",
            'gender' => "required",
            'address' => "required|string",
            'country' => "required|string",
            'city' => "required|string",
            'state' => "required|string",
            'postal_code' => "required|regex:/^[0-9]+$/",
        ]);

        $id = Auth::user()->id;
        $user = User::where('id', $id)->first();

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->date_of_birth = $request->input('date_of_birth');
        $user->gender = $request->input('gender');
        $user->address = $request->input('address');
        $user->country = $request->input('country');
        $user->city = $request->input('city');
        $user->state = $request->input('state');
        $user->postal_code = $request->input('postal_code');

        if ($request->file()) {
            $imageName = rand(0, 9999). time(). '.' . $request->image->extension();
            $request->file('image')->move(public_path('uploads/user'), $imageName);
            $user->image = $imageName;
        }
        $user->update();

        Flash::success('Your Data is updated successfully');
        return redirect()->back()->with('message', 'Your Data is updated successfully');
    }
}
