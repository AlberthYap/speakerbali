<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Speaker Bali</title>

    <!-- Custom fonts for this template-->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Bootstrap core JavaScript-->
    <script src="jquery-3.5.1.min.js"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <script src="sweetalert2/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2/dist/sweetalert2.min.css">
</head>

<body id="page-top">

    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordio" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon rotate-n-15">
                    <!-- Ini merupakan icon dari https://materialdesignicons.com/ -->
                    <svg style="width:32px;height:32px" viewBox="0 0 24 24">
                        <path fill="#FFFAFA" d="M14,10A3,3 0 0,0 11,13A3,3 0 0,0 14,16A3,3 0 0,0 17,13A3,3 0 0,0 14,10M14,18A5,5 0 0,1 9,13A5,5 0 0,1 14,8A5,5 0 0,1 19,13A5,5 0 0,1 14,18M14,2A2,2 0 0,1 16,4A2,2 0 0,1 14,6A2,2 0 0,1 12,4A2,2 0 0,1 14,2M19,0H9A2,2 0 0,0 7,2V18A2,2 0 0,0 9,20H19A2,2 0 0,0 21,18V2A2,2 0 0,0 19,0M5,22H17V24H5A2,2 0 0,1 3,22V4H5" />
                    </svg>
                </div>
                <div class="sidebar-brand-text mx-3">Speaker Bali</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active" id="menulogin">
                <a class="nav-link" href="#">
                    <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                        <path fill="#FFFAFA" d="M10,17V14H3V10H10V7L15,12L10,17M10,2H19A2,2 0 0,1 21,4V20A2,2 0 0,1 19,22H10A2,2 0 0,1 8,20V18H10V20H19V4H10V6H8V4A2,2 0 0,1 10,2Z" />
                    </svg>
                    <span>Login</span></a>
            </li>

            <!--untuk hr / garis diberi class login menu supaya garis tersebut tidak muncul ketika login belum dilakukan-->
            <hr class="loginmenu sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="loginmenu nav-item active" id="menutambah">
                <a class="nav-link" href="#">
                    <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                        <path fill="#FFFAFA" d="M17,13H13V17H11V13H7V11H11V7H13V11H17M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                    </svg>
                    <span>Tambah</span></a>
            </li>

            <hr class="loginmenu sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="loginmenu nav-item active" id="menulaporan">
                <a class="nav-link" href="#">
                    <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                        <path fill="#FFFAFA" d="M13,9H18.5L13,3.5V9M6,2H14L20,8V20A2,2 0 0,1 18,22H6C4.89,22 4,21.1 4,20V4C4,2.89 4.89,2 6,2M7,20H9V14H7V20M11,20H13V12H11V20M15,20H17V16H15V20Z" />
                    </svg>
                    <span>Laporan</span></a>
            </li>
            <hr class="loginmenu sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="loginmenu nav-item active" id="menuhapus">
                <a class="nav-link" href="#">
                    <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                        <path fill="#FFFAFA" d="M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z" />
                    </svg>
                    <span>Hapus</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <svg style="width:30px;height:30px" viewBox="0 0 24 24" id="sidebarToggle" class="rounded-circle border-0">
                    <path fill="#FFFAFA" d="M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M12,20A8,8 0 0,1 4,12A8,8 0 0,1 12,4A8,8 0 0,1 20,12A8,8 0 0,1 12,20M16,15V13H8V15L5,12L8,9V11H16V9L19,12L16,15Z" />
                </svg>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Fungsi dari nn pada class adalah untuk sebagai penanda pemisah antara setiap judul pada navbar -->
                    <h1 class="h3 mt-4 mb-4 text-gray-800 nn" id="nlogin">Login / Logout</h1>
                    <h1 class="h3 mt-4 mb-4 text-gray-800 nn" id="ntambah">Tambah Speaker</h1>
                    <h1 class="h3 mt-4 mb-4 text-gray-800 nn" id="nlaporan">Laporan Speaker</h1>
                    <h1 class="h3 mt-4 mb-4 text-gray-800 nn" id="nhapus">Hapus List Speaker</h1>
                </nav>

                <!-- Begin Page Content -->
                <div class="container-fluid mt-5" id="clogin">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-6">
                            <div class="form-group row">
                                <label for="username" class="col-2">Username</label>
                                <div class="col-10">
                                    <input type="text" id="login_username" class="form-control" placeholder="Masukkan Username">
                                    <small class="form-text text-muted">Silahkan Masukan Username Anda, Case Tidak Bersifat
                                        Sensitif</small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-2">Password</label>
                                <div class="col-10">
                                    <input type="password" id="login_password" class="form-control" placeholder="Password">
                                    <small class="form-text text-muted">Silahkan Masukan Password Anda, Case Bersifat
                                        Sensitif</small>
                                </div>
                            </div>
                            <div class="form-group row mt-4 justify-content-md-center">
                                <button type="button" id="login_submit" class="btn  btn-success col-6 btn-block ">Login</button>
                            </div>
                            <div class="form-group row justify-content-md-center">
                                <button type="button" id="login_logout" class="btn  btn-danger btn-block col-6">Logout</button>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" id="login_token" disabled><br>


                    <script>
                        $("#login_submit").click(function() {
                            if ($('#login_username').val() && $('#login_password').val()) {

                                var datapost = {
                                    "username": $('#login_username').val(),
                                    "password": $('#login_password').val(),
                                };

                                $.post("/login", datapost)
                                    .done(function(response) {
                                        if (response.status == false) {
                                            Swal.fire({
                                                icon: 'error',
                                                title: 'Oops...',
                                                text: 'Username atau Password Salah!',
                                                confirmButtonColor: "#FF0000",
                                            })
                                            $('#login_token').val('');
                                        } else {
                                            $('#login_token').val(response.token);
                                            $('#login_username').attr('disabled', 'disabled');
                                            $('#login_password').attr('disabled', 'disabled');
                                            $('.loginmenu').show();
                                            // syntax dibawah berfungsi untuk menampilkan alert dengan sweetalert2
                                            const Toast = Swal.mixin({
                                                toast: true,
                                                position: 'top-end',
                                                showConfirmButton: false,
                                                timer: 3000,
                                                timerProgressBar: true,
                                                didOpen: (toast) => {
                                                    toast.addEventListener('mouseenter', Swal.stopTimer)
                                                    toast.addEventListener('mouseleave', Swal.resumeTimer)

                                                }
                                            })

                                            Toast.fire({
                                                icon: 'success',
                                                title: 'Signed in successfully'
                                            })
                                            // End Syntax SweetAlert2
                                        }
                                    })
                            } else {
                                // Syntax dibawah merupakan sweet alert
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: 'Data Belum Lengkap!',
                                    confirmButtonColor: "#FF0000",
                                })
                            }
                        });
                        $("#login_logout").click(function() {
                            if (
                                ($("#login_token").val().length == 0)
                            ) {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: 'Anda Belum Login, Silahkan Login Terlebih Dahulu',
                                    confirmButtonColor: "#FF0000",
                                })
                                return;
                            }

                            const swalWithBootstrapButtons = Swal.mixin({
                                customClass: {
                                    confirmButton: 'btn btn-success',
                                    cancelButton: 'btn btn-danger',
                                },
                                buttonsStyling: false
                            })

                            swalWithBootstrapButtons.fire({
                                title: 'Apakah Anda Yakin?',
                                text: "Kamu Perlu Login Ulang Untuk Masuk!",
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonText: 'Ya, Log Out!',
                                cancelButtonText: 'Tidak!',
                                reverseButtons: true
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    $("#login_token").val('');
                                    $("#login_username").val('').removeAttr('disabled');
                                    $("#login_password").val('').removeAttr('disabled');
                                    $('.loginmenu').hide();
                                    swalWithBootstrapButtons.fire(
                                        'Logout!',
                                        'Kamu Berhasil Logout.',
                                        'success'
                                    )
                                } else if (
                                    /* Read more about handling dismissals below */
                                    result.dismiss === Swal.DismissReason.cancel
                                ) {
                                    swalWithBootstrapButtons.fire(
                                        'Cancel',
                                        'Kamu Tidak Jadi Log Out :)',
                                        'error'
                                    )
                                }
                            })

                        });
                    </script>
                </div>

                <div class="container-fluid" id="ctambah">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-6">
                            <div class="form-group row">
                                <label for="merkspeaker" class="col-3">Merk Speaker</label>
                                <div class="col-9">
                                    <input type="text" id="tambah_merkspeaker" class="form-control" placeholder="Masukkan Merk Speaker">
                                    <small class="form-text text-muted">Silahkan Masukan Merk Speaker</small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="hargaspeaker" class="col-3">Tipe Speaker</label>
                                <div class="col-9">
                                    <input type="text" id="tambah_tipespeaker" class="form-control" placeholder="Masukkan Harga Speaker">
                                    <small class="form-text text-muted">Silahkan Masukan Tipe Speaker</small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="hargaspeaker" class="col-3">Harga Speaker</label>
                                <div class="col-9">
                                    <input type="number" id="tambah_harga" class="form-control" placeholder="Masukkan Harga Speaker">
                                    <small class="form-text text-muted">Silahkan Masukan Harga Speaker</small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tahunspeaker" class="col-3">Tahun Peluncuran</label>
                                <div class="col-9">
                                    <input type="number" id="tambah_tahun" oninput="maxLengthCheck(this)" maxlength="4" max="9999" min="1" class="form-control" placeholder="Masukkan Tahun Peluncuran Speaker">
                                    <small class="form-text text-muted">Silahkan Masukan Tahun Peluncuran Speaker</small>
                                </div>
                            </div>
                            <div class="form-group row mt-4 justify-content-md-center">
                                <button type="button" id="tambah_simpan" class="btn  btn-success col-6 btn-block ">Simpan Data Speaker</button>
                            </div>
                        </div>
                    </div>

                    <script>
                        // function dibawah ini digunakan untuk membatasi jumlah inputan
                        function maxLengthCheck(object) {
                            if (object.value.length > object.maxLength)
                                object.value = object.value.slice(0, object.maxLength)
                        }

                        $("#tambah_simpan").click(function() {
                            if (
                                ($("#login_token").val().length == 0) ||
                                ($("#tambah_merkspeaker").val().length == 0) ||
                                ($("#tambah_tipespeaker").val().length == 0) ||
                                ($("#tambah_harga").val().length == 0) ||
                                ($("#tambah_tahun").val().length == 0)
                            ) {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: 'Data belum Lengkap',
                                    confirmButtonColor: "#FF0000",
                                })
                                return;
                            }

                            datapost = {
                                "token": $("#login_token").val(),
                                "merkspeaker": $("#tambah_merkspeaker").val(),
                                "tipespeaker": $("#tambah_tipespeaker").val(),
                                "harga": $("#tambah_harga").val(),
                                "tahun": $("#tambah_tahun").val(),
                            };
                            $.post("/tambah", datapost)
                                .done(function(response) {

                                    if (response.status == true) {
                                        $("#tambah_merkspeaker").val(''),
                                            $("#tambah_tipespeaker").val(''),
                                            $("#tambah_harga").val(''),
                                            $("#tambah_tahun").val('');
                                        Swal.fire({
                                            icon: 'success',
                                            title: 'Data Berhasil Ditambahkan',
                                            confirmButtonColor: "#00ff99",
                                        })
                                    } else {
                                        Swal.fire({
                                            icon: 'error',
                                            title: response.informasi,
                                            confirmButtonColor: "#FF0000",
                                        })
                                    }

                                })
                        });
                    </script>
                </div>

                <div class="container-fluid" id="claporan">
                    <button type="button" class="btn btn-success mb-3" id="laporan_reload">Reload Data</button>
                    <div class="row">
                        <div class="col-12">
                            <table class="table table-hover text-center">
                                <thead>
                                    <tr>
                                        <th scope="col">ID Speaker</th>
                                        <th scope="col">Merk Speaker</th>
                                        <th scope="col">Tipe Speaker</th>
                                        <th scope="col">Harga Speaker</th>
                                        <th scope="col">Tahun Peluncuran</th>
                                    </tr>
                                </thead>
                                <tbody id="laporan_tabelspeaker">
                                    <tr>
                                        <td colspan="5">SILAHKAN RELOAD</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <script>
                        $("#laporan_reload").click(function() {
                            if (
                                ($("#login_token").val().length == 0)
                            ) {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: 'Silahkan Login Terlebih Dahulu!',
                                    confirmButtonColor: "#FF0000",
                                })
                                return;
                            }

                            datapost = {
                                "token": $("#login_token").val(),
                            };
                            $.post("/laporan", datapost)
                                .done(function(response) {

                                    if (response.status == true) {
                                        data = response.data;
                                        $('#laporan_tabelspeaker').html('');

                                        $.each(data, function(i, d) {
                                            trt = '<tr>';
                                            trt += '<td scope="row">' + d.id + '</td>';
                                            trt += '<td>' + d.merkspeaker + '</td>';
                                            trt += '<td>' + d.tipespeaker + '</td>';
                                            trt += '<td>' + d.harga + '</td>';
                                            trt += '<td>' + d.tahun + '</td>';
                                            trt += '</tr>';

                                            $('#laporan_tabelspeaker').append(trt);
                                        });
                                    } else {
                                        Swal.fire({
                                            icon: 'error',
                                            title: response.informasi,
                                            confirmButtonColor: "#FF0000",
                                        })
                                    }

                                })
                        });
                    </script>
                </div>

                <div class="container-fluid" id="chapus">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-6">
                            <div class="form-group row">
                                <label for="usernamse" class="col-3">ID Speaker</label>
                                <div class="col-9">
                                    <input type="number" id="hapus_idspeaker" class="form-control" placeholder="Masukkan ID Speaker">
                                    <small class="form-text text-muted">Silahkan Masukan ID Speaker Yang Mau Dihapus</small>
                                </div>
                            </div>
                            <div class="form-group row justify-content-md-center">
                                <button type="button" id="hapus_simpan" class="btn  btn-danger btn-block col-6">Hapus Data Speaker</button>
                            </div>
                        </div>
                    </div>

                    <script>
                        $("#hapus_simpan").click(function() {
                            if (
                                ($("#login_token").val().length == 0) ||
                                ($("#hapus_idspeaker").val().length == 0)
                            ) {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Data Belum Diisi Lengkap',
                                    confirmButtonColor: "#FF0000",
                                })
                                return;
                            }

                            datapost = {
                                "token": $("#login_token").val(),
                                "idspeaker": $("#hapus_idspeaker").val(),
                            };

                            $.post("/hapus", datapost)
                                .done(function(response) {
                                    if (response.status == true) {
                                        $("#hapus_idspeaker").val('');
                                        Swal.fire({
                                            icon: 'success',
                                            title: "Berhasil Menghapus",
                                            confirmButtonColor: "#00ff99",
                                        });
                                    } else {
                                        Swal.fire({
                                            icon: 'error',
                                            title: response.informasi,
                                            confirmButtonColor: "#FF0000",
                                        });
                                    }

                                })
                        });
                    </script>
                </div>
            </div>
        </div>
        <!-- End of Content Wrapper -->
        <script>
            $(document).ready(function() {
                $('.loginmenu').hide();
                $('.container-fluid').hide();
                $('.nn').hide();
                $('#clogin').show();
                $('#nlogin').show();

                $('#menulogin').click(function() {
                    $('.container-fluid').hide();
                    $('.nn').hide();
                    $('#clogin').show();
                    $('#nlogin').show();

                });
                $('#menutambah').click(function() {
                    $('.container-fluid').hide();
                    $('.nn').hide();
                    $('#ctambah').show();
                    $('#ntambah').show();
                });
                $('#menulaporan').click(function() {
                    $('.container-fluid').hide();
                    $('.nn').hide();
                    $('#claporan').show();
                    $('#nlaporan').show();
                });
                $('#menuhapus').click(function() {
                    $('.container-fluid').hide();
                    $('.nn').hide();
                    $('#chapus').show();
                    $('#nhapus').show();
                });
            });
        </script>

</body>


<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/chart-area-demo.js"></script>
<script src="js/demo/chart-pie-demo.js"></script>

</html>