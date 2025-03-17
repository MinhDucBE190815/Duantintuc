<h1>Tin moi nhat</h1>
<?php  

foreach ($data as $tin) {
    echo "<p>{$tin->Tieude}</p>";
    echo "<em>Ngay dang: {$tin->Ngaydang} </em>";
    echo "<hr>";
    echo "<a href='" . route('chitiet.tinid', ['id' => $tin->id]) . "'>Xem chi tiết</a>";}
?>