
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
    
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

</head>
<body>
    @include('sweetalert::alert')
    <!--  Modal Button -->
    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#addConsentModal">
        add
    </button>
            <!-- Modal Body -->
    <div class="modal fade" id="addConsentModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Consent</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>                 
                </div>
                            <!-- Form -->
                    <form action="/dashboard/add" method="post">
                        @csrf   
                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <div class="form-group">
                                            <label for="name">Consent Title(TH)*</label>
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
                                            <label for="nameeng">Consent Titile(ENG)*</label>
                                            <textarea class="form-border" maxlength="255" id="nameeng" name="nameeng" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="detaileng">Consent Detail(ENG)*</label>
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
                                    <input type="submit" name="addbtn" class="btn btn-outline-primary" value="Save Draft">
                                    </div>                                
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
  </body>





<script src="{{ asset('js/jquery-3.5.1.min.js') }}" defer></script>
</body>

</html>