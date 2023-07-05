<template>

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Floo Id</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="/dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item active">
                <a class="nav-link" href="/timesheet">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Timesheet</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Pengajuan Cuti</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Feby Eka Pradiyanto</span>
                                <img class="img-profile rounded-circle"
                                    src="Foto PP.png">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Page Heading -->
                            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                <h1 class="h3 mb-0 text-gray-800">Timesheet</h1>
                                <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row justify-content-end" style="padding-right: 20px;">
                                <!-- Page Heading -->
                                <button type="button" class="btn btn-primary custom-btn my-3 rounded-pill font-weight-bold"
                                data-target="#quoteForm" data-toggle="modal"
                                style="font-style: bold; width: 200px; height: 40px;">Add Timesheet</button>
                            </div>
                        </div>
                    </div>

                    <table class="table table-hover">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col"></th>
                            <th scope="col">Project</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Jam Kerja</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row"></th>
                            <td>Testing App</td>
                            <td>27-06-2023</td>
                            <td>08.00 - 17.00</td>
                            </tr>
                            <tr>
                            <th scope="row"></th>
                            <td>Testing App</td>
                            <td>27-06-2023</td>
                            <td>08.00 - 17.00</td>
                            </tr>
                            <tr>
                            <th scope="row"></th>
                            <td>Testing App</td>
                            <td>27-06-2023</td>
                            <td>08.00 - 17.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; HR Management 2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
    
    <!--GET a QUOTE MODAL -->
    <div class="modal fade" id="quoteForm" tabindex="-1" role="dialog" aria-labelledby="quoteForm" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
              <div class="modal-content p-md-3">
                <div class="modal-header" style="background-color: #64B58A;">
                  <h4 class="modal-title" style="color: white;"><b>Add Timesheet</b></h4>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close"
                  style="color: white;"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                  <form action="#">
                    <div class="row" style="color: #455A64;">
                      <div class="form-group col-lg-12">
                        <label class="font-weight-bold text-small" for="project">Project<span class="text-primary ml-1">*</span></label>
                        <input class="form-control" id="project" type="text" placeholder="Pilih project" required="" />
                      </div>
                      <div class="form-group col-lg-12">
                        <label class="font-weight-bold text-small" for="tanggal">Tanggal<span class="text-primary ml-1">*</span></label>
                        <input class="form-control" id="tanggal" type="text" placeholder="DD/MM/YYYY" required="" />
                      </div>
                      <div class="form-group col-lg-12">
                        <label class="font-weight-bold text-small" for="lokasi">Lokasi<span class="text-primary ml-1">*</span></label>
                        <input class="form-control" id="lokasi" type="text" placeholder="Tambahkan lokasi" required="" />
                      </div>
                      <h4><b>Jam Kerja</b></h4>
                      <div class="form-group col-lg-6">
                        <label class="font-weight-bold text-small" for="jammulai">Jam Mulai<span class="text-primary ml-1">*</span></label>
                        <input class="form-control" id="jammulai" type="text" placeholder="Jam mulai" required="" />
                      </div>
                      <div class="form-group col-lg-6">
                        <label class="font-weight-bold text-small" for="jamselesai">Jam Selesai<span class="text-primary ml-1">*</span></label>
                        <input class="form-control" id="jamselesai" type="text" placeholder="Jam selesai" required="" />
                      </div>
                      <div class="form-group col-lg-12">
                        <label class="font-weight-bold text-small" for="task">Task</label>
                        <textarea class="form-control" id="task" type="text" placeholder="Deskripsi task yang sedang dikerjakan" />
                      </div>
                      <div class="form-group col-lg-12">
                        <label class="font-weight-bold text-small" for="taskselesai">Task Selesai<span class="text-primary ml-1">*</span></label>
                        <textarea class="form-control" id="taskselesai" type="text" placeholder="Task yang sudah selesai dikerjakan" required="" />
                      </div>
                      <div class="form-group col-lg-12">
                        <label class="font-weight-bold text-small" for="todo">To Do Task<span class="text-primary ml-1">*</span></label>
                        <textarea class="form-control" id="todo" type="text" placeholder="Task yang akan dikerjakan" required="" />
                      </div>
                      <div class="form-group col-lg-12 text-center">
                        <button class="btn btn-primary custom-btn my-3 font-weight-bold rounded-pill" type="submit"
                        style="font-style: bold; width: 300px; height: 40px;">Tambahkan</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
</template>

    <script>
        export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
    </script>
