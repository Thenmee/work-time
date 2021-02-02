<?php

namespace App\Http\Controllers\Advertisement;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use App\Models\Advertising;

class AdvertisementDashboarControlle extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Advertisement =  Advertising::get();
        return view('admin.Advertising.Advertising_list',['Advertisement' => $Advertisement]);
    }
    public function Advertising_add()
    {
        $Advertisement=Advertising::select()->get();
        return view('admin.Advertising.Advertising_add',['Advertisement' => $Advertisement]);
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
          //  dd($request);
          $Advertising = new Advertising();
          $Advertising->user_id = $request->input('user_id');
          $Advertising->title = $request->input('title');
          $Advertising->link = $request->input('link');  
          $Advertising->active = $request->input('active');
          if($request->hasfile('image'))
          {
          $imagename = time().'.'.$request->file('image')->extension();
          $result = $request->file('image')->move(public_path().'/assets/uploads/Advertisement/images/', $imagename); //store('files');
          $Advertising->image = $imagename;
          }
          $Advertising->save();
        
          $Advertisement = Advertising::get();
              return view('admin.Advertising.Advertising_list',['Advertisement' => $Advertisement]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Advertising = Advertising::where('Advertising_id',$id);
        if($Advertising->exists())
        {
            $Advertisement = $Advertising->get();
            return view('admin.Advertising.Advertising_edite',['Advertisement'=> $Advertisement]);
        }
        else
        {
            return response()->json(['message' => 'Advertising not found'], 404);
        }
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
    public function updateAdvertising(Request $request)
    {
        $Advertising = Advertising::where('Advertising_id',$request->Advertising_id);
        if($Advertising->exists())
        {
            $Advertising->title = $request->input('title');
            $Advertising->link = $request->input('link');
            $Advertising->user_id = $request->input('user_id');
            $Advertising->active = $request->input('active');
            if($request->image != '')
            {
                if($request->hasfile('image'))
                {
                    $imagename = time().'.'.$request->file('image')->extension();
                    $result = $request->file('image')->move(public_path().'/assets/uploads/Advertisement/images/', $imagename); //store('files');
                    $Advertising->image = $imagename;
                }
                $Advertising->Update(['title' => $Advertising->title, 'link' => $Advertising->link,
                'user_id' => $Advertising->user_id, 'active' => $Advertising->active,
                'image' => $Advertising->image,]);
            }
          else 
          {
            $Advertising->Update(['title' => $Advertising->title, 'user_id' => $Advertising->user_id,
            'link' => $Advertising->link, 'active' => $Advertising->active,]);
          }
            $Advertisement = Advertising::get();
            return view('admin.Advertising.Advertising_list',['Advertisement' => $Advertisement]);
        }
        else{
            return response()->json(['message' => 'Advertising not found'], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function Advertisingactivation($id)
    {
            $Advertising = Advertising::where('Advertising_id',$id)->where('active','1');
            if($Advertising->exists())
            {
                $Advertising->Update(['active' => '0']);
                $Advertisement = Advertising::get();
                return view('admin.Advertising.Advertising_list',['Advertisement' => $Advertisement]);
            }
            else
            {
                $Advertising = Advertising::where('Advertising_id',$id);
                $Advertising->Update(['active' => '1']);
                $Advertisement = Advertising::get();
                return view('admin.Advertising.Advertising_list',['Advertisement' => $Advertisement]);
            }
    } 
}
