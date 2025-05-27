<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Mail\QuoteMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function services()
    {
        return view('services');
    }

    public function contact(Request $request)
    {
        if ($request->isMethod('post')) {
            $validation = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required',
                'contact' => 'required',
                'message' => 'required'
            ]);

            if($validation->fails())
            {
                return response()->json([
                    'status' => false,
                    'errors' => $validation->errors()->all()
                ]);
            }

            $data = $request->all();

            Mail::to("siddiqui.ahmedibrahim@gmail.com")->send(new ContactMail($data));
            
            return response()->json([
                'status' => true,
                'data' => [
                    'redirectUrl' => null,
                    'message' => 'You message sent successfully. We will get back to you soon.',
                ]
            ]);
        }
        return view('contact');
    }

    public function quote(Request $request)
    {
        if ($request->isMethod('post')) {
            $validation = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required',
                'contact' => 'required',
                'type' => 'required',
                'origin' => 'required',
                'destination' => 'required',
                'weight' => 'required',
                'dimensions' => 'required',
            ]);

            if($validation->fails())
            {
                return response()->json([
                    'status' => false,
                    'errors' => $validation->errors()->all()
                ]);
            }

            $data = $request->all();

            Mail::to("siddiqui.ahmedibrahim@gmail.com")->send(new QuoteMail($data));
            
            return response()->json([
                'status' => true,
                'data' => [
                    'redirectUrl' => null,
                    'message' => 'You message sent successfully. We will get back to you soon.',
                ]
            ]);
        }
        return view('contact');
    }
}
