<?php
 
 
function check($number){
 
    if ( $number == 1 ) {
        return false;
    }
    if ( $number == 2 ) {
        return true;
    }
    // square root algorithm speeds up testing of bigger prime numbers
    $x = sqrt($number);
    $x = floor($x);
    for ( $i = 2 ; $i <= $x ; ++$i ) {
        if ( $number % $i == 0 ) {
            break;
        }
    }
     
    if( $x == $i-1 ){
        return true;
    } else {
        return false;
    }
}
 
function cekstatus($status){
	if($status==true) {
			return ' = Bilangan Prima<br><br>' ;
	}else{ 
			return ' = Bukan Bilangan Prima<br><br>';
	}
}

echo "Program Menentukan Bilangan PRIMA , dari 1 - 50 : <br><br>";

for ($i=1; $i<=50; $i++){ 
  echo  $i . cekstatus(check($i));
}
?>