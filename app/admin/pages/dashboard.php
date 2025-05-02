<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1 style="font-family: 'Quicksand', sans-serif; font-weight: bold;">
            Dashboard
            <small>
                <script type='text/javascript'>
                    var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
                    var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
                    var date = new Date();
                    var day = date.getDate();
                    var month = date.getMonth();
                    var thisDay = date.getDay(),
                        thisDay = myDays[thisDay];
                    var yy = date.getYear();
                    var year = (yy < 1000) ? yy + 1900 : yy;
                    document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
                    //
                </script>
            </small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="alert alert-secondary" style="color: #383d41; background-color: #e2e3e5; border-color: #d6d8db;">
            <h4 style="font-family: 'Quicksand', sans-serif; font-weight: bold;"><i class="fa fa-info-circle"></i> Informasi</h4>
            Silahkan menggunakan menu yang tersedia untuk mengelola data pada perpustakaan
        </div>
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <?php
                        include "../../config/koneksi.php";

                        $query_anggota = mysqli_query($koneksi, "SELECT count(id_user) AS jumlah FROM user WHERE role = 'Anggota'");
                        $row_anggota = mysqli_fetch_array($query_anggota);
                        ?>
                        <h3><?= $row_anggota['jumlah']; ?></h3>

                        <p>Anggota</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <a href="anggota" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <?php
                        include "../../config/koneksi.php";

                        $query_buku = mysqli_query($koneksi, "SELECT count(id_buku) AS jumlah FROM buku");
                        $row_buku = mysqli_fetch_array($query_buku);
                        ?>
                        <h3><?= $row_buku['jumlah']; ?></h3>

                        <p>Buku</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-book"></i>
                    </div>
                    <a href="data-buku" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <?php
                        include "../../config/koneksi.php";

                        $query_peminjaman = mysqli_query($koneksi, "SELECT count(id_peminjaman) AS jumlah FROM peminjaman");
                        $row_peminjaman = mysqli_fetch_array($query_peminjaman);
                        ?>
                        <h3><?= $row_peminjaman['jumlah']; ?></h3>

                        <p>Peminjaman</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-user-plus"></i>
                    </div>
                    <a href="data-peminjaman" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner">
                        <?php
                        include "../../config/koneksi.php";

                        // Change this query to use the peminjaman table instead
                        $query_pengembalian = mysqli_query($koneksi, "SELECT count(id_peminjaman) AS jumlah FROM peminjaman WHERE tanggal_pengembalian > 0");
                        $row_pengembalian = mysqli_fetch_array($query_pengembalian);
                        ?>
                        <h3><?= $row_pengembalian['jumlah']; ?></h3>

                        <p>Pengembalian</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-user-times"></i>
                    </div>
                    <a href="data-peminjaman" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->
        <div class="row">
            <!-- -->
            <?php
            include "../../config/koneksi.php";
            $query = mysqli_query($koneksi, "SELECT * FROM identitas");
            $row = mysqli_fetch_assoc($query);

            ?>

            <img src="../../assets/dist/img/uksw-app.png" width="120px" height="120px" style="display: block; margin-left: auto; margin-right: auto; margin-top: 30px; margin-bottom: -20px;">

            <h2 class="text-center" style="font-family: Quicksand, sans-serif;">Perpustakaan Cihuy</h2>
            <p class="text-center">Alamat : Jl. Mana aja yang penting bisa.</p>

        </div>
    </section>
</div>