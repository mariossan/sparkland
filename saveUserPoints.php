<?php  
/*recepcion de datos de puntos */
$data 	= $_POST;
$points = 0;

if ( isset( $data['points'] ) ) {
	/*permite pasar para asignacion de puntos*/
	$points = base64_decode( $data['points'] );
} else {
	echo json_encode(['status' => 'error']);
	die();
}

/*asignacion a variable de session para que sean mostrados*/
session_start();

$_SESSION['points'] = $points;

echo json_encode(['status' => 'success']);
die();