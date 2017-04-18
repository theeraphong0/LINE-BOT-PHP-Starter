  require("phpMQTT.php");
  $host = "m13.cloudmqtt.com"; 
  $port = 14476;
  $username = "xwspenyh"; 
  $password = "GoKe-ybHgMXi"; 
  $message = "Hello CloudMQTT!";

  //MQTT client id to use for the device. "" will generate a client id automatically
  $mqtt = new phpMQTT($host, $port, "ClientID".rand()); 

  if ($mqtt->connect(true,NULL,$username,$password)) {
    $mqtt->publish("topic",$message, 0);
    $mqtt->close();
  }else{
    echo "Fail or time out<br />";
  }
