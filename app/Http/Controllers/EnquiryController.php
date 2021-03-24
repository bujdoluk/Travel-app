<?php


namespace App\Http\Controllers;


use App\Http\Requests\StoreEnquiry;
use App\Models\Enquiry;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class EnquiryController extends  Controller
{
    public function index()
    {
        return view('/packages', [
            'packages' => DB::table('packages')->paginate(6)
        ]);
    }

    public function create()
    {
        return view('packages.create');
    }

    public function store(StoreEnquiry $request)
    {
        $validated = $request->validated();
        $enquiry = new Enquiry();
        $enquiry->name = $validated['name'];
        $enquiry->surname = $validated['surname'];
        $enquiry->phone = $validated['phone'];
        $enquiry->email = $validated['email'];
        $enquiry->notes = $validated['notes'];
        $enquiry->from = $validated['from'];
        $enquiry->to = $validated['to'];

        $enquiry->save();

        $request->session()->flash('status', 'Thank you for sending us an enquiry. We will reach out to you soon.');

        Mail::to(request('email'))
            ->send(new \App\Mail\Enquiry());

        return redirect('/packages');
    }
}
