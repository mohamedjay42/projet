<?php

function openDB()
{
    global $dbLink;
    $dbLink = mysqli_connect(DB_HOST, DB_USER, DB_PWD, DB_BASE)
        or die("Impossible de se connecter : " . mysqli_connect_error());
}

function closeDB()
{
    global $dbLink;
    mysqli_close($dbLink);
}
function getModelLogin()
{

}

function getModelDashboard()
{

}

function getModelPlanningUpdate()
{

}

function getModelMessage()
{

}

function getModelGestionRole()
{

}

function getModelValidHoliday()
{

}

function getModelUserHoliday()
{

}

function getModelUserPlanning()
{

}

function getModelChefValidHoliday()
{

}

function getModelForgot()
{
  
}
