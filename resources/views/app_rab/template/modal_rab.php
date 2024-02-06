<div class="modal fade" id="phpModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <!-- <div class="modal-dialog modal-dialog-centered" role="document"> -->
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content"> 
      <div class="modal-body">
            <div id="id_rabplan" hidden></div>
            <div class="justify-content">
                <div class="col-md-12" style="text-align: center; display: flex; flex-decoration: row; justify-content: space-between;">
                    <div style="width: 90%; text-align: center;">
                        RENCANA ANGGARAN BIAYA
                    </div>
                    <button type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="row" style="font-size: 12px;">
                    <div class="col-md-2">Project</div>
                    <div class="col-md-1">:</div>
                    <div class="col-md-4" id="txtProject"></div>
                    <div class="col-md-2">Kode Gambar</div>
                    <div class="col-md-1">:</div>
                    <div class="col-md-2" id="txtKodeGambar"></div>
                </div>
                <div class="row" style="font-size: 12px;">
                    <div class="col-md-2">Pekerjaan</div>
                    <div class="col-md-1">:</div>
                    <div class="col-md-4" id="txtPekerjaan"></div>
                    <div class="col-md-2">No Rab</div>
                    <div class="col-md-1">:</div>
                    <div class="col-md-2" id="txtNoRab"></div>
                </div>
                <div class="row" style="font-size: 12px;">
                    <div class="col-md-2">Lokasi</div>
                    <div class="col-md-1">:</div>
                    <div class="col-md-4" id="txtLokasi"></div>
                    <div class="col-md-2">Nama file</div>
                    <div class="col-md-1">:</div>
                    <div class="col-md-2" id=""txtNamafile></div>
                </div>
                <div class="row" style="font-size: 12px;">
                    <div class="col-md-2">Revisi</div>
                    <div class="col-md-1">:</div>
                    <div class="col-md-9" id="txtRevisi"></div> 
                </div>
                <div class="row" style="font-size: 12px;">
                    <div class="col-md-2">Lokasi file</div>
                    <div class="col-md-1">:</div>
                    <div class="col-md-9" id="txtLokasifile"></div> 
                </div>
                <div class="row" style="text-align: center; margin-top: 1%; margin-top: 2%;">  
                    <div class="col-md-12"  >
                        <div class="btn btn-primary btn-flat btn-xs" id="tambahPage">tambah data</div> 
                    </div> 
                </div> 
                <div class="table-responsive" id="data_table" style="text-align: center; margin-top: 1%; margin-top: 2%;">
                    <table class="table" id="list_data" style="width: 100%;">
                        <thead>
                        <tr>
                            <td>*</td>
                            <td>Pekerjaan</td>
                            <td>Sub Pekerjaan</td>
                            <td>Activity</td> 
                            <td>HSP</td> 
                            <td>Formula</td> 
                            <td>Jumlah</td>  
                            <td>Action</td> 
                        </tr> 
                        </thead>
                        <tbody></tbody>
                    </table>
                </div> 
                <div id="data_lain" style="margin-top: 1%;" hidden>
                    <div class="row">
                        <div class="col-md-6" style="margin-top: 1%;">Pekerjaan</div>
                        <div class="col-md-6" style="margin-top: 1%;">
                            <select name="" id="pekerjaan_new" onchange="" class="form-input form-control">
                                <option value="">-- silahkan pilih -- </option>
                                <?php 
                                    $id = 0; 
                                    foreach ($data_pekerjaan as $value) { 
                                        echo "<option value='".$value['id_work']."'>".$value['name_work']."</option>";
                                    }  
                                ?>
                            </select>
                        </div>

                        <div class="col-md-6" style="margin-top: 1%;">Sub Pekerjaan</div>
                        <div class="col-md-6" style="margin-top: 1%;">
                            <select name="" id="subpekerjaan_new" class="form-input form-control"></select>
                        </div>
                        <div class="col-md-6" style="margin-top: 1%;">Activity</div>
                        <div class="col-md-6" style="margin-top: 1%;">
                            <input id="name_activity" type="text" name="" class="form-input form-control"/>
                        </div>
                        <div class="col-md-6" style="margin-top: 1%;">Spesifikasi</div>
                        <div class="col-md-6" style="margin-top: 1%;">
                            <input id="Spesifikasi" type="text" name="" class="form-input form-control"/>
                        </div>
                        <div class="col-md-6" style="margin-top: 1%;">Volume : Panjang</div>
                        <div class="col-md-6" style="margin-top: 1%;">
                            <input style="width: 80%; border: 1px solid black;" type="number" 
                                class="form-input form-control" id="pVOl" onfocus="hitung()" onchange="hitung()" />
                        </div> 
                        <div class="col-md-6" style="margin-top: 1%;">Volume : Lebar</div>
                        <div class="col-md-6" style="margin-top: 1%;">
                            <input style="width: 80%; border: 1px solid black;" type="number" 
                                class="form-input form-control" id="lVol" onfocus="hitung()" onchange="hitung()" />
                        </div> 
                        <!--  -->
                        <div class="col-md-6" style="margin-top: 1%;">Volume : Tinggi</div>
                        <div class="col-md-6" style="margin-top: 1%;">
                            <input style="width: 80%; border: 1px solid black;" type="number" 
                                class="form-input form-control" id="tVol" onfocus="hitung()" onchange="hitung()" />
                        </div> 
                        <div class="col-md-6" style="margin-top: 1%;">Volume : Unit</div>
                        <div class="col-md-6" style="margin-top: 1%;">
                            <input style="width: 80%; border: 1px solid black;" type="number" class="form-input form-control" id="uVol" 
                                onfocus="hitung()" onchange="hitung()" />
                        </div> 
                        <div class="col-md-6" style="margin-top: 1%;">Volume</div>
                        <div class="col-md-6" style="margin-top: 1%;">
                            <input style="width: 80%; border: 1px solid black;" type="number" readonly  class="form-input form-control" 
                                id="volume_unit" />
                        </div>  
                        <div class="col-md-6" style="margin-top: 1%;">Koefisien</div>
                        <div class="col-md-6" style="margin-top: 1%;">
                            <select name="" id="koef_new" onchange="" style="width: 100%;">
                                <option value="">-- silahkan pilih -- </option>
                                <?php 
                                    $id = 0;
                                    foreach ($data_koef as $d) {
                                        echo "<option value='".$d['code_koef']."'>".$d['name_koefisien']."</option>";
                                    } 
                                ?>
                            </select>
                        </div>
                        <div class="col-md-6" style="margin-top: 1%;">Formula</div>
                        <div class="col-md-6" style="margin-top: 1%;">
                            <select name="" id="formula_new" onchange="" style="width: 99%;">
                                <option value="">-- silahkan pilih -- </option>
                                <?php 
                                    $id = 0;
                                    foreach ($data_formula as $d) {
                                        echo "<option value='".$d['id_analisa']."'' hsp='".$d['hsp']."' >".$d['name_ofitem']."</option>";
                                    } 
                                ?>
                            </select>
                        </div> 
                        <div class="col-md-6" style="margin-top: 1%;">Idx</div>
                        <div class="col-md-6" style="margin-top: 1%;"><input type="number" name="" id="idxVal" class="form-input form-control" 
                            placeholder="0" onfocus="volume2()" onchange="volume2()" /></div>  
                        <div class="col-md-6" style="margin-top: 1%;">Sat</div>
                        <div class="col-md-6" style="margin-top: 1%;">
                            <select name="" id="koef_new2" onchange="" style="width: 99%;"></select>
                        </div>
                        <div class="col-md-6" style="margin-top: 1%;">Vol</div>
                        <div class="col-md-6" style="margin-top: 1%;"><input type="number" name="" id="vol2Val" class="form-input form-control" 
                            placeholder="0" /></div>  
                        <div class="col-md-6" style="margin-top: 1%;">Sat</div>
                        <div class="col-md-6" style="margin-top: 1%;">
                            <select name="" id="koef2_new" onchange="" style="width: 99%;"></select>
                        </div>
                        <div class="col-md-6" style="margin-top: 1%;">HSP</div>
                        <div class="col-md-6" style="margin-top: 1%;"><input type="number" name="" id="hsp_volume" class="form-input form-control" 
                             onfocus="jumlah()" onchange="jumlah()" onmouseout="jumlah()"
                            readonly placeholder="nilai hsp" onmouseover="ubah_hsp()"/></div> 
                        <div class="col-md-6" style="margin-top: 1%;">Jumlah</div>
                        <div class="col-md-6" style="margin-top: 1%;"><input type="number" name="" id="jumlah_value" class="form-input form-control" readonly placeholder="nilai hsp" /></div>  

                    </div>
                </div>
            </div>
      </div>
        <div class="modal-footer helpModal phpModal">
            <div class="btn btn-warning" onclick="cancel_rabplan()" id="cancel_save_rabplan" hidden>cancel</div>
            <div class="btn btn-primary" onclick="save_rabplan()" data-dismiss="modal">save</div>
        </div> 
    </div>
  </div>
</div>
<div class="modal fade" id="modal_kedua" role="dialog">
    <div class="modal-dialog modal-lg" style="">
        <div class="modal-content"> 
            <div class="modal-header"> 
                <h5 class="modal-title">Detail data
                    <div id="temp_data" hidden></div></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="close_detail()">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="page_body" style="height: 500px; overflow: auto;">   
                <div id="up_id_rabplan" hidden></div>
                <div class="row">
                    <div class="col-md-2 tester" style="margin-top: 1%;">Pekerjaan</div>
                    <div class="col-md-5" style="margin-top: 1%;">
                        <select name="" id="up_pekerjaan_new" onchange="" class="form-input form-control" disabled></select>
                    </div>
                    <div class="col-md-1" style="margin-top: 1%; font-size: 14px;">V. Panjang</div>
                    <div class="col-md-4" style="margin-top: 1%;">
                        <input style="width: 100%; border: 1px solid black;" type="number" 
                            class="form-input form-control" id="up_pVol" onfocus="hitung_lagi()" onchange="hitung_lagi()"  disabled/>
                    </div> 
                    <div class="col-md-2" style="margin-top: 1%;">Sub Pekerjaan</div>
                    <div class="col-md-5" style="margin-top: 1%;">
                        <select name="" id="up_subpekerjaan_new" class="form-input form-control" disabled></select>
                    </div>
                    <div class="col-md-1" style="margin-top: 1%;">V. Lebar</div>
                    <div class="col-md-4" style="margin-top: 1%;">
                        <input style="width: 100%; border: 1px solid black;" type="number" 
                            class="form-input form-control" id="up_lVol" onfocus="hitung_lagi()" onchange="hitung_lagi()"  disabled/>
                    </div> 
                    <div class="col-md-2" style="margin-top: 1%;">Activity</div>
                    <div class="col-md-5" style="margin-top: 1%;">
                        <select name="" id="up_name_activity" class="form-input form-control" disabled></select>
                        <!-- <input id="up_name_activity" type="text" name="" class="form-input form-control" disabled/> -->
                    </div>
                    <div class="col-md-1" style="margin-top: 1%;">V. Tinggi</div>
                    <div class="col-md-4" style="margin-top: 1%;">
                        <input style="width: 100%; border: 1px solid black;" type="number" 
                            class="form-input form-control" id="up_tVol" onfocus="hitung_lagi()" onchange="hitung_lagi()"  disabled/>
                    </div> 
                    <div class="col-md-2" style="margin-top: 1%;">Spesifikasi</div>
                    <div class="col-md-5" style="margin-top: 1%;">
                        <input id="up_Spesifikasi" type="text" name="" class="form-input form-control" disabled/>
                    </div>
                    <div class="col-md-1" style="margin-top: 1%;">V. Unit</div>
                    <div class="col-md-4" style="margin-top: 1%;">
                        <input style="width: 100%; border: 1px solid black;" type="number" class="form-input form-control" id="up_uVol" 
                            onfocus="hitung_lagi()" onchange="hitung_lagi()"  disabled/>
                    </div> 
                    <div class="col-md-2" style="margin-top: 1%;">Formula</div>
                    <div class="col-md-5" style="margin-top: 1%;">
                        <select name="" id="up_formula_new" onchange="" style="width: 99%;" disabled></select>
                    </div> 
                    <div class="col-md-1" style="margin-top: 1%;">Volume</div>
                    <div class="col-md-4" style="margin-top: 1%;">
                        <input style="width: 100%; border: 1px solid black;" type="number" readonly  class="form-input form-control" 
                            id="up_volume_unit"  disabled/>
                    </div>  
                    <div class="col-md-2" style="margin-top: 1%;">Idx</div>
                    <div class="col-md-5" style="margin-top: 1%;">
                        <input type="number" name="" id="up_idxVal" class="form-input form-control" 
                        placeholder="0" onfocus="volume2()" onchange="volume2()"  disabled/>
                    </div>  
                    <div class="col-md-1" style="margin-top: 1%;">Koefisien</div>
                    <div class="col-md-4" style="margin-top: 1%;">
                        <select name="" id="up_koef_new" onchange="" style="width: 100%;" class="form-input form-control" disabled></select>
                    </div>
                    <div class="col-md-2" style="margin-top: 1%;">Vol</div>
                    <div class="col-md-5" style="margin-top: 1%;">
                        <input type="number" name="" id="up_vol2Val" class="form-input form-control" placeholder="0" disabled />
                    </div>  
                    <div class="col-md-1" style="margin-top: 1%;">Sat</div>
                    <div class="col-md-4" style="margin-top: 1%;">
                        <input type="number" name="" id="up_SatVal" class="form-input form-control" placeholder="0" disabled />
                    </div>  
                    <div class="col-md-2" style="margin-top: 1%;">HSP</div>
                    <div class="col-md-5" style="margin-top: 1%;">
                        <input type="number" name="" id="up_hsp_volume" class="form-input form-control" 
                        onfocus="jumlah()" onchange="jumlah()" onmouseout="jumlah()"
                        readonly placeholder="nilai hsp" onmouseover="ubah_hsp()" disabled/>
                    </div> 
                    <div class="col-md-1" style="margin-top: 1%;">Jumlah</div>
                    <div class="col-md-4" style="margin-top: 1%;">
                        <input type="number" name="" id="up_jumlah_value" class="form-input form-control" 
                        readonly placeholder="nilai hsp"  disabled/>
                    </div>   
                </div>

            </div>
            <div class="modal-footer">
                <div class="btn btn-warning" id="edit_data">edit</div>
                <div class="btn btn-primary" id="edit_process">proses</div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="newRAJ" role="dialog">
    <div class="modal-dialog modal-lg" style="width: 100%;">
        <div class="modal-content"> 
            <div class="modal-header"> 
                <h5 class="modal-title">RAM Baru
                    <div id="temp_data" hidden></div></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"  >
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="page_body" style="height: 500px; overflow: auto;">   
                <div class="row">
                    <div class="col-md-6" style="margin-top: 2%;">Project</div>
                    <div class="col-md-6" style="margin-top: 2%;">
                        <select name="" id="data_project" class="form-input form-control"></select>
                    </div> 
                    <div class="col-md-12" style="margin-top: 1%;">
                        <div class="table-responsive" style="width: 100%;">
                            <table id="ram_byproject" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Material</th>
                                        <th>Volume</th>
                                        <th>Harga</br>Satuan</th>
                                        <th>Harga</br>Jumlah</th> 
                                        <th>Action</th> 
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="modal-footer">
                <div class="btn-group">
                    <button data-dismiss="modal" class="btn btn-primary btn-flat" id="save_raj" disabled><i class="fa fa-checked"></i>&nbsp;&nbsp;selesai</button>
                </div>
            </div> -->
        </div>
    </div>
</div>
<div class="modal fade" id="UpdateRAJ" role="dialog">
    <div class="modal-dialog modal-lg" style="width: 100%;">
        <div class="modal-content"> 
            <div class="modal-header"> 
                <h5 class="modal-title">Ubah Detail RAM
                    <div id="temp_data" hidden></div></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"  >
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="page_body" style="overflow: auto;">  
                <input hidden type="text" id="id_ram_up"/>
                <div class="row">
                    <div class="col-md-6" style="margin-top: 2%;">Project</div>
                    <div class="col-md-6" style="margin-top: 2%;">
                        <input type="text" class="form-input form-control" readonly  id="up_raj_id_project"  />
                        <!-- <select name="" id="data_project" class="form-input form-control"></select> -->
                    </div> 
                    <div class="col-md-12" style="margin-top: 1%;">
                        <div class="table-responsive" style="width: 100%;">
                            <table id="ram_byproject_up" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Material</th>
                                        <th>Volume</th>
                                        <th>Harga</br>Satuan</th>
                                        <th>Harga</br>Jumlah</th> 
                                        <th>Action</th> 
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
<div class="modal fade" id="newRAJ_baru" role="dialog">
    <div class="modal-dialog modal-lg" style="width: 100%;">
        <div class="modal-content"> 
            <div class="modal-header"> 
                <h5 class="modal-title">Detail RAJ
                    <div id="temp_data" hidden></div></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"  >
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="page_body" style="overflow: auto;">  
                <div class="row">
                    <div class="col-md-6" style="margin-top: 2%;">Project</div>
                    <div class="col-md-6" style="margin-top: 2%;">
                        <select name="" id="data_project_raj" class="form-input form-control"></select>
                    </div> 
                    <div class="col-md-12" style="margin-top: 1%;">
                        <div class="table-responsive" style="width: 100%;">
                            <table id="raj_byproject" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Material</th>
                                        <th>Volume</th>
                                        <th>Harga</br>Satuan</th>
                                        <th>Harga</br>Jumlah</th> 
                                        <th>Action</th> 
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div> 
                </div>   
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="detail_spesifikasi" role="dialog">
    <div class="modal-dialog modal-xs" style="width: 100%;">
        <div class="modal-content"> 
            <div class="modal-header"> 
                <h5 class="modal-title" id="detail_spesifikasi">Detail Spesifikasi
                    <div id="temp_data" hidden></div></h5>
                <button type="button" class="close" aria-label="Close" onclick="batalDetail()">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="page_body" style="overflow: auto;">  
                <div class="row">  
                    <div class="col-md-6">Spesifikasi</div>
                    <div class="col-md-6" id="spesifikasi_text"></div>
                    <div class="col-md-6">Panjang</div>
                    <div class="col-md-6" id="panjang_text"></div>
                    <div class="col-md-6">Lebar</div>
                    <div class="col-md-6" id="lebar_text"></div>
                    <div class="col-md-6">Tinggi</div>
                    <div class="col-md-6" id="tinggi_text"></div>
                    <div class="col-md-6">Unit</div>
                    <div class="col-md-6" id="unit_text"></div>
                    <div class="col-md-6">Volume Unit</div>
                    <div class="col-md-6" id="volume_unit_text"></div>
                    <div class="col-md-6">Idx</div>
                    <div class="col-md-6" id="idx_text"></div>
                    <div class="col-md-6">Total Volume</div>
                    <div class="col-md-6" id="totalvolume_text"></div>
                </div>   
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="detail_data_volume" role="dialog">
    <div class="modal-dialog modal-xl" style="width: 100%;">
        <div class="modal-content"> 
            <div class="modal-header"> 
                <h5 class="modal-title" id="detail_spesifikasi">Detail Volume Global by project
                    <div id="temp_data_2" hidden></div></h5>
                <button type="button" class="close" aria-label="Close" onclick="close_detail_volume()">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="page_body" style="overflow: auto; width: 100%;">  
                <div class="table-responsive" style="width: 100%;">
                    <table id="list_formula" style="width: 100%;">
                        <thead>
                            <tr>
                                <td>ID Project</td>
                                <td>Activity</td>
                                <td>Formula</td>
                                <td>Total Volume</td>
                                <td>Qty</td>
                                <td>Hasil</td> 
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>