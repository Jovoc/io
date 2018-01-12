<?php
    $ip = $_SERVER["REMOTE_ADDR"];
    $ip = '218.17.23.61';
    echo "$ip<br/>";
    $url="http://api.map.baidu.com/location/ip?ip=$ip&ak=xtHEuiIPQtXSwsqwu5sIa9qvsvTVP7zr";
    $html = file_get_contents($url);

    

    echo $html;
    $obj = json_decode($html);
    echo '<br/>------------------<br/>';
    echo $obj->content->address_detail->city;
    echo '<br/>------------------<br/>';
    echo $obj->address;