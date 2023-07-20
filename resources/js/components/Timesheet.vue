<template>


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
                    <button type="button" class="btn custom-btn2 rounded-pill font-weight-bold"
                        data-target="#quoteForm" data-toggle="modal"
                        style="font-style: bold; width: 200px; height: 40px;">Add Timesheet</button>
                </div>
            </div>
        </div>

        <center>
            <table class="table table-hover">
                <thead class="thead-green">
                    <tr>
                        <th scope="col" style="border-radius: 8px 0px 0px 0px;">
                            <center></center>
                        </th>
                        <th scope="col">
                            <center>Project</center>
                        </th>
                        <th scope="col">
                            <center>Tanggal</center>
                        </th>
                        <th scope="col">
                            <center>Jam Kerja</center>
                        </th>
                        <th scope="col" colspan="3" style="border-radius: 0px 8px 0px 0px;">
                            <center>Action</center>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(data, index) in this.timesheet" :key="index">
                        <th scope="row">
                            <center>{{ data . ms_project_id }}</center>
                        </th>
                        <td>
                            <center>  {{ data . project_name }} </center>
                        </td>
                      
                        <td><center>{{ data . work_date }}</center>  </td>
                        <td>
                            <center>{{ data . workhour_start }} - {{ data . workhour_end }}</center>
                        </td>
                        <td><button class="btn mx-1" style="padding: 0px;" role="button" data-target="#editForm"
                                data-toggle="modal">
                                <img src="edit-icon.png" /></button></td>
                        <td><button class="btn mx-1" style="padding: 0px;" role="button" data-target="#deleteModal"
                                data-toggle="modal">
                                <img src="delete-icon.png" /></button></td>
                        <td><button class="btn mx-1" style="padding: 0px;" role="button" data-target="#viewForm"
                                data-toggle="modal">
                                <img src="eye-icon.png" /></button></td>

                    </tr>
                  
                </tbody>
            </table>
        </center>

    
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
    <div class="modal fade" id="quoteForm" tabindex="-1" role="dialog" aria-labelledby="quoteForm"
        aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
            <div class="modal-content p-md-3">
                <div class="modal-header" style="background-color: #64B58A;">
                    <h4 class="modal-title" style="color: white;"><b>Add Timesheet</b></h4>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"
                        style="color: white;"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <form @submit.prevent="submitForm">
                        <div class="row" style="color: #455A64;">
                            <div class="form-group col-lg-12">
                                <label class="font-weight-bold text-small" for="project">Project<span
                                        class="text-primary ml-1">*</span></label>
                                        <select class="form-select" aria-label="Default select example">
                                        <option v-for="(data, index) in this.projects" :key="index"  value="data.ms_project_id">
                                            {{data.project_name}}</option>
                                    </select>
                            </div>
                            <div class="form-group col-lg-12">
                                <label class="font-weight-bold text-small" for="tanggal">Tanggal<span
                                        class="text-primary ml-1">*</span></label>
                                        <input class="form-control" v-model="work_date" id="tanggal" type="date" placeholder="DD/MM/YYYY"
                                    required="" />


                            </div>
                            <div class="form-group col-lg-12">
                                <label class="font-weight-bold text-small" for="lokasi">Lokasi<span
                                        class="text-primary ml-1">*</span></label>
                                <input v-model="work_location" class="form-control" id="work_location" type="text"
                                    placeholder="Tambahkan lokasi" required="" />
                            </div>
                            <h4><b>Jam Kerja</b></h4>
                            <div class="form-group col-lg-6">
                                <label class="font-weight-bold text-small" for="jammulai">Jam Mulai<span
                                        class="text-primary ml-1">*</span></label>
                                        <input v-model="workhour_start" class="form-control" id="jammulai" type="time" placeholder="Jam mulai"
                                    required="" />
                            </div>
                            <div class="form-group col-lg-6">
                                <label class="font-weight-bold text-small" for="jamselesai">Jam Selesai<span
                                        class="text-primary ml-1">*</span></label>
                                        <input v-model="workhour_end" class="form-control" id="jamselesai" type="time" placeholder="Jam selesai"
                                    required="" />
                            </div>
                            <div class="form-group col-lg-12">
                                <label class="font-weight-bold text-small" for="task">Task</label>
                                <textarea v-model="task" class="form-control" id="task" type="text"
                                    placeholder="Deskripsi task yang sedang dikerjakan" />
                            </div>
                            <div class="form-group col-lg-12">
                                <label class="font-weight-bold text-small" for="taskselesai">Task Selesai<span
                                        class="text-primary ml-1">*</span></label>
                                <textarea v-model="completed_task" class="form-control" id="taskselesai" type="text"
                                    placeholder="Task yang sudah selesai dikerjakan" required="" />
                            </div>
                            <div class="form-group col-lg-12">
                                <label class="font-weight-bold text-small" for="todo">To Do Task<span
                                        class="text-primary ml-1">*</span></label>
                                <textarea v-model="todo_task" class="form-control" id="todo" type="text"
                                    placeholder="Task yang akan dikerjakan" required="" />
                            </div>
                            <div class="form-group col-lg-12 text-center">
                                <button class="btn btn-primary custom-btn my-3 font-weight-bold rounded-pill"
                                    type="submit"
                                    style="font-style: bold; width: 300px; height: 40px;">Tambahkan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--GET EDIT MODAL -->
    <div class="modal fade" id="editForm" tabindex="-1" role="dialog" aria-labelledby="quoteForm"
        aria-hidden="true">
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
                                <label class="font-weight-bold text-small" for="project">Project<span
                                        class="text-primary ml-1">*</span></label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Pilih project</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                            </div>
                            <div class="form-group col-lg-12">
                                <label class="font-weight-bold text-small" for="tanggal">Tanggal<span
                                        class="text-primary ml-1">*</span></label>
                                <input class="form-control" id="tanggal" type="date" placeholder="DD/MM/YYYY"
                                    required="" />
                            </div>
                            <div class="form-group col-lg-12">
                                <label class="font-weight-bold text-small" for="lokasi">Lokasi<span
                                        class="text-primary ml-1">*</span></label>
                                <input class="form-control" id="lokasi" type="text"
                                    placeholder="Tambahkan lokasi" required="" />
                            </div>
                            <h4><b>Jam Kerja</b></h4>
                            <div class="form-group col-lg-6">
                                <label class="font-weight-bold text-small" for="jammulai">Jam Mulai<span
                                        class="text-primary ml-1">*</span></label>
                                <input class="form-control" id="jammulai" type="time" placeholder="Jam mulai"
                                    required="" />
                            </div>
                            <div class="form-group col-lg-6">
                                <label class="font-weight-bold text-small" for="jamselesai">Jam Selesai<span
                                        class="text-primary ml-1">*</span></label>
                                <input class="form-control" id="jamselesai" type="time" placeholder="Jam selesai"
                                    required="" />
                            </div>
                            <div class="form-group col-lg-12">
                                <label class="font-weight-bold text-small" for="task">Task</label>
                                <textarea class="form-control" id="task" type="text"
                                    placeholder="Deskripsi task yang sedang dikerjakan" />
                            </div>
                            <div class="form-group col-lg-12">
                                <label class="font-weight-bold text-small" for="taskselesai">Task Selesai<span
                                        class="text-primary ml-1">*</span></label>
                                <textarea class="form-control" id="taskselesai" type="text"
                                    placeholder="Task yang sudah selesai dikerjakan" required="" />
                            </div>
                            <div class="form-group col-lg-12">
                                <label class="font-weight-bold text-small" for="todo">To Do Task<span
                                        class="text-primary ml-1">*</span></label>
                                <textarea class="form-control" id="todo" type="text"
                                    placeholder="Task yang akan dikerjakan" required="" />
                            </div>
                            <div class="form-group col-lg-12 text-center">
                                <button class="btn btn-primary custom-btn my-3 font-weight-bold rounded-pill"
                                    type="submit"
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
    <div class="modal fade" id="viewForm" tabindex="-1" role="dialog" aria-labelledby="quoteForm"
        aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
            <div class="modal-content p-md-3">
                <div class="modal-header" style="background-color: #64B58A;">
                    <h4 class="modal-title" style="color: white;"><b>Timesheet</b></h4>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"
                        style="color: white;"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <form action="#" v-for="(data, index) in this.projects" :key="index" >
                        <div class="row" style="color: #455A64;">
                            <div class="form-group col-lg-12">
                                <label class="font-weight-bold text-small" for="project">Project<span
                                        class="text-primary ml-1">*</span></label>
                                <input class="form-control" id="project" type="text"
                                    placeholder={{data.project_name}} required="" readonly disabled/>
                            </div>
                            <div class="form-group col-lg-12">
                                <label class="font-weight-bold text-small" for="tanggal">Tanggal<span
                                        class="text-primary ml-1">*</span></label>
                                <input class="form-control" id="tanggal" type="text" placeholder="DD/MM/YYYY"
                                    required="" readonly disabled/>
                            </div>
                            <div class="form-group col-lg-12">
                                <label class="font-weight-bold text-small" for="lokasi">Lokasi<span
                                        class="text-primary ml-1">*</span></label>
                                <input class="form-control" id="lokasi" type="text"
                                    placeholder="Tambahkan lokasi" required="" readonly disabled/>
                            </div>
                            <h4><b>Jam Kerja</b></h4>
                            <div class="form-group col-lg-6">
                                <label class="font-weight-bold text-small" for="jammulai">Jam Mulai<span
                                        class="text-primary ml-1">*</span></label>
                                <input class="form-control" id="jammulai" type="text" placeholder="Jam mulai"
                                    required="" readonly disabled/>
                            </div>
                            <div class="form-group col-lg-6">
                                <label class="font-weight-bold text-small" for="jamselesai">Jam Selesai<span
                                        class="text-primary ml-1">*</span></label>
                                <input class="form-control" id="jamselesai" type="text" placeholder="Jam selesai"
                                    required="" readonly disabled/>
                            </div>
                            <div class="form-group col-lg-12">
                                <label class="font-weight-bold text-small" for="task">Task</label>
                                <textarea class="form-control" id="task" type="text"
                                    placeholder="Deskripsi task yang sedang dikerjakan" readonly disabled/>
                            </div>
                            <div class="form-group col-lg-12">
                                <label class="font-weight-bold text-small" for="taskselesai">Task Selesai<span
                                        class="text-primary ml-1">*</span></label>
                                <textarea class="form-control" id="taskselesai" type="text"
                                    placeholder="Task yang sudah selesai dikerjakan" required="" readonly disabled/>
                            </div>
                            <div class="form-group col-lg-12">
                                <label class="font-weight-bold text-small" for="todo">To Do Task<span
                                        class="text-primary ml-1">*</span></label>
                                <textarea class="form-control" id="todo" type="text"
                                    placeholder="Task yang akan dikerjakan" required="" readonly disabled/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    </div>
    <!-- /.container-fluid -->

    <!-- Logout Modal-->
 
</template>

<script>
    export default {
        name: 'timesheet',
        name: 'projects', 
        data() {
            return {
                timesheet: [],
                projects: [],
                ms_employee_id: '',
                ms_project_id: '',
                work_date: '',
                workhour_start: '',
                workhour_end: '',
                work_location: '',
                task: '',
                completed_task: '',
                todo_task: ''
            }
        },
        mounted() {
            this.getTimesheet();
            this.submitForm();
            this.getProject();
        },
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
            },
            getProject(){
                axios.get('http://127.0.0.1:8000/api/project').then(res => {
                    this.projects = res
                    console.log(this.projects);
                });
            },
            getTimesheet() {
                axios.get('http://127.0.0.1:8000/api/timesheet').then(res => {
                    this.timesheet = res.data.data
                    console.log(this.timesheet)
                });
            },
            postTimesheet() {
                axios.post('http://127.0.0.1:8000/api/timesheet/store').then(res => {
                                            // Handle successful response
                        console.log(response.data);
                        // Refresh the timesheet data
                        this.getTimesheet();
                        // Reset the form data
                        this.resetForm();
                });

        },
        submitForm() {
            const formData = {
                ms_employee_id: this.ms_employee_id,
                ms_project_id: this.ms_project_id,
                work_date: this.work_date,
                workhour_start: this.workhour_start,
                workhour_end: this.workhour_end,
                work_location: this.work_location,
                task: this.task,
                completed_task: this.completed_task,
                todo_task: this.todo_task,
      };

      axios.post('http://127.0.0.1:8000/api/timesheet/store', formData)
        .then(response => {
          // Handle successful response
          console.log(response.data);
        })
        .catch(error => {
          // Handle error
          console.error(error);
        });
    },
    resetForm() {
                // Reset the form data properties
                this.ms_employee_id = '';
                this.ms_project_id = '';
                this.work_date = '';
                this.workhour_start = '';
                this.workhour_end = '';
                this.work_location = '';
                this.task = '';
                this.completed_task = '';
                this.todo_task = '';
            },
    }}
</script>