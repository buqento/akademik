<?php
/*
    session_start();
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbnm = "jayanegara";
     
    $conn = mysql_connect($host, $user, $pass);
	mysql_select_db($dbnm) or die("Database tidak bisa dibuka");
    require('fpdf17/fpdf.php');
     
    $query ="select * from siswa";
    $db_query = mysql_query($query) or die("Query gagal");
    //Variabel untuk iterasi
    $i = 0;
    //Mengambil nilai dari query database
    while($data=mysql_fetch_row($db_query))
    {
        $cell[$i][0] = $data[0];
        $cell[$i][1] = $data[1];
        $cell[$i][2] = $data[2];
        $cell[$i][3] = $data[3];
        $i++;
    }
    //memulai pengaturan output PDF
    class PDF extends FPDF
    {
        //untuk pengaturan header halaman
        function Header()
        {
            //Pengaturan Font Header
            $this->SetFont('Times','B',14); //jenis font : Times New Romans, Bold, ukuran 14
            //untuk warna background Header
            $this->SetFillColor(255,255,255);
            //untuk warna text
            $this->SetTextColor(0,0,0);
            //Menampilkan tulisan di halaman
            $this->Cell(19,1,'Data Pribadi','TBLR',0,'C',1); //TBLR (untuk garis)=> B = Bottom,
            // L = Left, R = Right
            //untuk garis, C = center
        }
    }
    //pengaturan ukuran kertas P = Portrait
    $pdf = new PDF('L','cm','A4');
    $pdf->Open();
    $pdf->AddPage();
    //Ln() = untuk pindah baris
    $pdf->Ln();
    $pdf->SetFont('Times','B',12);
    $pdf->Cell(1,1,'No','LRTB',0,'C');
    $pdf->Cell(3,1,'Nama','LRTB',0,'C');
    $pdf->Cell(4,1,'Alamat','LRTB',0,'C');
    $pdf->Cell(5,1,'Telepon','LRTB',0,'C');
    $pdf->Cell(6,1,'Jabatan','LRTB',0,'C');
    $pdf->Ln();
    $pdf->SetFont('Times',"",10);
    for($j=0;$j<$i;$j++)
    {
        //menampilkan data dari hasil query database
        $pdf->Cell(1,1,$j+1,'LBTR',0,'C');
        $pdf->Cell(3,1,$cell[$j][0],'LBTR',0,'C');
        $pdf->Cell(4,1,$cell[$j][1],'LBTR',0,'C');
        $pdf->Cell(5,1,$cell[$j][2],'LBTR',0,'C');
        $pdf->Cell(6,1,$cell[$j][3],'LBTR',0,'C');
        $pdf->Ln();
    }
    //menampilkan output berupa halaman PDF
    $pdf->Output();
*/
?>
<?php

    session_start();
	$no_siswa = $_GET['nosis'];
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbnm = "jayanegara";
     
    $conn = mysql_connect($host, $user, $pass);
	mysql_select_db($dbnm) or die("Database tidak bisa dibuka");
    require('fpdf17/fpdf.php');
	require_once ("../fungsi_indotgl.php");

    $query ="SELECT 
				siswa.nosis,
				siswa.nama,
				siswa.jenkel,
				siswa.tempat,
				siswa.tgllahir,
				siswa.alamat,
				siswa.pendidikan,
				siswa.instansi,
				siswa.telepon,
				siswa.foto,

				kursus.nosis,
				kursus.kd_kelas,
				kursus.kd_paket,

				kelas.kdkelas,
				kelas.tglmulai,
				kelas.tglselesai,
				kelas.hari,
				kelas.waktu,
				kelas.pengajar,
				kelas.kd_paket

				FROM siswa, kursus, kelas 
				WHERE 
				siswa.nosis='$no_siswa' AND kursus.nosis='$no_siswa' 
				AND kursus.kd_kelas=kelas.kdkelas";
    $db_query = mysql_query($query) or die("Query gagal");

    while($data=mysql_fetch_array($db_query))
    {
        $nosis = $data['nosis'];
		$nama = $data['nama'];
        $jenkel = $data['jenkel'];
        $tempat = $data['tempat'];
        $tgllahir = $data['tgllahir'];
        $alamat = $data['alamat'];
        $pendidikan = $data['pendidikan'];
        $instansi = $data['instansi'];
        $telepon = $data['telepon'];
        $foto = $data['foto'];

        $kd_kelas = $data['kd_kelas'];
        $kd_paket = $data['kd_paket'];

        $tglmulai = $data['tglmulai'];
        $hari = $data['hari'];
        $waktu = $data['waktu'];
        $pengajar = $data['pengajar'];
   }

class PDF extends FPDF
{
	function Header(){
		$this->SetFont('Arial','I',10);
		$this->Cell(30,10,'Ini adalah contoh sebuah header',0,0,'L');
		$this->Cell(132);
		$this->SetFont('Arial','B',10);
		$this->Cell(30,10,'rosihanari.net',0,0,'L');
		$this->Line(11,18,198,18);
		$this->Ln(20);
	}
	
	function Footer(){
		$this->SetY(-45);
		$this->SetFont('Arial','I',8);
		$this->Cell(0,10,'Halaman ke- '.$this->PageNo().' dari
		{nb}',0,0,'R');
	}

}
$pdf=new FPDF('P','mm','A4');
$pdf->AliasNbPages();
$pdf->SetMargins(20,20,10);
$pdf->AddPage();

$pdf->SetTextColor(0, 0, 255);
$pdf->SetFillColor(183, 183, 183);
$pdf->Image('../images/logo.jpg',22,22,25);
$pdf->Cell(30,25,'',0,0,'C');

$pdf->SetFont('Arial','B',12);
$pdf->SetFillColor(183, 183, 183);
$pdf->Cell(130,25,'PENDIDIKAN & PELATIHAN KOMPUTER JAYANEGARA',0,1,'C',1);
//$pdf->Cell(20,25,$nosis,0,1,'C',1);

$pdf->SetFont('Arial','B',16);
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(160,30,'FORMULIR PENDAFTARAN',0,1,'C');

$pdf->SetFont('Arial','',11);
$pdf->Cell(40,10,'Nama/Nosis',0,0,'L');
$pdf->Cell(100,10,': '.strtoupper($nama).' / '.$nosis,0,1,'L');
$pdf->Image('../foto/'.$foto,150,80,30);

$pdf->Cell(40,10,'Tempat/Tgl.Lahir',0,0,'L');
$pdf->Cell(120,10,': '.$tempat.' / '.tgl_indo($tgllahir),0,1,'L');

$pdf->Cell(40,10,'Pendidikan Terakhir',0,0,'L');
$pdf->Cell(120,10,': '.$pendidikan,0,1,'L');

$pdf->Cell(40,10,'Alamat Rumah',0,0,'L');
$pdf->Cell(120,10,': '.$alamat,0,1,'L');

$pdf->Cell(40,10,'Instansi/Jabatan',0,0,'L');
$pdf->Cell(120,10,': '.$instansi,0,1,'L');

$pdf->Cell(40,10,'Telepon',0,0,'L');
$pdf->Cell(90,10,': '.$telepon,0,0,'L');
$pdf->Cell(30,10,$jenkel,1,1,'C');

$pdf->Cell(160,5,'',0,1,'C');

$pdf->SetFillColor(183, 183, 183);
$pdf->Cell(160,10,'P A K E T   K U R S U S',0,1,'C',1);
$pdf->Cell(40,8,'Kode Paket',0,0,'L');
$pdf->Cell(120,8,': '.$kd_kelas,0,1,'L');
$pdf->Cell(40,8,'Hari',0,0,'L');
$pdf->Cell(120,8,': '.$hari,0,1,'L');
$pdf->Cell(40,8,'Jam',0,0,'L');
$pdf->Cell(120,8,': '.$waktu,0,1,'L');
$pdf->Cell(40,8,'Mulai Kursus',0,0,'L');
$pdf->Cell(120,8,': '.tgl_indo($tglmulai),0,1,'L');

$pdf->Cell(160,5,'',0,1,'C');

$pdf->Cell(160,5,'KETERANGAN',0,1,'L');
$pdf->Cell(160,5,'- Stok hanya berlaku 1 (satu) tahun',0,1,'L');
$pdf->Cell(160,5,'- Pembatalan kursus uang tidak dikembalikan',0,1,'L');
$pdf->Cell(160,5,'- Pelunasan diluar masa diskon harga berlaku normal',0,1,'L');
$pdf->Cell(160,5,'- Batas pengambilan sertifikat 2 (dua) tahun',0,1,'L');

$pdf->Cell(80,10,'',0,0,'C');
$pdf->Cell(80,40,'Ambon, '.tgl_indo(date("Y:m:d")),0,1,'C');

$pdf->SetFont('Arial','U');
$pdf->Cell(80,10,'Administrasi',0,0,'C');
$pdf->Cell(80,10,strtoupper($nama),0,1,'C');


$pdf->Cell(160,5,'',0,1);
$pdf->SetFont('Arial','I',6);
$pdf->Cell(160,5,'[Pendidikan Profesi 1 Tahun - Kursus Komputer - Kursus Mengemudi - Kursus Bahasa Inggris]',0,1,'C');

$pdf->Output();


/*
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbnm = "jayanegara";
     
    $conn = mysql_connect($host, $user, $pass);
    if ($conn) {
    $open = mysql_select_db($dbnm);
    if (!$open) {
    die ("Database tidak dapat dibuka karena ".mysql_error());
    }
    } else {
    die ("Server MySQL tidak terhubung karena ".mysql_error());
    }
    //akhir koneksi
     
    #ambil data di tabel dan masukkan ke array
    $query = "SELECT * FROM paket";
    $sql = mysql_query ($query);
    $data = array();
    while ($row = mysql_fetch_assoc($sql)) {
    array_push($data, $row);
    }
     
    #setting judul laporan dan header tabel
    $judul = "PAKET KURSUS";
    $header = array(
    array("label"=>"KDPAKET", "length"=>30, "align"=>"L"),
    array("label"=>"NAMA PAKET", "length"=>50, "align"=>"L"),
    array("label"=>"BIAYA", "length"=>80, "align"=>"L"),
    );
     
    #sertakan library FPDF dan bentuk objek
    require_once ("fpdf17/fpdf.php");
    $pdf = new FPDF();
    $pdf->AddPage();
     
    #tampilkan judul laporan
    $pdf->SetFont('Arial','B','16');
    $pdf->Cell(0,20, $judul, '0', 1, 'C');
     
    #buat header tabel
    $pdf->SetFont('Arial','','10');
    $pdf->SetFillColor(255,0,0);
    $pdf->SetTextColor(255);
    $pdf->SetDrawColor(128,0,0);
    foreach ($header as $kolom) {
    $pdf->Cell($kolom['length'], 5, $kolom['label'], 1, '0', $kolom['align'], true);
    }
    $pdf->Ln();
     
    #tampilkan data tabelnya
    $pdf->SetFillColor(224,235,255);
    $pdf->SetTextColor(0);
    $pdf->SetFont('');
    $fill=false;
    foreach ($data as $baris) {
    $i = 0;
    foreach ($baris as $cell) {
    $pdf->Cell($header[$i]['length'], 5, $cell, 1, '0', $kolom['align'], $fill);
    $i++;
    }
    $fill = !$fill;
    $pdf->Ln();
    }
     
    #output file PDF
    $pdf->Output();

/*    
    
    
// for setting variable you can goto tcpdf/config/tcpdf_config, you can change them
// create new PDF document; (i set PDF_UNIT from Milimeter  to Centimeter)
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

//set margin page (all direction)
//setMargins(LEFT,TOP,RIGHT)  in CM (centimeter), it's looks like MS Word :D
$pdf->SetMargins(1, 3, 1,true);


//setup Header
$pdf->SetHeaderMargin(5); // margin header 1 CM
$pdf->setPrintHeader(true); // enabled ? true
$pdf->SetHeaderData(false, 0, "Hellow World Header", "mynotework.blogspot.com"); //your text here
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', 15)); // data font header

//Set Footer
$pdf->SetFooterMargin(1); // margin footer 1 CM
$pdf->setPrintFooter(true); // enabled ? true
//$pdf->setFooterData($tc=array(0,64,0), $lc=array(0,64,128));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
//$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

//set auto page breaks
$pdf->SetAutoPageBreak(true, 1.3); // it's use when u use table, to increase break page

// Set font
$pdf->SetFont('dejavusans', '', 14, '', true); // set global font

// Add a page, MUST BE DECLARATION at lease 1 statement
$pdf->AddPage();

// Set some content to print
$html = ' Hello World TCPDF';


// Print text using writeHTML()
$pdf->writeHTML($html, true, 0, true, 0);

// Buat output buffer page(I) / create file (F)
$pdf->Output('example_001.pdf', 'I');


*/
?>