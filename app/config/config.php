<?php
  $ini = parse_ini_file(str_replace('\config', '\app.ini', dirname(__FILE__)));

//Database params
  define('DB_USER', $ini['db_user']);
  define('DB_PASS', $ini['db_password']);
  define('DB_NAME', $ini['app_root'].$ini['db_name']);

  //APPROOT
  define('APPROOT', dirname(dirname(__FILE__)));


  //URLROOT (Dynamic Links)
  define('URLROOT', 'http://localhost/BenUniWork');

  //Sitename
  define('SITENAME', 'MyUniCourseWork');