<?php

    session_start();
    include '../models/connectToDb.php';
    include '../models/MainModel.php';
    include "../models/OhunEtutu.models.php";

    $ohunEtutu = new OhunEtutu();