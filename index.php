<?php
require_once('auth.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include('head.php');
    head_generate('HOME');
    ?>
</head>

<body>
    <?php
    include("navbar.php");
    ?>

    <section class="container">
        <div class="mt-5">
            <div class="d-flex flex-row">
                <div class="my-auto">
                    <h1 class="display-3 bold">Get your <span class="emp">vaccine</span>,</br>get your health.</h1>
                    <p class="lead">Get your body vaccinated, now! Available in Semarang.</p>
                    <a class="btn btn-primary" href="book_vaccine.php">Get Vaccinated</a>
                </div>
                <div class="hero">
                    <img src="img/hero.png" alt="">
                </div>
            </div>
        </div>

        <div class="my-5">
            <div class="d-flex flex-row">
                <div class="w-50 my-auto">
                    <h1 class="display-5 orange">Sinovac</h1>
                    <p class="lead">CoronaVac, also known as the Sinovac COVID-19 vaccine, is an inactivated virus COVID-19 vaccine developed by the Chinese company Sinovac Biotech. It was Phase III clinical trialled in Brazil, Chile, Indonesia, the Philippines, and Turkey and relies on traditional technology similar to other inactivated-virus COVID-19 vaccines, such as the Sinopharm BIBP vaccine, another Chinese vaccine, and Covaxin, an Indian vaccine.</p>
                </div>
            </div>
        </div>

        <div class="my-5">
            <div class="d-flex flex-row-reverse">
                <div class="w-50 my-auto">
                    <h1 class="display-5 orange">AstraZenica</h1>
                    <p class="lead">Vaxzevria, also known as AstraZeneca is a vaccine for preventing coronavirus disease 2019 (COVID-19) in people aged 18 years and older. COVID-19 is caused by SARS-CoV-2 virus. Vaxzevria is made up of another virus (of the adenovirus family) that has been modified to contain the gene for making a protein from SARS-CoV-2.</p>
                </div>
                <div class="mx-auto">
                    <img src="img/syringe.png" alt="">
                </div>
            </div>
        </div>

        <div class="my-5">
            <div class="d-flex flex-row">
                <div class="w-50 my-auto">
                    <h1 class="display-5 orange">Pfizer</h1>
                    <p class="lead">The Pfizer–BioNTech COVID-19 vaccine, sold under the brand name Comirnaty, is an mRNA-based COVID-19 vaccine developed by the German biotechnology company BioNTech and for its development collaborated with American company Pfizer, for support with clinical trials, logistics, and manufacturing.</p>
                </div>
            </div>
        </div>

        <div class="my-5">
            <div class="d-flex flex-row-reverse">
                <div class="w-50 my-auto">
                    <h1 class="display-5 orange">Sinopharm</h1>
                    <p class="lead">The Sinopharm BIBP COVID-19 vaccine, also known as BBIBP-CorV, the Sinopharm COVID-19 vaccine, or BIBP vaccine, is one of two inactivated virus COVID-19 vaccines developed by Sinopharm's Beijing Institute of Biological Products (sometimes written as Beijing Bio-Institute of Biological Products, resulting in the two different acronyms BBIBP and BIBP for the same vaccine).</p>
                </div>
            </div>
        </div>


        <div class="my-5">
            <div class="text-center">
                <h3 class="display-5 orange">Call Center</h3>
                <h1 class="display-5 orange">123-456789</h1>
            </div>
        </div>

    </section>

</body>

<?php
include("footer.php")
?>

</html>