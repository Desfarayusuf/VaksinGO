<?php

function head_generate($pagename)
{
    echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
    echo '<title>';
    echo $pagename;
    echo ' | VaksinGOecho </title>';
    echo '<link rel="stylesheet" href="css/bootstrap.min.css">';
    echo '<link rel="stylesheet" href="css/style.css">';
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">';
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';
    echo '<link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display" rel="stylesheet">';
}
