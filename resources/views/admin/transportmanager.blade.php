@include('/admin/partials/header')
@include('/admin/partials/nav')
@include('/admin/partials/sidebar')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4"></h1>
            <div class="breadcrumb mb-4 col-md-12 ">
                <button type="button" class="btn btn-info m-1" id="addbtn"> Add Manager Information</button>
                <button type="button" class="btn btn-info m-1" id="showbtn">Show Manager Information</button>
            </div>

            <div class="card mb-4" id="datatable">
                <div class="card-header"><i class="fas fa-table mr-1"></i>Manager Information List</div>
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
                                @foreach ($transportManager as $items => $value)
                                    <tr>
                                        <td>{{ $value->id }}</td>
                                        <td>{{ $value->name }}</td>
                                        <td>{{ $value->date_of_birth }}</td>
                                        <td>{{ $value->mobile_number }}</td>
                                        <td>{{ $value->nid }}</td>
                                        <td>
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
                <div class="card-header"><i class="fas fa-table mr-1"></i>Add Manager Information</div>
                <div class="card-body">

                    <form action="/transportManagerinsert" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="exampleFormControlInput1">Manager Name: </label>
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
                                <label for="exampleFormControlInput1">Mobile Number: </label>
                                {{ csrf_field() }}
                                <input type="text" name="mobile_number" class="form-control"
                                    id="exampleFormControlInput1" placeholder="+880 xxxxxxxxxx">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="exampleFormControlInput1">NID Number: </label>
                                {{ csrf_field() }}
                                <input type="text" name="nid" class="form-control" id="exampleFormControlInput1"
                                    placeholder="NID Number">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6" {{ $errors->has('image') ? 'has-error' : '' }}>
                                <label for="image">NID Photo: </label>
                                <input type="file" name="nid_photo" id="image" class="form-control">
                                <span class="text-danger"> {{ $errors->first('image') }}</span>
                            </div>

                            <div class="form-group col-md-6" {{ $errors->has('image') ? 'has-error' : '' }}>
                                <label for="image">Manager Image: </label>
                                <input type="file" name="manager_photo" id="image" class="form-control">
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
