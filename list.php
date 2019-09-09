<?php
session_start();
$module="list";
include("./template/header.php");
include("./template/menu.php");
if($_SESSION['admin']==="Y"){
    $array=["admin1", "admin2", "admin3", "admin4", "admin5", "admin6", "admin6", "admin7", "admin8", "admin9", "admin10"];
} else if ($_SESSION['admin']==="N"){
    $array=["user1", "user2", "user3", "user4", "user5", "user6", "user7", "user8", "user9", "user10"];
}
?>
<div class="container">
    <div class="offset-md-2 col-md-8">
        <div class="row">
            <div class="offset-md-3 col-md-6 text-center">
                <table>
                    <tr>
                        <th><strong>Nr</strong></th>
                        <th><strong>Name</strong></th>
                    </tr>
                    <?php
                        $x=1;
                        foreach($array as $value){
                            if(isset($_GET['search'])){
                                if($value===$_GET['search']){
                                    $valuesearch=$_GET['search'];
                                }
                            } else {
                                echo "
                                    <tr>
                                        <td>".$x."</td>
                                        <td>".$value."</td>
                                    </tr>
                                ";
                                $x++;
                            }
                        }
                        if(isset($valuesearch)){
                            echo "
                            <tr>
                                <td>result : </td>
                                <td>".$valuesearch."</td>
                            </tr>
                        ";
                        }
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>