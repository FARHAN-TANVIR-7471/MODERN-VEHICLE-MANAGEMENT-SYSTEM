@include('/admin/partials/header')
@include('/admin/partials/nav')
@include('/admin/partials/sidebar')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4"></h1>
            <div class="breadcrumb mb-4 col-md-12 ">
                <button type="button" class="btn btn-info m-1" id="addbtn"> Add Driver Information</button>
                <button type="button" class="btn btn-info m-1" id="showbtn">Show Driver Information</button>
            </div>
            
            <div class="card mb-4" id="datatable">
                <div class="card-header"><i class="fas fa-table mr-1"></i>Driver Information List</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Gender</th>
                                    <th>Product Type</th>
                                    <th>Price</th>
                                    <th>Discount</th>
                                    <th>Coler</th>
                                    <th>Size</th>
                                    <th>Trend</th>
                                    <th>Image</th>
                                    <!-- <th>Actions</th> -->
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Gender</th>
                                    <th>Product Type</th>
                                    <th>Price</th>
                                    <th>Discount</th>
                                    <th>Color</th>
                                    <th>Size</th>
                                    <th>Trend</th>
                                    <th>Image</th>
                                    <!-- <th>Actions</th> -->
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
                                    <td>A</td>
                                    <td>A</td>
                                    <td>A</td>
                                    <td>
                                        <img style="width: 30%; height:15%" src="">
                                    </td>
                                    <!-- <td class="text-center">
                                        <a href="#" class="view" title="View" data-toggle="tooltip"><i style="color: #03A9F4" class="material-icons">&#xE417;</i></a>
                                        <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i style="color: #FFC107;" class="material-icons">&#xE254;</i></a>                                    
                                    </td> -->
                                </tr>
                                                                            
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="card" id="inputfild">
                <div class="card-header"><i class="fas fa-table mr-1"></i>Add Product</div>
                <div class="card-body">
                    
                    <form action="/driverinsert" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="exampleFormControlInput1">Driver Name: </label>
                                <input type="text" name="name" class="form-control" placeholder="name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleFormControlInput1">Date of birth: </label>
                                {{csrf_field()}}
                                <input type="date" class="form-control" id="start" name="date_of_birth">
                                   <!-- <input type="date" class="form-control" id="start" name="trip-start"
                                   value="2018-07-22"
                                   min="2018-01-01" max="2018-12-31"> -->
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="exampleFormControlInput1">Mobile Number: </label>
                                {{csrf_field()}}
                                <input type="text" name="mobile_number" class="form-control" id="exampleFormControlInput1" placeholder="+880 xxxxxxxxxx">
                            </div>

                           <div class="form-group col-md-6">
                                {{csrf_field()}}
                              <label for="exampleFormControlInput1">Licence Number: </label>
                                <input type="text" name="licence_number" class="form-control" placeholder="Coler">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="exampleFormControlInput1">NID Number: </label>
                                {{csrf_field()}}
                                <input type="text" name="nid" class="form-control" id="exampleFormControlInput1" placeholder="NID Number">
                            </div>
                            
                            <div class="form-group col-md-6">
                                <label for="exampleFormControlInput1">Licence Experdate Date: </label>
                                {{csrf_field()}}
                                <input type="date" class="form-control" id="start" name="licence_experdate_date">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6" {{ $errors->has('image') ? 'has-error' : '' }}>
                                <label for="image">NID Photo: </label>
                                <input type="file" name="nid_photo" id="image" class="form-control">
                                <span class="text-danger"> {{ $errors->first('image') }}</span>
                            </div>
                        
                            <div class="form-group col-md-6" {{ $errors->has('image') ? 'has-error' : '' }}>
                                <label for="image">Driver Image: </label>
                                <input type="file" name="driver_photo" id="image" class="form-control">
                                <span class="text-danger"> {{ $errors->first('image') }}</span>
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