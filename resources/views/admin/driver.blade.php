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
                                    <th>Mobile Number</th>
                                    <th>Licence Number</th>
                                    <th>Licence Experdate Date </th>
                                    <th>Img</th>
                                    <th>NID</th>
                                    <th>NID Img</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Mobile Number</th>
                                    <th>Licence Number</th>
                                    <th>Licence Experdate Date </th>
                                    <th>Img</th>
                                    <th>NID</th>
                                    <th>NID Img</th>
                                    <th></th>
                                </tr>
                            </tfoot>
                            <tbody>

                                @foreach ($driver as $items => $value)
                                    <tr>
                                        <td>{{ $value->id }}</td>
                                        <td>{{ $value->name }}</td>
                                        <td>{{ $value->mobile_number }}</td>
                                        <td>{{ $value->licence_number }}</td>
                                        <td>{{ $value->licence_experdate_date }}</td>
                                        <td><img src="{{ $value->driver_photo }}" alt="manager_photo" width="60" height="60"></td>
                                        <td>{{ $value->nid }}</td>
                                        <td><img src="{{ $value->nid_photo }}" alt="manager_photo" width="60" height="60"></td>
                                        <td class="text-center">
                                            <a href="{{ route('driver.edit', $value->id) }}" class="view"
                                                title="View" data-toggle="tooltip">
                                                Edit
                                            </a>
                                            <a href="{{ route('driver.destroy', $value->id) }}" class="edit"
                                                title="Edit" data-toggle="tooltip">
                                                <span style="color: red;">Delete</span> 
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="card" id="inputfild">
                <div class="card-header"><i class="fas fa-table mr-1"></i>Add Driver</div>
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
                                {{ csrf_field() }}
                                <input type="date" class="form-control" id="start" name="date_of_birth">
                                <!-- <input type="date" class="form-control" id="start" name="trip-start"
                               value="2018-07-22"
                               min="2018-01-01" max="2018-12-31"> -->
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="exampleFormControlInput1">Email: </label>
                                {{ csrf_field() }}
                                <input type="email" name="email" class="form-control"
                                    id="email" placeholder="name@demo.com">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleFormControlInput1">Mobile Number: </label>
                                {{ csrf_field() }}
                                <input type="text" name="mobile_number" class="form-control"
                                    id="exampleFormControlInput1" placeholder="+880 xxxx-xxxxxx">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleFormControlInput1">Password: </label>
                                {{ csrf_field() }}
                                <input type="password" name="password" class="form-control"
                                    id="password" placeholder="......">
                            </div>

                            <div class="form-group col-md-6">
                                {{ csrf_field() }}
                                <label for="exampleFormControlInput1">Licence Number: </label>
                                <input type="text" name="licence_number" class="form-control"
                                    placeholder="Licence Number">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="exampleFormControlInput1">NID Number: </label>
                                {{ csrf_field() }}
                                <input type="text" name="nid" class="form-control" id="exampleFormControlInput1"
                                    placeholder="NID Number">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="exampleFormControlInput1">Licence Experdate Date: </label>
                                {{ csrf_field() }}
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
        $(document).ready(function() {

            $("#showbtn").hide();
            $("#inputfild").hide();

            $("#addbtn").click(function() {
                $("#addbtn").hide();
                $("#datatable").hide();
                $("#showbtn").show();
                $("#inputfild").show();
            });

            $("#showbtn").click(function() {
                $("#addbtn").show();
                $("#datatable").show();
                $("#showbtn").hide();
                $("#inputfild").hide();
            });
        });
    </script>
