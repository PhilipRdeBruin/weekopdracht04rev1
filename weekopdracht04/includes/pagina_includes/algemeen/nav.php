
<?php
/*  Bepaal hier de parameters voor de navigatie-knoppen - per site  */

    switch ($site) {
    case 'index':
        if ($naam == "") {
            $nnav = 1;
            $nav[0][0] = 'ainlog'; $nav[1][0] = 'inlog.php'; $nav[2][0] = 'Inloggen';
        } else {
            $nnav = 2;
            $nav[0][0] = 'auitlog'; $nav[1][0] = 'uitloggen.php'; $nav[2][0] = 'Uitloggen';
            $nav[0][1] = 'aplaatsen'; $nav[1][1] = 'plaatsen.php';
            $nav[2][1] = 'Bericht<span class="grey">_</span>plaatsen';
        }
        break;
    case 'inlog':
        $nnav = 1;
        $nav[0][0] = 'ahome'; $nav[1][0] = 'index.php'; $nav[2][0] = 'Hoofdpagina';
        break;
    case 'plaatsen':
        $nnav = 2;
        $nav[0][0] = 'ahome'; $nav[1][0] = 'index.php'; $nav[2][0] = 'Hoofdpagina';
        $nav[0][1] = 'auitlog'; $nav[1][1] = 'uitloggen.php'; $nav[2][1] = 'Uitloggen';
    }
?>

<!--  Plaats hier de navigatie-knoppen - per site  -->
<nav>
    <div id="standaarknoppen">
        <ul>
        <?php
            for ($i = 0; $i < $nnav; $i++) {
                echo '<li><a id="' . $nav[0][$i] . '" href="' . $nav[1][$i] . '">' . $nav[2][$i] . '</a></li>';
                echo '<li class="grey">xxx</li><li class="grey">xxx</li>';
            }
        ?>
        </ul>
    </div>

<?php
    if ($site == "index") { include 'includes/functionele_includes/algemeen/filteren.php'; }
?>
</nav>
