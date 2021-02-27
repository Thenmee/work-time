@extends("layouts.custom.app")
@section('main')

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
             <!-- general form elements -->
             <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">{{__('fields_web.companyInfo.Title')}}</h3>

                </div>
                <!-- /.card-header -->
                <!-- form start -->

                  <div class="card-body">
                      <div class="row">
                          <div class="col-md-12">
                            @if(session('success'))
                            <div class="alert alert-success">
                            {{ session('success') }}
                            </div>
                        @endif
                          </div>
                      </div>
                    <div class="row">



                    <div class="table-responsive table-bordered table-stripped">
                        <table class="table m-0">
                          <thead>
                          <tr>
                          <th>{{__('fields_web.companyInfo.companyName')}}  </th>
                          <th>{{__('fields_web.Users.UserName')}}  </th>
                          <th>{{__('fields_web.Users.Email')}}  </th>
                          
                          <th>rolse </th>
                          <th>{{__('fields_web.Users.status')}}  </th>
                          <th>{{__('fields_web.Users.Actions')}}  </th>
                         
                          </tr>
                          </thead>
                          <tbody>
                          @foreach ($users  as $user)
                          <tr> 	   
                          <td> {{$user->companyName}} </td>
                            <td> {{$user->username}} </td>
                            <td> {{$user->email}} </td> 
                            
                            @if($user->role_id == 5)
                            <td>Jobs</td>
                            @elseif($user->role_id == 6)
                            <td>Tender  </td>
                            @elseif($user->role_id == 7)
                            <td> Jobs&Tender </td>
                            @endif
                            </td>
                             @if($user->active == 1)
                                <td><span class="badge badge-success">{{__('fields_web.Users.Active')}}</span></td>
                                <td>
                                    <a href="{{  route('viewDetails',$user->user_id) }}"class="btn btn-outline-primary"> <i class="fas fa-eye"></i></a>
                                    <a href="{{  route('CompanyUseractivation' ,$user->user_id) }}" class="btn btn-outline-danger" href="#"><i class="fas fa-trash-alt"></i></a>
                              </td>
                              @elseif($user->active == 0) 
                            <td><span class="badge badge-danger">{{__('fields_web.Jobs.notActive')}}</span></td>
                            <td>
                              <a href="{{  route('viewCompanydetilse' ,$user->user_id) }}" > <i class="fas fa-eye"></i></a>
                            </td>
                              @elseif($user->active == 2) 
                            <td><span class="badge badge-danger">{{__('fields_web.companyInfo.statucompany')}}</span></td>
                            <td>
                              <a href="{{  route('viewCompanydetilse' ,$user->user_id) }}" > <i class="fas fa-eye"></i></a>
                            </td>
                            @endif 
                          </tr>
                          @endforeach
                               
                            </tr>
                          </tbody>
                      </table>
                  </div>
                  <!-- /.table-responsive -->


                    </div>

                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer">

                  </div>

              </div>
              <!-- /.card -->
        </div>
      </div>
    </div>
</section>


  @endSection