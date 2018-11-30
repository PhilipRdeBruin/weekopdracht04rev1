
<?php

/*  nog onder constructie...  */
    $filtertypeoud = (isset($_SESSION['filtertype']) ? $_SESSION['filtertype'] : "rubriek");
    $filtertypenieuw = (isset($_POST['filtertype']) ? $_POST['filtertype'] : $filtertypeoud);
//        phpAlert ("flttypeoud = $filtertypeoud, flttypenw = $filtertypenieuw");
/*  ------------------------  */

    $filterstring = init_filtersessie();
?>

    <hr/>
    <p class="dgrey14"><u>Filter op:</u></p>
    <button class="px12" id="filterrubriek">Rubriek</button>
    <button class="px12" id="filterauteur">Auteur</button>
    <input type="hidden" id="filtertype" value="rubriek">

    <form id="filterform" action="#" method="post">
<!--        <div id="filterenrubriek">
            <select multiple name="select_filterrubriek" id="select_filterrubriek">
                <?php //$filtrubr = fillrubrieken("filter", "#"); ?>
            </select>
        <?php //schrijf_hiddenfilterrubrieken($filtrubr); ?>
        <?php //$_SESSION['filtertype'] = $filtertypenieuw; ?>
            </div>  -->

        <?php plaats_typefilter("rubriek", $filtertypenieuw); ?>

        <div id="filterenauteur">
            <select multiple name="select_filterrubriek" id="select_filterrubriek">
                <?php $filtrubr = fillauteurs("filter", "#"); ?>
            </select>
        <?php schrijf_hiddenfilterrubrieken($filtrubr); ?>
        <?php $_SESSION['filtertype'] = $filtertypenieuw; ?>
        </div>

        <input type=submit class="px12" id="filterknop" name="filterknop" value="Filter">
        <input type=submit class="px12" id="filterresetknop" name="filterresetknop" value="Reset">
<!--            <button class="px12" id="filterresetknop">Reset</button>  -->
    </form>
    <p class="dgrey12"><super>* </super><i>Meerdere keuzes mogelijk.</i></p>

<?php
function plaats_typefilter($type, $filtertypenieuw) {
    echo '<div id="filteren' . $type . '">';
    echo    '<select multiple name="select_filter' . $type . '" id="select_filter' . $type . '">';
            $filtrubr = fillrubrieken("filter", "#");
    echo    '</select>';
            schrijf_hiddenfilterrubrieken($filtrubr);
            $_SESSION['filtertype'] = $filtertypenieuw;
    echo '</div>';
}
?>
