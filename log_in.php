<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Answer</title>
</head>
<body>
    <section>
        <?php
            include "db-connection.php";

            if(isset($_POST['login'], $_POST['haslo'])){
                $username=$_POST['login'];
                $password=$_POST['haslo'];

                $username=stripcslashes($username);
                $password=stripcslashes($password);

                $sql="SELECT * FROM użytkownicy where login='$username' and haslo='$password'";
                $result=mysqli_query($db, $sql);
                $row=mysqli_fetch_assoc($result);
                $count=mysqli_num_row($result);

                if($count==1){
                    $_SESSION["name"]=$username
                    echo "Jesteś zalogowany/a";
                }
                else{
                    echo "Błędny login lub hasło";
                }
            }            
        ?>
    </section>

</body>
</html>