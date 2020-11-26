<?php

    session_start();
    include '../models/connectToDb.php';
    include '../models/MainModel.php';
    include '../models/Company.models.php';
    include "../models/Officer.models.php";
    include "../models/OduIfa.models.php";
    include "../models/Ikilo.models.php";
    include "../models/OhunEtutu.models.php";
    include "../models/Receipt.models.php";

    $officer = new Officer();
    $company = new Company();
    $oduIfa = new OduIfa();
    $ikilo = new Ikilo();
    $ohunEtutu = new OhunEtutu();
    $receipt = new Receipt();