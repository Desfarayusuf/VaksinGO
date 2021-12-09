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


                echo '<div class="my-5">';
                    echo '<div class="d-flex flex-row">';
                        echo '<div class="w-50 my-auto">';
                            echo '<h1 class="display-5 orange">'.$hospital_name.'</h1>';
                            echo '<p>'.$hospital_address.'</p>';
                            echo '<p>Quota: '.$hospital_quota.' </p>';
                        echo '</div>';
                        echo '<div class="mx-auto">';
                            echo '<img src="data:image/jpeg;base64,'.base64_encode($hospital_image).' alt="'.$hospital_name.'">';
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

</html>