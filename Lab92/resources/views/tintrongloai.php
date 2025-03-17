<h1>Tin Trong Loai</h1>
<?php 
foreach ($data as $tin) {
echo "<div class='row'>";
echo "<h3>{$tin->Tieude}</h3>";
echo "<p>{$tin->Noidung}</p>";
echo "</div> <hr>";

} 

?>