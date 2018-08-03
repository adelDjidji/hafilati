<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Morshid;
use App\Models\Country;

class MorshidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $morshids = Morshid::all();
        $nationalities = Country::all();
                $params = [
                    'title' => 'Morshids List',
                    'morshids' => $morshids,
                    'nationalities' => $nationalities,
                ];
        return view('admin.morshid.morshid')->with($params);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $morshid = Morshid::create([
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'country_id' => $request->input('country_id'),
            'adress' => $request->input('adress'),
            'passport_number' => $request->input('passport_number'),
            'phone_number' => $request->input('phone_number'),
            ]);
        
        return redirect()->route('morshid.index');
    
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $morshid = Morshid::find($id);

        $morshid->delete();

        return redirect()->route('morshid.index');
    }
}
