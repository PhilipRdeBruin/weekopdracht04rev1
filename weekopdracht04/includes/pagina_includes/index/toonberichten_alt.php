
<div class="berichten">

<?php
    setdefaultsorteersleutels();
    if (isset($_GET['antw']) && !isset($_SESSION['stopdel'])) {
        include 'includes/functionele_includes/index/verwijderen.php';
    } // else {
        if (isset($_SESSION['stopdel'])) { unset ($_SESSION['stopdel']); }
        if (isset($_GET['sorteer'])) { include 'includes/functionele_includes/index/sorteren.php'; }
//    }

    zoek_delete_of_update();    // in sql_functies.php
?>

    <div class="overzichtheader">
        <table id="overzichtstabelheader">
            <tr>
                <th class = "<?php echo $hrubr ?>" width="15%">Rubriek</th><th width="5%"><button id="sortrubriek" value=<?php echo $dirrubr ?> onclick="sortfunctie('sortrubriek')"><?php echo $arubr ?></button></th>
                <th class = "<?php echo $hschr ?>" width="15%">Auteur</th><th width="5%"><button id="sortauteur" value=<?php echo $dirschr ?> onclick="sortfunctie('sortauteur')"><?php echo $aschr ?></button></th>
                <th class = "<?php echo $hondw ?>" width="30.5%">Onderwerp</th><th width="5%"><button id="sortonderwerp" value=<?php echo $dirondw ?> onclick="sortfunctie('sortonderwerp')"><?php echo $aondw ?></button></th>
                <th class = "<?php echo $htijd ?>" id="pltsdatum" width="22.5%">Geplaatst</th><th width="5%"><button id="sortgeplaatst" value=<?php echo $dirtijd ?> onclick="sortfunctie('sortgeplaatst')"><?php echo $atijd ?></button></th>
            </tr>
        </table>
    </div>
    <div class="overzicht">
        <?php include 'includes/pagina_includes/index/schrijf_overzichtstabel.php'; ?>
    </div>
    <br/><hr/>

    <div class="artikelen">
        <?php include 'includes/pagina_includes/index/schrijf_berichttabellen.php'; ?>
    </div>
</div>
