<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="<?= url('assets/images/logokecillanal.png') ?>" type="image/x-icon">
    <title>STRUKTUR ORGANISASI</title>

    <style>
        body {
            margin: 0; /* Remove default body margin */
            background-color: #4E6766; /* Set background color */
            color: white; /* Set text color */
        }

        /* Gaya dasar untuk bagan organisasi */
        .org-chart {
            font-family: 'Arial', sans-serif;
            margin: 20px 0;
            padding: 30px; /* Padding untuk ruang di sekitar struktur organisasi */
        }

        .board {
            display: flex;
            flex-direction: column;
            align-items: center; /* Pusatkan kolom ke tengah */
            position: relative; /* Memastikan posisi relatif untuk mengatur garis */
        }

        .columnOne {
            list-style: none;
            display: flex;
            flex-direction: column; /* Mengatur orientasi kolom */
            align-items: center; /* Pusatkan item dalam kolom */
        }

        .highlight {
            background-color: #e0e0e0;
            margin-right:5px;
            margin-left:5px;
            padding: 10px;
            border-radius: 5px;
            display: block;
            text-align: center;
            margin-bottom: 10px; /* Jarak antar kotak */
            position: relative; /* Memastikan posisi relatif untuk mengatur border */
            z-index: 1; /* Mengatur z-index agar ada di atas garis */
        }

        /* Gaya untuk gambar profil */
        .highlight img {
            border-radius: 50%;
            margin-bottom: 5px;
        }

        .columnTwo {
            display: flex;
            flex-wrap: wrap; /* Baris baru saat tidak cukup tempat */
            justify-content: space-between; /* Memberikan ruang di antara item */
            position: relative; /* Memastikan posisi relatif untuk mengatur garis */
            z-index: 0; /* Mengatur z-index agar berada di bawah garis */
        }

        .columnTwo div {
            flex-basis: calc(14.2857% - 10px); /* Lebar item 14.2857% dan mengurangkan margin */
            margin-bottom: 10px; /* Jarak antar item */
            position: relative; /* Memastikan posisi relatif untuk mengatur garis */
        }

        /* Gaya untuk garis vertikal dan horizontal */
        svg {
            position: static;
            top: 0;
            left: 0;
            z-index: 2; /* Mengatur z-index agar garis berada di atas item dan latar belakang */
        }

        line {
            stroke: #000; /* Warna garis */
            stroke-width: 2px; /* Lebar garis */
        }

        .org-chart {
            margin: 0px 0; /* Adjust the margin-top to move the organizational chart upward */
            /* Other styles remain the same */
        }

        /* .garis-horizontal {
            border-top: solid 3px #000;
            z-index: 0;
            top: 150px;
            left: 70px;
            position: relative;
            width: 90%;
        } */

        /* .garis-vertical {
            border-left: solid 3px #000;
            z-index: 0;
            top: 150px;
            left: 50%;
            position: relative;
            height: 80px;
            width: 0;
        } */
        .highlight {
            border: 2px solid blue;
            padding: 5px;
            cursor: pointer;
        }

        .highlight:hover {
            background-color: #f0f0f0;
        }

        /* Additional styles for images */
        #imageContainer {
            text-align: center;
            margin-top: 20px;
        }

        #personImage {
            max-width: 100%;
            max-height: 200px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

         /* Your existing styles here */

</style>
</head>

<?php
use App\Models\Petinggi_Model;
$data_petinggi = Petinggi_Model::all();
$komandan = Petinggi_Model::find(8);
?>

<body>

    <section class="privacy-policy ptb-100 org-chart">
        <div class="container">
            <h1 style="text-align: center;">Struktur Organisasi</h1>
            <h1 style="text-align: center;">Pangkalan Utama TNI AL Banyuwangi</h1>
        </div>
        <div class="garis-vertical"></div>
        <div class="garis-horizontal"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <figure class="org-chart cf">
                        <div class="board">
                            <ul class="columnOne director">
                                <img src="<?= $komandan['gambar'] ?>" style="widht:100%;height:150px"> <br>
                                <li>
                                    <span class="highlight" id="box1" style="color: black;">
                                        <strong>Komandan Lanal Banyuwangi</strong>
                                        <br>Letkol Laut (P) Indra Nusha R</br>
                                    </span>
                                </li>
                            </ul>
                            <div class="columnTwo">
                                <?php 
                                foreach ($data_petinggi as $v) :
                                if($v['id'] != 8) :
                                ?>
                                <span class="highlight">
                                    <img src="<?= $v['gambar'] ?>" style="widht:100%;height:100px"> <br>
                                    <div style="color: black;">
                                        <strong><?= $v['judul_petinggi'] ?></strong>
                                        <br> <?= $v['isi'] ?></br>
                                    </div>
                                </span>
                                <?php 
                                endif;
                                endforeach; 
                                ?>
                            </div>
                        </div>
                    </div>
                </figure>
            </div>
        </div>
    </div>
</section>

</body>
</html>