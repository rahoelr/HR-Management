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
                <div class="row justify-content-end" style="padding-right: 3%;">
                    <!-- Page Heading -->
                    <button type="button" class="btn custom-btn2 rounded-pill font-weight-bold" data-target="#addForm"
                        data-toggle="modal" style="font-style: bold; width: 200px; height: 40px;">Add Timesheet</button>
                </div>
            </div>
        </div>
        <!-- TIMESHEET -->
        <center>
            <table class="table table-hover">
                <thead class="thead-green">
                    <tr>
                        <th scope="col" style="border-radius: 8px 0px 0px 0px;">
                            <center>ID</center>
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
                            <center>{{ data . id }}</center>
                        </th>
                        <td>
                            <center> {{ data . project_name }} </center>
                        </td>

                        <td>
                            <center>{{ data . work_date }}</center>
                        </td>
                        <td>
                            <center>{{ data . workhour_start }} - {{ data . workhour_end }}</center>
                        </td>
                        <td>
                            <center><button @click="viewTimesheet2(data.id)" class="btn mx-1" style="padding: 0px;"
                                    role="button" data-target="#editForm" data-toggle="modal">
                                    <img src="img/timesheet/edit-icon.png" /></button></center>
                        </td>
                        <!-- <td><button class="btn mx-1" style="padding: 0px;" role="button" data-target="#deleteModal"
                                data-toggle="modal">
                                <img src="delete-icon.png" /></button></td> -->
                        <td>
                            <center><button @click="deleteTimesheet(data.id)" class="btn mx-1" style="padding: 0px;"
                                    role="button">
                                    <img src="img/timesheet/delete-icon.png" /></button></center>
                        </td>
                        <td>
                            <center><button @click="viewTimesheet(data.id)" class="btn mx-1" style="padding: 0px;"
                                    role="button" data-target="#viewForm" data-toggle="modal">
                                    <img src="img/timesheet/eye-icon.png" /></button></center>
                        </td>

                    </tr>

                </tbody>
            </table>
        </center>
        <!-- LOGOUT MODAL -->
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

        <!--ADD TIMESHEET -->
        <div class="modal fade" id="addForm" tabindex="-1" role="dialog" aria-labelledby="quoteForm"
            aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                <div class="modal-content p-md-3">
                    <div class="modal-header" style="background-color: #64B58A;">
                        <h4 class="modal-title" style="color: white;"><b>Add Timesheet</b></h4>
                        <button class="close" type="button" @click="handleButtonClick" ref="autoClickButton"
                            data-dismiss="modal" aria-label="Close" style="color: white;"><span
                                aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <form @submit.prevent="submitData">
                            <div class="row" style="color: #455A64;">
                                <div class="form-group col-lg-12">
                                    <label class="font-weight-bold text-small" for="project">Project<span
                                            class="text-primary ml-1">*</span></label>
                                    <select class="form-select" aria-label="Default select example"
                                        v-model="selectedProjectId" placeholder="Pilih Project">
                                        <option value="" selected disabled hidden>Pilih Project</option>
                                        <option v-for="(data, index) in this.projects" :key="index"
                                            :value="data.id">
                                            {{ data . project_name }}</option>
                                    </select>
                                    <!-- <input v-model="ms_project_id" type="text" placeholder="Employee ID"> -->
                                </div>
                                <div class="form-group col-lg-12">
                                    <label class="font-weight-bold text-small" for="project">Employee ID<span
                                            class="text-primary ml-1">*</span></label>
                                    <select class="form-select" aria-label="Default select example"
                                        v-model="selectedEmployeeId">
                                        <option value="" selected disabled hidden>Pilih Employee</option>
                                        <option v-for="(data, index) in this.employees" :key="index"
                                            :value="data.user_id">
                                            {{ data . full_name }}</option>
                                    </select>
                                    <!-- <input v-model="ms_employee_id" type="text" placeholder="Employee ID"> -->
                                </div>
                                <div class="form-group col-lg-12">
                                    <label class="font-weight-bold text-small" for="tanggal">Tanggal<span
                                            class="text-primary ml-1">*</span></label>
                                    <!-- <input class="form-control" v-model="work_date" id="tanggal" type="date" placeholder="DD/MM/YYYY"
                                    required="" /> -->
                                    <input class="form-control" v-model="work_date" type="date" name="date"
                                        id="date" pattern="\d{4}-\d{2}-\d{2}">
                                    <!-- <input v-model="work_date" type="text" placeholder="2023-07-20"> -->
                                </div>
                                <div class="form-group col-lg-12">
                                    <label class="font-weight-bold text-small" for="lokasi">Lokasi<span
                                            class="text-primary ml-1">*</span></label>
                                    <!-- <input v-model="work_location" class="form-control" id="work_location" type="text"
                                    placeholder="Tambahkan lokasi" required="" /> -->
                                    <input class="form-control" v-model="work_location" type="text"
                                        placeholder="Work Location">
                                </div>
                                <h4><b>Jam Kerja</b></h4>
                                <div class="form-group col-lg-6">
                                    <label class="font-weight-bold text-small" for="jammulai">Jam Mulai<span
                                            class="text-primary ml-1">*</span></label>
                                    <!-- <input v-model="workhour_start" class="form-control" id="jammulai" type="time" placeholder="Jam mulai"
                                    required="" /> -->
                                    <!-- <input v-model="workhour_start" type="text" placeholder="22:01:56"> -->
                                    <input class="form-control" v-model="workhour_start" id="settime"
                                        type="time" step="1" />
                                </div>
                                <div class="form-group col-lg-6">
                                    <label class="font-weight-bold text-small" for="jamselesai">Jam Selesai<span
                                            class="text-primary ml-1">*</span></label>
                                    <!-- <input v-model="workhour_end" class="form-control" id="jamselesai" type="time" placeholder="Jam selesai"
                                    required="" /> -->
                                    <!-- <input v-model="workhour_end" type="text" placeholder="22:01:56"> -->
                                    <input class="form-control" v-model="workhour_end" id="settime" type="time"
                                        step="1" />

                                </div>
                                <div class="form-group col-lg-12">
                                    <label class="font-weight-bold text-small" for="task">Task</label>
                                    <textarea v-model="task" class="form-control" id="task" type="text"
                                        placeholder="Deskripsi task yang sedang dikerjakan">
                                    </textarea>
                                </div>
                                <div class="form-group col-lg-12">
                                    <label class="font-weight-bold text-small" for="taskselesai">Task Selesai<span
                                            class="text-primary ml-1">*</span></label>
                                    <textarea v-model="completed_task" class="form-control" id="taskselesai" type="text"
                                        placeholder="Task yang sudah selesai dikerjakan" required="">
                                    </textarea>
                                </div>
                                <div class="form-group col-lg-12">
                                    <label class="font-weight-bold text-small" for="todo">To Do Task<span
                                            class="text-primary ml-1">*</span></label>
                                    <textarea v-model="todo_task" class="form-control" id="todo" type="text"
                                        placeholder="Task yang akan dikerjakan" required="">
                                    </textarea>
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
        <!-- //Edit Timesheet -->
        <div class="modal fade" id="editForm" tabindex="-1" role="dialog" aria-labelledby="quoteForm"
            aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                <div class="modal-content p-md-3">
                    <div class="modal-header" style="background-color: #64B58A;">
                        <h4 class="modal-title" style="color: white;"><b>Update Timesheet</b></h4>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close" ref="autoCloseUpdate"
                            style="color: white;"><span aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <form @submit.prevent="submitUpdate">
                            <div v-for="timesheet in timesheetData" :key="timesheetData.id">
                                <div class="row" style="color: #455A64;">
                                    <div class="form-group col-lg-12">
                                        <label class="font-weight-bold text-small" for="project">Project<span
                                                class="text-primary ml-1">*</span></label>
                                        <select class="form-select" v-model="timesheet.ms_project_id">
                                            <option v-for="project in projects" :key="project.id"
                                                :value="project.id">
                                                {{ project . project_name }}
                                            </option>
                                        </select>
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label class="font-weight-bold text-small" for="project">Employee ID<span
                                                class="text-primary ml-1">*</span></label>
                                        <select class="form-select" aria-label="Default select example"
                                            v-model="timesheet.ms_employee_id">
                                            <option value="" selected disabled hidden>Pilih Employee</option>
                                            <option v-for="(data, index) in this.employees" :key="index"
                                                :value="data.user_id">
                                                {{ data . full_name }}</option>
                                        </select>
                                        <!-- <input v-model="ms_employee_id" type="text" placeholder="Employee ID"> -->
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label class="font-weight-bold text-small" for="tanggal">Tanggal<span
                                                class="text-primary ml-1">*</span></label>
                                        <input class="form-control" id="tanggal" v-model="timesheet.work_date"
                                            type="date" required />
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label class="font-weight-bold text-small" for="lokasi">Lokasi<span
                                                class="text-primary ml-1">*</span></label>
                                        <input class="form-control" v-model="timesheet.work_location" id="tanggal"
                                            type="text" required />
                                    </div>
                                    <h4><b>Jam Kerja</b></h4>
                                    <div class="form-group col-lg-6">
                                        <label class="font-weight-bold text-small" for="jammulai">Jam Mulai<span
                                                class="text-primary ml-1">*</span></label>
                                        <input class="form-control" v-model="timesheet.workhour_start" id="settime"
                                            type="time" step="1" />
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label class="font-weight-bold text-small" for="jamselesai">Jam Selesai<span
                                                class="text-primary ml-1">*</span></label>
                                        <input class="form-control" v-model="timesheet.workhour_end" id="settime"
                                            type="time" step="1" />
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label class="font-weight-bold text-small" for="task">Task</label>
                                        <textarea rows="5" v-model="timesheet.task" class="form-control" id="task" type="text">
                                    </textarea>
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label class="font-weight-bold text-small" for="taskselesai">Task Selesai<span
                                                class="text-primary ml-1">*</span></label>
                                        <textarea rows="5" v-model="timesheet.completed_task" class="form-control" id="taskselesai" type="text"
                                            required="">
                                    </textarea>
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label class="font-weight-bold text-small" for="todo">To Do Task<span
                                                class="text-primary ml-1">*</span></label>
                                        <textarea rows="5" v-model="timesheet.todo_task" class="form-control" id="todo" type="text"
                                            required="">
                                    </textarea>
                                    </div>
                                    <div class="form-group col-lg-12 text-center">
                                        <button @click="submitUpdate(timesheet)"
                                            class="btn btn-primary custom-btn my-3 font-weight-bold rounded-pill"
                                            type="submit"
                                            style="font-style: bold; width: 300px; height: 40px;">Update</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
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
                    <button type="button" class="btn btn-danger">Delete</button>
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
                    <form>
                        <div v-for="timesheet in timesheetData" :key="timesheetData.id">
                            <div class="row" style="color: #455A64;">
                                <div class="form-group col-lg-12">
                                    <label class="font-weight-bold text-small" for="project">Project<span
                                            class="text-primary ml-1">*</span></label>
                                    <input class="form-control" id="tanggal" type="text" required readonly
                                        disabled :value="timesheet.project_name" />

                                </div>
                                <div class="form-group col-lg-12">
                                    <label class="font-weight-bold text-small" for="tanggal">Tanggal<span
                                            class="text-primary ml-1">*</span></label>
                                    <input class="form-control" id="tanggal" type="date" required readonly
                                        disabled :value="timesheet.work_date" />
                                </div>
                                <div class="form-group col-lg-12">
                                    <label class="font-weight-bold text-small" for="lokasi">Lokasi<span
                                            class="text-primary ml-1">*</span></label>
                                    <input class="form-control" id="tanggal" type="text" required readonly
                                        disabled :value="timesheet.work_location" />

                                </div>
                                <h4><b>Jam Kerja</b></h4>
                                <div class="form-group col-lg-6">
                                    <label class="font-weight-bold text-small" for="jammulai">Jam Mulai<span
                                            class="text-primary ml-1">*</span></label>
                                    <input class="form-control" id="tanggal" type="time" required readonly
                                        disabled :value="timesheet.workhour_start" />

                                </div>
                                <div class="form-group col-lg-6">
                                    <label class="font-weight-bold text-small" for="jamselesai">Jam Selesai<span
                                            class="text-primary ml-1">*</span></label>
                                    <input class="form-control" id="tanggal" type="text" required readonly
                                        disabled :value="timesheet.workhour_end" />
                                </div>
                                <div class="form-group col-lg-12">
                                    <label class="font-weight-bold text-small" for="task">Task</label>
                                    <textarea rows="5" class="form-control" id="task" type="text" :value='timesheet.task' readonly
                                        disabled>
                                    </textarea>
                                </div>
                                <div class="form-group col-lg-12">
                                    <label class="font-weight-bold text-small" for="taskselesai">Task Selesai<span
                                            class="text-primary ml-1">*</span></label>
                                    <textarea rows="5" class="form-control" id="taskselesai" type="text" :value='timesheet.completed_task'
                                        required="" readonly disabled>
                                    </textarea>
                                </div>
                                <div class="form-group col-lg-12">
                                    <label class="font-weight-bold text-small" for="todo">To Do Task<span
                                            class="text-primary ml-1">*</span></label>
                                    <textarea rows="5" class="form-control" id="todo" type="text" :value='timesheet.todo_task'
                                        required="" readonly disabled>
                                    </textarea>
                                </div>
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
        name: 'timesheet',
        projects: 'projects',
        employees: 'employees',
        props: ['user'],
        data() {
            return {
                employeeId: this.user.id,
                timesheetID: null,
                timesheet: [],
                selectedProjectId: null,
                selectedEmployeeId: null,
                projects: [],
                employees: [],
                timesheetData: [],
                ms_employee_id: '',
                ms_project_id: '',
                work_date: '',
                workhour_start: '',
                workhour_end: '',
                work_location: '',
                task: '',
                completed_task: '',
                todo_task: '',
                timesheetToUpdate: {
                    // Inisialisasi objek timesheet dengan data yang akan diupdate
                    ms_employee_id: "",
                    ms_project_id: "",
                    work_date: "",
                    workhour_start: "",
                    workhour_end: "",
                    work_location: "",
                    task: "",
                    completed_task: "",
                    todo_task: "",
                },
            }
        },
        mounted() {
            this.getTimesheet();
            this.getProject();
            this.getEmployee();
            this.$refs.autoClickButton.click();
            this.$refs.autoCloseUpdate.click();

        },
        created() {
            this.viewTimesheet();
            this.getTimesheet(this.employeeId);
        },
        methods: {
            clearData() {
                this.selectedEmployeeId = "";
                this.selectedProjectId = "";
                this.work_date = "";
                this.workhour_start = "";
                this.workhour_end = "";
                this.work_location = "";
                this.task = "";
                this.completed_task = "";
                this.todo_task = "";
            },
            async submitData() {
                try {
                    const response = await axios.post('http://127.0.0.1:8000/api/timesheet/store', {
                        ms_employee_id: this.selectedEmployeeId,
                        ms_project_id: this.selectedProjectId,
                        work_date: this.work_date,
                        workhour_start: this.workhour_start,
                        workhour_end: this.workhour_end,
                        work_location: this.work_location,
                        task: this.task,
                        completed_task: this.completed_task,
                        todo_task: this.todo_task,
                        // More data properties
                    });

                    console.log(response.data);
                    console.log('sukses')


                    // window.location.href = '/timesheet';
                    this.getTimesheet();
                    this.$refs.autoClickButton.click();
                    this.clearData();
                    // this.resetForm();   



                    // Handle success, e.g., show a success message or redirect
                } catch (error) {
                    console.error(error);
                    console.log('error')
                    // Handle error, e.g., show an error message
                }
            },
            async submitUpdate(timesheet) {

                try {
                    const response = await axios.post(
                        `/api/timesheet/update/${timesheet.id}`, {
                            ms_employee_id: timesheet.ms_employee_id,
                            ms_project_id: timesheet.ms_project_id,
                            work_date: timesheet.work_date,
                            workhour_start: timesheet.workhour_start,
                            workhour_end: timesheet.workhour_end,
                            work_location: timesheet.work_location,
                            task: timesheet.task,
                            completed_task: timesheet.completed_task,
                            todo_task: timesheet.todo_task,
                            // More data properties
                        }
                    );

                    console.log(response.data);
                    console.log('Update successful');
                    this.getTimesheet();
                    this.$refs.autoCloseUpdate.click();
                    this.clearData();

                     // Redirect to the timesheet page after successful update
                } catch (error) {
                    console.error('Error updating timesheet:', error);
                }
            },
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
            getProject() {
                axios.get('http://127.0.0.1:8000/api/project').then(res => {
                    this.projects = res.data.data
                    console.log(this.projects);
                });
            },
            getEmployee() {
                axios.get('http://127.0.0.1:8000/api/employee').then(res => {
                    this.employees = res.data.data
                    console.log(this.employees);
                });
            },
            getTimesheet(employeeId) {
                axios.get(`http://127.0.0.1:8000/api/timesheet/showTimesheet/${employeeId}`).then(res => {
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
            deleteTimesheet(timesheetId) {

                if (confirm('apakah anda yakin akan menghapus data?')) {
                    axios.get(`http://127.0.0.1:8000/api/timesheet/destroy/${timesheetId}`).then(res => {
                            alert(res.data.message);
                            this.getTimesheet();
                        })
                        .catch(function(error) {
                            if (error.response) {
                                if (error.response.status == 404) {
                                    alert(error.response.data.message);
                                }
                            }
                        })
                };
            },

            viewTimesheet(timesheetId) {
                axios.get(`/api/timesheet/show/${timesheetId}`)
                    .then((response) => {
                        // Assuming the Timesheet data is returned in the 'data' property
                        this.timesheetData = response.data.data;
                        console.log(this.timesheetData)
                        this.error = null;
                        console.log('dapat data')
                    })
                    .catch((error) => {
                        this.timesheetData = null;
                        this.error = 'Failed to fetch Timesheet data.';
                    });
                // console.log(timesheetId);
            },
            async viewTimesheet2(timesheetId) {
                try {
                    const response = await axios.get(`/api/timesheet/show/${timesheetId}`);
                    this.timesheetData = response.data.data;
                    console.log(this.timesheetData);
                } catch (error) {
                    this.timesheetData = null;
                    console.error('Failed to fetch Timesheet data:', error);
                }
            },
        }
    }
</script>
