@extends('layouts.admin')

@section('content')
      <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
          <div class="content-wrapper pb-0">
            <div class="page-header flex-wrap">
              <div class="header-left">
                <button class="btn btn-primary mb-2 mb-md-0 me-2" data-toggle="modal" data-target="#newMaster"> 
                Create new document </button>
                {{-- <button class="btn btn-outline-primary mb-2 mb-md-0"> Import documents </button> --}}
              </div> 
            </div>
            <!-- first row starts here -->
            
            <div class="row" style="height: 10vh;">
              <div class="col-xl-12 stretch-card grid-margin">
                <div class="card">
                  <div class="card-body"> 
                  
                    <div class="table-responsive" style="width: 100%">
                      <table id="list_pekerjaan" class="table table-striped table-hover" style="width: 100%">
                        <thead>
                          <tr>
                              <th>No</th>
                              <th>Kode</th>
                              <th>Nama Pekerjaan</th> 
                              <th>AKSI</th> 
                          </tr> 
                        </thead>
                      </table>
                    </div>
                  </div>
                </div>
              </div> 
            </div> 
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="container">
              <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021 <a href="https://www.bootstrapdash.com/" target="_blank">BootstrapDash</a>. All rights reserved.</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
              </div>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
@stop
@section('javascript')
    <script src="{{ env('APP_URL') }}/assets/js/pekerjaan.js"></script> 
@stop