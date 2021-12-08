<?php
require_once('auth.php');
?>

<?php

if (isset($_POST['login'])) {
    $user_id = $_SESSION['user']['id'];
    $nik = $_POST['nik'];
    // filter_input(INPUT_POST, 'nik', FILTER_SANITIZE_STRING);
    $address = $_POST['address'];
    // filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);
    $vaccine = $_POST['vaccine'];
    // filter_input(INPUT_POST, 'vaccine', FILTER_SANITIZE_STRING);
    // $vaccine_id = "SELECT * FROM vaccine_type WHERE id = $vaccine";
    $hospital = $_POST['hospital'];
    // filter_input(INPUT_POST, 'hospital', FILTER_SANITIZE_STRING);
    // $hospital_id = "SELECT * FROM hospital WHERE name = $hospital";
    $date_created = date("Y-m-d");

    $sql = "INSERT INTO vaccine_schedule (user_id,nik,address,vaccine_id,hospital_id) VALUES (:user_id, :nik, :address, :vaccine_id, :hospital_id)";
    $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(
        ":user_id" => $user_id,
        ":nik" => $nik,
        ":address" => $address,
        ":vaccine_id" => $vaccine,
        ":hospital_id" => $hospital
    );

    $result = $stmt->execute($params);

    // $result = $stmt->fetch(PDO::FETCH_ASSOC);

    //Kondisi apakah berhasil atau tidak
    if ($result) {
        echo "Berhasil insert data";
        exit;
    } else {
        echo "Gagal insert data";
        exit;
    }
}
?>
<html>

<head>
    <?php
    include('head.php');
    head_generate('BOOK VACCINE');
    ?>
</head>


<body class="bg-light">
    <?php
    include("navbar.php");
    ?>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">

                <a href="index.php">&larr;Home</a>

                <h4>Daftar Vaksin melalui VaksinGO</h4>

                <form action="" method="POST" autocomplete="on">

                    <div class="form-group">
                        <label for="nik">NIK</label>
                        <input class="form-control" type="text" name="nik" id="nik" placeholder="NIK" />
                    </div>

                    <div class="form-group">
                        <label for="address">Address</label>
                        <input class="form-control" type="text" name="address" id="address" placeholder="Address" />
                    </div>

                    <div class="form-group">
                        <label for="vaccine">Vaccine</label><br>
                        <input type="radio" id="sinovac" name="vaccine" value="1">
                        <label for="sinovac">Sinovac</label>
                        <input type="radio" id="Pfizer" name="vaccine" value="2">
                        <label for="Pfizer">Pfizer</label>
                        <input type="radio" id="astrazenica" name="vaccine" value="3">
                        <label for="astrazenica">AstraZenica</label>
                        <input type="radio" id="sinopharm" name="vaccine" value="4">
                        <label for="sinopharm">Sinopharm</label>
                    </div>

                    <div class="form-group">
                        <label for="hospital">Choose Hospital</label><br>
                        <select id="hospital" name="hospital">
                            <option value="1">RS Nasional Diponegoro</option>
                            <option value="2">RSUP Dr. Kariadi</option>
                            <option value="3">RSU William Booth</option>
                            <option value="4">RS Permata Medika</option>
                        </select>
                    </div>

                    <input type="submit" class="btn btn-primary btn-block" name="login" value="Daftar Vaksin" />

                </form>

            </div>


        </div>
    </div>

</body>

</html>