
@include('/admin/partials/header')
@include('/admin/partials/nav')
@include('/admin/partials/sidebar')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4"></h1>
            <div class="breadcrumb mb-4 col-md-12 ">
                <button type="button" class="btn btn-info m-1" id="addbtn"> Add  Schedule Information</button>
                <button type="button" class="btn btn-info m-1" id="showbtn">Show Schedule Information</button>
            </div>
            
            <div class="card mb-4" id="datatable">
                <div class="card-header"><i class="fas fa-table mr-1"></i>Transport Schedule Information List</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Schedule Name</th>
                                    <th>Start Time</th>
                                    <th>End Time</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Schedule Name</th>
                                    <th>Start Time</th>
                                    <th>End Time</th>
                                </tr>
                            </tfoot>
                            <tbody>
                            @foreach ($transportschedules as $items => $value)
                                <tr>
                                    <td>{{$value->id}}</td>
                                    <td>{{$value->schedules_name}}</td>
                                    <td>{{$value->start_time}}</td>
                                    <td>{{$value->end_time}}</td>
                                </tr>
                            @endforeach                                     
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="card" id="inputfild">
                <div class="card-header"><i class="fas fa-table mr-1"></i>Add Schedule Information</div>
                <div class="card-body">
                    
                    <form action="/transportSchoduleinsert" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="exampleFormControlInput1">Schedule Name: </label>
                                <input type="text" name="schedules_name" class="form-control" placeholder="name">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="exampleFormControlInput1">Select Transport: </label>
                                <select name="transport_id" class="form-control" id="exampleFormControlSelect1">
                                	@foreach ($transport as $items => $value)
                                    <option value="{{$value->id}}">{{$value->name}}</option>
                                    @endforeach                    
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="exampleFormControlInput1">Start Date and time: </label>
                                <input name="start_time" class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="exampleFormControlInput1">End Date and time: </label>
                                <input name="end_time" class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

@include('/admin/partials/future')

<script>
    $(document).ready(function(){

        $("#showbtn").hide();
        $("#inputfild").hide();

         $("#addbtn").click(function(){
            $("#addbtn").hide();
            $("#datatable").hide();
            $("#showbtn").show();
            $("#inputfild").show();
        });

        $("#showbtn").click(function(){
            $("#addbtn").show();
            $("#datatable").show();
            $("#showbtn").hide();
            $("#inputfild").hide();
        });
    });
</script>