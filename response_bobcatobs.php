<?php
include("connection.php");
 
$params = $_REQUEST;

$action = isset($params['action']) && $params['action'] !='' ? $params['action'] : 'list';

$start_date = isset($params['start_date']) && $params['start_date'] !='' ? $params['start_date'] : 'none';
$end_date = isset($params['end_date']) && $params['end_date'] !='' ? $params['end_date'] : 'none';
$station = isset($params['station']) && $params['station'] !='' ? $params['station'] : 'none';
$param = isset($params['param']) && $params['param'] !='' ? $params['param'] : 'none';
$f_param = 'f_'.$param;
$filter_suspect = isset($params['filter_suspect']) && $params['filter_suspect'] !='' ? $params['filter_suspect'] : 'none';
$obs_range_start = isset($params['obs_range_start']) && $params['obs_range_start'] !='' ? $params['obs_range_start'] : 'none';
$obs_range_stop = isset($params['obs_range_stop']) && $params['obs_range_stop'] !='' ? $params['obs_range_stop'] : 'none';

$sql_filter_suspect = '';
if ($filter_suspect == 0) {
  $sql_filter_suspect = $f_param.' like \'<0>%\'';
}
else {
  $sql_filter_suspect = $f_param.' like \'<1>%\'';
}

$sql_obs_range = '';
//echo $obs_range_start;
if ($obs_range_start != none) {
  $sql_obs_range = 'and '.$param.' > '.$obs_range_start.' and '.$param.' < '.$obs_range_stop;
}

$obsCls = new Obs();

//echo $start_date;
//echo $station;
//echo $param;
//echo $f_param;
 
switch($action) {
 case 'get':
  $obsCls->getObs();
 break;
 default:
 return;
}
 
 
class Obs {
  protected $conn;
  protected $data = array();
  function __construct() {

	$db = new dbObj();
	$connString =  $db->getConnstring();
    $this->conn = $connString;
  }
  
  function getObs() {
    global $start_date, $end_date, $station, $param, $f_param, $sql_filter_suspect, $sql_obs_range;
    $sql = "SELECT m_date,".$param." FROM flapp_obs where dataset_id = '".$station."' and m_date >= '".$start_date."' and m_date <= '".$end_date."' and ".$param." is not null ".$sql_obs_range." and (".$sql_filter_suspect.") order by m_date";
//echo $sql;
	$queryRecords = pg_query($this->conn, $sql) or die("error to fetch obs data");
	$data = pg_fetch_all($queryRecords);
	echo json_encode($data);
  }
}
?>
