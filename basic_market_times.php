<?PHP


$datetime = new DateTime();
$dt = (string)$datetime->format('i');
$sizemodifier = $_SESSION['screen_width'] / 10 *2;
$datetime = new DateTime();
$dt = (string)$datetime->format('h');
$offset = $dt;
//$first_td = (60 - $dt) * $sizemodifierMinute; //eg 15 minutes



 // tobe how much time until hour mark - e.g. 30 min, times sizemodifier


 //echo '<td style="background-color:blue;" width="'.$first_td.'">';
 echo '<BR><BR>';

 $marketname['NZX']['open'] = 13; $marketname['NZX']['close'] = 19.75; $marketname['NZX']['color'] = 'gray'; 
 $marketname['sydney']['open'] = 15; $marketname['sydney']['close'] = 21; $marketname['sydney']['color'] = 'gray';
 $marketname['tokyo']['open'] = 16; $marketname['tokyo']['close'] = 22; $marketname['tokyo']['color'] = 'yellow';
 $marketname['singapore']['open'] = 17; $marketname['singapore']['close'] = 1; $marketname['singapore']['color'] = 'yellow';//
 $marketname['HK']['open'] = 17.5; $marketname['HK']['close'] = 0; $marketname['HK']['color'] = 'yellow';//
 $marketname['shanghai']['open'] = 17.5; $marketname['shanghai']['close'] = 23; $marketname['shanghai']['color'] = 'yellow';
 $marketname['asian_unk']['open'] = 19.75; $marketname['asian_unk']['close'] = 1; $marketname['asian_unk']['color'] = 'yellow';//
 $marketname['moscow']['open'] = 22.75; $marketname['moscow']['close'] = 8; $marketname['moscow']['color'] = 'brown';//
 $marketname['frankfurt']['open'] = 23; $marketname['frankfurt']['close'] = 8.5; $marketname['frankfurt']['color'] = 'lightgreen';//
 $marketname['zurich']['open'] = 0; $marketname['zurich']['close'] = 8.5;$marketname['zurich']['color'] = 'lightgreen';
 $marketname['london']['open'] = 0; $marketname['london']['close'] = 8.5;$marketname['london']['color'] = 'lightgreen';
 $marketname['NYSENASDAQ']['open'] = 6.5; $marketname['NYSENASDAQ']['close'] = 13;$marketname['NYSENASDAQ']['color'] = 'blue';
 $marketname['CHX']['open'] = 6.5; $marketname['CHX']['close'] = 13;$marketname['CHX']['color'] = 'blue';
 $marketname['TSE']['open'] = 6.5; $marketname['TSE']['close'] = 13;$marketname['TSE']['color'] = 'blue';
 $marketname['brazil']['open'] = 5; $marketname['brazil']['close'] = 13;$marketname['brazil']['color'] = 'blue';


 //$datetime = new DateTime();
 //$dt = (string)$datetime->format('Hi');
//echo '<div style="width: 100%; margin: 0 auto;display: inline-block;"><div style="margin-left: '. $dt.'px;font-size: 14px; color: black; border: 1px solid black;margin-bottom: 2px;">';

echo '<div style ="width: 100%;   overflow: auto; scrollbar-base-color:gray;">'; $k =0;
$list = array_keys($marketname);
 foreach($marketname as $indmkt){
//echo $var;
    if($indmkt['open'] > 17 && $indmkt['close'] < 8.5) { $indmkt['close'] = $indmkt['close'] +24;  }
    $size= abs($indmkt['open'] - $indmkt['close']);
    $newsize = $size* $sizemodifier;
	$newoffset =$indmkt['open'] * $sizemodifier;//* $modifer;
	$datetime = new DateTime();
     $dt = (string)$datetime->format('Hi');
    echo '<div style="width: 100%; margin: 0 auto;display: inline-block;"><div style="margin-left: '.$newoffset.'px;font-size: 14px; color: black; width:'.$newsize.'px; border: 1px solid black; background-color: '.$indmkt['color'].';margin-bottom: 2px;">';
    //print($indmkt);
    echo $indmkt['open'], ' - ', $list[$k];
    echo '</div></div>';$k++;
 }
 echo "</div>";
