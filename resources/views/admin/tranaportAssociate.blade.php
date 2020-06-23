
@include('/admin/partials/header')
@include('/admin/partials/nav')
@include('/admin/partials/sidebar')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4"></h1>
            <div class="breadcrumb mb-4 col-md-12 ">
                <button type="button" class="btn btn-info m-1" id="addbtn"> Add Transport Assain Information</button>
                <button type="button" class="btn btn-info m-1" id="showbtn">Show ransport Assain Information</button>
            </div>
            
            <div class="card mb-4" id="datatable">
                <div class="card-header"><i class="fas fa-table mr-1"></i>ransport Assain Information List</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Date of birth</th>
                                    <th>Mobile Number</th>
                                    <th>NID</th>
                                    <th>Actions</th>
                                    
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Date of birth</th>
                                    <th>Mobile Number</th>
                                    <th>NID</th>
                                    <th>Actions</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                
                                <tr>
                                    <td>A</td>
                                    <td>A</td>
                                    <td>A</td>
                                    <td>A</td>
                                    <td>A</td>
                                    <td>A</td>
                                </tr>                                       
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="card" id="inputfild">
                <div class="card-header"><i class="fas fa-table mr-1"></i>Add Assain</div>
                <div class="card-body">
                    
                    <form action="/transportAssociateinsert" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="exampleFormControlInput1">Slect Transport: </label>
                                <select name="transportid" class="form-control" id="exampleFormControlSelect1">
                                	@foreach ($transport as $items => $value)
                                    <option value="{{$value->id}}">{{$value->name}}</option>
                                    @endforeach                    
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="exampleFormControlInput1">Slect Driver: </label>
                                <select name="driverid" class="form-control" id="exampleFormControlSelect1">
                                	@foreach ($driver as $items => $value)
                                    <option value="{{$value->id}}">{{$value->name}}</option>
                                    @endforeach                    
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="exampleFormControlInput1">Slect Manager: </label>
                                <select name="managerid" class="form-control" id="exampleFormControlSelect1">
                                	@foreach ($transportManager as $items => $value)
                                    <option value="{{$value->id}}">{{$value->name}}</option>
                                    @endforeach                    
                                </select>
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