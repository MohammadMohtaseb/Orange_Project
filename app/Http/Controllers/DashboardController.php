<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Envelope;
use App\Mail\ForgetPassword;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Models\Brand;
use App\Models\Product;

class DashboardController extends Controller
{


    public function admin_forget_password(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required',

        ]);
        if ($request->isMethod('post')) {

            $check = User::where('email', '=', $request->email)->first();

            if ($check) {

                $data = Mail::to($check->email)->send(new ForgetPassword($check->id));
                return redirect()->back()->with('msg','Rest Password Link Sent To Your Mail');
            } else {

                return redirect()->back()->with('msg', 'Sorry Email Not Found');
            }

        } else {

            return redirect()->route('login');
        }
    } //End Method

    public function admin_reset_password($id){
        return view('auth.reset-password',compact('id'));
    }//End Method

    public function admin_update_password(Request $request){

        $validated = $request->validate([
            'password' => 'required',

        ]);
        $id = $request->id;
        $password = Hash::make($request->password);
        $user = User::where('id', '=', $id)->update([
            'password' => $password
        ]);
        return redirect()->back()->with('msg','Your Password is Updated Successfully');
    }//End Method

}
