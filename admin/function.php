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

	function updateData($table, $data, $condition) {
		$filed = '';
		if(is_array($data)) {
			$i = 0;
			foreach ($data as $key => $value) {
				if ($key !== 'addNew') {
					$i++;
					if ($i === 1) {
						$filed .= $key."='".$value."'";
					} else {
						$filed .= ",".$key."='".$value."'";
					};
				};
			};
		};


		$sqlUpdate = "UPDATE $table SET $filed $condition";
		return $sqlUpdate;
	};
 ?>