
@extends('HR.company.layouts.master')
@section('contents')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
             <!-- general form elements -->
             <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">{{__('fields_web.Jobs.TitlePage')}}</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action="{{route('storeJob')}}" method="post" enctype="multipart/form-data">
                    @csrf
                  <div class="card-body">
                      <div class="row">
                          <div class="col-md-12">

                            @if(session('success'))
                                <div class="alert alert-success">
                                {{ session('success') }}
                                </div>
                            @endif
                            @if(session('error'))
                            <div class="alert alert-danger">
                            {{ session('error') }}
                            </div>
                        @endif
                          </div>
                      </div>
               			 <input type="hidden" class="form-control" name="active" placeholder="Server" aria-label="Server" value="0">  
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>{{__('fields_web.JobsAdd.Title')}} :</label>
                                <input type="text" name="title" placeholder="title" class="form-control"  required>
                              </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>{{__('fields_web.JobsAdd.Major')}} :</label>
                                <select class="form-control select2" name="major_id" style="width: 100%;">
                                  @foreach ($majors as $major)  
                                  @if($major->type == 1)
                                  <option value="{{ $major->major_id}} ">{{ $major->major_name}} </option>
                                  @endif
                                  @endforeach
                                </select>
                              </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>{{__('fields_web.JobsAdd.Location')}} :</label>
                                <select class="select2" multiple="multiple" name="location[]"  style="width: 100%;">
                                  <option value="Sanaa">Sanaa</option>
                                  <option value="Amran">Amran</option>
                                  <option value="Abyan">Abyan</option>
                                  <option value="AlMahrah">AlMahrah</option>
                                  <option value="AlMahwit">AlMahwit</option>
                                  <option value="Dhale">Dhale</option>
                                  <option value="Aden">Aden</option>
                                  <option value="Amran">Amran</option>
                                  <option value="Dhamar">Dhamar</option>
                                  <option value="Hadramaut">Hadramaut</option>
                                  <option value="AlJawf">AlJawf</option>
                                  <option value="Hajjah">Hajjah</option>
                                  <option value="Ibb">Ibb</option>
                                  <option value="Lahij">Lahij</option>
                                  <option value="Marib">Marib</option>
                                  <option value="AlBayda">AlBayda</option>
                                  <option value="Raymah">Raymah</option>
                                  <option value="Sadah">Sadah</option>
                                  <option value="Amanat AlAsimah">Amanat AlAsimah</option>
                                  <option value="Shabwah">Shabwah</option>
                                  <option value="Socotra">Socotra</option> 
                                  <option value="Taiz">Taiz</option>
                                  <option value="Yemen">Yemen</option>

                                </select>
                              </div>
                        </div>
                    </div>

                    <div class="row">

                    <div class="col-md-4">
                            <div class="form-group">
                                <label>{{__('fields_web.JobsAdd.OtharLocation')}} :</label>
                                <input type="text" name="location[]"   class="form-control" >
                            </div>
                    </div>





                        <div class="col-md-4">
                            <div class="form-group">
                                <label>{{__('fields_web.JobsAdd.Company')}} :</label>
                                <input type="text" name="company" placeholder="{{__('fields_web.JobsAdd.Company')}}" class="form-control"  required>
                              </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>{{__('fields_web.JobsAdd.start_date')}} :</label>
                                <input type="date" name="start_date"  class="form-control"  required>
                              </div>
                        </div>


                    </div>

                    <div class="row">
                       
                    <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputFile">{{__('fields_web.JobsAdd.image')}} </label>
                                <div class="input-group">
                                  <div class="custom-file">
                                  <input  name="image" id="file-ip-1"  accept="image/*" multiple="false" type="file" class="custom-file-input" onchange="showPreview(event);" required>
                                  <label class="custom-file-label" for="exampleInputFile">{{__('fields_web.JobsAdd.choose')}} </label>
                                  </div>
                               </div>
                         </div>
                    </div>
                    
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>{{__('fields_web.JobsAdd.deadline')}} :</label>
                                <input type="date" name="deadline" class="form-control"  required>
                              </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>{{__('fields_web.JobsAdd.PostedDate')}} :</label>
                                <input type="date" name="posted_date"  class="form-control"  required>
                              </div>
                        </div>
                    </div>
                  
                 
                    <div class="row">
                        <div class="col-sm-12">
                          <div class="timeline-item">
                              <div class="timeline-body preview">
                                <img id="file-ip-1-preview" style="width: 150px;height: 150px;margin-top:10px;">
                              </div>
                          </div>
                         </div>
                    </div>    
                     
                   
                     <!-- <div class="col-md-4">
                            <div class="form-group">
                                <label> Apply Link:</label>
                                <input type="text" name="apply_link" placeholder="apply_link" class="form-control"  required>
                              </div>
                        </div> -->
                    <div class="row">
                       <div class="col-md-12">
                          <div class="form-group">
                            <label>{{__('fields_web.JobsAdd.Description')}} :</label>
                            <textarea cols="80" id="mytextarea" name="description"></textarea>
                          </div>
                       </div>
                    </div>

                    <div class="row">
                        <label>{{__('fields_web.JobsAdd.massege')}}</label>
                        <div class="col-sm-4">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" onclick="javascript:yesnoCheck();" name="register_here" value="0" id="noCheck">
                          <label class="form-check-label" for="inlineRadio1">{{__('fields_web.JobsAdd.No')}}</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" onclick="javascript:yesnoCheck();" name="register_here" value="1" id="yesCheck">
                          <label class="form-check-label" for="inlineRadio2">{{__('fields_web.JobsAdd.Yes')}}</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" onclick="javascript:yesnoCheck();" name="register_here" value="2" id="BothCheck">
                          <label class="form-check-label" for="inlineRadio2">{{__('fields_web.JobsAdd.Both')}}</label>
                        </div>
                       
                    </div>
                   </div>
                   <div class="row">
                      <div id="div">
                      </div>
                    </div>
                  <!-- /.card-body -->

                  <div class="">
                    <button type="submit" class="btn btn-primary">{{__('fields_web.JobsAdd.Submit')}}</button>
                  </div>
                </div>  
                </form>
              </div>
              <!-- /.card -->
        </div>
      </div>
    </div>
</section>
@stop