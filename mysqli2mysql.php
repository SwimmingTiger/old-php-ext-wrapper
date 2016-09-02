<?php
#通过mysqli扩展实现mysql扩展的API

function mysql_affected_rows($conn = null) {
	if ($conn === null) {
		$conn = mysql_connect();
	}
	
	return mysqli_affected_rows($conn);
}


function mysql_client_encoding($conn = null) {
	if ($conn === null) {
		$conn = mysql_connect();
	}
	
	return mysqli_character_set_name($conn);
}

function mysql_close($conn = null) {
	if ($conn === null) {
		$conn = mysql_connect();
	}
	
	return mysqli_close($conn);
}

function mysql_connect ($server = null, $user = null, $pass = null) {
	static $conn = null;
	
	if ($server === null) {
		if ($conn !== null) {
			return $conn;
		} else {
			return mysqli_connect(DB_HOST, DB_USER, DB_PASSWD);
		}
	} else {
		$conn = mysqli_connect ($server, $user, $pass);
		return $conn;
	}
}

#mysql_create_db
#废弃

function mysql_data_seek($rs, $offset) {
	return mysqli_data_seek($rs, $offset);
}

#mysql_db_name
#废弃

#mysql_db_query
#废弃

#mysql_drop_db
#废弃

function mysql_errno($conn = null) {
	if ($conn === null) {
		$conn = mysql_connect();
	}
	
	return mysqli_errno($conn);
}

function mysql_error($conn = null) {
	if ($conn === null) {
		$conn = mysql_connect();
	}
	
	return mysqli_error($conn);
}

function mysql_escape_string($str) {
	if ($conn === null) {
		$conn = mysql_connect();
	}
	
	return mysqli_real_escape_string($conn, $str);
}

function mysql_fetch_array($rs, $type = MYSQLI_BOTH) {
	return mysqli_fetch_array($rs, $type);
}

function mysql_fetch_assoc($rs) {
	return mysqli_fetch_assoc($rs);
}

function mysql_fetch_field($rs, $offset = 0) {
	return mysqli_fetch_field_direct($rs, $offset);
}

function mysql_fetch_lengths($rs) {
	return mysqli_fetch_lengths($rs);
}

function mysql_fetch_object($rs) {
	return mysqli_fetch_object($rs);
}

function mysql_fetch_row($rs) {
	return mysqli_fetch_row($rs);
}

function mysql_field_flags($rs, $offset) {
	$field = mysqli_fetch_field_direct($rs, $offset);
	return $field['flags'];
}

function mysql_field_len($rs, $offset) {
	$field = mysqli_fetch_field_direct($rs, $offset);
	return $field['length'];
}

function mysql_field_name($rs, $offset) {
	$field = mysqli_fetch_field_direct($rs, $offset);
	return $field['name'];
}

function mysql_field_seek($rs, $offset) {
	return mysqli_field_seek($rs, $offset);
}

function mysql_field_table($rs, $offset) {
	$field = mysqli_fetch_field_direct($rs, $offset);
	return $field['table'];
}

function mysql_field_type($rs, $offset) {
	$field = mysqli_fetch_field_direct($rs, $offset);
	return $field['type'];
}

function mysql_free_result($rs) {
	return mysqli_free_result($rs);
}

function mysql_get_client_info() {
	$conn = mysql_connect();
	return mysqli_get_client_info($conn);
}

function mysql_get_host_info($conn = null) {
	if ($conn === null) {
		$conn = mysql_connect();
	}
	
	return mysqli_get_host_info($conn);
}

function mysql_get_proto_info($conn = null) {
	if ($conn === null) {
		$conn = mysql_connect();
	}
	
	return mysqli_get_proto_info($conn);
}

function mysql_get_server_info($conn = null) {
	if ($conn === null) {
		$conn = mysql_connect();
	}
	
	return mysqli_get_server_info($conn);
}

function mysql_info($conn = null) {
	if ($conn === null) {
		$conn = mysql_connect();
	}
	
	return mysqli_info($conn);
}

function mysql_insert_id($conn = null) {
	if ($conn === null) {
		$conn = mysql_connect();
	}
	
	return mysqli_insert_id($conn);
}

#mysql_list_dbs
#废弃

#mysql_list_fields
#废弃

#mysql_list_processes
#废弃

#mysql_list_tables
#废弃

function mysql_num_fields($rs) {
	return mysqli_num_fields($rs);
}

function mysql_num_rows($rs) {
	return mysqli_num_rows($rs);
}

function mysql_pconnect ($server = null, $user = null, $pass = null) {
	if ($server === null) {
		return mysqli_connect('p:' . DB_HOST, DB_USER, DB_PASSWD);
	} else {
		return mysqli_connect ('p:' . $server, $user, $pass);
	}
}

function mysql_ping($conn = null) {
	if ($conn === null) {
		$conn = mysql_connect();
	}
	
	return mysqli_ping($conn);
}

function mysql_query($query, $conn = null) {
	if ($conn === null) {
		$conn = mysql_connect();
	}
	
	return mysqli_query($conn, $query);
}

function mysql_real_escape_string($str, $conn = null) {
	if ($conn === null) {
		$conn = mysql_connect();
	}
	
	return mysqli_real_escape_string($conn, $str);
}

#mysql_result
#废弃

function mysql_select_db($dbname, $conn = null) {
	if ($conn === null) {
		$conn = mysql_connect();
	}
	
	return mysqli_select_db($conn, $dbname);
}

function mysql_set_charset($charset, $conn = null) {
	if ($conn === null) {
		$conn = mysql_connect();
	}
	
	return mysqli_set_charset($conn, $charset);
}

function mysql_stat($conn = null) {
	if ($conn === null) {
		$conn = mysql_connect();
	}
	
	return mysqli_stat($conn);
}

#mysql_tablename
#废弃

function mysql_thread_id($conn = null) {
	if ($conn === null) {
		$conn = mysql_connect();
	}
	
	return mysqli_thread_id($conn);
}

#mysql_unbuffered_query
#废弃
