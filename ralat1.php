?php

//Array Jujukan
$result = array ( //array pertama =pelajar
		"Harraz" => array ('KPD4015'=>80, 'SEJARAH'=>80, 'DISCRETE MATH'=>90, 'KPD4033'=>85, 'P.ISLAM'=>90)
		"Fatimah" => array ('KPD4015'=>70, 'SEJARAH'=>75, 'DISCRETE MATH'=>92, 'KPD4033'=>87, 'P.ISLAM'=>91),
		"Ahmad Faiq" => array ('KPD4015'=>90, 'SEJARAH'=>92, 'DISCRETE MATH'=>73, 'KPD4033'=>89, 'P.ISLAM'=>78),
		"Alia Anum" => array ('KPD4015'=>60, 'SEJARAH'=>72, 'DISCRETEMATH'=>83, 'KPD4033'=>79, 'P.ISLAM'=>75),
		"Shamyl" => array ('KPD4015'=>96, 'SEJARAH'=>92, 'DISCRETE MATH'=>93, 'KPD4033'=>82, 'P.ISLAM'=>76),
		"Nabila" => array ('KPD4015'=>89, 'SEJARAH'=>93, 'DISCRETE MATH'=>80, 'KPD4033'=>87, 'P.ISLAM'=>79)
		);
foreach ($result as $pelajar => $value){
	{
		echo "NamaPelajar: ".$pelajar;
		echo "<br>";
	} foreach ($value as $subjek => $rst)
	{
		echo "Subjek: ".$subjek." Result: ".$rst;
		echo "<br>";
		
	}   echo "------------------------------------------";
		echo "<br>";
		
?>











