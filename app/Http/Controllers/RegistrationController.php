<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegistrationRequest;
use App\Http\Requests\UpdateRegistrationRequest;
use App\Models\Registration;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.registration');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRegistrationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRegistrationRequest $request)
    {
        $data= $request->only(
            "name",
            "name_bn",
            "fathers_name",
            "mothers_name",
            "spouse_name",
            "blood_group",
            "birth_date",
            "nationality",
            "nid",
            "religion",
            "ssc",
            "last_educational_qualification",
            "last_educational_institution",
            "education_others",
            "village_name",
            "post",
            "upazila",
            "district",
            "email",
            "phone",
            "emergency_mobile",
            "village_name_permanent",
            "post_permanent",
            "upazila_permanent",
            "district_permanent",
            "whatsup",
            "facebook",
            "guest",
            "t_shirt",
            "own_fee",
            "guest_fee",
            "total_fee",
            "payment_details",
            "transection_id",
            "password",
        ) ;
        $data['status']='2';
        $data['username']=trim($request->phone);

        if ($request->hasFile('picture')) {
            $fileNames =  $request->file('picture')->store('public');
            $fileName = (explode('/', $fileNames))[1];
            $hostName = $_SERVER['HTTP_HOST'];
            $protocol = $_SERVER['PROTOCOL'] = isset($_SERVER['HTTPS']) && !empty($_SERVER['HTTPS']) ? 'https://' : 'http://';
            $data['picture'] =  $protocol . $hostName . "/public/storage/" . $fileName;
        }


        $response=User::create($data);

        if ($response) {
            return redirect()->back()->with('message', 'Registration Successfull!');
        } else {
            return redirect()->back()->with('error', 'Registration Failed!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function show(Registration $registration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function edit(Registration $registration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRegistrationRequest  $request
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRegistrationRequest $request, Registration $registration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registration $registration)
    {
        //
    }
}
