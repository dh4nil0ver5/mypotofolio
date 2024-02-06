@extends('layouts.admin')

@section('content')
<div class="container-fluid page-body-wrapper">
    <div class="main-panel">
        <div class="content-wrapper pb-0">
            <div class="page-header flex-wrap">
                <div class="header-left"> 
                  <button type="button" id="btnTambah" class="btn btn-primary" style="margin: 10px 20px 10px 10px;"
                  data-toggle="modal" data-target="#newMaterial">
                                  Tambah  Material
                                </button> 
                </div>
                <div class="table-responsive" style="width: 100%">
                  <table id="list_formula" class="table table-striped table-hover" style="width: 100%">
                    <thead>
                      <tr>
                          <th >No</th>
                          <th >Description</th>
                          <th >Category</th> 
                          <th >Quantity</th>
                          <th >UOM</th>  
                          <th >Harga</th>   
                          <th >Gambar</th>  
                          <th >Update</br>Tanggal</th>  
                          <th >AKSI</th> 
                      </tr> 
                    </thead>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div> 
@stop
@section('javascript')
    <script src="{{ env('APP_URL') }}/assets/js/material.js"></script> 
@stop