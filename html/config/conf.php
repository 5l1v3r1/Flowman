<?php

$HOSTNAME = $_SERVER['SERVER_NAME'];

$SHELL_IN_A_BOX = Array(
    'protocol' => 'http://',
    'hostname' => $HOSTNAME,
    'port' => 6725
);
$SHELL_IN_A_BOX_URL = $SHELL_IN_A_BOX['protocol'] . $SHELL_IN_A_BOX['hostname'] . ':' . $SHELL_IN_A_BOX['port'];


$TORRENT_CLIENT = Array(
    'protocol' => 'http://',
    'hostname' => $HOSTNAME,
    'password' => 'admin:admin@', // leave blank for password input
    'port' => '8080/gui'
);
$TORRENT_CLIENT_URL = $TORRENT_CLIENT['protocol'] . $TORRENT_CLIENT['password'] . $TORRENT_CLIENT['hostname'] . ':' . $TORRENT_CLIENT['port'];

$MEDIA_CLIENT = Array(
    'protocol' => 'http://',
    'hostname' => $HOSTNAME,
    'port' => '32400/web'
);
$MEDIA_CLIENT_URL = $MEDIA_CLIENT['protocol'] . $MEDIA_CLIENT['hostname'] . ':' . $MEDIA_CLIENT['port'];



$HD_QUANTITY = 3;

//HDXXX_LOCATION = 'LOCATION'
$HD0_LOCATION = '/';
$HD1_LOCATION = '/media/Elizabeth/';
$HD2_LOCATION = '/media/Margareth/';

$HD0_SPACE = Array(
    'total' => disk_total_space($HD0_LOCATION) / 1073741824,
    'free' => disk_free_space($HD0_LOCATION) / 1073741824,
    'used' => (disk_total_space($HD0_LOCATION) / 1073741824) - (disk_free_space($HD0_LOCATION) / 1073741824)
);


$HD1_SPACE = Array(
    'total' => disk_total_space($HD1_LOCATION) / 1073741824,
    'free' => disk_free_space($HD1_LOCATION) / 1073741824,
    'used' => (disk_total_space($HD1_LOCATION) / 1073741824) - (disk_free_space($HD1_LOCATION) / 1073741824)
);

$HD2_SPACE = Array(
    'total' => disk_total_space($HD2_LOCATION) / 1073741824,
    'free' => disk_free_space($HD2_LOCATION) / 1073741824,
    'used' => ((disk_total_space($HD2_LOCATION) / 1073741824) - (disk_free_space($HD2_LOCATION) / 1073741824))
);

$HD_TOTAL_SPACE = $HD0_SPACE['total'] + $HD1_SPACE['total'] + $HD2_SPACE['total'];
$HD_TOTAL_FREE_SPACE = $HD0_SPACE['free'] + $HD1_SPACE['free'] + $HD2_SPACE['free'];
$HD_TOTAL_USED_SPACE = $HD0_SPACE['used'] + $HD1_SPACE['used'] + $HD2_SPACE['used'];

/* for($i = 0; $i <= ($HD_QUANTITY - 1) ; $i++){
    $HD_TOTAL_SPACE = (${'HD' . $i . '_SPACE[\'total\']'})  + $HD_TOTAL_SPACE;
    $HD_TOTAL_FREE_SPACE = ${'HD' . $i . '_SPACE[\'free\'']} + $HD_TOTAL_FREE_SPACE;
    $HD_TOTAL_USED_SPACE = ${'HD' . $i . '_SPACE[\'used\']'} + $HD_TOTAL_USED_SPACE;
}*/


?>