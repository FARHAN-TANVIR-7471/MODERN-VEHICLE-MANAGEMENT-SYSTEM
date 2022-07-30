@include('/admin/partials/header')
@include('/admin/partials/nav')
@include('/admin/partials/sidebar')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4"></h1>
            {{-- <div class="breadcrumb mb-4 col-md-12 ">
                <button type="button" class="btn btn-info m-1" id="addbtn"> Add Transport</button>
                <button type="button" class="btn btn-info m-1" id="showbtn">Show Transport</button>
            </div> --}}
            

            <div class="card">
                <div class="card-header"><i class="fas fa-table mr-1"></i>Add Product</div>
                <div class="card-body">
                    
                    <form action="{{ route('transport.update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ $transport->id }}">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="exampleFormControlInput1">Transport Name: </label>
                                
                                <input type="text" name="name" class="form-control" placeholder="Transport Name" value="{{ $transport->name }}">
                            </div>
                            <div class="form-group col-md-6">
                                {{csrf_field()}}
                              <label for="exampleFormControlSelect1">Type</label>

                                <select name="type" class="form-control" id="exampleFormControlSelect1">
                                    <option {{ $transport->type=="bus" ? "selected" : '' }}  value="bus">Bus</option>
                                    <option {{ $transport->type=="truck" ? "selected" : '' }} value="truck">Truck</option>
                                    <option {{ $transport->type=="car" ? "selected" : '' }} value="car">Car</option>
                                    <option {{ $transport->type=="microbus" ? "selected" : '' }} value="microbus">Micro Bus</option>        
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="exampleFormControlInput1">Transport Model: </label>
                                {{csrf_field()}}
                                <input type="text" name="mpdel" class="form-control" id="exampleFormControlInput1" placeholder="Transport Model" value="{{ $transport->mpdel }}">
                            </div>

                           <div class="form-group col-md-6">
                                {{csrf_field()}}
                              <label for="exampleFormControlInput1">Coler: </label>
                                <input type="text" name="coler" class="form-control" placeholder="Coler" value="{{ $transport->coler }}">
                            </div>
                            
                        </div>

                        <div class="form-row">

                            <div class="form-group col-md-6">
                                <label for="exampleFormControlInput1">Licence Number: </label>
                                {{csrf_field()}}
                                <input type="text" name="licence_number" class="form-control" id="exampleFormControlInput1" placeholder="Licence number" value="{{ $transport->licence_number }}">
                            </div>
                            
                            <div class="form-group col-md-6">
                                <label for="exampleFormControlInput1">Licence Experdate: </label>
                                {{csrf_field()}}
                                <input type="date" class="form-control" id="start" name="licence_experdate" value="{{ $transport->licence_experdate }}">
                                   
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