<?php
	$str_browser_language = !empty($_SERVER['HTTP_ACCEPT_LANGUAGE']) ? strtok(strip_tags($_SERVER['HTTP_ACCEPT_LANGUAGE']), ',') : '';
	$str_browser_language = !empty($_GET['language']) ? $_GET['language'] : $str_browser_language;
	switch (substr($str_browser_language, 0,2))
	{
		case 'de':
			$str_language = 'de';
			break;
		case 'en':
			$str_language = 'en';
			break;
		default:
			$str_language = 'en';
	}
    
	$arr_available_languages = array();
	$arr_available_languages[] = array('str_name' => 'English', 'str_token' => 'en');
	$arr_available_languages[] = array('str_name' => 'Deutsch', 'str_token' => 'de');
    
	$str_available_languages = (string) '';
	foreach ($arr_available_languages as $arr_language)
	{
		if ($arr_language['str_token'] !== $str_language)
		{
			$str_available_languages .= '<a href="'.strip_tags($_SERVER['PHP_SELF']).'?language='.$arr_language['str_token'].'" lang="'.$arr_language['str_token'].'" xml:lang="'.$arr_language['str_token'].'" hreflang="'.$arr_language['str_token'].'">'.$arr_language['str_name'].'</a> | ';
		}
	}
	$str_available_languages = substr($str_available_languages, 0, -3);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head lang="<?php echo $str_language; ?>" xml:lang="<?php echo $str_language; ?>">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>MAMP PRO</title>
<style type="text/css">
    body {
        font-family: Arial, Helvetica, sans-serif;
        font-size: .9em;
        color: #000000;
        background-color: #FFFFFF;
        margin: 0;
        padding: 10px 20px 20px 20px;
    }

    samp {
        font-size: 1.3em;
    }

    a {
        color: #000000;
        background-color: #FFFFFF;
    }

    sup a {
        text-decoration: none;
    }

    hr {
        margin-left: 90px;
        height: 1px;
        color: #000000;
        background-color: #000000;
        border: none;
    }

    #logo {
        margin-bottom: 10px;
        margin-left: 28px;
    }

    .text {
        width: 80%;
        margin-left: 90px;
        line-height: 140%;
    }
</style>
</head>

<body>
    <p><img src="MAMP-PRO-Logo.png" id="logo" alt="MAMP PRO Logo" width="250" height="49" /></p>
<?php
function resh3($arg){
$arr = $arg;
$arr2 = array();
$arr3 = array();
for($i=0;$i<count($arr);$i++){
    $a = explode("->", $arr[$i]);
    array_push($arr2, $a);
}


/*for($i=0;$i<count($arr);$i++){
    array_push($arr3, $arr2[$i][0]);
    array_push($arr3, $arr2[$i][1]);
}
echo "<pre>"; print_r($arr3); echo "</pre>";
//////////////////////////////////////////////////////////////////////////////////////////////////////1
/*function p($arg,$arg2){
    $b = "нет";
    for($i = 1, $a = 0; $i<count($arg) && $a==0 ;$i++){
        if ($a == 0){
        if($arg2 == 1){
        if($arg[0]<$arg[$i]){
            $a = 1;
        } else if ($arg[0]>$arg[$i]){
            $a = 0;
        }
        } else if ($arg2 == 0) {
            if($arg[0]>$arg[$i]){
                $a = 1;
            } else if ($arg[0]<$arg[$i]){
                $a = 0;
            }
        }
        }
    }
    if ($a == 0){
        return $arg[0];
    } else {
        return $b;
    }
    }


    
    //////////////////////////////////////////////////////////////////////////////////////////////////2
        function pp($arg,$arg2,$arg3){
            
            $b = "нет";
            $a = 0;
    
            for($i = 0; $i<$arg2 && $a==0;$i++){ 
                if ($a == 0){
                if($arg3==1){
                if($arg[$arg2] < $arg[$i]){
                    $a = 1;
                }else if ($arg[$arg2]>$arg[$i]){
                    $a = 0;
                }
                } else if ($arg3==0){
                    if($arg[$arg2] > $arg[$i]){
                        $a = 1;
                    }else if ($arg[$arg2]<$arg[$i]){
                        $a = 0;
                    }
                }
                } 
            }
            if ($a == 0){
                for($i2 = $arg2+1; $i2<count($arg) && $a==0;$i2++){
                    
                    if ($a == 0){
                    if ($arg3==1){
                    if($arg[$arg2] < $arg[$i2]){
                        $a = 1;
                    }else if ($arg[$arg2]>$arg[$i2]){
                        $a = 0;
                    }
                    }else if ($arg3==0){
                        if($arg[$arg2] > $arg[$i2]){
                            $a = 1;
                        }else if ($arg[$arg2]<$arg[$i2]){
                            $a = 0;
                        }
                    }
                    } 
                }
            }
    
            if ($a == 0){
                return $arg[$arg2];
            } else {
                return $b;
            }
        
            }
    ///////////////////////////////////////////////////////////////////////////////////////////////////////3
    
            function ppp($arg,$arg2,$arg3){
                $b = "нет";
                for($i = 0, $a = 0; $i<$arg2 && $a==0 ;$i++){
                if ($a == 0){
                if ($arg3==1){
                if($arg[$arg2] < $arg[$i]){
                $a = 1;
                }else if ($arg[$arg2]>$arg[$i]){
                $a = 0;
                }
                }else if ($arg3==0){
                    if($arg[$arg2] > $arg[$i]){
                        $a = 1;
                        }else if ($arg[$arg2]<$arg[$i]){
                        $a = 0;
                        }
                }
                }
    
                }
    
    
    
                if ($a == 0){
                    return $arg[$arg2];
                } else {
                    return $b;
                }
                }
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////4
$x=1;
$y=0;
$arr4 = array();
if ($y==0){
    for ($i4 = 0, $a="нет"; $i4 <count($arr3) && $a=="нет";$i4++){
        if($i4 == 0){
            $a = p($arr3,$y);
        } else if ($i4 > 0 && $i4 < (count($arr3)-1)){
            $a = pp($arr3,$i4,$y);
        } else {
            $a = ppp($arr3,$i4,$y);
        }
    }
    }
array_push($arr4, $a);
if ($x==1){
    for ($i4 = 0, $a="нет"; $i4 <count($arr3) && $a=="нет";$i4++){
        if($i4 == 0){
            $a = p($arr3,$x);
        } else if ($i4 > 0 && $i4 < (count($arr3)-1)){
            $a = pp($arr3,$i4,$x);
        } else {
            $a = ppp($arr3,$i4,$x);
        }
    }
    }
array_push($arr4, $a);*/













for ($i2=0; $i2<count($arr2); $i2++){
$a = $arr2[$i2][0];
$b =$arr2[$i2][1];
$c = $b-$a;
for ($i1=1; $i1<$c; $i1++){
    array_splice($arr2[$i2], $i1, 0, $a+$i1);

}
}
for($i=0;$i<count($arr2);$i++){
    for($i4=0;$i4<count($arr2[$i]);$i4++){
    array_push($arr3, $arr2[$i][$i4]);
    }

}

echo "<pre>"; print_r($arr3); echo "</pre>";


}
/////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////
resh3(["0->2", "4->6"]);






?>
</body>
</html>
