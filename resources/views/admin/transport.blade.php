@include('/admin/partials/header')
@include('/admin/partials/nav')
@include('/admin/partials/sidebar')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4"></h1>
            <div class="breadcrumb mb-4 col-md-12 ">
                <button type="button" class="btn btn-info m-1" id="addbtn"> Add Transport</button>
                <button type="button" class="btn btn-info m-1" id="showbtn">Show Transport</button>
            </div>
            
            <div class="card mb-4" id="datatable">
                <div class="card-header"><i class="fas fa-table mr-1"></i>Transport List</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Type</th>
                                    <th>Model</th>
                                    <th>Coler</th>
                                    <th>Licence Number</th>
                                    <th>Licence Experdate</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Type</th>
                                    <th>Model</th>
                                    <th>Coler</th>
                                    <th>Licence Number</th>
                                    <th>Licence Experdate</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($transport as $items => $value)
                                <tr>
                                    <td>{{$value->id}}</td>
                                    <td>{{$value->name}}</td>
                                    <td>{{$value->type}}</td>
                                    <td>{{$value->mpdel}}</td>
                                    <td>{{$value->coler}}</td>
                                    <td>{{$value->licence_number}}</td>
                                    <td>{{$value->licence_experdate}}</td>
                                    <!-- <td class="text-center">
                                        <a href="#" class="view" title="View" data-toggle="tooltip"><i style="color: #03A9F4" class="material-icons">&#xE417;</i></a>
                                        <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i style="color: #FFC107;" class="material-icons">&#xE254;</i></a>                                    
                                    </td> -->
                                </tr>
                                @endforeach                                       
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="card" id="inputfild">
                <div class="card-header"><i class="fas fa-table mr-1"></i>Add Product</div>
                <div class="card-body">
                    
                    <form action="/transportinsert" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="exampleFormControlInput1">Transport Name: </label>
                            
                                <input type="text" name="name" class="form-control" placeholder="Transport Name">
                            </div>
                            <div class="form-group col-md-6">
                                {{csrf_field()}}
                              <label for="exampleFormControlSelect1">Type</label>

                                <select name="type" class="form-control" id="exampleFormControlSelect1">
                                    <option value="bus">Bus</option>
                                    <option value="truck">Truck</option>
                                    <option value="car">Car</option>
                                    <option value="microbus">Micro Bus</option>        
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="exampleFormControlInput1">Transport Model: </label>
                                {{csrf_field()}}
                                <input type="text" name="mpdel" class="form-control" id="exampleFormControlInput1" placeholder="Transport Model">
                            </div>

                           <div class="form-group col-md-6">
                                {{csrf_field()}}
                              <label for="exampleFormControlInput1">Coler: </label>
                                <input type="text" name="coler" class="form-control" placeholder="Coler">
                            </div>
                            
                        </div>

                        <div class="form-row">

                            <div class="form-group col-md-6">
                                <label for="exampleFormControlInput1">Licence Number: </label>
                                {{csrf_field()}}
                                <input type="text" name="licence_number" class="form-control" id="exampleFormControlInput1" placeholder="Licence number">
                            </div>
                            
                            <div class="form-group col-md-6">
                                <label for="exampleFormControlInput1">Licence Experdate: </label>
                                {{csrf_field()}}
                                <input type="date" class="form-control" id="start" name="licence_experdate">
                                   <!-- <input type="date" class="form-control" id="start" name="trip-start"
                                   value="2018-07-22"
                                   min="2018-01-01" max="2018-12-31"> -->
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