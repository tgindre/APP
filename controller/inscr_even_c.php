<?php
include('../model/model.php');
include('../model/modif_bdd.php');
include('../model/select_bdd.php');
include('../model/cree_bdd.php');
$i=$_POST['numero'];
participer_even($_SESSION['id'],$_SESSION['id_even'.$i]);

header('Location: ../vue/even_v.php?nb='.$i);
?>