<?php
require("phpMQTT.php");
	
$mqtt = new phpMQTT("m13.cloudmqtt.com", 14476, "phpMQTT Pub Example"); //Change client name to something unique
if ($mqtt->connect()) {
	$mqtt->publish("bluerhinos/phpMQTT/examples/publishtest","Hello World! at ".date("r"),0);
	$mqtt->close();
}
?>
