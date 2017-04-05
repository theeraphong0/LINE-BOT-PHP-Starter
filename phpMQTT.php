  <?php

  require("phpMQTT.php");

  $host = "m13.cloudmqtt.com"; 
  $port = 14476;
  $username = "xwspenyh"; 
  $password = "GoKe-ybHgMXi"; 

  $mqtt = new phpMQTT($host, $port, "ClientID".rand()); 

  if(!$mqtt->connect(true,NULL,$username,$password)){
    exit(1);
  }

  //currently subscribed topics
  $topics['topic'] = array("qos"=>0, "function"=>"procmsg");
  $mqtt->subscribe($topics,0);

  while($mqtt->proc()){        
  }

  $mqtt->close();
  function procmsg($topic,$msg){
    echo "Msg Recieved: $msg";
  }
echo "HELLO World";
?> 
