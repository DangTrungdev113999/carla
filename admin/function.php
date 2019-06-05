<?php 
	function insertData($table, $data) {
		$val = '';
		$filed = '';
		if(is_array($data)) {
			$i = 0;
			foreach ($data as $key => $value) {
				if ($key !== 'addNew') {
					$i++;
					if ($i === 1) {
						$filed .= $key;
						$val .= "'".$value."'";
					} else {
						$filed .= ",".$key;
						$val .= ",'".$value."'";
					};
				};
			};
		};
		$sqlInsert = "INSERT INTO $table($filed) VALUES($val)";
		return $sqlInsert;
	};

	// function updateData($table, $data, $id) {
	// 	$val = [];
	// 	$filed = [];
	// 	if(is_array($data)) {
	// 		$i = 0;
	// 		foreach ($data as $key => $value) {
	// 			if ($key !== 'addNew') {
	// 				$i++;
	// 				if ($i === 1) {
	// 					$filed .= "'".$key."'";
	// 					$val .= "'".$value."'";
	// 				} else {
	// 					$filed .= ",'".$key."'";
	// 					$val .= ",'".$value."'";
	// 				};
	// 			};
	// 		};
	// 	};

	// 	$update = '';
	// 	for($i = 0; $i <+ 4; $i++) {
	// 		$update .= $filed[$i] = $val[$i];
	// 	};

	// 	$sqlUpdate = "UPDATE $table SET $update WHERE id = $id";
	// 	return $sqlUpdate;
	// }
 ?>