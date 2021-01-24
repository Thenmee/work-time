<?php

namespace App\Http\Controllers\Tender;


use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tender;
use App\Models\Major;
use Illuminate\Support\Collection;
use validator;
use Carbon\Carbon;
use App\Models\userNotify;


 
use Illuminate\Console\Command;
use App\Models\userProf;
use Illuminate\Support\Facades\Mail; 
use App\Mail\Notifies\NotifyEmail;


class TenderController extends Controller
{
    public function viewTenders()
    {
        $tenders=tender::where('active','1')
            ->where('deadline','>=',now())
            ->where('start_date','<=',now())
            ->orderByRaw('start_date DESC')
            ->paginate(4);
            $data=['tenders' => $tenders];

        return view('HR.tenders',$data);
    }

    public function viewTenderid($id)
    {
        $tenders=tender::join('majors','tenders.major_id','=','majors.major_id')
            ->select('majors.major_name','tenders.*')
            ->where('tenders.tender_id', $id);
            
            
            if ($tenders->exists())
            {
                $tenders=$tenders->get();
                $data=['tenders' => $tenders];
                return view('HR.tenderDetails',$data);           
             } 
            else 
            {
            return response()->json(["message" => "Tender not found!"], 404);
            }
            
            
        
    } 
    
    public function getActiveTenders()
    {

        /*if (Auth::check()) 
        {*/
            $tender=tender::where('active','1')->where('deadline','>=',now())
            ->where('start_date','<=',now())->orderByRaw('start_date DESC')->paginate();//->limit(8)
            return response()->json($tender,200);
       /* }
        else
        {
            return response()->json(['message' => 'The pages not found'], 401);
        } */
    }
    
    public function getTenderById($id) 
    {
      /*  if (Auth::check()) 
        {*/
            //$tender=tender::where('tender_id', $id);
            $tender=tender::join('majors','tenders.major_id','=','majors.major_id')
            ->select('majors.major_name','tenders.*')->where('tenders.tender_id', $id);
            if ($tender->exists())
            {
            return response()->json($tender->get(), 200);
            } 
            else 
            {
            return response()->json(["message" => "Tender not found!"], 404);
            }
        /*}
        else
        {
            return response()->json(['message' => 'The pages not found'], 401);
        } */
      }

      public function getTenderMajor()
      {
       /* if (Auth::check()) 
        {*/
            $tenders=tender::where('active','1')->get();
            $majors=Major::where('active','1')->get();
            $collection =collect([]);
            $major_ar=array();
            foreach($majors as $major)
            {  
                foreach($tenders as $tender)
                {
                    if($tender->major_id == $major->major_id)
                    {
                        $key=$major->major_name ; 
                        $count=tender::where('active','1')->where('major_id',$major->major_id)->get()->count();
                        
                        $major_ar[]=['count'=>$count,'name'=>$key];
                    // $collection->prepend( $count,$key);
                    break;
                    }
                }
            }
            return response()->json($major_ar,200);
      /*  }
        else
        {
            return response()->json(['message' => 'The pages not found'], 401);
        } */
      }

      public function filterAllActiveTender(Request $request)
      {
          $id=$request->input('major_id');
          $comp=$request->input('company');
          $loc=$request->input('location');
          $id_ar=explode(',', $id);
          $comp_ar=explode(',', $comp);
          $loc_ar=explode(',', $loc);
          //////no filters 
          if($id == '' && $comp == '' && $loc == '') 
          {
              $tender=tender::where('active','1')->where('deadline','>=',now())->where('start_date','<=',now())->orderByRaw('start_date DESC')->paginate();
              return response()->json($tender,200);
      
          }
          //////////filtter by major_id
          if($id != '' && $comp == '' && $loc == '')
          {
              return response()->json(tender::where(function ($query) use ($id_ar) 
              {
                  foreach($id_ar as $va)
                     $query->orwhere('major_id', '=', $va);
                  })->where('active','1')->where('deadline','>=',now())->where('start_date','<=',now())->orderByRaw('start_date DESC')->paginate(),200);
      
          }
                  //////////filtter by company name
          if($id == '' && $comp != '' && $loc == '')
          {
              return response()->json(tender::where(function ($query) use ($comp_ar) 
              {
                  foreach($comp_ar as $va)
                     $query->orwhere('company', '=', $va);
                  })->where('active','1')->where('deadline','>=',now())->where('start_date','<=',now())->orderByRaw('start_date DESC')->paginate(),200);
      
          }
          //////////filtter by location 
          if($id == '' && $comp == '' && $loc != '')
          {
              return response()->json(tender::where(function ($query) use ($loc_ar) 
              {
                  foreach($loc_ar as $va)
                     $query->orwhere('location', '=', $va);
                  })->where('active','1')->where('deadline','>=',now())->where('start_date','<=',now())->orderByRaw('start_date DESC')->paginate(),200);
      
          }
          //////////filtter by major_id and company name
          if($id != '' && $comp != '' && $loc == '')
          {
              return response()->json(tender::where(function ($query) use ($id_ar) 
              {
                  foreach($id_ar as $va)
                     $query->orwhere('major_id', '=', $va);
                  })->where(function ($query) use ($comp_ar) 
                  {
                      foreach($comp_ar as $va)
                         $query->orwhere('company', '=', $va);
                      })->where('active','1')->where('deadline','>=',now())->where('start_date','<=',now())->orderByRaw('start_date DESC')->paginate(),200);
      
          }
          //////////filtter by major_id and location
          if($id != '' && $comp == '' && $loc != '')
          {
              return response()->json(tender::where(function ($query) use ($id_ar) 
              {
                  foreach($id_ar as $va)
                     $query->orwhere('major_id', '=', $va);
                  })->where(function ($query) use ($loc_ar) 
                  {
                      foreach($loc_ar as $va)
                         $query->orwhere('location', '=', $va);
                      })->where('active','1')->where('deadline','>=',now())->where('start_date','<=',now())->orderByRaw('start_date DESC')->paginate(),200);
      
          }
          //////////filtter by company name and location
          if($id == '' && $comp != '' && $loc != '')
          {
              return response()->json(tender::where(function ($query) use ($comp_ar) 
              {
                  foreach($comp_ar as $va)
                     $query->orwhere('company', '=', $va);
                  })->where(function ($query) use ($loc_ar) 
                  {
                      foreach($loc_ar as $va)
                         $query->orwhere('location', '=', $va);
                      })->where('active','1')->where('deadline','>=',now())->where('start_date','<=',now())->orderByRaw('start_date DESC')->paginate(),200);
      
          }
          //////////filtter by major id , company name and location
          if($id != '' && $comp != '' && $loc != '')
          {
              return response()->json(tender::where(function ($query) use ($id_ar) 
              {
                  foreach($id_ar as $va)
                     $query->orwhere('major_id', '=', $va);
                  })->where(function ($query) use ($comp_ar) 
                  {
                      foreach($comp_ar as $va)
                         $query->orwhere('company', '=', $va);
                      })->where(function ($query) use ($loc_ar) 
                             {
                                foreach($loc_ar as $va)
                                   $query->orwhere('location', '=', $va);
                              })->where('active','1')->where('deadline','>=',now())->where('start_date','<=',now())->orderByRaw('start_date DESC')
                            ->paginate(),200);
          }
      }
      
    public function filterActiveTenderField()
    {
        $tenders=tender::where('active','1')->get();
        $majors=Major::where('active','1')->get();
        $major_ar=array();
        $compa_ar=array();
        $loca_ar=array();
        foreach($majors as $major)
        {  
            foreach($tenders as $tender)
            {
                if($tender->major_id == $major->major_id)
                {
                    $name=$major->major_name ; 
                    $id=$major->major_id;
                    $major_ar[]=['id'=>$id,'name'=>$name];
                break;
                }
            }
        }
        foreach($tenders as $tender)
            {
                $compa_ar[]=$tender->company;
            }
            //$compa_ar=array_unique($compa_ar);
        $compa_ar = array_values( array_flip( array_flip( $compa_ar ) ) );
        foreach($tenders as $tender)
        {
            $loca_ar[]=$tender->location;
        }
        //$loca_ar=array_unique($loca_ar);
        $loca_ar = array_values( array_flip( array_flip( $loca_ar ) ) );
        $key=['major','company','location'];
        $value=[$major_ar,$compa_ar,$loca_ar];
        $filters=array_combine($key,$value);
        //print_r($filters);

        return response()->json($filters,200);
    } 

    public function dowenloadFile($filename)
    {
            return response()->download(public_path('assets/uploads/tenders/pdf/'.$filename));
    }
    
    /* public function userNotify()
    {
        {
            $date=Carbon::today();
            $tenders=tender::join('majors','tenders.major_id','=','majors.major_id')
            ->select('majors.major_name','tenders.*')
            ->where('tenders.active','1')
            ->where('tenders.start_date',$date)->get(); //get all tenders where active and show today
            //print_r($tenders); echo $date;
          foreach($tenders as $tender)
            {
                //$user=userprof::select('userProfs_email')->get();
                //$emails=userprof::pluck('userProfs_email')->toArray(); //get all email of table that want notify emails for all tenders
                $users=userNotify::select('user_email','major_name','location_name')->get();
                foreach($users as $user)
                   { 
                    $major_ar=explode(',', $user->major_name);
                    $location_ar=explode(',', $user->location_name);
                    $tender_loc_ar=explode(',', $tender->location);
                        foreach($major_ar as $maj)
                        { 
                            
                            if($tender->major_name == $maj)
                            {
                                foreach($location_ar as $loc)
                                {
                                    foreach($tender_loc_ar as $loc_tend)

                                   { 
                                       if($loc_tend == $loc)
                                    {
                                        $data=[
                                                    'major_name'=>$tender->major_name,
                                                    'tender_id'=> $tender->tender_id,
                                                    'major_id'=> $tender->major_id,
                                                    'title'=> $tender->title,
                                                    'image'=>$tender->image,
                                                    'company'=> $tender->company,
                                                    'location'=> $tender->location,
                                                ];
                                                 echo $user->user_email;
                                                 print_r($data);
                                                 $delay=now()->addSeconds(20);
                                                 Mail::To($user->user_email)->send(new NotifyEmail ($data) );
                                                $job = (Mail::To($user->user_email)->send(new NotifyEmail ($data) ))
                                                ->delay($delay);
                                                 //echo $delay;
                                                    
                                                 
                                    
                                           dispatch($job);
                                                
                                            break;
                                    }
                                    else
                                    {
                                      continue;
                                    }
                                   }
                                }
                                
                            }
                            else
                            {
                                continue;
                            }
                            
                        }
                   }
            }
         }
    
    } */
    
}
