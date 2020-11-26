<?php

    session_start();
    include '../models/connectToDb.php';
    include '../models/MainModel.php';
    include "../models/OduIfa.models.php";

    $oduIfa = new OduIfa();