<?php

    session_start();
    include '../models/connectToDb.php';
    include '../models/MainModel.php';
    include "../models/Company.models.php";

    $company = new Company();