<?php

    session_start();
    include '../models/connectToDb.php';
    include '../models/MainModel.php';
    include "../models/Ikilo.models.php";

    $ikilo = new Ikilo();