<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bitkub | Consent Management</title>
        <!-- Styles -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
        <link href="{{ asset('css/datatables.min.css') }}" rel="stylesheet"> 
        <link href="{{ asset('css/datatables.css') }}" rel="stylesheet"> 

</head>
<body>
@include('sweetalert::alert')

<!-- Header -->
    <nav class="navbar sticky-top navbar-expand-md navbar-white bg-white">
            <a class="navbar-brand" href="#">
                <span><img src="{{URL('/storage/bitkub.svg')}}" height="40" width="130"  class="d-inline-block align-top" alt=""></span>
            </a>
            <h3>Consent Management</h3>
        </div>
    </nav>
<!-- Sidebar -->
    <div class="d-flex mt-4"> 
        <div class="card shadow">
        <div class="card-header border-bottom-0 bg-white shadow">Dashboard </div>
        <div class="list-group list-group-flush">
            <a href="#" class="list-group-item list-group-item-action">Account Activites</a>
            <a href="#" class="list-group-item list-group-item-action">Consent Management</a>
            <a href="#" class="list-group-item list-group-item-action">Channel Management</a>
            <a href="#" class="list-group-item list-group-item-action">Data Subject Request</a>
            <a href="#" class="list-group-item list-group-item-action">Reports</a>
        </div>
    </div>
    <div class="container-fluid">        
        <form>
        <div class="card shadow">
            <h5 class="card-header bg-white">
                <div class="row">
                    <div class="col-md-auto mr-auto mt-2">
                        <span class="glyphicon glyphicon-filter" aria-hidden="true"></span>Filter
                    </div>
                    <div class="col-md-auto ml-auto">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                </div>
            </h5>
        <div class="card-body">
                        <!-- form -->

            <div class="row">
                <div class="form-group col-md-6 col-sm-6 col-xs-6">
                    <label for="name">Consent Title</label>
                    <textarea class="form-control border-top-0 border-left-0 border-right-0" maxlength="255" rows="1" id="name" placeholder="search by title"></textarea>
                </div>
                <div class="form-group col-md-3 col-sm-6 col-xs-6">
                    <label for="Status">Consent Status</label>
                    <select id="inputState" class="form-control">
                        <option selected>All Status</option>
                        <option>Draft</option>
                        <option>Active</option>
                        <option>Inactive</option>
                    </select>                
                </div>
                <div class="form-group col-md-3 col-sm-6 col-xs-6">
                    <label for="type">Consent Type</label>
                    <select id="inputState" class="form-control">
                    <option selected>All Type</option>
                    <option>Public</option>
                    <option>Private</option>
                    </select>
                </div>
                <div class="col-md-2"></div>
            </div>                    
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="start">Start Date</label>
                            <input type="date" class="form-control" id="start" name="start">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="end">End Date</label>
                            <input type="date" class="form-control" id="end" name="end">
                        </div>
                    </div>
                </div> 
                </form>                               
            </div>
            </div>
               <!-- Add button -->
            <div class="row my-3">
                <div class="ml-auto col-md-auto">
                    <!--  Modal Button -->
                    <div class="button-flex flex-row-reverse bd-highlight">
                        <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#addConsentModal">
                            New Consent
                        </button>
                    </div>
                            <!-- Modal Body -->
                    <div class="modal fade" id="addConsentModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="myModalLabel">Consent</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>                 
                                </div>
                                            <!-- Form -->
                                    <form action="consents.insert" method="POST">
                                        @csrf   
                                        <div class="modal-body">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                        <div class="form-group">
                                                            <label for="name">Consent Title(TH)*</label><br>
                                                            <textarea class="form-border" maxlength="255" id="name" name="name"required></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="detail">Consent Detail(TH)*</label><br>
                                                            <textarea class="form-border" maxlength="255" id="detail" name="detail" required></textarea>
                                                        </div>
                                                    </div>
                                                <!--   Second Column -->
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                        <div class="form-group">
                                                            <label for="nameeng">Consent Title(ENG)*</label><br>
                                                            <textarea class="form-border" maxlength="255" id="nameeng" name="nameeng" required></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="detaileng">Consent Detail(ENG)*</label><br>
                                                            <textarea class="form-border" maxlength="255" id="detaileng" name="detaileng" required></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                        <div class="row">
                                                            <div class="col-md-2 col-sm-2 col-xs-2">
                                                                <div class="form-group">
                                                                    <label for="status">Status Version</label>
                                                                    <select id="inputState" class="form-border form-border-sm" id="status" name="status">
                                                                        <option selected>Draft</option>
                                                                        <option>Active</option>
                                                                        <option>Inactive</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-3 col-xs-3">
                                                                <div class="form-group">
                                                                    <label for="version">Consent Version</label>
                                                                    <input type="text" class="form-border form-border-sm" id="version" name="version" value="1.0.0">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-3 col-xs-3">
                                                                <div class="form-group">
                                                                    <label for="start">Start Date</label>
                                                                    <input type="date" class="form-border form-border-sm" id="start" name="start">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-3 col-xs-3">
                                                                <div class="form-group">
                                                                    <label for="end">End Date</label>
                                                                    <input type="date" class="form-border form-border-sm" id="end" name="end">
                                                                </div>
                                                            </div>
                                                        </div>
                                                <!-- Footer -->
                                                    <div class="modal-footer">
                                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                                    <input type="submit" name="addbtn" class="btn btn-outline-primary" value="Promote" disabled>
                                                    <input type="submit" id="addBtn" name="addbtn" class="btn btn-outline-primary" value="Save Draft">
                                                    </div>                                
                                            </div>
                                        </div>
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <h5 class="card-header bg-white">Consents Data</h5>
                            <div class="card-body-data">
                            <table class="table" id="yajra-datatable">
                                <thead>
                                    <tr>
                                        <th>Consent Id</th>
                                        <th>Type</th>
                                        <th>Title</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>

</body>
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>

</html>