<?php

include "db-connection.php"

$sql="SELECT id, imie, nazwisko, wiadomosc FROM wiadomosc"
$result=mysqli_query($db,$sql);

if(mysqli_num_rows($result)>0){
    while($row=msqli_fetch_assoc($result)){
        echo "id: ".$row["id"]. "Name: ".$row["imie"]. "Surname".$row["nazwisko"]. "Text: ".$row["wiadomosc"]
    }
}
else{
    echo "Brak danych";
}
mysqli_close($db);
?>