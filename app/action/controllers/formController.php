<?php
/**
 * Created by PhpStorm.
 * User: Lelouch
 * Date: 27/07/2018
 * Time: 15:39
 */

define("LIBELLE_ACTION","libelleAction");
include_once "../model/autoload.php";
/** @global  $con,$manager */
$con = PDOFactory::getDbConnexion();
$manager = new ActionManager($con);

/**description  */
//ajout d'une action
if (isset($_POST['libelleAction'])&& isset($_POST['add'])){
    $action  = new Action("",$_POST['libelleAction']);
   if($manager->insert($action)) echo "Success";
   else echo "failed";
}

/**  */
//modification d'une action

if (isset($_POST['libelleAction'])&& isset($_POST['idAction'])&& isset($_POST['alter'])){
    $action  = new Action($_POST['idAction'],$_POST['libelleAction']);
    if($manager->update($action,$_POST['libelleAction'])) echo "Success";
    else echo "failed";
}


//suppression d'une action
if (isset($_POST['idAction'])&& isset($_POST['del'])){
    if($manager->delete($_POST['idAction'])) echo "Success";
    else echo "failed";
}

//listing des actions
if (isset($_GET['listAction'])){
    $start = -1;
    $count = -1;
    if (isset($_GET['start'])) $start = $_GET['start'];

    if(isset($_GET['count'])) $count = $_GET['count'];

    $list = $manager->select($start,$count);
}

//affichage et description d'une action
if (isset($_GET['desc'])&& isset($_GET['idAction'])){
    $c = "idAction=".$_GET['idAction'];
    $list = $manager->select(-1,-1,$c);
}