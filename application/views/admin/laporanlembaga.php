<?php 
		ob_start();
		$pdf = new FPDF('l', 'mm', 'A4');
		$pdf->AddPage();
		$pdf->SetFont('Arial','B',16);
		$pdf->Cell(270,7,'REKAP LEMBAGA TAMAN PENDIDIKAN AL-QURAN (TPA)',0,1,'C');
		$pdf->Cell(10,7,'',0,1);
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(50,7, 'KECAMATAN', 0,0);
		$pdf->Cell(5,7, ':', 0,0);
		$pdf->Cell(60,7, 'GIRIRENG', 0,1);
		$pdf->Cell(50,7, 'KABUPATEN', 0,0);
		$pdf->Cell(5,7, ':', 0,0);
		$pdf->Cell(60,7, 'WAJO', 0,1);
		$pdf->Cell(50,7, 'PROVINSI', 0,0);
		$pdf->Cell(5,7, ':', 0,0);
		$pdf->Cell(60,7, 'SULAWESI SELATAN', 0,1);
		$pdf->Cell(50,7, 'TANGGAL', 0,0);
		$pdf->Cell(5,7, ':', 0,0);
		$pdf->Cell(60,7, date('d/m/Y'), 0,1);
		$pdf->Cell(10,7,'',0,1);
		$pdf->Cell(10,14, 'No',1,0, 'C');
		$pdf->Cell(35,14, 'Desa / Kel',1,0, 'C');
		$pdf->Cell(50,7, 'Nama Lembaga',1,0, 'C');
		$pdf->Cell(35,14, 'Nama Pimpinan',1,0, 'C');
		$pdf->Cell(70,14, 'Alamat',1,0, 'C');
		$pdf->Cell(25,7, 'Tahun',1,0, 'C');
		$pdf->Cell(50,7, 'Jumlah Murid Mengaji',1,0, 'C');
		$pdf->Cell(1,7, '',0,1, 'C');
		$pdf->Cell(45,7, '',0,0, 'C');
		$pdf->Cell(50,7, 'Pendidikan Al-Quran',1,0, 'C');
		$pdf->Cell(105,7, '',0,0, 'C');
		$pdf->Cell(25,7, 'Berdiri',1,0, 'C');
		$pdf->Cell(50,7, 'Aktif',1,0, 'C');
		$pdf->Cell(30,7, '' , 0,1);
		$pdf->Cell(10,6, '1', 1,0, 'C');
		$pdf->Cell(35,6, '2', 1,0, 'C');
		$pdf->Cell(50,6, '3', 1,0, 'C');
		$pdf->Cell(35,6, '4', 1,0, 'C');
		$pdf->Cell(70,6, '5', 1,0, 'C');
		$pdf->Cell(25,6, '6', 1,0, 'C');
		$pdf->Cell(50,6, '7', 1,1, 'C');
		$datalembaga = $this->Admin_Model->laporanlembaga();
		$no = 1;
		foreach($datalembaga as $data) {
			$pdf->SetFont('Arial','',9);
			$pdf->Cell(10,10, $no++ , 1,0, 'C');
			$pdf->Cell(35,10, $data['desa'] , 1,0, 'L');
			$pdf->Cell(50,10, $data['nm_lembaga'] , 1,0, 'L');
			$pdf->Cell(35,10, $data['pimpinan'] , 1,0, 'L');
			
			$pdf->Cell(70,10, $data['alamat'] , 1,0, 'L');
			$pdf->Cell(25,10, $data['thn_berdiri'] , 1,0, 'C');
			$pdf->Cell(50,10, $data['jml_murid'] , 1,1, 'C');
		}
		$pdf->Output();
		ob_end_flush(); 
?>