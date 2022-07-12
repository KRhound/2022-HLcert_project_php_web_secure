<?php
  //password hardcode
  $configVars = parse_ini_file('C:\Bitnami\wampstack-8.1.7-0\php\php.ini', TRUE);

  $connect = mysqli_connect($configVars['Database']['host'], $configVars['Database']['username'],
                            $configVars['Database']['passwd'], $configVars['Database']['dbname'],)
                            or die("connect failed");

  if (mysqli_connect_errno()) {
    $error_msg = "Connect failed: " + mysqli_connect_error() + "\n";
    error_log ($error_msg, 3, "C:\Bitnami\wampstack-8.1.7-0\apache2\logs\error.log");
    exit();
  }

  $connect->set_charset("utf8");
?>
