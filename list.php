<?php
include 'header.php';
$pageName = 'Listan';
?>

<html>
<h1>Detta är sidan <?php echo $pageName ?> </h1>
</html>

<?php
$listOfMovies = array("9. Nyckeln till Frihet" => "Nykeln är jäte bra film", 
"8. Forrest Gump " => "Foreest är jäte bra film", 
"6. Remember the Titans"=> "Remember är jäte bra film", 
"3. Air Buddies" => "Air är jäte bra film", 
"2. Matrix" => "Matrix är jäte bra film",
"10. Detta är en annan film" => "Detta r väll den bästa filmen är jäte bra film",
"1.Film 3" => "Film3 är jäte bra film", 
"13. Film åtta" => "Film åtta är jäte bra film");
include 'functions.php';
?>
<br/>
<br/>
<br/>
<form>
    <select>
       
        <?php 
        include 'functions.php';
        ?>
       
     </select>
</form>

<?php
include 'footer.php';
?>