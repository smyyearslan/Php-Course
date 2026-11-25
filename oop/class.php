<?php

    class Student{

        public $stname;
        public $stage;
        public $stid;
    }

    $student1 = new Student();

    $student1->stname = "Sena";
    $student1->stage = 17;
    $student1->stid = 216;

    $student2 = new Student();

    $student2->stname = "Burak";
    $student2->stage = 19;
    $student2->stid = 325;

    echo $student1->stname." ".$student1->stage." ".$student1->stid;
    echo "<br>";
    echo $student2->stname." ".$student2->stage." ".$student2->stid;

?>