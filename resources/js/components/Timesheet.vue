<template>


<!-- Begin Page Content -->
<div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Page Heading -->
                            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                <h1 class="h3 font-weight-bold">Timesheet</h1>
                                <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row justify-content-end" style="padding-right: 20px;">
                                <!-- Page Heading -->
                                <button type="button" class="btn btn-primary custom-btn2 rounded-pill font-weight-bold"
                                data-target="#quoteForm" data-toggle="modal"
                                style="font-style: bold; width: 200px; height: 40px;">Add Timesheet</button>
                            </div>
                        </div>
                    </div>

                    <center><table class="table table-hover">
                        <thead class="thead-green">
                            <tr>
                                <th scope="col" style="border-radius: 8px 0px 0px 0px;"><center></center></th>
                                <th scope="col"><center>Project</center></th>
                                <th scope="col"><center>Tanggal</center></th>
                                <th scope="col"><center>Jam Kerja</center></th>
                                <th scope="col" colspan="3" style="border-radius: 0px 8px 0px 0px;"><center>Action</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row"><center></center></th>
                                <td><center>Testing App</center></td>
                                <td><center>27-06-2023</center></td>
                                <td><center>08.00 - 17.00</center></td>
                                <td><button class="btn mx-1" style="padding: 0px;" role="button"
                                    data-target="#editForm" data-toggle="modal">
                                        <img src="edit-icon.png"/></button></td>
                                <td><button class="btn mx-1" style="padding: 0px;" role="button"
                                    data-target="#deleteModal" data-toggle="modal">
                                        <img src="delete-icon.png"/></button></td>
                                <td><button class="btn mx-1" style="padding: 0px;" role="button"
                                    data-target="#viewForm" data-toggle="modal">
                                        <img src="eye-icon.png"/></button></td>
                                
                            </tr>
                            <tr>
                                <th scope="row"><center></center></th>
                                <td><center>Testing App</center></td>
                                <td><center>27-06-2023</center></td>
                                <td><center>08.00 - 17.00</center></td>
                                <td><button class="btn mx-1" style="padding: 0px;" role="button"
                                    data-target="#editForm" data-toggle="modal">
                                        <img src="edit-icon.png"/></button></td>
                                <td><button class="btn mx-1" style="padding: 0px;" role="button"
                                    data-target="#deleteModal" data-toggle="modal">
                                        <img src="delete-icon.png"/></button></td>
                                <td><button class="btn mx-1" style="padding: 0px;" role="button"
                                    data-target="#viewForm" data-toggle="modal">
                                        <img src="eye-icon.png"/></button></td>
                            </tr>
                            <tr>
                                <th scope="row"><center></center></th>
                                <td><center>Testing App</center></td>
                                <td><center>27-06-2023</center></td>
                                <td><center>08.00 - 17.00</center></td>
                                <td><button class="btn mx-1" style="padding: 0px;" role="button"
                                    data-target="#editForm" data-toggle="modal">
                                        <img src="edit-icon.png"/></button></td>
                                <td><button class="btn mx-1" style="padding: 0px;" role="button"
                                    data-target="#deleteModal" data-toggle="modal">
                                        <img src="delete-icon.png"/></button></td>
                                <td><button class="btn mx-1" style="padding: 0px;" role="button"
                                    data-target="#viewForm" data-toggle="modal">
                                        <img src="eye-icon.png"/></button></td>
                            </tr>
                        </tbody>
                    </table></center>
                </div>
                <!-- /.container-fluid -->

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
                    <a class="btn btn-danger" @click="logout">Logout</a>
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

<!--GET EDIT MODAL -->
<div class="modal fade" id="editForm" tabindex="-1" role="dialog" aria-labelledby="quoteForm" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
              <div class="modal-content p-md-3">
                <div class="modal-header" style="background-color: #64B58A;">
                  <h4 class="modal-title" style="color: white;"><b>Edit Timesheet</b></h4>
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
                        style="font-style: bold; width: 300px; height: 40px;">Simpan</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>

    <!-- DELETE MODAL-->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hapus Data Timesheet?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Pilih "Delete" jika anda ingin menghapus data ini</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">No</button>
                    <a class="btn btn-danger">Delete</a>
                </div>
            </div>
        </div>
    </div>

    <!--GET VIEW MODAL -->
    <div class="modal fade" id="viewForm" tabindex="-1" role="dialog" aria-labelledby="quoteForm" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
              <div class="modal-content p-md-3">
                <div class="modal-header" style="background-color: #64B58A;">
                  <h4 class="modal-title" style="color: white;"><b>Timesheet</b></h4>
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
                        style="font-style: bold; width: 300px; height: 40px;">Simpan</button>
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
            methods: {
            logout() {
                axios.post('/logout')
                    .then(() => {
                        // Perform any additional actions after successful logout
                        // For example, you can clear local storage, update component state, or redirect the user
                        console.log('Logout successful');
                        // Redirect the user to the login page
                        window.location.href = '/';
                    })
                    .catch(error => {
                        // Handle the error
                        console.error(error);
                    });
            }
        }
    }
    </script>