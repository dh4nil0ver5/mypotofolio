<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Plus Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ env('APP_URL') }}/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{ env('APP_URL') }}/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{ env('APP_URL') }}/assets/vendors/css/vendor.bundle.base.css">
    
    <link rel="stylesheet" href="{{ env('APP_URL') }}/assets/vendors/jquery-bar-rating/css-stars.css" />
    <link rel="stylesheet" href="{{ env('APP_URL') }}/assets/vendors/font-awesome/css/font-awesome.min.css" />
    
    <link rel="stylesheet" href="{{ env('APP_URL') }}/assets/css/demo_2/style.css" />
    
    <link rel="shortcut icon" href="{{ env('APP_URL') }}/assets/images/favicon.png" />
	  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
    <style>
        .btn-input::-webkit-inner-spin-button, 
        .btn-input::-webkit-outer-spin-button {
        opacity: 1;
        }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      
      <div class="horizontal-menu">
        <nav class="navbar top-navbar col-lg-12 col-12 p-0">
          <div class="container">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
              <a class="navbar-brand brand-logo" href="index.html">
                <img src="{{ env('APP_URL') }}/assets/images/logo.svg" alt="logo" />
      
              </a>
              <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{ env('APP_URL') }}/assets/images/logo-mini.svg" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
      
              <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item nav-profile dropdown">
                  <a class="nav-link" id="profileDropdown"  role="button" class="dropdown-toggle" data-toggle="dropdown">
                  {{-- <a class="nav-link" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false"> --}}
                    <div class="nav-profile-img">
                      <img src="{{ env('APP_URL') }}/assets/images/faces/face1.jpg" alt="image" />
                    </div>
                    <div class="nav-profile-text">
                      <p class="text-black font-weight-semibold m-0"> Olson jass </p>
                      <span class="font-13 online-color">online <i class="mdi mdi-chevron-down"></i></span>
                    </div>
                  </a>
                  <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
      
                    <a class="dropdown-item" href="{{ route('logout') }}"
                      onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                  </div>
                </li>
              </ul>
              <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="horizontal-menu-toggle">
                <span class="mdi mdi-menu"></span>
              </button>
            </div>
          </div>
        </nav>
        <nav class="bottom-navbar">
          <div class="container">
            <ul class="nav page-navigation">
              <li class="nav-item">
                <a class="nav-link" href="index.html">
                  <i class="mdi mdi-compass-outline menu-icon"></i>
                  <span class="menu-title">Dashboard</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="mdi mdi-monitor-dashboard menu-icon"></i>
                  <span class="menu-title">Master</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="submenu">
                  <ul class="submenu-item">
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('pekerjaan') }}">Pekerjaan</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('sub_pekerjaan') }}">Sub Pekerjaan</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('item_pekerjaan') }}">Item Pekerjaan</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('material') }}">Material</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('category') }}">Category</a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pages/forms/basic_elements.html">
                  <i class="mdi mdi-clipboard-text menu-icon"></i>
                  <span class="menu-title">Formula</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('rab') }}">
                  <i class="mdi mdi-contacts menu-icon"></i>
                  <span class="menu-title">Rab</span>
                </a>
              </li>
      
            </ul>
          </div>
        </nav>
      </div>
    
      <main class="py-4">
          @yield('content')
      </main>
       
    </div>
    
    <div class="modal fade" id="newMaster" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">New master</h5> 
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-6" style="margin-bottom: 10px;">
                <label for="master_pekerjaan">Kode pekerjaan</label>
              </div>
              <div class="col-md-6" style="margin-bottom: 10px;">
                <input type="text" class="form-control" id="id_pekerjaan" /> 
              </div>  
              <div class="col-md-6" style="margin-bottom: 10px;">
                <label for="master_pekerjaan">Master Pekerjaan</label>
              </div>
              <div class="col-md-6" style="margin-bottom: 10px;">
                <input type="text" class="form-control" id="master_pekerjaan" />
              </div>  
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            <button type="button" class="btn btn-primary" id="saveMaster">Simpan</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="updateMaster" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"> Ubah master </h5> 
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-6" style="margin-bottom: 10px;">
                <label for="master_pekerjaan">Kode pekerjaan</label>
              </div>
              <div class="col-md-6" style="margin-bottom: 10px;">
                <input type="text" class="form-control" id="up_id_pekerjaan" readonly/>
              </div> 
              <div class="col-md-6" style="margin-bottom: 10px;">
                <label for="master_pekerjaan">Master Pekerjaan</label>
              </div>
              <div class="col-md-6" style="margin-bottom: 10px;">
                <input type="text" class="form-control" id="up_master_pekerjaan" />
              </div>  
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            <button type="button" class="btn btn-primary" id="saveUpMaster">Simpan perubahan</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="newSubMaster" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">New sub pekerjaan</h5> 
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-md-6" style="margin-bottom: 10px;">
                  <label for="master_pekerjaan">Kode pekerjaan</label>
                </div>
                <div class="col-md-6" style="margin-bottom: 10px;"> 
                  <select name="" id="id_work" class="form-control"> 
                    {{-- <?php #foreach ($kode_pekerjaan as $key => $value) { ?>
                    <option value="<?php #echo $kode_pekerjaan[$key]['id_work']; ?>"><?php #echo $kode_pekerjaan[$key]['name_work']; ?></option> 
                    <?php #}?>  --}}
                  </select>
                </div>
                <div class="col-md-6" style="margin-bottom: 10px; >
                  <label for="master_pekerjaan">Kode Sub Pekerjaan</label>
                </div>
                <div class="col-md-6" style="margin-bottom: 10px;"> 
                  <input type="text" class="form-control" id="id_pointofwork" /> 
                </div>  
                <div class="col-md-6" style="margin-bottom: 10px;">
                  <label for="master_pekerjaan">Master Pekerjaan</label>
                </div>
                <div class="col-md-6" style="margin-bottom: 10px;">
                  <input type="text" class="form-control" id="name_ofpointwork" />
                </div>  
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary" id="saveMaster">Save changes</button>
            </div>
          </div>
        </div>
    </div>
    <div class="modal fade" id="updateSubMaster" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel"> Ubah sub pekerjaan </h5> 
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-md-6" style="margin-bottom: 10px;">
                  <label for="master_pekerjaan">Kode pekerjaan</label>
                </div>
                <div class="col-md-6" style="margin-bottom: 10px;">
                  <input type="text" class="form-control" id="up_id_work" hidden/>
                  <input type="text" class="form-control" id="up_id_pointofwork" readonly/>
                </div> 
                <div class="col-md-6" style="margin-bottom: 10px;">
                  <label for="master_pekerjaan">Master Pekerjaan</label>
                </div>
                <div class="col-md-6" style="margin-bottom: 10px;">
                  <input type="text" class="form-control" id="up_name_ofpointwork" />
                </div>  
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary" id="saveUpSubPekerjaan">Save changes</button>
            </div>
          </div>
        </div>
    </div> 

    <div class="modal fade" id="newItem" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">New item pekerjaan</h5> 
          </div>
          <div class="modal-body">
            <div class="row">  
              <div class="col-md-6" style="margin-bottom: 10px;">
                <label for="master_pekerjaan">Nama Item Pekerjaan</label>
              </div>
              <div class="col-md-6" style="margin-bottom: 10px;">
                <input type="text" class="form-control" id="name_ofitem" />
              </div>  
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" id="saveItem">Save changes</button>
          </div>
        </div>
      </div>
    </div>  
    <div class="modal fade" id="updateItem" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"> Ubah item pekerjaan </h5> 
          </div>
          <div class="modal-body">
            <div class="row"> 
              <div class="col-md-5" style="margin-bottom: 10px;">
                <label for="master_pekerjaan">Nama Item Pekerjaan</label>
              </div>
              <div class="col-md-7" style="margin-bottom: 10px;">
                <input type="text" class="form-control" id="up_id_item" hidden/>
                <textarea type="text" class="form-control" id="up_name_ofitem" style="width: 100%;"></textarea>
              </div> 
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" id="saveUpItem">Save changes</button>
          </div>
        </div>
      </div>
    </div>   

    <div class="modal fade" id="newMaterial" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">New Material</h5>  
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          
          <div class="modal-body"> 
            <div class="row">
                <div class="col-md-6" style="margin-bottom: 20px;">
                  <label for="master_pekerjaan">Kota</label>
                </div>
                  <div class="col-md-6" style="margin-bottorm: 20px;">
                  <select name="id_city" id="id_city" class="form-control"></select>
                </div>  
                <div class="col-md-6" style="margin-bottom: 20px;">
                  <label for="master_pekerjaan">Jenis Material</label>
                </div>
                <div class="col-md-6" style="margin-bottorm: 20px;">
                  <select name="id_kindofraw" id="id_kindofraw" class="form-control"></select> 
                </div>  
                <div class="col-md-6" style="margin-bottom: 20px;">
                  <label for="master_pekerjaan">Description</label>
                </div>
                <div class="col-md-6" style="margin-bottorm: 20px;">
                  <textarea name="description" id="description" class="form-control"></textarea>
                </div>  
                <div class="col-md-6" style="margin-bottom: 20px;">
                  <label for="master_pekerjaan">Quantity</label>
                </div>
                <div class="col-md-6" style="margin-bottorm: 20px;">
                  <input type="text" class="form-control" id="quantity" name="quantity">
                </div>  
                <div class="col-md-6" style="margin-bottom: 20px;">
                  <label for="master_pekerjaan">UOM</label>
                </div>
                <div class="col-md-6" style="margin-bottorm: 20px;">
                  <select name="code_koef" id="code_koef" class="form-control"></select>
                </div>  
                <div class="col-md-6" style="margin-bottom: 20px;">
                  <label for="master_pekerjaan">price</label>
                </div>
                <div class="col-md-6" style="margin-bottorm: 20px;">
                  <input type="number" class="form-control" id="price" name="price">
                </div>
                <div class="col-md-6" style="margin-bottom: 20px;">
                  <label for="master_pekerjaan">Upload Foto</label>
                </div>
                <div class="col-md-6" style="margin-bottom:20px">
                    
                    <input class="form-control form-control-sm" id="formFileSm" type="file" name="tester">
                </div>
                
            </div>
          </div>
          <div class="modal-footer">
            <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
            
            <input type="submit" class="btn btn-primary"id="saveFormula" value="Save changes" />
          </div>
        </div>
        {{-- </form> --}}
      </div>
    </div> 

    <div class="modal fade" id="upMaterial" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ubah Item</h5>  
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          
          <div class="modal-body"> 
            <div class="row">
                <div class="col-md-6" style="margin-bottom: 10px;">
                  <label for="master_pekerjaan">Kota</label>
                </div>
                <div class="col-md-6" style="margin-bottorm: 10px;">
                  <select name="up_id_city" id="up_id_city" class="form-control"></select>
                </div>  
                <div class="col-md-6" style="margin-bottom: 10px;">
                  <label for="master_pekerjaan">Jenis Material</label>
                </div>
                <div class="col-md-6" style="margin-bottorm: 10px;">
                  <select name="up_id_kindofraw" id="up_id_kindofraw" class="form-control"></select>
                </div>  
                <div class="col-md-6" style="margin-bottom: 10px;">
                  <label for="master_pekerjaan">Description</label>
                </div>
                <div class="col-md-6" style="margin-bottorm: 10px;">
                  <textarea name="up_description" id="up_description" class="form-control"></textarea>
                </div>  
                <div class="col-md-6" style="margin-bottom: 10px;">
                  <label for="master_pekerjaan">Quantity</label>
                </div>
                <div class="col-md-6" style="margin-bottorm: 10px;">
                  <input type="text" class="form-control" id="up_quantity" name="up_quantity" />
                </div>  
                <div class="col-md-6" style="margin-bottom: 10px;">
                  <label for="master_pekerjaan">UOM</label>
                </div>
                <div class="col-md-6" style="margin-bottorm: 10px;">
                  <select name="up_code_koef" id="up_code_koef" class="form-control"></select>
                </div>  
                <div class="col-md-6" style="margin-bottom: 10px;">
                  <label for="master_pekerjaan">price</label>
                </div>
                <div class="col-md-6" style="margin-bottorm: 10px;">
                  <input type="number" class="form-control" id="up_price" name="up_price">
                  <input type="number" class="form-control" id="up_id_raw" name="up_id_raw" hidden >
                </div>
                <script>
                </script>
                <div class="col-md-6" style="margin-bottom: 20px;">
                  <label for="master_pekerjaan">Upload Foto</label>
                </div>
                <div class="col-md-6" style="margin-bottom:20px">
                    <img src="" id="file_img_material" width=200 height=200 onclick="update_file()"/>
                    <input id="up_berkas_text" name="up_berkas_text" type="text" hidden/>
                    <input class="form-control form-control-sm" id="up_berkas" type="file" name="up_berkas" hidden>
                    <input type="submit" class="btn btn-primary"id="btn_batal_upload" value="batal ubah" onclick="batal_upload_file()" hidden/>
                </div>
                
            </div>
          </div>
          
          <div class="modal-footer"> 
            <input type="submit" class="btn btn-primary"id="updateFormula" value="Save changes" />
          </div>
          
        </div>
      </div>
    </div>  

    <script src="{{ env('APP_URL') }}/assets/vendors/js/vendor.bundle.base.js"></script> 
    <script src="{{ env('APP_URL') }}/assets/vendors/jquery-bar-rating/jquery.barrating.min.js"></script>
    <script src="{{ env('APP_URL') }}/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="{{ env('APP_URL') }}/assets/vendors/flot/jquery.flot.js"></script>
    <script src="{{ env('APP_URL') }}/assets/vendors/flot/jquery.flot.resize.js"></script>
    <script src="{{ env('APP_URL') }}/assets/vendors/flot/jquery.flot.categories.js"></script>
    <script src="{{ env('APP_URL') }}/assets/vendors/flot/jquery.flot.fillbetween.js"></script>
    <script src="{{ env('APP_URL') }}/assets/vendors/flot/jquery.flot.stack.js"></script>
    <script src="{{ env('APP_URL') }}/assets/js/jquery.cookie.js" type="text/javascript"></script> 
    <script src="{{ env('APP_URL') }}/assets/js/off-canvas.js"></script>
    <script src="{{ env('APP_URL') }}/assets/js/hoverable-collapse.js"></script>
    <script src="{{ env('APP_URL') }}/assets/js/misc.js"></script>
    <script src="{{ env('APP_URL') }}/assets/js/settings.js"></script>
    <script src="{{ env('APP_URL') }}/assets/js/todolist.js"></script> 
    <script src="{{ env('APP_URL') }}/assets/js/dashboard.js"></script> 
    
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    
    @yield('javascript')
</html>