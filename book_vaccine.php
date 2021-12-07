<?php
require_once('auth.php');
?>

<?php

if (isset($_POST['login'])) {
    $user_id = $_SESSION['user']['id'];
    $nik = filter_input(INPUT_POST, 'nik', FILTER_SANITIZE_STRING);
    $address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);
    $vaccine = filter_input(INPUT_POST, 'vaccine', FILTER_SANITIZE_STRING);
    $vaccine_id = "SELECT * FROM vaccine_type WHERE name == $vaccine";
    $hospital = filter_input(INPUT_POST, 'hospital', FILTER_SANITIZE_STRING);
    $hospital_id = "SELECT * FROM hospital WHERE name == $hospital";
    $date_created = date("Y-m-d");

    $sql = "INSERT INTO vaccine_schedule (user_id,nik,address,vaccine_id,hospital_id,) VALUES (':user_id',':nik',':address',':vaccine_id',':hospital_id',':date_created')";
    $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(
        ":user_id" => $user_id,
        ":nik" => $nik,
        ":address" => $address,
        ":vaccine" => $vaccine_id,
        ":hospital" => $hospital_id,
        ":date_created" => $date_created,
    );

    $stmt->execute($params);

    $result = $stmt->fetch(PDO::FETCH_ASSOC);

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

                <form action="" method="POST">

                    <div class="form-group">
                        <label for="nik">NIK</label>
                        <input class="form-control" type="text" name="NIK" placeholder="NIK" />
                    </div>

                    <div class="form-group">
                        <label for="address">Address</label>
                        <input class="form-control" type="text" name="address" placeholder="Address" />
                    </div>

                    <div class="form-group">
                        <label for="vaccine">Vaccine</label><br>
                        <?php
                        for ($i = 0; $i < "LENGTH()"; $i++) {
                            echo '<input type="radio" id="$vaccine" name="vaccine" value="$vaccine">';
                            echo '<label for="$vaccine">$vaccine</label>';
                        }
                        ?>
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
                            <option value="rsnd">RS Nasional Diponegoro</option>
                            <option value="kariadi">RSUP Dr. Kariadi</option>
                            <option value="william">RSU William Booth</option>
                            <option value="permata-medika">RS Permata Medika</option>
                        </select>
                    </div>

                    <input type="submit" class="btn btn-primary btn-block" name="login" value="Masuk" />

                </form>

            </div>


        </div>
    </div>

</body>

</html>