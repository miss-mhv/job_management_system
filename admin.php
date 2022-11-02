<?php
/**
 * Created by PhpStorm.
 * User: Miss Mhv
 * Date: 23/08/2017
 * Time: 14:47
 */
session_start();
include 'global/header_admin.php';

if(!empty($_SESSION['id']))
{
    //echo $_SESSION['id'].$_SESSION['pseudo'].$_SESSION['email'];
}
include 'modules/admin/vues/index.php';
include 'global/footer_admin.php';