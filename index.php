<?php
class RequestHandler {
	public static function GetRequest($request) {
		$result = explode("/", $request);
		return array("class" => $result[0], "method" => $result[1], "parameter" => $result[2]);
	}
}

if(isset($_GET["request"])) {
	$request = RequestHandler::GetRequest($_GET["request"]);
}else{
	$request = null;
}
?>