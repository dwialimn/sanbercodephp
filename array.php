<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Array</title>
</head>
<body>
	<h1>Berlatih Array</h1>

	<?php 
		echo "<h3> Soal 1 </h3>";
		/* 
		SOAL NO 1
		Kelompokkan nama-nama di bawah ini ke dalam Array.
		Kids : "Mike", "Dustin", "Will", "Lucas", "Max", "Eleven" 
		Adults: "Hopper", "Nancy",  "Joyce", "Jonathan", "Murray"
		*/
		$kids		= ["Mike", "Dustin", "Will", "Lucas", "Max", "Eleven"]; // Lengkapi di sini
		$adults	= ["Hopper", "Nancy",  "Joyce", "Jonathan", "Murray"];
			print_r($kids);
			echo "<br>";
			print_r($adults);
		// Akhir soal 1


		echo "<h3> Soal 2</h3>";
		/* 
		SOAL NO 2
		Tunjukkan panjang Array di Soal No 1 dan tampilkan isi dari masing-masing Array.
		*/
		echo "Cast Stranger Things: ";
		echo "<br>";
		echo "Total Kids: ".count($kids) ; // Berapa panjang array kids
		echo "<br>";
		echo "<ol>";
		// Lanjutkan
			foreach ($kids as $ks) {
				echo "<li> $ks </li>";
			}
		echo "</ol>";

		echo "Total Adults: ".count($adults) ;// Berapa panjang array adults
		echo "<br>";
		echo "<ol>";
		// Lanjutkan
			foreach ($adults as $adt) {
				echo "<li> $adt </li>";
			}
		echo "</ol>";
		// Akhir soal 2


		echo "<h3> Soal 3</h3>";
		/*
		SOAL No 3
		Susun data-data berikut ke dalam bentuk Asosiatif Array (Array Multidimensi)

		Name: "Will Byers"
		Age: 12,
		Aliases: "Will the Wise"
		Status: "Alive"

		Name: "Mike Wheeler"
		Age: 12,
		Aliases: "Dungeon Master"
		Status: "Alive"

		Name: "Jim Hopper"
		Age: 43,
		Aliases: "Chief Hopper"
		Status: "Deceased"

		Name: "Eleven"
		Age: 12,
		Aliases: "El"
		Status: "Alive"    
		*/
		$s3 = [
			[
				Name		=> 'Will Byers',
				Age		=> 12,
				Aliases	=> 'Will the Wise',
				Status	=> 'Alive'
			],
			[
				Name		=> 'Mike Wheeler',
				Age		=> 12,
				Aliases	=> 'Dungeon Master',
				Status	=> 'Alive'
			],
			[
				Name		=> 'Jim Hopper',
				Age		=> 43,
				Aliases	=> 'Chief Hopper',
				Status	=> 'Deceased'
			],
			[
				Name		=> 'Eleven',
				Age		=> 12,
				Aliases	=> 'El',
				Status	=> 'Alive'
			]
		];

		foreach ($s3 as $key) {
			echo "Name: ".$key[Name]."<br>";
			echo "Age: ".$key[Age]."<br>";
			echo "Aliases: ".$key[Aliases]."<br>";
			echo "Status: ".$key[Status]."<br><br>";
		}
	?>
</body>
</html>