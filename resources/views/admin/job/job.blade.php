@include('admin.controlpanel.top')
@include('admin.controlpanel.sidebar')
@include('admin.controlpanel.header')
<div class="contant">
    <div class="title">
       <h3>tender</h3>
    </div>
    <div class="button">
        <a href="{{ url('/controlpanel/addjob') }}"  class="btn btn-primary" > 
        Add new Job
        </a>
    </div>
</div>
<div class="show-data">
        <table class="table table-hover" id="table" >
          <thead>
            <tr>
              <th >job title</th>
              <th>major</th>
              <th> location </th>
              <th > company </th>
              <th > deadline </th>
              <th> الحدث </th>
              <th > الحالة </th>
              
            </tr>
          </thead>
          <tbody>
          @foreach ($jobs  as $job)
            <tr> 	   
              <td> {{ $job->title}} </td>
              <td> {{ $job->major_name}} </td>
              <td> {{ $job->location}} </td>
              <td> {{ $job->company}} </td>
              <td> {{ $job->deadline}} </td>
              @if($job->active == 1)
                <td> active </td>
                <td>
                <a href="{{  url('/controlpanel/job/'.$job->job_id) }}"class="btn"> تعديل</a>
                <a href="" class="btn"> عرض التفاصيل</a>
                <a href="{{  url('/controlpanel/jobactivation/'.$job->job_id) }}" class="btn">الغاء التفعيل</a></td>
              @else 
                <td> not active </td>
                <td>
                <a href="{{  url('/controlpanel/job/'.$job->job_id) }}" class="btn"> تعديل</a>
                <a href="" class="btn"> عرض التفاصيل</a>
                <a href="{{  url('/controlpanel/jobactivation/'.$job->job_id) }}" class="btn">تفعيل</a></td>
              @endif  
            </tr>
            @endforeach
          </tbody>
    </table>
</div>
      
@include('admin.controlpanel.footer')