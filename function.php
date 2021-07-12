<?php

use App\Database\DBController;
use App\Repository\RepositoryProduct;

$db = DBController::getConnection();

$repositoryProduct = new RepositoryProduct($db);
