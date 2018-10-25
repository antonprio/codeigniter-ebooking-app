<?php
$session_id = $this->session->userdata('username');
$this->load->helper('text');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Favicons-->
        <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>assets/home/assets/img/favicon/apple-touch-icon-152x152.png">
        <meta name="msapplication-TileColor" content="#FFFFFF">
        <meta name="msapplication-TileImage" content="<?php echo base_url(); ?>assets/home/assets/img/favicon/mstile-144x144.png">
        <link rel="icon" href="<?php echo base_url(); ?>assets/home/assets/img/favicon/favicon-32x32.png" sizes="32x32">
        <title>Laporan Kegiatan</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Materialize core CSS -->
        <link href="<?php echo base_url(); ?>assets/home/materialize/css/materialize.css" rel="stylesheet" type="text/css">
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="assets/js/html5shiv.js"></script>
            <script src="assets/js/respond.min.js"></script>
        <![endif]-->
        <link href="<?php echo base_url(); ?>assets/home/template.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <header>
            <nav class="top-nav">
                <div class="container">
                    <div class="nav-wrapper">
                        <a class="page-title">Management</a>
                    </div>
                </div>
            </nav>
            <div class="container">
                <a href="#" data-activates="nav-mobile" class="button-collapse top-nav full"><i class="mdi-navigation-menu"></i></a>
            </div>
            <ul id="nav-mobile" class="side-nav fixed" style="width: 240px;">
                <li class="logo">
</li>
                <li class="bold">
                    <a href="<?php echo site_url('manage/dashboard') ?>" class="waves-effect waves-teal">Home</a>
                </li>
                <li class="bold">
                    <a href="<?php echo site_url('manage/report_perawatan') ?>" class="waves-effect waves-teal">Laporan Perawatan Gedung</a>
                </li>
                <li class="bold">
                    <a href="<?php echo site_url('manage/report_kegiatan') ?>" class="waves-effect waves-teal">Laporan Kegiatan Gedung</a>
                </li>
                <li class="bold">
                    <a href="<?php echo site_url('admin/log_out') ?>" class="waves-effect waves-teal">Sign Out</a>
                </li>
            </ul>
            <div class="container">
                <div class="row">
                    <div class="col s5">
                    <form action="<?php echo site_url('manage/report_kegiatan') ?>">
                        <table>
                            <tr>
                                <td><b>Periode</b></td>
                                <td>
                                    <input type="date" name="start_date" id="start_date">
                                </td>
                                <td><b>Hingga</b></td>
                                <td>
                                    <input type="date" name="end_date" id="end_date">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="submit" value="Proses" name="submit" onclick="return validate();">
                                </td>
                            </tr>
                        </table>
                    </form>
                    </div>
                </div>
            </div>
            <main class="">
</main>
        <!-- Materialize core JavaScript -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="<?php echo base_url(); ?>assets/home/assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/home/materialize/js/materialize.js"></script>
        <script src="<?php echo base_url(); ?>assets/home/index.js"></script>
        <script type="text/javascript">
            function validate() {
                var startDate = document.getElementById("start_date").value;
                var endDate = document.getElementById("end_date").value;
                if(startDate == "") {
                    alert("Tanggal Awal Periode Tidak Boleh Kosong");
                    return false;
                } else if(endDate == "") {
                    alert("Tanggal Akhir Periode Tidak Boleh Kosong");
                    return false;
                }
            }
        </script>
    </body>
</html>