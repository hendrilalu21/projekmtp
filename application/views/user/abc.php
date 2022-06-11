<?php 

	public function uuid($panjang=null){
	    $karakter= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
	    $string = '';
		    for ($i = 0; $i <= 5; $i++) {
				  $pos = rand(0, strlen($karakter)-1);
				  $string .= $karakter{$pos};
		    }
		    return $string;
			
	}


 ?>