<?php


    if (!empty($_GET['q'])){
        $keyword = $_GET('q');

        echo $keyword;

        $filmler = array_filter($filmler, function($film) use ($keyword) {
            return stristr($film['baslik'], $keyword);
        });

    }

?>