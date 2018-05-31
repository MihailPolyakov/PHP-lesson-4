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

foreach ($animals as $value) {
	foreach ($value as $ani) {
		/*if (str_word_count($ani)==2) */
		if (count(explode(' ', $ani))==2)
		{
			$result[]=$ani;
		}
	}
}


echo "<pre>";
print_r($result);
echo "</pre>";


$firstanimals=[];
$secondanimals=[];

foreach ($result as $value) {
	$put = explode(' ', $value);
	$firstanimals[] = $put[0];
	$secondanimals[] = $put[1];
}

shuffle($secondanimals);

		echo "<pre>";
		print_r($firstanimals);
		echo "</pre>";


foreach ($firstanimals as $i => $value) {
		$firstanimals[$i] = $value . ' ' . $secondanimals[$i];
		
}

		echo "<pre>";
		print_r($firstanimals);
		echo "</pre>";

?>
