<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include('head.php');
    head_generate('QUOTA');
    ?>
</head>

<body>
    <?php
    include("navbar.php");
    ?>

    <section class="container">
        <div class="my-5 text-center">
            <h1 class="orange display-5">
                QUOTA
            </h1>
        </div>

        <div class="my-5">
            <div class="d-flex flex-row">
                <div class="w-50 my-auto">
                    <h1 class="display-5 orange">Rumah Sakit Nasional Diponegoro</h1>
                    <p>Alamat : Jl. Professor Haji Soedarto S.H, Tembalang, Kec. Tembalang, Kota Semarang, Jawa Tengah 50275</a>
                    <p>Quota : 178 </p>
                </div>
                <div class="mx-auto">
                    <img src="img/RSND.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="my-5">
            <div class="d-flex flex-row">
                <div class="w-50 my-auto">
                    <h1 class="display-5 orange">Rumah Sakit Umum Pusat Dr. Kariadi Semarang</h1>
                    <p>Alamat : Jl. DR. Sutomo No.16, Randusari, Kec. Semarang Sel., Kota Semarang, Jawa Tengah 50244</a>
                    <p>Quota : 123 </p>
                </div>
                <div class="mx-auto">
                    <img src="img/RSK.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="my-5">
            <div class="d-flex flex-row">
                <div class="w-50 my-auto">
                    <h1 class="display-5 orange">Rumah Sakit Umum William Booth</h1>
                    <p>Alamat : Jl. Letnan Jenderal S. Parman No.5, Petompon, Kec. Gajahmungkur, Kota Semarang, Jawa Tengah 50237</a>
                    <p>Quota : 123 </p>
                </div>
                <div class="mx-auto">
                    <img src="img/RSUWB.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="my-5">
            <div class="d-flex flex-row">
                <div class="w-50 my-auto">
                    <h1 class="display-5 orange">Rumah Sakit Permata Medika</h1>
                    <p>Alamat : Jl. Raya Mr. Moch Ichsan No.93-97, Ngaliyan, Kec. Ngaliyan, Kota Semarang, Jawa Tengah 50181</a>
                    <p>Quota : 123 </p>
                </div>
                <div class="mx-auto">
                    <img src="img/RSMP.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="my-5">
            <div class="d-flex flex-row">
                <div class="w-50 my-auto">
                    <h1 class="display-5 orange">Rumah Sakit RS Telogorejo</h1>
                    <p>Alamat : Jl. Kh Ahmad Dahlan, Pekunden, Kec. Semarang Tengah, Kota Semarang, Jawa Tengah 50134</a>
                    <p>Quota : 123 </p>
                </div>
                <div class="mx-auto">
                    <img src="img/RST.jpg" alt="">
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="my-5">
            <div class="d-flex flex-row">
                <div class="w-50 my-auto">
                    <h4 class="display-5 orange">Check Hospital Vaccine Quota</h4>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search" aria-label="Hospital List" aria-describedby="basic-addon2">
                    <div class="w-50">
                        <input class="btn btn-primary" type="button" value="Search">
                    </div>
                </div>
            </div>
    </section>


</body>

<?php
include('footer.php');
?>

</html>