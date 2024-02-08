@extends('app_rab.layouts.app_dashboard')


@section('content')
<!-- partial -->
  <div class="container-fluid page-body-wrapper" >
    <div class="main-panel">
      <div class="content-wrapper pb-0">
        <!--  --> 
          <div class="page-header flex-wrap" >
            <div class="header-left">
              <button class="btn btn-primary mb-2 mb-md-0 me-2"> Create new document </button>
              <button class="btn btn-outline-primary mb-2 mb-md-0"> Import documents </button>
            </div>
            <div class="header-right d-flex flex-wrap mt-md-2 mt-lg-0">
              <div class="d-flex align-items-center">
                <a href="#">
                  <p class="m-0 pe-3">Dashboard</p>
                </a>
                <a class="ps-3 me-4" href="#">
                  <p class="m-0">ADE-00234</p>
                </a>
              </div>
              <button type="button" class="btn btn-primary mt-2 mt-sm-0 btn-icon-text">
                <i class="mdi mdi-plus-circle"></i> Add Prodcut 
              </button>
            </div>  
          </div>   
        <!--  -->
        <!-- first row starts here -->
        <div class="row rows" >
          <div class="col-md-10">
            <h4> Data Pekerjaan </h4> 
          </div>
          <div class="col-md-2"> 
            <button type="button" id="btnTambah" class="btn btn-primary" data-toggle="modal" data-target="#newMaster">
              Tambah Master
            </button>
          </div>
          <div class="col-md-12"> 
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
<!--  -->
<!-- @section('script')
  <script src="{{ URL::to('/') }}/app_rab/js/pekerjaan.js"></script>
@endsection -->
<!--  -->