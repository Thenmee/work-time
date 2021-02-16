@extends('HR.layouts.master')
@section('content')

<div class='container-fluid colors-logo'>
<div class="color-logo">
              <div class="card-body text-center " style="padding:90px;">
              <h2 class='label'>{{__('fields_web.Tenders.Title')}} </h3>
   <img src="{{URL::asset('assets/images/hrlogo2.png')}}" class='mx-5 pageheaderlogo'  alt="" width="120" height="auto" >

              </div>
   </div>
</div><br><br>
 <div class="container-fluid md-light" style="overflow-x:hidden;">
   <div class="row" >
        <div class="container-fluid">
@foreach($tenders as $tender)
             <div class="row">
               <div class='col-12'>
                   <br>
                  <h2 class='label' class='label'  style="text-align: center"> {{$tender->title}} </h3>
                  <br><br><br>
                </div>
             </div>
             
             
           <div class="row justify-content-center align-content-center">
           
             <div class=' mx-auto my-auto' style="height:200px;width:200px;">
               
                 <!-- <div class="card-body "> -->
               <img class="card-img-top  " style="height:200px;width:200px;" src="{{URL::asset('assets/uploads/tenders/images/'.$tender->image)}}"> 
                   <!-- </div> -->
                
              </div>

             <div class='col-11 col-sm-11 col-md-8 col-lg-8 mx-2  my-auto'>
               <div class="card shadow-sm  bg-white" >
                 <div class="card-body">
                   <div class='row'>
                        <div class='col-12 col-sm-6 col-md-6 col-lg-6'>
                          <p><i class='fas fa-ellipsis-v'> &nbsp; </i>{{__('fields_web.Tenders.major')}}: <i> {{$tender->major_name}} </i> </p>
                          <p><i class="fa fa-map-marker"> &nbsp; </i>{{__('fields_web.Tenders.location')}}: <i> {{$tender->location}}</i> </p>
                          <p><i class='far fa-calendar-check'> &nbsp; </i> {{__('fields_web.Tenders.startDate')}}: <i> {{$tender->start_date}}</i> </p>
                        </div>
                        <div class='col-12 col-sm-6 col-md-6 col-lg-6'>
                          <p><i class='fa fa-home'> &nbsp; </i>{{__('fields_web.Tenders.company')}}: <i> {{$tender->company}}</i></p>
                          @if($tender->apply_link !=null)
                          <p><i class='fas fa-link'> &nbsp; </i>{{__('fields_web.Tenders.applyLink')}}:<a href="https://www.{{$tender->apply_link}}">{{$tender->apply_link}}</a></p>
                          @endif
                          <p style="color:red"><i class="far fa-calendar-times"> &nbsp; </i>{{__('fields_web.Tenders.Deadline')}}: <i> {{$tender->deadline}}</i> </p>
                        </div>
                   </div>

                </div>
               </div>
             </div>

           </div>
           <br> <br> <hr>
          
           
           
           <div class="container-fluid  bg-white">
              <div class="row ">
                <div class='col-12 col-sm-12 col-md-9 col-lg-9 container bg-light'>
  
                <div class="row justify-content-between  px-3 py-3">
               
                <div class=''>
                  <h3> {{__('fields_web.Tenders.description')}}:  </h3>
                </div>
                @if($tender->filename !=null)
                <div class=''>
                <a href="{{url('Tender/dowenloadFile/'.$tender->filename)}}"><button type="" class="btn btn-primary" width='90%' height="50px" > {{__('fields_web.Tenders.downloadpdfs')}}  </button></a>
                </div>
                @endif

             </div>
             
             
             <div class="row  px-3 py-3">
             {!!$tender->description!!}
             </div>
             
             @endforeach

                </div>

                <div class='col-12 col-sm-12 col-md-12 col-lg-3'>

                  <div class="row " >
                     
                    <div class="col-lg-12"> 
                         <h2 class='label mb-5 label lable-background'  style="text-align: center;">{{__('fields_web.Advertising.title')}}</h3>

                        <!--slide -->
                        <div class='second' style='max-height: '></div>
                        <div id="demo" class="carousel slide " data-ride="carousel">
                            <!-- The slideshow -->
                              <div class="carousel-inner" style='max-height: '>
                                  @foreach($advers as $adv)
                                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}" style=''>
                                                 <img src="{{URL::asset('assets/uploads/Advertisement/images/'.$adv->image)}}" class="d-block w-100" alt=""  width="100%" height="20%">
                                                  <div class="carousel-caption d-md-block ">  <!--d-none-->
                                                     <!-- <h4>{{$adv->title}}</h4> -->
                                                  </div>
                                                    <div class=" text-center">
                                                            <h4>{{\Illuminate\Support\Str::limit($adv->title, $limit = 10, $end = '...')}}</h4>
                                                            @if($adv->link !='' || $adv->link !=null)
                                                               <a href="https://www.{{$adv->link}}"><button class=' btnRegister ' style="float: none;width:100%" >  {{__('fields_web.Home.visti_website')}} </button></a>
                                                             @endif
                                                    </div>
                                    </div>
                                  @endforeach

                                </div>
                          </div>
                   </div>
               </div>
<!-- <br><br><br><br><br>
               <div class="row px-2 py-2" >
                     <div class="col-lg-12"> 
                        <!- slide ->
                          <div id="demo" class="carousel slide " data-ride="carousel">
                           <!- The slideshow ->
                                <div class="carousel-inner" style='max-height: 40vw !important;'>
                                  @foreach($advers as $adv)
                                   <div class="carousel-item {{ $loop->first ? 'active' : '' }}" style=''>
                                       <div class=" ">
                                       <div class=" text-center">
                                          <h4>{{\Illuminate\Support\Str::limit($adv->title, $limit = 10, $end = '...')}}</h4>
                                           @if($adv->link !='' || $adv->link !=null)
                                              <a href="https://www.{{$adv->link}}"><button class=' btnRegister ' style="float: none;width:100%" >  {{__('fields_web.Home.visti_website')}} </button></a>
                                           @endif
                                        </div>
                                     </div>
                                   </div>
                                 @endforeach

                                </div>

                          </div>
                     </div>
                 </div> -->

                </div>
                
                </div>
              </div>
             


            </div><!--  end of sliders -->


        </div>
     </div>
  </div>

@stop