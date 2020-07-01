<?php
if(isset($_GET['id'])){

    try{
        require_once("connect.php");

        $polaczenie = new mysqli($host, $user, $password, $name);

        if($polaczenie->connect_errno != 0){
            throw new Exception(mysqli_connect_error());
        }
        else{

            $id = $_GET['id'];

            if($polaczenie->query("UPDATE komentarze SET banned=0 WHERE id='$id'"))

                $polaczenie->close();
        }
    }
    catch(Excample $error){
        echo "Ошибка!";
    }

}
else{
    header('Location: index.php');
}

header('Location: index.php');
?>