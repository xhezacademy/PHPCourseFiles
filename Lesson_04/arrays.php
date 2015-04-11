<?php
/**
 * The Arrays.
 * The Whole Arrays.
 * And Nothing But Arrays.
 */
$vargu = ['Fatlind', 'Nderim', 'Ersan',
		  'Guri', 'Ardian', 'Dinfort'];
// echo count($vargitu;
// echo 'Ne klase jane: ' . implode(', ', $vargu);
// var_dump(in_array('Xhavit', $vargu));

// Overwrite Arr Element
$vargu[2] = 'Samir';

// Remove Last Element - LIFO
array_pop($vargu);
// var_dump($vargu);

// Add Element to the end of array
array_push($vargu, 'Bossi');
// var_dump($vargu);

// remove array el at index
unset($vargu[3]);
// var_dump($vargu);

sort($vargu);
// var_dump($vargu);

$num = [5, 3, 7, 8, 1];
sort($num);
// var_dump($num);

// Array Merge
$emrat = ['Dinfort', 'Ardian', 'Fatlind'];
$mbiemrat = ['Guri', 'Ukaj', 'Elshani'];
$rezulti = array_merge($emrat, $mbiemrat);
// var_dump($rezulti);

// 2d - Dimensional Arrays
$array2d = [
		'Arian' => 'Xhezair',
		'Fatlind' => 'Elshani',
		'Valon' => 'Luqi',
		6 => 'Xhavit',
	];
// echo $_POST['name'];
// echo $array2d['Arian'];


// MultiDimensioanl Arrays
$posts = [
		'isa' => ['title' => 'Vdiq Isa Mustafa',
			'body'=> 'Po vallah kish dek e honger.'],
		array('title' => 'Pordhi nshishe hashimi',
			'body' => 'Ou hashim e baba i kombit.'),
	];
echo $posts['isa']['title'];
