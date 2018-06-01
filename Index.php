<?php
$animals=[
    'Africa'=>[
        'Syncerus caffer',
        'Poelagus marjorita',
        'Loxodonta',
        'Hippopotamus amphibius',
        'Otocyon megalotis',
        'Tragelaphus eurycerus',
        'Gazella dorcas',
        ],
    'Australia'=>['Macropus'],
    'South-America'=>['Eunectes murinus'],
    'Canada'=>['Ursus arctos x maritimus'],
    'Antarctica'=>['Spheniscidae'],
];

$result = [];
$firstanimals=[];
$secondanimals=[];

foreach ($animals as $value) {
	foreach ($value as $key => $ani) {
		 $arraywords=explode(' ', $ani);
		if (count($arraywords)==2){	
			$firstanimals[]=$arraywords[0];
			$secondanimals[]=$arraywords[1];
		}
		
	}
}

shuffle($secondanimals);

foreach ($firstanimals as $i => $value) {
		$firstanimals[$i] = $value . ' ' . $secondanimals[$i];
		
}

		echo "<pre>";
		print_r($firstanimals);
		echo "</pre>";

?>
