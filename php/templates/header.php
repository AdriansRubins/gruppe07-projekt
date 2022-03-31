<link rel="stylesheet" href="../../css/headerstyle.css">
<nav>
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
        <i class="fa fa-bars"></i>

    </label>
    <label class="logo">Auto-care!</label>
    <ul>
        <li><a  href="../../index.php"><button class="<?php echo $currentPage == 'index' ? 'active' : '' ?>">Startseite</button></a></li>
        <li><a  href="leistungen.php"><button class="<?php echo $currentPage == 'leistungen' ? 'active' : '' ?>">Leistungen</button></a></li>
        <li><a  href="autos.php"><button class="<?php echo $currentPage == 'autos' ? 'active' : '' ?>">Autos</button></a></li>
        <li><a  href="../pages/kontakt.php"><button class="<?php echo $currentPage == 'kontakt' ? 'active' : '' ?>">Kontakt</button></a></li>

    </ul>
</nav>

  
