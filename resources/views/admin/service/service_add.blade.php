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
                  <h3 class="card-title">Create New Service</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action="/controlpanel/service" method="post" enctype="multipart/form-data">
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
                      <input type="hidden" class="form-control" name="user_id" placeholder="Server" aria-label="Server" value="1">
              		  <input type="hidden" class="form-control" name="active" placeholder="Server" aria-label="Server" value="1">  

                    <div class="row">
                       
                    <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputFile">Service image</label>
                                <div class="input-group">
                                  <div class="custom-file">
                                  <input  name="image" id="file-ip-1"  accept="image/*" multiple="false" type="file" class="custom-file-input" onchange="showPreview(event);" required>
                                  <label class="custom-file-label" for="exampleInputFile">Choose image</label>
                                  </div>
                               </div>
                         </div>
                    </div>
                    
                    <div class="col-md-4">
                            <div class="form-group">
                                <label> Title:</label>
                                <input type="text" name="title" placeholder="title" class="form-control"  required>
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
                     
                   
                    <div class="row">
                       <div class="col-md-12">
                          <div class="form-group">
                            <label> Description:</label>
                            <textarea cols="80" id="mytextarea" name="description"></textarea>
                          </div>
                       </div>
                    </div>

               
                  <!-- /.card-body -->

                  <div class="">
                    <button type="submit" class="btn btn-primary">Create Service</button>
                  </div>
                </div>  
                </form>
              </div>
              <!-- /.card -->
        </div>
      </div>
    </div>
</section>
@endSection


                         