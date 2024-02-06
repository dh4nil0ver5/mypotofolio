@extends('layouts.admin')

@section('content')
<div class="container-fluid page-body-wrapper">
    <div class="main-panel">
        <div class="content-wrapper pb-0">
            <div class="page-header flex-wrap">
                <div class="header-left"> 
                    <button type="button" id="btnTambah" class="btn btn-primary" style="margin: 10px 20px 10px 10px;"
                        data-toggle="modal" data-target="#newMaster">
                                Tambah Sub Pekerjaan
                                </button> 
                </div>
                <div class="table-responsive" style="width: 100%"> 
                    <table id="lista_proiecte" class="table table-striped table-hover" style="width: 100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode <br>Sub Pekerjaan</th>
                                <th>Pekerjaan</th>
                                <th>Sub pekerjaan</th> 
                                <th>AKSI</th> 
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
    <script src="{{ env('APP_URL') }}/assets/js/subpekerjaan.js"></script> 
@stop