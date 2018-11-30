
<?php

    $id = trim($id);
    $tijd = date("Y-m-d H:i:s", time());

    $conn = dbconnect ("sqli");
    $sql = "SELECT rubr_id FROM rubrieken WHERE rubriek_naam = '$rubriek';";
    $result = $conn->query($sql);
    if ($row = $result->fetch_assoc()) { $rubriekid = $row['rubr_id']; }
    dbdisconnect ("sqli", $conn);

    if (trim($id) == "") {
//        $sql = "INSERT INTO berichten (onderwerp, auteur, rubriek, geplaatst, gewijzigd) " .
//               "VALUES ('$onderwerp', '$naam', '$rubriek', '$tijd', '$tijd');";
        $sql = "INSERT INTO berichten2 (onderwerp, auteur, rubriek_id, geplaatst, gewijzigd) " .
              "VALUES ('$onderwerp', '$naam', '$rubriekid', '$tijd', '$tijd');";
        $conn->query($sql);
        dbdisconnect ("sqli", $conn);

        $sql = "SELECT id FROM berichten2 WHERE onderwerp = '$onderwerp' AND geplaatst = '$tijd';";
        $result = $conn->query($sql);
        if($row = $result->fetch_assoc()) { $ix = str_pad($row['id'], 4, '0', STR_PAD_LEFT); }
        $conn = dbconnect ("sqli");
    }
    else {
        $conn = dbconnect ("sqli");
        $ix = str_pad ($id, 4, '0', STR_PAD_LEFT);
        $sql = "UPDATE berichten2 SET onderwerp = '$onderwerp', rubriek_id = '$rubriekid', gewijzigd = '$tijd' " .
               "WHERE id = '$id';";
        $conn->query($sql);
        $conn = dbconnect ("sqli");
    }

    $filenaam = "bericht_" . $ix . ".txt";
    $inhoud = $tijd . "\n" . $naam . "\n" . $onderwerp . "\n" . $rubriek . "\n" . $bericht;
    schrijfbestand ("w", $filenaam, $inhoud, "berichten");
    phpRedirect ("index.php");

?>
