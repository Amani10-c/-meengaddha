<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactUsRequest;
//use App\Mail\ContactMail;
use App\Models\ContactUs;
use Illuminate\Http\Request;
//use illuminate\support\facades\Mail;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
   // public function show(ContactUs $contactUs)
   // {
        //
   // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ContactUs $contactUs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ContactUs $contactUs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContactUs $contactUs)
    {
        //
    }
    public function CreateContact(ContactUsRequest $request){
   {
        $data = $request->validated();

        $data = ContactUs::create([
            'name'=>$data['name'],
            'email'=>$data['email'],
            'message'=>$data['message']
        ]);
        // Mail::to(users: 'mohammed.alqurashi2002@gmai.com')->send(new ContactMail($data));

        return response()->json([
            'success' => true,
            'message' => 'Message sent successfully',
            'data' => $data
        ], 200);
    }
}
  public function ContactShow()
    {
        $messages = ContactUs::latest()->get();
        return response()->json([
            'success' => true,
            'data' => $messages
        ]);
    }
}