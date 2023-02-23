<?php
	function tgl_eng_to_ind($tgl) {
		$tanggal	= explode('-',$tgl);
		$kdbl		= $tanggal[1];

		if ($kdbl == '01')	{
			$nbln = 'Januari';
		}
		else if ($kdbl == '02') {
			$nbln = 'Februari';
		}
		else if ($kdbl == '03') {
			$nbln = 'Maret';
		}
		else if ($kdbl == '04') {
			$nbln = 'April';
		}
		else if ($kdbl == '05') {
			$nbln = 'Mei';
		}	
		else if ($kdbl == '06') {
			$nbln = 'Juni';
		}
		else if ($kdbl == '07') {
			$nbln = 'Juli';
		}
		else if ($kdbl == '08') {
			$nbln = 'Agustus';
		}
		else if ($kdbl == '09') {
			$nbln = 'September';
		}
		else if ($kdbl == '10') {
			$nbln = 'Oktober';
		}
		else if ($kdbl == '11') {
			$nbln = 'November';
		}
		else if ($kdbl == '12') {
			$nbln = 'Desember';
		}
		else {
			$nbln = '';
		}
		
		$tgl_ind = $tanggal[0]." ".$nbln." ".$tanggal[2];
		return $tgl_ind;
	}
	

	function tgl_indo($tgl){
			$tanggal = substr($tgl,8,2);
			$bulan = getBulan(substr($tgl,5,2));
			$tahun = substr($tgl,0,4);
			return $tanggal.'-'.$bulan.'-'.$tahun;		 
	}	

	
	
	function getBulan($bln){
				switch ($bln){
					case 1: 
						return "01";
						break;
					case 2:
						return "02";
						break;
					case 3:
						return "03";
						break;
					case 4:
						return "04";
						break;
					case 5:
						return "05";
						break;
					case 6:
						return "06";
						break;
					case 7:
						return "07";
						break;
					case 8:
						return "08";
						break;
					case 9:
						return "09";
						break;
					case 10:
						return "10";
						break;
					case 11:
						return "11";
						break;
					case 12:
						return "12";
						break;
				}
			} 
			

			
	function thn_indo($thn){
			$tahun = substr($thn,0,4);
			return $tahun;		 
	}
	
	function thn2_indo($thn){
			$tahun = substr($thn,2,2);
			return $tahun;		 
	}
	
	
	function tgl1_indo($tgl1){
			$tanggal = substr($tgl1,8,2);
			return $tanggal;		 
	}
	
	function bln_indo($bln){
			
			$bulan = getBulan1(substr($bln,5,2));
			
			return $bulan;		 
	}
	
			function getBulan1($bln){
				switch ($bln){
					case 1: 
						return "Jan";
						break;
					case 2:
						return "Feb";
						break;
					case 3:
						return "Mar";
						break;
					case 4:
						return "Apr";
						break;
					case 5:
						return "Mei";
						break;
					case 6:
						return "Jun";
						break;
					case 7:
						return "Jul";
						break;
					case 8:
						return "Agu";
						break;
					case 9:
						return "Sep";
						break;
					case 10:
						return "Okt";
						break;
					case 11:
						return "Nov";
						break;
					case 12:
						return "Des";
						break;
				}
			} 
			
			
?>
