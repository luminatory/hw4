<?php
include 'function.php';
$cv = array (
		'Name' => 'Sergey Grigorov',
		$personal_data = array (
				'Job title' => spellCheck(),
				'birthday' => array (
						'28',
						'06',
						'1986'
				),
				'City' => 'Kharkiv',
				'Phone' => '+380663500648',
				'Email' => 'lumi.coriolan@gmail.com'
		),
		$positions = array (
				array (
						'title' => 'System Administrator',
						'period' => 'April 2015 – current time',
						'company name' => 'Oracle Corporation',
						'duties' => array (
								'1.Installation, configuration and maintenance of software components',
								'2.Troubleshooting and diagnosis to hardware/software failures, and providing resolutions',
								'3.Provided technical expertise for effectively supporting the software to consistently achieve high availability and performance.'
						)
				),
				array (
						'title' => 'Service Desk Shift Lead',
						'period' => 'December 2013 - April 2015',
						'company name' => 'TOA Technologies',
						'duties' => array (
								'1.Controling daily tasks performed by shift',
								'2.Reviewing and approving minor software configuration changes.',
								'3.Disaster Recovery and Maintenance operations'
						)
				),
				array (
						'title' => 'Service Desk Engineer',
						'period' => 'May 2012 - December 2013',
						'company name' => 'TOA Technologies',
						'duties' => array (
								'1.Technical investigation of incoming requests both internal.',
								'2.Hadling the problems with company services according to the existing procedures.',
								'3.Implementation of automation scripts for the internal usage.'
						)
				)
		)
);
$count = $personal_data ['birthday'];
$sum = array_sum ( $count );
$letterArray = array (
		'A',
		'E',
		'I',
		'О',
		'U',
		'Y'
);
$name = 'Sergey';
if (in_array ( $name [0], $letterArray ) && ($sum % 2) == 0) {
	$personal_data ['Job title'] = "Noob PHP";
} elseif (in_array ( $name [0], $letterArray ) && ($sum % 2) == 1) {
	$personal_data ['Job title'] = 'Intern PHP';
} elseif (! in_array ( $name [0], $letterArray ) && ($sum % 2) == 1) {
	$personal_data ['Job title'] = "Intern PHP developer";
} elseif (! in_array ( $name [0], $letterArray ) && ($sum % 2) == 0) {
	$personal_data ['Job title'] = "Junior PHP developer";
}
;
echo "<h1>";
echo $cv ['Name'];
echo "</h1>";
foreach ( $personal_data as $a => $b ) {
	if (is_array ( $b )) {
		$b = implode ( '-', $personal_data ['birthday'] );
	}
	echo "<ul>";
	echo "<li>$a: $b</li>";
	echo "</ul>";
};
foreach ( $positions as $position ) {
	echo "<br /> *************";
	foreach ( $position as $key => $value ) {
		if (is_array($value)){
			echo "<dt></dt><br /><dd><b>$key:</b> </dd>";
		}else echo "<dt></dt><br /><dd><b>$key:</b> $value </dd>";
		foreach ( $value as $key1 => $val1 ) {
			echo "<dt></dt><br /><dd>&nbsp;&nbsp;&nbsp;     $val1</dd>";
		}
	}
}
;