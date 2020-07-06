
@include('/admin/partials/header')
@include('/admin/partials/nav')
@include('/admin/partials/sidebar')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4"></h1>
            <div class="breadcrumb mb-4 col-md-12 ">
                <button type="button" class="btn btn-info m-1" id="addbtn"> Add Transport Assign Information</button>
                <button type="button" class="btn btn-info m-1" id="showbtn">Show ransport Assain Information</button>
            </div>
            
            <div class="card mb-4" id="datatable">
                <div class="card-header"><i class="fas fa-table mr-1"></i>ransport Assign Information List</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Driver Name</th>
                                    <th>Manager Number</th>
                                    <th>Transport Type</th>
                                    <th>Transport Model</th>
                                    <th>Coler</th>
                                    <th>Licence Number</th>
                                    <th>Licence Eexper Date</th>
                                    
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Driver Name</th>
                                    <th>Manager Number</th>
                                    <th>Transport Type</th>
                                    <th>Transport Model</th>
                                    <th>Coler</th>
                                    <th>Licence Number</th>
                                    <th>Licence Eexper Date</th>
                                </tr>
                            </tfoot>
                            <tbody>
                            @foreach ($tranaport_associates as $items => $value)
                                <tr>
                                    <td>{{$value->id}}</td>
                                    <td>{{$value->name}}</td>
                                    <td>{{$value->mobile_number}}</td>
                                    <td>{{$value->type}}</td>
                                    <td>{{$value->mpdel}}</td>
                                    <td>{{$value->coler}}</td>
                                    <td>{{$value->licence_number}}</td>
                                    <td>{{$value->licence_experdate}}</td>
                                </tr>
                            @endforeach                                       
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="card" id="inputfild">
                <div class="card-header"><i class="fas fa-table mr-1"></i>Add Transport Assign</div>
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