<?php

    session_start();
    include '../models/connectToDb.php';
    include '../models/MainModel.php';
    include "../models/Officer.models.php";

    $officer = new Officer();