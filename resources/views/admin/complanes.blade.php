@include('/admin/partials/header')
@include('/admin/partials/nav')
@include('/admin/partials/sidebar')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4"></h1>            
            <div class="card mb-4" id="datatable">
                <div class="card-header"><i class="fas fa-table mr-1"></i>Transport List</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Perpose</th>
                                    <th>Transport Name</th>
                                    <th>Complane Message</th>
                                    <th>Time</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Perpose</th>
                                    <th>Transport Name</th>
                                    <th>Complane Message</th>
                                    <th>Time</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($complanes as $items => $value)
                                <tr>
                                    <td>{{$value->id}}</td>
                                    <td>{{$value->perpose}}</td>
                                    <td>{{$value->transport_name}}</td>
                                    <td>{{$value->complane_message}}</td>
                                    <td>{{$value->created_at}}</td>
                                </tr>
                                @endforeach                                       
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
@include('/admin/partials/future')
