
@include('/admin/partials/header')
@include('/admin/partials/nav')
@include('/admin/partials/sidebar')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4"></h1>

            <div class="card" >
                <div class="card-header"><i class="fas fa-table mr-1"></i>Edit Schedule Information</div>
                <div class="card-body">
                    
                    <form action="{{ route('transport.schodule.update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ $transportschedules->id }}">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="exampleFormControlInput1">Schedule Name: </label>
                                <input type="text" name="schedules_name" class="form-control" placeholder="name" value="{{ $transportschedules->schedules_name }}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="exampleFormControlInput1">Select Transport: </label>
                                <select name="transport_id" class="form-control" id="exampleFormControlSelect1">
                                	@foreach ($transport as $items => $value)
                                    <option {{ $transportschedules->transport_id==$value->id ? "selected" : '' }} value="{{$value->id}}">{{$value->name}}</option>
                                    @endforeach                    
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="exampleFormControlInput1">Start Date and time: </label>
                                <input name="start_time" class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input" value="{{ $transportschedules->start_time }}">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="exampleFormControlInput1">End Date and time: </label>
                                <input name="end_time" class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input" value="{{ $transportschedules->end_time }}">
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