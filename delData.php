<?php
require_once "dbconnection.php";
if(isset($_GET['delID'])){
    $del=$conn->prepare("DELETE FROM `pets` where id=:delid");
    $del->bindParam(':delid',$_GET['delID']);
    $del->execute();
    if($del->rowCount()){
        echo "<script>
        alert ('Data Deleted Successfully!!');
        window.location.href='petsOrderList.php';
        </script>";
    }
    else{
        echo "error";
    }
}
?>

<?php
require_once "dbconnection.php";
if(isset($_GET['DELid'])){
    $del=$conn->prepare("DELETE FROM `food` where id=:Delid");
    $del->bindParam(':Delid', $_GET['DELid']);
    $del->execute();
    if($del->rowCount()){
        echo "<script>
        alert ('DELETED SUCCESSFULLY !!');
        window.location.href='foodOrderList.php';
        </script>";
    }else{
        echo "error";
    }
}
?>