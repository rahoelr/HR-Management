<template>
    <!-- Begin Page Content -->
    <div class="container-fluid bg-content">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
        </div>

        <!-- Content Row -->
        <div class="row">

                        
            <div class="col-xl mb-4">
                <div class="card bg-white shadow h-100 py-2" id="bg-card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-10">
                                <h5 class="card-title">Check Log</h5>
                                <div class="row" id="clock">
                                                
                                    <!-- <h1 class="col-md-3 card-text" id="time">
                                    </h1> -->

                                    <h6 class="col-md-9 card-text my-auto" id="date">
                                    </h6>
                                                                                               
                                </div>                                   
                            </div>
                            <div class="col-md-2 my-auto">
                                <!-- <a href="#" class="btn btn-primary mx-1">.</a> -->
                                <button onclick="getElementById('demo').innerHTML=Date()" class="btn mx-1" style="border: 4px solid #E37C77; border-radius: 24%; background-color: white; padding: 5px 5px;" href="#!" role="button" id="button-checklog">
                                        <img src="presensi-icon-before.svg" height ="32" width="32" />
                                </button>
                                <button onclick="changeColor" class="btn mx-1" style="background-color: #64B58A; border-radius: 24%; padding: 8px 8px;" href="#!" role="button" id="button-finish">
                                        <img src="shutdown-icon-before.svg" height ="32" width="32" />
                                </button>
                                <!-- tes date demo -->
                                <p id="demo"></p>
                            </div>
                        </div>                                    
                    </div>
                </div>
            </div>
                        
        </div>

        <!-- Content Row -->
        <div class="row">
                                            
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card bg-white border-left-success shadow h-100 py-2">
                    <div class="card-body">
                                    
                        <div class="row">
                            <div class="col-md-3 my-auto mx-auto">                        
                                    <!-- <a href="/timesheet">
                                        <button type="button"> <img src="Foto PP.png" height ="64" width="64" /></button>
                                    </a> -->
                                <a class="btn" style="background-color: #D9EEE9; padding: 8px 8px; border-radius: 24%;" href="#!" role="button">
                                    <img src="profil-icon.svg" height ="48" width="48" />
                                </a>
                            </div>
                                <div class="col-md-9">
                                    <h5 class="card-title my-1">Profil</h5>
                                    <p class="card-text my-0">Feby Eka Pradiyanto</p>
                                    <p class="card-text my-0">UI/UX Designer</p>
                                </div>                                       
                            </div>
                    </div>
                </div>
            </div>
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

            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card bg-white border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                                    
                        <div class="row">
                            <div class="col-md-3 my-auto mx-auto">
                                <a class="btn" style="background-color: #DFE5FB; padding: 8px 8px; border-radius: 24%;" href="#!" role="button">
                                    <img src="timesheet-icon.svg" height ="48" width="48" />
                                </a>
                            </div>
                            <div class="col-md-9">
                                <h5 class="card-title my-1">Timesheet</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectur</p>
                            </div>                                       
                        </div>
                                    
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card bg-white border-left-danger shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3 my-auto mx-auto">
                                <a class="btn" style="background-color: #FBE8EA; padding: 8px 8px; border-radius: 24%;" href="#!" role="button">
                                    <img src="cuti-icon.svg" height ="48" width="48" />
                                </a>
                            </div>
                            <div class="col-md-9">
                                <h5 class="card-title my-1">Pengajuan Cuti</h5>
                                <p class="card-text">Cuti anda tersisa 12 Hari</p>
                            </div>                                       
                        </div>
                    </div>
                </div>
            </div>

        </div>

                    
        <!-- Content Row -->
        <!-- <div class="row"> -->

        <!-- Bar Chart -->
            <div class="card bg-white shadow mb-4">
                <div class="card-body">
                    <h5 class="card-title">Average Working Hour</h5>
                    <div class="chart-bar">
                        <canvas id="myBarChart"></canvas>
                    </div>
                </div>
            </div>

        <!-- </div> -->

    </div>
    <!-- /.container-fluid -->

</template>
    
    <script>
    export default {
        mounted() {
            console.log('Component mounted.')

            
        },
        methods:{
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

        },
    //     export default {
    //     mounted() {
    //         console.log('Component mounted.')

    //         // button-stop
    //         const btn = document.getElementById('btn');
    //         btn.addEventListener('click', function onClick(event) {
    //         const box = document.getElementById('box');

    //         if (document.getElementById("imgClickAndChange").src == "presensi-icon-after.svg"){
    //             document.getElementById("imgClickAndChange").src = "presensi-icon-before.svg";
    //         } else {
    //             btn.style.backgroundColor = "#E37C77";
    //             btn.style.border = "4px solid white"
    //             document.getElementById("imgClickAndChange").src = "presensi-icon-after.svg";
    //         }

    //         box.style.backgroundColor = 'white';
    //         box.style.color = 'black';
    //         });

    //         // button-start
    //         const btn2 = document.getElementById('btn2');
    //         btn2.addEventListener('click', function onClick(event) {
    //         const box = document.getElementById('box');

    //         if (document.getElementById("imgClickAndChange2").src == "shutdown-icon-after.svg"){
    //             document.getElementById("imgClickAndChange2").src = "shutdown-icon-before.svg";
    //         } else {
    //             btn2.style.backgroundColor = 'white';
    //             document.getElementById("imgClickAndChange2").src = "shutdown-icon-after.svg";
    //         }

    //         box.style.backgroundColor = '#E37C77';
    //         box.style.color = 'white';
    //         });
    //     }
    // }
        
    }
//     const buttonGroup = document.getElementById("button-checklog");

// const buttonGroupPressed = (e) => {
//   const isButton = e.target.nodeName === 'BUTTON';
//   if(!isButton) {
//      return
//    }
//   document.getElementById("bg-card").style.backgroundColor = "red";
  
  
// }

// buttonGroup.addEventListener('click', buttonGroupPressed);





    window.addEventListener("load", () => {
    clock();
    function clock() {
        const today = new Date();

        // get time components
        const hours = today.getHours();
        const minutes = today.getMinutes();
        const seconds = today.getSeconds();

        //add '0' to hour, minute & second when they are less 10
        const hour = hours < 10 ? "0" + hours : hours;
        const minute = minutes < 10 ? "0" + minutes : minutes;
        const second = seconds < 10 ? "0" + seconds : seconds;

        //make clock a 12-hour time clock
        const hourTime = hour > 12 ? hour - 12 : hour;

        // if (hour === 0) {
        //   hour = 12;
        // }
        //assigning 'am' or 'pm' to indicate time of the day
        const ampm = hour < 12 ? "AM" : "PM";

        // get date components
        const month = today.getMonth();
        const year = today.getFullYear();
        const day = today.getDate();
        const days = today.getDay();

        //declaring a list of all months in  a year
        const monthList = [
        "Januari",
        "Februari",
        "Maret",
        "April",
        "Mei",
        "Juni",
        "Juli",
        "Agustus",
        "September",
        "Oktober",
        "November",
        "Desember"
        ];

        const dayList = [
        "Minggu",
        "Senin",
        "Selasa",
        "Rabu",
        "Kamis",
        "Jumat",
        "Sabtu"
        ];

        //get current date and time
        const date = dayList[days] + ", " + day + " " + monthList[month] + " " + year;
        const time = hourTime + ":" + minute + ":" + second;

        //combine current date and time
        const dateTime = date + time;

        //print current date and time to the DOM
        // document.getElementById("date-time").innerHTML = dateTime;
        // setTimeout(clock, 1000);

        // document.getElementById("date").innerHTML = date;
        // setTimeout(clock, 1000);

        document.getElementById("time").innerHTML = time;
        setTimeout(clock, 1000);

        document.getElementById("date").innerHTML = date;
        setTimeout(clock, 1000);
    }
    });
    </script>