<<<<<<< Updated upstream
<!DOCTYPE html>
<html lang="en">

<head>
  <?php require_once './templates/metatag.php' ?>
  <?php
    include('head.php');
    head_generate('QUOTA');
    ?>

</head>

<body>

<?php
    include("navbar.php");
    ?>


  
  <br>
  <br>

  



  <section class="container">
        <div class="my-5 text-center">
            <h1 class="orange display-5">
                QUOTA
            </h1>
        </div>
        <br>
        <br>

            
<!-- Rumah Sakit -->
<main>

<div class="center">
  <div id="apainibro" class="container2">
    <h2>Sedang menampilkan produk....</h2>

    <h2>Jika produk tidak muncul. Silakan refresh halaman ini.</h2>

  </div>
</div>



</main>
<!-- Rumah Sakit -->
        <br>
        <br>
        <div class="my-5">
            <div class="d-flex flex-row">
                <div class="w-50 my-auto">
                    <h4 class="display-5 orange">Check Hospital Vaccine Quota</h4>
                </div>
                <div class="input-group mb-3">
                    <input id="search_hospital" type="text" class="form-control" placeholder="Search" aria-label="Hospital List" aria-describedby="basic-addon2">
                    <div class="w-50">
                        <input class="btn btn-primary" type="button" value="Search">
                    </div>
                </div>
            </div>

    </section>



  <br>
  <br>
  <br>

  <?php scriptjs() ?>

  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-172120813-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-172120813-1');
  </script>

<?php
include('footer.php');
?>

</body>

=======
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

        <?php
        include('config.php');
        $query = $db->query('SELECT * FROM hospital');
        if (!$query) {
            die($db->errorInfo());
        }
        else {
            while ($row = $query->fetchObject()){
                $hospital_name = $row->name;
                $hospital_address = $row->address;
                $hospital_quota = $row->vaccine_quota;
                $hospital_image = $row->image;

// Rumahsakit
                echo '<div class="my-5">';
                    echo '<div class="d-flex flex-row">';
                        echo '<div class="w-50 my-auto">';
                            echo '<h1 class="display-5 orange">'.$hospital_name.'</h1>';
                            echo '<p>'.$hospital_address.'</p>';
                            echo '<p>Quota: '.$hospital_quota.' </p>';
                        echo '</div>';
                        echo '<div class="mx-auto">';
                            echo '<img src="data:image/jpeg;base64,'.base64_encode($hospital_image).'" alt="'.$hospital_name.'">';
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
            }
        }
        ?>
    </section>


</body>

<?php
include('footer.php');
?>

>>>>>>> Stashed changes
</html>