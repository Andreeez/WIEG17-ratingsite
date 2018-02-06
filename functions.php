<?php
ksort($listOfMovies, SORT_NUMERIC);
foreach($listOfMovies as $key => $item){
  
    echo "<li>$key</li>";
}
?> 
<?php 
foreach($listOfMovies as $key => $item){
  
  echo "<option>$key</option>";
}
?> 
 




 <!-- <select>
  <option value="film1">Nyckeln Till Frihet</option>
  <option value="film2">Forrest</option>
  <option value="film3">Remember the Titans</option>
  <option value="film4">Air Buddies</option>
</select> -->


