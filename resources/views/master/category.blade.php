<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
         <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/boxicons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/theme-default.css') }}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css') }}" />


     <!-- Helpers -->
    <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('assets/js/config.js') }}"></script>

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
    </head>
  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <div class="app-brand-link">
              <span class="fs-1 text-secondary ms-2">PT. XYZ</span>
            </div>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner">
            <!-- Navbar -->
             <li class="menu-item">
              <a href="{{ route('dashboard') }}" class="menu-link">
                 <i class="menu-icon tf-icons bx bx-copy"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="{{ route('m_category') }}" class="menu-link">
                 <i class="menu-icon tf-icons bx bx-copy"></i>
                <div data-i18n="Analytics">Master Category</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="#" class="menu-link">
                 <i class="menu-icon tf-icons bx bx-copy"></i>
                <div data-i18n="Analytics">Master Author</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="#" class="menu-link">
                 <i class="menu-icon tf-icons bx bx-copy"></i>
                <div data-i18n="Analytics">Master Book</div>
              </a>
            </li>
          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">


              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block">Laravel</span>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>

                    <li>
                      <a class="dropdown-item" href="auth-login-basic.html">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
<div class="content-wrapper">
     <div class="container-xxl flex-grow-1 container-p-y">
       <div class="card">
        <div class="card-body">
            <div class="d-flex row justify-content-md-end">
               <button class="btn btn-info rounded-pill tmbh" style="width:150px;" type="button"><i
                            class="bx bx-plus">&nbsp;Tambah</i></button>
            </div>
        </div>
       </div>

     <div class="row mt-3">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="listdata" class="table table-striped table-bordered w-100" style="width: 100%">
                                <thead>
                                    <tr>
                                        <th style="width:100px;">No</th>
                                        <th style="width:5px;" hidden>id</th>
                                        <th style="width:395px;">Name</th>
                                        <th style="width:200px;">Description</th>
                                        <th style="width:100px;">Status</th>
                                        <th style="width:200px;text-align:center;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
    </div>
        </div>

</div>
</div>




              </div>
            </div>
        <!-- / Layout page -->
      </div>
    </div>
    <!-- / Layout wrapper -->

 <!-- Modal Tambah-->
    <div class="modal fade" id="modaltambah" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #a6a792;">
                    <h5 class="modal-title text-white" >Tambah Data</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="tambah" class="form-control">
                        <div class="form-group">
                            <label class="col-form-label">Nama</label>
                            <input type="text" class="form-control" name="name" id="name">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Description</label>
                            <input type="text" class="form-control" name="desc" id="desc">
                        </div>

                        <div class="form-group mt-2">
                            <button type="button" class="btn btn-primary simpandata">Simpan</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>

            </div>
        </div>
    </div>


     <!-- Modal Edit-->
    <div class="modal fade" id="modaledit" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #a6a792;">
                    <h5 class="modal-title text-white">Edit Data</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="tambah" class="form-control">
                        <div class="form-group">
                            <label class="col-form-label">Nama</label>
                            <input type="text" class="form-control" name="nameedit" id="nameedit">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Description</label>
                            <input type="text" class="form-control" name="descedit" id="descedit">
                        </div>

                        <div class="form-group mt-2">
                            <button type="button" class="btn btn-warning editdata">Update</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>

            </div>
        </div>
    </div>

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

    <script src="{{ asset('assets/vendor/js/menu.js') }}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('assets/js/dashboards-analytics.js') }}"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <script>
let table;

        $(document).ready(function() {

            $.ajaxSetup({
      headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

         table = $('#listdata').DataTable({
            processing: true,
            lengthMenu: [
                [5, 10, 100, 250, 500, -1],
                [5, 10, 100, 250, 500, "All"]
            ],
            ajax: {
                "url": "{{ route('list_m_category') }}",
                "type": "POST",

            },
            columns: [{
                data: 'DT_RowIndex',
                name: 'DT_RowIndex',
            },{
                data: 'id',
                name: 'id',
                visible: false
            }, {
                data: 'name',
                name: 'name',
                orderable: true,
            }, {
                data: 'description',
                name: 'description'
            }, {
                data: 'status',
                name: 'status',
                render: function(data, type, row) {
        return data == '1' ? `<div class="bg-label-success"><span class="badge bg-label-success text-wrap">Enable</span></div>` : `<div class="bg-label-danger"><span class="bg-label-danger text-wrap">Disable</span></div>`;
    }
            }, {
                data: 'aksi',
                name: 'aksi',
                className: "dt-center",
                orderable: false,
            }]
            });
        });

        //  $('#modaltambah').modal({
        //      backdrop: "static"
        //  });

         $('.tmbh').on('click', function() {
             $('#modaltambah').modal('show');
         });


        //  Edit data
         $('#listdata tbody').on('click', '.editdata', function() {
             var data = table.row($(this).parents('tr')).data();
             $('#nameedit').val(data.name);
             $('#descedit').val(data.description);
             $('#modaledit').modal('show');
         });

         //  Hapus data
         $('#listdata tbody').on('click', '.hapusdata', function() {
             var data = table.row($(this).parents('tr')).data();
           let pesan = confirm('Yakin hapus data ' + data.name + ' ?');
if (pesan == true) {
    $.ajax({
        url: "{{ route('delete_m_category') }}",
        method: "POST",
        data: {
            id: data.id
        },
        success: function(response) {
            alert(response.pesan);
        },
        error: function(xhr, status, error) {},
        complete: function(xhr, status) {
                    $('#listdata').DataTable().ajax.reload();
                }
    });
}else{
    $('#listdata').DataTable().ajax.reload();
}
         });


    </script>
  </body>
</html>
