<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"
        <title>Belajar PHP</title>
    </head>
    <body>

	  Halo semuanya!
	  
	  <?php 
		echo "<h1>Sekolah koding</h1>"; 
		echo "Halo <br>";
		echo "Selamat bergabung";
		?>
	  
	  <?php
	  
	  /*
	  Beberapa baris 
	  komentar
	  terserah teman2
	  */
	  
	  // variabel pada php
	  $nama  = "Sekolah koding";
	  $nama2 = "Bermain koding";
	  
	  echo "<h4>selamat datang di $nama <h4>";
	  echo "dan selamat $nama2 <br>";
	  
	  
	  //tipe data angka/number
	  // 1. inter 2. float
	  
	  $angka  = 1000;
	  $angka2 = 3;
	  $angka3 = 2.64;
	  
	  
	  $angka = 250;
	  $angka2 = 10;
	  $angka3 = 35;
	  
	  //echo $angka + $angka2 - $angka3;
	  
	  //-------- operator math --------
	  // + - * / % ++ --
	  
	  //nama = nilai
	  //$angka = $angka + $angka2;
	  //$angka *= $ $angka2;
	  
	  //-------- math method --------
	  //round rand(main, max) max main
	  //echo "angka hari ini adalah". min($angka3, $angka, $angka2);
	  
	  
	  echo "Angka hari ini adalah ". min($angka , $angka2, $angka3);
	  
	  //-------- string method --------
	  //strlen && str_word_count
	  //str_replce(find, replace, string)
	  //str_repeat(text, times); str_shuffle(text)
	  
	  //$text = "Hai semuanya di sini";
	  //echo str_repeat( str_replace( "hai", hallo, $text), 10 );
	  
	  
	  $angka = [5, 10,2, 1, 6];
	  $kotak = array('kongguru', 'koala', 'panda');
	  $nama = ['gilang', 'tiara', 'sania'];
	  
	  
	  print_r($kotak);
	  echo $nama[0];
	  sort($angka);
	  
	  //-------- associative array --------
	  
	  
	  $data = array( "nama" => "gilang" ,
					 "umur" => 20 ,
					 "kerja" => "pengacara"
			  );	  
	  
	  $data2 = array( "status" => " lajang " ,
					  "laptop" => "chromebook"
			  );
	  print_r( array_merge($data, $data2) );
	  
	  
	  //-------- multi dimensi array --------
	  
	  
		//echo "<h3>multi dimensi array</h3>";
	  $data = array(
				array("programmer", "21", "males"),
				array("designer", "24", "rajin"),
				array("manager", "30", "kerja keras")
			  );
			  
	  $data[2][0] = "proyek manager";
	  echo $data[2][0]; 


	  //-------- loop php --------
	  
	  $hewan = ['kangguru', 'koala', 'panda', 'beruang'];
	  
	  for($i=0; $i < count($hewan); $i++)
	  {
		  echo "-----------------";
		  echo $hewan[$i];
		  echo "----------------- <br>";
	  }
	  
	  $data = ['nama' => 'gilang',
			   'umur' => 20,
			   'sifat' => 'rajin'];
			   
	  foreach($data as $key => $value){
		echo $value . "<br>";
	  }
	  
	  
	  //-------- while & do while --------
	  //while(syarat)
	  /*$i = 5;
	  do{
		echo '------';
		echo $hewan[$i]. "<br>";
		$i++;
	  */while( $i < count($hewan));
	  
	  //-------- tipe data boolen --------
	  //$hasil = true;
	  //$hasil2 = false;
	  
	  //-------- if dan else -------
	  // operator logika == === > >= < <= !=
	  // true atau false 
	  $uang_programmer = 1000;
	  $keyboard 	   = 2000;
	  $uang_designer   = 4000;
	 
	 // && atau || 
	  if( $uang_programmer > $keyboard
			&& $uang_designer > $keyboard){
				
			  echo 'boleh beli keybord';
			}else{
		 echo 'ngga bisa beli';
	  }
	  
	  // return fungsi
	  /*function menghitung($x, $y){
		  $z = $x + $y;
		  return $z;
	  }
	  $hasil = menghitung(2, 5) * 10;
	  echo "<h4>hasil dari penjumlahan </h4>". $hasil;
	  
	  //-------- scope --------
	  $a = 20000;
	  $b = 30;
	  
	  function menghitung (){
		  global $a, $b;
		  
		  $c = $a + $b;
		  return $c;
	  }
	  echo menghitung();
	  */
	  
	  //--- anonymous function ---
	  $ngetik = function($text){
		  echo $text;
	  };
	  $greeting = $ngetik;
	  $greeting( '<h4>selamat datang semuanya</h4> ');
	  
	  //--- callback function ---
	  //function berteriak($callback){
		  //echo 'HALLO <br>';
		  //$callback();
		  
		  //--- echo print ---
		  //--- print_r die var_dump ----
		  
		  $car = ['mobil', 'motor'];
		  var_dump($car);
		  
	  ?>
	  
    </body>
</html>