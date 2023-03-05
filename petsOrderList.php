<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pets Order List</title>
</head>
<style>
    table {
        margin: 0 auto;
    }

    table,th,td {
        border: solid 1px black;
    }

    th,td {
        padding: 8px 20px;
        text-align:center;
    }

    th {
        text-transform: uppercase;
        font-weight:bold;
        font-family: Arial;
    }

    td a {
        text-transform:uppercase;
        font-weight:bolder;
        text-decoration:none;
    }

    td a:hover {
        color:red;
        text-decoration:underline;
    }
</style>
<body>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Catagory</th>
            <th>Date</th>
            <th>Delete</th>
        </tr>
        <?php
        require_once "dbconnection.php";
        $select=$conn->prepare("SELECT * FROM `pets`");
        $select->execute();
        if($select->rowCount()){
            $petsOrderList=$select->fetchAll(PDO::FETCH_ASSOC);
            foreach($petsOrderList as $list){
                echo "<tr>
                <td>".$list['name']."</td>
                <td>".$list['email']."</td>
                <td>".$list['catagory']."</td>
                <td>".$list['date']."</td>
                <td><a href='delData.php?delID=".$list['id']."'>Delete</a></td>
                </tr>";
            }
        }
        ?>
    </table>
</body>
</html>
