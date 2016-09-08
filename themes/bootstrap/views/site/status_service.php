<html>
<body>
<?php
// menjalankan command untuk mengenerate file service.log
passthru("net start > service.log");

// membuka file service.log
$handle = fopen("service.log", "r");

// status awal = 0 (dianggap servicenya tidak jalan)
$status = 0;

// proses pembacaan isi file
while (!feof($handle))
{
   // baca baris demi baris isi file
   $baristeks = fgets($handle);
   if (substr_count($baristeks, 'Gammu SMSD Service (GammuSMSD)') > 0)
   {
     // jika ditemukan baris yang berisi substring 'Gammu SMSD Service (GammuSMSD)'
     // statusnya berubah menjadi 1
     $status = 1;
   }
}
// menutup file
fclose($handle);

// jika status terakhir = 1, maka gammu service running
if ($status == 1){ 
	echo "";
}
// jika status terakhir = 0, maka service gammu berhenti
else if ($status == 0) {

	//echo "<div>Status Layanan: <b><u>Offline</u></b></font> <br> </div>";
	if ($_POST['submit'])
	{
		passthru("c:\gammu\bin\gammu-smsd -c smsdrc -s");
	}
	else
	{

echo'
    <div class="alert alert-info">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Info!</strong> Saat ini layanan SMS Gateway dalam keadaan offline.
    </div>
	';
		echo "<form method='post' action=''>";
	echo "<button type='submit' name='submit' value='' class='btn btn-success btn-large'><i class='icon-refresh'></i> Start Service</button>";
	echo "</form>";


	}

	}

?>

</body>
</html>