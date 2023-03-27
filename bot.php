<?php
date_default_timezone_set("Asia/Baghdad");
error_reporting(0);
function bot($method, $datas = []) {
$token = file_get_contents("token");
$url = "https://api.telegram.org/bot$token/" . $method;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $datas);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$res = curl_exec($ch);
curl_close($ch);
return json_decode($res, true);
}
function getupdates($up_id) {
$get = bot('getupdates', ['offset' => $up_id]);
return end($get['result']);
}
$botuser = "@" . bot('getme', ['bot']) ["result"]["username"];
file_put_contents("_ad.txt", $botuser);
function stats($nn) {
	$st = "";
	$x = shell_exec("pm2 show $nn");
	if (preg_match("/online/", $x)) {
		$st = "run";
	}
	else {
		$st = "stop";
	}
	return $st;
}
function states($g) {
$st = "";
$x = shell_exec("pm2 show $g");
if(preg_match("/online/", $x)) {
$st = "run";
}else{
$st = "stop";
}
return $st;
}
function countUsers($u = "2", $t = "2") {
if ($t == "2") {
$users = explode("\n", file_get_contents("users"));
$list = "";
$i = 1;
foreach ($users as $user) {
if ($user != "") {
$list = $list . "\n$i  ➧ @$user";
$i++;
}
}
if ($list == "") {
return "There is no username in the list";
}
else {
return $list;
}
}
if ($t == "1") {
$users = explode("\n", $u);
$list = "";
$i = 1;
foreach ($users as $user) {
if ($user != "") {
$list = $list . "\n$i  ➧ @$user";
$i++;
}
}
if ($list == "") {
return "There is no username in the list";
}
else {
return $list;
}
}
}
 $last_up = $last_up;
function ph($ph, $group) {
	global $last_up;
	$step = 0;
		bot('sendMessage', ['chat_id' => $group, 'text' => "-Wait ...."]);
		if (file_exists('madeline.php')){
			require_once 'madeline.php';
		}
    define('MADELINE_BRANCH', 'deprecated');
	unlink("a.madeline");
	unlink("a.madeline.lock");
	$settings['app_info']['api_id'] = 13167118;
	$settings['app_info']['api_hash'] = '6927e2eb3bfcd393358f0996811441fd';
	$MadelineProto = new \danog\MadelineProto\API('a.madeline',$settings);
	try {
		$vv = $MadelineProto->phone_login($ph);
$info = json_decode(file_get_contents('info.json'),true);
$info["number1"] = "$ph";
file_put_contents('info.json', json_encode($info));
		echo json_encode($vv);
		bot('sendMessage', ['chat_id' => $group, 'text' => "⌁ Checker number - 1 - \n⌁ Send Code Phone Now \n⌁ Ex : - 67467 -"]);
		$step = 1;
	}
	catch(Exception $e) {
		bot('sendMessage', ['chat_id' => $group, 'text' => "⌁ Checker number - 1 - ،\n⌁ I can't Login"]);
		return false;
shell_exec("php step.php");	}
	
	while (1) {
$get_up = getupdates($last_up + 1);
$last_up = $get_up['update_id'];
if ($get_up) {
	$message = $get_up['message'];
	$userID = $message['from']['id'];
	$chat_id = $message['chat']['id'];
	$text = $message['text'];
	if ($chat_id == $group) {
	if ($text) {
	if ($step == 2) {
try {
$authorization = $MadelineProto->complete2falogin($text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - 1 - \n⌁ Done Login ✅"]);
break;
}
catch(Exception $e) {
echo $e->getMessage();
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Error" . $e->getMessage() ]);
break;
}
$authorization = $MadelineProto->complete2falogin($text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - 1 - \n⌁ Done Login ✅"]);
break;
}
if ($step == 1) {
try {
$authorization = $MadelineProto->completePhoneLogin($text);
if ($authorization['_'] === 'account.password') {
bot('sendmessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - 1 - \n⌁ Send password \n⌁ Ex : - karrar- ", ]);
$step = 2;
}
else {
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - 1 - \n⌁ Done Login ✅"]);
break;
}
}
catch(Exception $e) {
echo $e->getMessage();
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Error" . $e->getMessage() ]);
break;
}
}
}
}
}
sleep(1);
}
}
$step = "";
$last_up = $last_up;
function p2($ph, $group) {
	global $last_up;
	$step = 0;
		bot('sendMessage', ['chat_id' => $group, 'text' => "-Wait ...."]);
		if (file_exists('madeline.php')){
			require_once 'madeline.php';
		}
    define('MADELINE_BRANCH', 'deprecated');
	unlink("b.madeline");
	unlink("b.madeline.lock");
	$settings['app_info']['api_id'] = 13167118;
	$settings['app_info']['api_hash'] = '6927e2eb3bfcd393358f0996811441fd';
	$MadelineProto = new \danog\MadelineProto\API('b.madeline',$settings);
	try {
		$vv = $MadelineProto->phone_login($ph);
$info = json_decode(file_get_contents('info.json'),true);
$info["number2"] = "$ph";
file_put_contents('info.json', json_encode($info));
		echo json_encode($vv);
		bot('sendMessage', ['chat_id' => $group, 'text' => "⌁ Checker number - 2 - \n⌁ Send Code Phone Now \n⌁ Ex : - 67467 -"]);
		$step = 1;
	}
	catch(Exception $e) {
		bot('sendMessage', ['chat_id' => $group, 'text' => "⌁ Checker number - 2 - ،\n⌁ I can't Login"]);
		return false;
	}
	while (1) {
$get_up = getupdates($last_up + 1);
$last_up = $get_up['update_id'];
if ($get_up) {
	$message = $get_up['message'];
	$userID = $message['from']['id'];
	$chat_id = $message['chat']['id'];
	$text = $message['text'];
	if ($chat_id == $group) {
	if ($text) {
	if ($step == 2) {
try {
$authorization = $MadelineProto->complete2falogin($text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - 2 - \n⌁ Done Login  ✅"]);
break;
}
catch(Exception $e) {
echo $e->getMessage();
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Error" . $e->getMessage() ]);
break;
}
$authorization = $MadelineProto->complete2falogin($text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - 2 - \n⌁ Done Login  ✅"]);
break;
	}
if ($step == 1) {
try {
$authorization = $MadelineProto->completePhoneLogin($text);
if ($authorization['_'] === 'account.password') {
bot('sendmessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - 2 - \n⌁ Send password \n⌁ Ex : - karrar- ", ]);
$step = 2;
}
else {
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - 2 - \n⌁ Done Login  ✅"]);
break;
}
}
catch(Exception $e) {
echo $e->getMessage();
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Error" . $e->getMessage() ]);
break;
}
}
}
}
}
sleep(1);
}
}
$step = "";
 $last_up = $last_up;
function DH($ph, $group) {
	global $last_up;
	$step = 0;
		bot('sendMessage', ['chat_id' => $group, 'text' => "-Wait ...."]);
		if (file_exists('madeline.php')){
			require_once 'madeline.php';
		}
    define('MADELINE_BRANCH', 'deprecated');
	unlink("c.madeline");
	unlink("c.madeline.lock");
	$settings['app_info']['api_id'] = 13167118;
	$settings['app_info']['api_hash'] = '6927e2eb3bfcd393358f0996811441fd';
	$MadelineProto = new \danog\MadelineProto\API('c.madeline', $settings);
	try {
		$vv = $MadelineProto->phone_login($ph);
$info = json_decode(file_get_contents('info.json'),true);
$info["number3"] = "$ph";
file_put_contents('info.json', json_encode($info));
		echo json_encode($vv);
		bot('sendMessage', ['chat_id' => $group, 'text' => "⌁ Checker number - 3 - \n⌁ Send Code Phone Now \n⌁ Ex : - 67467 -"]);
		$step = 1;
	}
	catch(Exception $e) {
		bot('sendMessage', ['chat_id' => $group, 'text' => "⌁ Checker number - 3 - ،\n⌁ I can't Login"]);
		return false;
	}
	while (1) {
$get_up = getupdates($last_up + 1);
$last_up = $get_up['update_id'];
if ($get_up) {
	$message = $get_up['message'];
	$userID = $message['from']['id'];
	$chat_id = $message['chat']['id'];
	$text = $message['text'];
	if ($chat_id == $group) {
	if ($text) {
	if ($step == 2) {
try {
$authorization = $MadelineProto->complete2falogin($text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - 3 - \n⌁ Done Login  ✅"]);
break;
}
catch(Exception $e) {
echo $e->getMessage();
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Error" . $e->getMessage() ]);
break;
}
$authorization = $MadelineProto->complete2falogin($text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - 3 - \n⌁ Done Login  ✅"]);
break;
	}
if ($step == 1) {
try {
$authorization = $MadelineProto->completePhoneLogin($text);
if ($authorization['_'] === 'account.password') {
bot('sendmessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - 3 - \n⌁ Send password \n⌁ Ex : - karrar- ", ]);
$step = 2;
}
else {
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - 3 - \n⌁ Done Login  ✅"]);
break;
}
}
catch(Exception $e) {
echo $e->getMessage();
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Error" . $e->getMessage() ]);
break;
}
}
}
}
}
sleep(1);
}
}
$step = "";
 $last_up = $last_up;
function p4($ph, $group) {
	global $last_up;
	$step = 0;
		bot('sendMessage', ['chat_id' => $group, 'text' => "-Wait ...."]);
		if (file_exists('madeline.php')){
			require_once 'madeline.php';
		}
    define('MADELINE_BRANCH', 'deprecated');
	unlink("d.madeline");
	unlink("d.madeline.lock");
	$settings['app_info']['api_id'] = 13167118;
	$settings['app_info']['api_hash'] = '6927e2eb3bfcd393358f0996811441fd';
	$MadelineProto = new \danog\MadelineProto\API('d.madeline', $settings);
	try {
		$vv = $MadelineProto->phone_login($ph);
$info = json_decode(file_get_contents('info.json'),true);
$info["number4"] = "$ph";
file_put_contents('info.json', json_encode($info));
		echo json_encode($vv);
		bot('sendMessage', ['chat_id' => $group, 'text' => "⌁ Checker number - 4 - \n⌁ Send Code Phone Now \n⌁ Ex : - 67467 -"]);
		$step = 1;
	}
	catch(Exception $e) {
		bot('sendMessage', ['chat_id' => $group, 'text' => "⌁ Checker number - 4 - ،\n⌁ I can't Login"]);
		return false;
	}
	while (1) {
$get_up = getupdates($last_up + 1);
$last_up = $get_up['update_id'];
if ($get_up) {
	$message = $get_up['message'];
	$userID = $message['from']['id'];
	$chat_id = $message['chat']['id'];
	$text = $message['text'];
	if ($chat_id == $group) {
	if ($text) {
	if ($step == 2) {
try {
$authorization = $MadelineProto->complete2falogin($text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - 4 - \n⌁ Done Login  ✅"]);
break;
}
catch(Exception $e) {
echo $e->getMessage();
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Error" . $e->getMessage() ]);
break;
}
$authorization = $MadelineProto->complete2falogin($text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - 4 - \n⌁ Done Login  ✅"]);
break;
	}
if ($step == 1) {
try {
$authorization = $MadelineProto->completePhoneLogin($text);
if ($authorization['_'] === 'account.password') {
bot('sendmessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - 4 - \n⌁ Send password \n⌁ Ex : - karrar-", ]);
$step = 2;
}
else {
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - 4 - \n⌁ Done Login  ✅"]);
break;
}
}
catch(Exception $e) {
echo $e->getMessage();
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Error" . $e->getMessage() ]);
break;
}
}
}
}
}
sleep(1);
}
}
$step = "";
 $last_up = $last_up;
function p9($ph, $group) {
	global $last_up;
	$step = 0;
		bot('sendMessage', ['chat_id' => $group, 'text' => "-Wait ...."]);
		if (file_exists('madeline.php')){
			require_once 'madeline.php';
		}
	define('MADELINE_BRANCH', 'deprecated');
	unlink("7.madeline");
	unlink("7.madeline.lock");
	$settings['app_info']['api_id'] = 13167118;
	$settings['app_info']['api_hash'] = '6927e2eb3bfcd393358f0996811441fd';
	$MadelineProto = new \danog\MadelineProto\API('7.madeline', $settings);
	try {
		$vv = $MadelineProto->phone_login($ph);
$info = json_decode(file_get_contents('info.json'),true);
$info["number7"] = "$ph";
file_put_contents('info.json', json_encode($info));
		echo json_encode($vv);
		bot('sendMessage', ['chat_id' => $group, 'text' => "⌁ Checker number - 7 - \n⌁ Send Code Phone Now \n⌁ Ex : - 67467 -"]);
		$step = 1;
	}
	catch(Exception $e) {
		bot('sendMessage', ['chat_id' => $group, 'text' => "⌁ Checker number - 7 - ،\n⌁ I can't Login"]);
		return false;
	}
	while (1) {
$get_up = getupdates($last_up + 1);
$last_up = $get_up['update_id'];
if ($get_up) {
	$message = $get_up['message'];
	$userID = $message['from']['id'];
	$chat_id = $message['chat']['id'];
	$text = $message['text'];
	if ($chat_id == $group) {
	if ($text) {
	if ($step == 2) {
try {
$authorization = $MadelineProto->complete2falogin($text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - 7 - \n⌁ Done Login  ✅"]);
break;
}
catch(Exception $e) {
echo $e->getMessage();
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Error" . $e->getMessage() ]);
break;
}
$authorization = $MadelineProto->complete2falogin($text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - 7 - \n⌁ Done Login  ✅"]);
break;
	}
if ($step == 1) {
try {
$authorization = $MadelineProto->completePhoneLogin($text);
if ($authorization['_'] === 'account.password') {
bot('sendmessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - 7 - \n⌁ Send password \n⌁ Ex : - karrar-", ]);
$step = 2;
}
else {
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - 7 - \n⌁ Done Login  ✅"]);
break;
}
}
catch(Exception $e) {
echo $e->getMessage();
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Error" . $e->getMessage() ]);
break;
}
}
}
}
}
sleep(1);
}
}
$step = "";
 $last_up = $last_up;
function p5($ph, $group) {
	global $last_up;
	$step = 0;
		bot('sendMessage', ['chat_id' => $group, 'text' => "-Wait ...."]);
		if (file_exists('madeline.php')){
			require_once 'madeline.php';
		}
    define('MADELINE_BRANCH', 'deprecated');
	unlink("e.madeline");
	unlink("e.madeline.lock");
	$settings['app_info']['api_id'] = 13167118;
	$settings['app_info']['api_hash'] = '6927e2eb3bfcd393358f0996811441fd';
	$MadelineProto = new \danog\MadelineProto\API('e.madeline', $settings);
	try {
		$vv = $MadelineProto->phone_login($ph);
$info = json_decode(file_get_contents('info.json'),true);
$info["number5"] = "$ph";
file_put_contents('info.json', json_encode($info));
		echo json_encode($vv);
		bot('sendMessage', ['chat_id' => $group, 'text' => "⌁ Checker number - 5 - \n⌁ Send Code Phone Now \n⌁ Ex : - 67467 -"]);
		$step = 1;
	}
	catch(Exception $e) {
		bot('sendMessage', ['chat_id' => $group, 'text' => "⌁ Checker number - 5 - ،\n⌁ I can't Login"]);
		return false;
	}
	while (1) {
$get_up = getupdates($last_up + 1);
$last_up = $get_up['update_id'];
if ($get_up) {
	$message = $get_up['message'];
	$userID = $message['from']['id'];
	$chat_id = $message['chat']['id'];
	$text = $message['text'];
	if ($chat_id == $group) {
	if ($text) {
	if ($step == 2) {
try {
$authorization = $MadelineProto->complete2falogin($text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - 5 - \n⌁ Done Login  ✅"]);
break;
}
catch(Exception $e) {
echo $e->getMessage();
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Error" . $e->getMessage() ]);
break;
}
$authorization = $MadelineProto->complete2falogin($text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - 5 - \n⌁ Done Login  ✅"]);
break;
	}
if ($step == 1) {
try {
$authorization = $MadelineProto->completePhoneLogin($text);
if ($authorization['_'] === 'account.password') {
bot('sendmessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - 5 - \n⌁ Send password \n⌁ Ex : - karrar-", ]);
$step = 2;
}
else {
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - 5 - \n⌁ Done Login  ✅"]);
break;
}
}
catch(Exception $e) {
echo $e->getMessage();
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Error" . $e->getMessage() ]);
break;
}
}
}
}
}
sleep(1);
}
}
$step = "";
 $last_up = $last_up;
function p8($ph, $group) {
	global $last_up;
	$step = 0;
		bot('sendMessage', ['chat_id' => $group, 'text' => "-Wait ...."]);
		if (file_exists('madeline.php')){
			require_once 'madeline.php';
		}
    define('MADELINE_BRANCH', 'deprecated');
	unlink("r.madeline");
	unlink("r.madeline.lock");
	$settings['app_info']['api_id'] = 13167118;
	$settings['app_info']['api_hash'] = '6927e2eb3bfcd393358f0996811441fd';
	$MadelineProto = new \danog\MadelineProto\API('r.madeline', $settings);
	try {
		$vv = $MadelineProto->phone_login($ph);
$info = json_decode(file_get_contents('info.json'),true);
$info["number6"] = "$ph";
file_put_contents('info.json', json_encode($info));
		echo json_encode($vv);
		bot('sendMessage', ['chat_id' => $group, 'text' => "⌁ Checker number - 6 - \n⌁ Send Code Phone Now \n⌁ Ex : - 67467 -"]);
		$step = 1;
	}
	catch(Exception $e) {
		bot('sendMessage', ['chat_id' => $group, 'text' => "⌁ Checker number - 6 - ،\n⌁ I can't Login"]);
		return false;
	}
	while (1) {
$get_up = getupdates($last_up + 1);
$last_up = $get_up['update_id'];
if ($get_up) {
	$message = $get_up['message'];
	$userID = $message['from']['id'];
	$chat_id = $message['chat']['id'];
	$text = $message['text'];
	if ($chat_id == $group) {
	if ($text) {
	if ($step == 2) {
try {
$authorization = $MadelineProto->complete2falogin($text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - 6 - \n⌁ Done Login  ✅"]);
break;
}
catch(Exception $e) {
echo $e->getMessage();
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Error" . $e->getMessage() ]);
break;
}
$authorization = $MadelineProto->complete2falogin($text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - 6 - \n⌁ Done Login  ✅"]);
break;
	}
if ($step == 1) {
try {
$authorization = $MadelineProto->completePhoneLogin($text);
if ($authorization['_'] === 'account.password') {
bot('sendmessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - 6 - \n⌁ Send password \n⌁ Ex : - karrar-", ]);
$step = 2;
}
else {
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - 6 - \n⌁ Done Login  ✅"]);
break;
}
}
catch(Exception $e) {
echo $e->getMessage();
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Error" . $e->getMessage() ]);
break;
}
}
}
}
}
sleep(1);
}
}
$step = "";
 $last_up = $last_up;
function p10($ph, $group) {
	global $last_up;
	$step = 0;
		bot('sendMessage', ['chat_id' => $group, 'text' => "-Wait ...."]);
		if (file_exists('madeline.php')){
			require_once 'madeline.php';
		}
    define('MADELINE_BRANCH', 'deprecated');
	unlink("8.madeline");
	unlink("8.madeline.lock");
	$settings['app_info']['api_id'] = 13167118;
	$settings['app_info']['api_hash'] = '6927e2eb3bfcd393358f0996811441fd';
	$MadelineProto = new \danog\MadelineProto\API('8.madeline', $settings);
	try {
		$vv = $MadelineProto->phone_login($ph);
$info = json_decode(file_get_contents('info.json'),true);
$info["number8"] = "$ph";
file_put_contents('info.json', json_encode($info));
		echo json_encode($vv);
		bot('sendMessage', ['chat_id' => $group, 'text' => "⌁ Checker number - 8 - \n⌁ Send Code Phone Now \n⌁ Ex : - 67467 -"]);
		$step = 1;
	}
	catch(Exception $e) {
		bot('sendMessage', ['chat_id' => $group, 'text' => "⌁ Checker number - 8 - ،\n⌁ I can't Login"]);
		return false;
	}
	while (1) {
$get_up = getupdates($last_up + 1);
$last_up = $get_up['update_id'];
if ($get_up) {
	$message = $get_up['message'];
	$userID = $message['from']['id'];
	$chat_id = $message['chat']['id'];
	$text = $message['text'];
	if ($chat_id == $group) {
	if ($text) {
	if ($step == 2) {
try {
$authorization = $MadelineProto->complete2falogin($text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - 8 - \n⌁ Done Login  ✅"]);
break;
}
catch(Exception $e) {
echo $e->getMessage();
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Error" . $e->getMessage() ]);
break;
}
$authorization = $MadelineProto->complete2falogin($text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - 8 - \n⌁ Done Login  ✅"]);
break;
	}
if ($step == 1) {
try {
$authorization = $MadelineProto->completePhoneLogin($text);
if ($authorization['_'] === 'account.password') {
bot('sendmessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - 8 - \n⌁ Send password \n⌁ Ex : - karrar-", ]);
$step = 2;
}
else {
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - 8 - \n⌁ Done Login  ✅"]);
break;
}
}
catch(Exception $e) {
echo $e->getMessage();
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Error" . $e->getMessage() ]);
break;
}
}
}
}
}
sleep(1);
}
}
$step = "";
 $last_up = $last_up;
function p7($ph, $group) {
	global $last_up;
	$step = 0;
		bot('sendMessage', ['chat_id' => $group, 'text' => "-Wait ...."]);
		if (file_exists('madeline.php')){
			require_once 'madeline.php';
		}
    define('MADELINE_BRANCH', 'deprecated');
	unlink("bot.madeline");
	unlink("bot.madeline.lock");
	$settings['app_info']['api_id'] = 13167118;
	$settings['app_info']['api_hash'] = '6927e2eb3bfcd393358f0996811441fd';
	$MadelineProto = new \danog\MadelineProto\API('bot.madeline', $settings);
	try {
		$vv = $MadelineProto->phone_login($ph);
$info = json_decode(file_get_contents('info.json'),true);
$info["bot1"] = "$ph";
file_put_contents('info.json', json_encode($info));
		echo json_encode($vv);
		bot('sendMessage', ['chat_id' => $group, 'text' => "⌁ Checker number - Bot - \n⌁ Send Code Phone Now \n⌁ Ex : - 67467 -"]);
		$step = 1;
	}
	catch(Exception $e) {
		bot('sendMessage', ['chat_id' => $group, 'text' => "⌁ Checker number - Bot - ،\n⌁ I can't Login"]);
		return false;
	}
	while (1) {
$get_up = getupdates($last_up + 1);
$last_up = $get_up['update_id'];
if ($get_up) {
	$message = $get_up['message'];
	$userID = $message['from']['id'];
	$chat_id = $message['chat']['id'];
	$text = $message['text'];
	if ($chat_id == $group) {
	if ($text) {
	if ($step == 2) {
try {
$authorization = $MadelineProto->complete2falogin($text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - Bot - \n⌁ Done Login  ✅"]);
break;
}
catch(Exception $e) {
echo $e->getMessage();
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Error" . $e->getMessage() ]);
break;
}
$authorization = $MadelineProto->complete2falogin($text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - Bot - \n⌁ Done Login  ✅"]);
break;
	}
if ($step == 1) {
try {
$authorization = $MadelineProto->completePhoneLogin($text);
if ($authorization['_'] === 'account.password') {
bot('sendmessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - Bot - \n⌁ Send password \n⌁ Ex : - karrar- ", ]);
$step = 2;
}
else {
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - Bot - \n⌁ Done Login  ✅"]);
break;
}
}
catch(Exception $e) {
echo $e->getMessage();
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Error" . $e->getMessage() ]);
break;
}
}
}
}
}
sleep(1);
}
}
$step = "";
 $last_up = $last_up;
function p6($ph, $group) {
	global $last_up;
	$step = 0;
		bot('sendMessage', ['chat_id' => $group, 'text' => "-Wait ...."]);
		if (file_exists('madeline.php')){
			require_once 'madeline.php';
		}
    define('MADELINE_BRANCH', 'deprecated');
	unlink("Band.madeline");
	unlink("Band.madeline.lock");
	$settings['app_info']['api_id'] = 13167118;
	$settings['app_info']['api_hash'] = '6927e2eb3bfcd393358f0996811441fd';
	$MadelineProto = new \danog\MadelineProto\API('Band.madeline', $settings);
	try {
		$vv = $MadelineProto->phone_login($ph);
$info = json_decode(file_get_contents('info.json'),true);
$info["band1"] = "$ph";
file_put_contents('info.json', json_encode($info));
		echo json_encode($vv);
		bot('sendMessage', ['chat_id' => $group, 'text' => "⌁ Checker number - Band - \n⌁ Send Code Phone Now \n⌁ Ex : - 67467 - "]);
		$step = 1;
	}
	catch(Exception $e) {
		Band('sendMessage', ['chat_id' => $group, 'text' => "⌁ Checker number - Band - ،\n⌁ I can't Login"]);
		return false;
	}
	while (1) {
$get_up = getupdates($last_up + 1);
$last_up = $get_up['update_id'];
if ($get_up) {
	$message = $get_up['message'];
	$userID = $message['from']['id'];
	$chat_id = $message['chat']['id'];
	$text = $message['text'];
	if ($chat_id == $group) {
	if ($text) {
	if ($step == 2) {
try {
$authorization = $MadelineProto->complete2falogin($text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - Band - \n⌁ Done Login  ✅"]);
break;
}
catch(Exception $e) {
echo $e->getMessage();
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Error" . $e->getMessage() ]);
break;
}
$authorization = $MadelineProto->complete2falogin($text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - Band - \n⌁ Done Login  ✅"]);
break;
	}
if ($step == 1) {
try {
$authorization = $MadelineProto->completePhoneLogin($text);
if ($authorization['_'] === 'account.password') {
bot('sendmessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - Band - \n⌁ Send password \n⌁ Ex : - karrar- ", ]);
$step = 2;
}
else {
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - Band - \n⌁ Done Login  ✅"]);
break;
}
}
catch(Exception $e) {
echo $e->getMessage();
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Error" . $e->getMessage() ]);
break;
}
}
}
}
}
sleep(1);
}
}
$step = "";
function run($update) {
global $step;
$nn = bot('getme', ['bot']) ["result"]["username"];
$message = $update['message'];
$userID = $message['from']['id'];
$chat_id = $message['chat']['id'];
$name = $message['from']['first_name'];
$text = $message['text'];
$date = $update['callback_query']['data'];
$cq = $update['callback_query'];
$data = $cq['data'];
$message_id = $cq['message']['message_id'];
$chat_id2 = $cq['message']['chat']['id'];
$group = file_get_contents("ID");
$url = "";
$g = file_get_contents($url);
$js = json_decode($g);
$da = $js->date;
$time = $js->time;
$day = $js->day;
$month = $js->month;
$ad = array("$group");
if($text == "/start" and !in_array($chat_id,$ad) and $chat_id != $group = null){
bot('sendmessage',[ 
'chat_id'=>$chat_id,  
'text'=>" 
- 𝒘𝒆𝒍𝒄𝒐𝒎 𝒕𝒐 𝒉𝒆𝒍𝒍 [$name](tg://user?id=$chat_id) !
- 𝒊𝒏 𝒕𝒉𝒆 𝒄𝒉𝒆𝒄𝒌𝒆𝒓 𝒖𝒔𝒆𝒓 𝒏𝒂𝒎𝒆 𝒕𝒆𝒍𝒆𝒈𝒓𝒂𝒎 
- 𝒅𝒆𝒗𝒆𝒍𝒐𝒑𝒆𝒅 𝒃𝒚 𝒌𝒂𝒓𝒓𝒂𝒓 𝒔𝒂𝒃𝒂𝒉 🇮🇶 @iii8i .
",'parse_mode' => "MarkDown", 'disable_web_page_preview' => true,
'reply_markup' => json_encode(['inline_keyboard' => [
[['text' => "-𝒌𝒂𝒓𝒓𝒂𝒓 𝒔𝒂𝒃𝒂𝒉'", 'url' => "https://t.me/l_lll"]],
[['text' => "-𝒎𝒆 𝒄𝒉𝒂𝒏𝒏𝒆𝒍'", 'url' => "https://t.me/iii8i"]],
]]) 
]);
}

if ($chat_id == $group) {
if ($text) {
if ($text == "/start") {
bot('sendMessage',[
'chat_id'=>$chat_id,
'text' => "Hi , [$name](tg://user?id=$chat_id)",
'parse_mode' => "MarkDown", 
'disable_web_page_preview' => true,
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"𖠜 Numbers"],["text" =>"𖠜 Requests"]],
[["text" =>"𖠜 Run"],["text" =>"𖠜 Stop"]],
[["text" =>"𖠜 Add Users"],["text" =>"𖠜 Delet User"]],
[["text" =>"𖠜 To Bot ↺ Band"]],
[["text" => "𖠜 To Account"], ["text" => "𖠜 To Channel"]],
[["text" => "𖠜 Edit Channel"],["text" =>"𖠜 info"]],
[["text" =>"𖠜 Clear list"],["text" =>"𖠜 Show list"]],
[["text" =>"𖠜 Delet Number"],["text" =>"𖠜 Add Number"]],
[["text" =>"𖠜 Pin All"]],
[["text" =>"𖠜 Rest Checkers"]],
[["text" =>"𖠜 Run All"],["text" =>"𖠜 Stop All"]]], ]) 
])->result->message_id;
sleep(2);
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id + 1,
]);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "𝒘𝒆𝒍𝒄𝒐𝒎𝒆 , \n𝒊𝒏 𝒕𝒉𝒆 𝒄𝒉𝒆𝒄𝒌𝒆𝒓 𝒖𝒔𝒆𝒓 𝒏𝒂𝒎𝒆 𝒕𝒆𝒍𝒆𝒈𝒓𝒂𝒎 \n𝒅𝒆𝒗𝒆𝒍𝒐𝒑𝒆𝒅 𝒃𝒚 𝒌𝒂𝒓𝒓𝒂𝒓 𝒔𝒂𝒃𝒂𝒉 🇮🇶 @iii8i . ",
]);
}

if($text == "sstates") {
$a = states("a");
$b = states("b");
$c = states("c");
$d = states("d");
$e = states("e");
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"- CHEKERS states All . 
1 ➧ ch states : $a .
2 ➧ ch states : $b .
3 ➧ ch states : $c .
4 ➧ ch states : $d .
5 ➧ ch states : $e .",
]);}
if ($text == "Checker order") {
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "𝒘𝒆𝒍𝒄𝒐𝒎𝒆 , \n𝒊𝒏 𝒕𝒉𝒆 𝒄𝒉𝒆𝒄𝒌𝒆𝒓 𝒖𝒔𝒆𝒓 𝒏𝒂𝒎𝒆 𝒕𝒆𝒍𝒆𝒈𝒓𝒂𝒎 \n𝒅𝒆𝒗𝒆𝒍𝒐𝒑𝒆𝒅 𝒃𝒚 𝒌𝒂𝒓𝒓𝒂𝒓 𝒔𝒂𝒃𝒂𝒉 🇮🇶 @iii8i . ",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"𖠜 Numbers"],["text" =>"𖠜 Requests"]],
[["text" =>"𖠜 Run"],["text" =>"𖠜 Stop"]],
[["text" =>"𖠜 Add Users"],["text" =>"𖠜 Delet User"]],
[["text" =>"𖠜 To Bot ↺ Band"]],
[["text" => "𖠜 To Account"], ["text" => "𖠜 To Channel"]],
[["text" => "𖠜 Edit Channel"],["text" =>"𖠜 info"]],
[["text" =>"𖠜 Clear list"],["text" =>"𖠜 Show list"]],
[["text" =>"𖠜 Delet Number"],["text" =>"𖠜 Add Number"]],
[["text" =>"𖠜 Pin All"]],
[["text" =>"𖠜 Rest Checkers"]],
[["text" =>"𖠜 Run All"],["text" =>"𖠜 Stop All"]]], ]) ]);
}
if ($text == "->") {
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "𝒘𝒆𝒍𝒄𝒐𝒎𝒆 , \n𝒊𝒏 𝒕𝒉𝒆 𝒄𝒉𝒆𝒄𝒌𝒆𝒓 𝒖𝒔𝒆𝒓 𝒏𝒂𝒎𝒆 𝒕𝒆𝒍𝒆𝒈𝒓𝒂𝒎 \n𝒅𝒆𝒗𝒆𝒍𝒐𝒑𝒆𝒅 𝒃𝒚 𝒌𝒂𝒓𝒓𝒂𝒓 𝒔𝒂𝒃𝒂𝒉 🇮🇶 @iii8i . ", 'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"𖠜 Numbers"],["text" =>"𖠜 Requests"]],
[["text" =>"𖠜 Run"],["text" =>"𖠜 Stop"]],
[["text" =>"𖠜 Add Users"],["text" =>"𖠜 Delet User"]],
[["text" =>"𖠜 To Bot ↺ Band"]],
[["text" => "𖠜 To Account"], ["text" => "𖠜 To Channel"]],
[["text" => "𖠜 Edit Channel"],["text" =>"𖠜 info"]],
[["text" =>"𖠜 Clear list"],["text" =>"𖠜 Show list"]],
[["text" =>"𖠜 Delet Number"],["text" =>"𖠜 Add Number"]],
[["text" =>"𖠜 Pin All"]],
[["text" =>"𖠜 Rest Checkers"]],
[["text" =>"𖠜 Run All"],["text" =>"𖠜 Stop All"]]], ]) ]);
}
if ($step == "n") {
file_put_contents("name", $text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Channel Save name ✅ ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
$step = "";
}
if ($step == "bot") {
file_put_contents("nbot", $text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Bot Save name ✅",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#bot"]],]])]);
$step = "";
}
if ($step == "a") {
file_put_contents("about", $text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Channel Save about ✅",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
$step = "";
}
if ($step == "r") {
file_put_contents("ch", $text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Channel Save rights ✅",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
$step = "";
}
if ($step == "o1") {
file_put_contents("o1", $text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Channel Save Username ✅",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
$step = "";
}
if ($step == "o2") {
file_put_contents("o2", $text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Channel Save Username ✅",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
$step = "";
}
if ($step == "o3") {
file_put_contents("o3", $text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Channel Save Username ✅",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
$step = "";
}
if ($step == "o4") {
file_put_contents("o4", $text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Channel Save Username ✅",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
$step = "";
}
if ($step == "o5") {
file_put_contents("o5", $text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Channel Save Username ✅",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
$step = "";
}
if ($step == "o6") {
file_put_contents("o6", $text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Channel Save Username ✅",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
$step = "";
}
if ($step == "o7") {
file_put_contents("o7", $text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Channel Save Username ✅",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
$step = "";
}
if ($step == "o8") {
file_put_contents("o8", $text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Channel Save Username ✅",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
$step = "";
}
if ($text == "𖠜 Channel 1") {
unlink('o1');
$step = "o1";
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Add Old Username Channel ,",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
}
if ($text == "𖠜 Channel 2") {
unlink('o2');
$step = "o2";
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Add Old Username Channel ,",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
}
if ($text == "𖠜 Channel 3") {
unlink('o3');
$step = "o3";
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Add Old Username Channel ,",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
}
if ($text == "𖠜 Channel 4") {
unlink('o4');
$step = "o4";
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Add Old Username Channel ,",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
}
if ($text == "𖠜 Channel 5") {
unlink('o5');
$step = "o5";
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Add Old Username Channel ,",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
}
if ($text == "𖠜 Channel 6") {
unlink('o6');
$step = "o6";
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Add Old Username Channel ,",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
}
if ($text == "𖠜 Channel 7") {
unlink('o7');
$step = "o7";
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Add Old Username Channel ,",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
}
if ($text == "𖠜 Channel 8") {
unlink('o8');
$step = "o8";
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Add Old Username Channel ,",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
}
if ($text == "Login1") {
	bot('sendMessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - 1 - \n⌁ Send You Number Phone\n⌁ Ex : +9647705789900 ,",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
shell_exec("pm2 stop aa.php");
shell_exec("pm2 stop ac.php");
shell_exec("pm2 stop al.php");
unlink("a.madeline");
unlink("a.madeline.lock");
file_put_contents("step","2");
  system('php g1.php');
	}
	if ($text == "Login2") {
	bot('sendMessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - 2 - \n⌁ Send You Number Phone\n⌁ Ex : +9647705789900 ,",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
	shell_exec("pm2 stop bu.php");
	shell_exec("pm2 stop bc.php");
	shell_exec("pm2 stop bl.php");
	unlink("b.madeline");
	unlink("b.madeline.lock");
	file_put_contents("step2","2");
  system('php g2.php');
	}
	if ($text == "Login3") {
	bot('sendMessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - 3 - \n⌁ Send You Number Phone\n⌁ Ex : +9647705789900  ,",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
	shell_exec("pm2 stop cc.php");
	shell_exec("pm2 stop cl.php");
	shell_exec("pm2 stop ca.php");
	unlink("c.madeline");
	unlink("c.madeline.lock");
	file_put_contents("step3","2");
	system('php g3.php');
	}
	if ($text == "Login4") {
	bot('sendMessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - 4 - \n⌁ Send You Number Phone\n⌁ Ex : +9647705789900  ,",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
	shell_exec("pm2 stop dl.php");
	shell_exec("pm2 stop da.php");
	shell_exec("pm2 stop dc.php");
	unlink("d.madeline");
	unlink("d.madeline.lock");
	file_put_contents("step4","2");
	system('php g4.php');
	}
	if ($text == "Login5") {
	bot('sendMessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - 5 - \n⌁ Send You Number Phone\n⌁ Ex : +9647705789900 ,",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
	shell_exec("pm2 stop el.php");
	shell_exec("pm2 stop ea.php");
	shell_exec("pm2 stop ec.php");
	unlink("e.madeline");
	unlink("e.madeline.lock");
	file_put_contents("step5","2");
	system('php g5.php');
	}
	if ($text == "Login6") {
	bot('sendMessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - 6 - \n⌁ Send You Number Phone\n⌁ Ex : +9647705789900  ,",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
	shell_exec("pm2 stop rl.php");
	shell_exec("pm2 stop ra.php");
	shell_exec("pm2 stop rc.php");
	unlink("r.madeline");
	unlink("r.madeline.lock");
	file_put_contents("step6","2");
	system('php g6.php');
	}
	if ($text == "Login7") {
	bot('sendMessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - 7 - \n⌁ Send You Number Phone\n⌁ Ex : +9647705789900  ,",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
	shell_exec("pm2 stop 7l.php");
	shell_exec("pm2 stop 7a.php");
	shell_exec("pm2 stop 7c.php");
	unlink("7.madeline");
	unlink("7.madeline.lock");
	file_put_contents("step7","2");
	system('php g7.php');
	}
	if ($text == "Login8") {
	bot('sendMessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - 8 - \n⌁ Send You Number Phone\n⌁ Ex : +9647705789900  ,",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
	shell_exec("pm2 stop 8l.php");
	shell_exec("pm2 stop 8a.php");
	shell_exec("pm2 stop 8c.php");
	unlink("8.madeline");
	unlink("8.madeline.lock");
	file_put_contents("step8","2");
	system('php g8.php');
	}
	if ($text == "Login band") {
	bot('sendMessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - Band - \n⌁ Send You Number Phone\n⌁ Ex : +9647705789900  ,",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
	shell_exec("pm2 stop Band.php");
	shell_exec("pm2 stop ba.php");
	unlink("Band.madeline");
	unlink("Band.madeline.lock");
	file_put_contents("stepn","2");
	system('php gn.php');
	}
	if ($text == "Login bot") {
	bot('sendMessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - bot - \n⌁ Send You Number Phone\n⌁ Ex : +9647705789900  ,",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
	shell_exec("pm2 stop m.php");
	shell_exec("pm2 stop ml.php");
	unlink("bot.madeline");
	unlink("bot.madeline.lock");
	file_put_contents("stepb","2");
	system('php gb.php');
	}
if ($text == "▫️Name") {
$step = "n";
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Add Channel Name",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
}
if ($text == "▫️about") {
$step = "a";
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Add channel about",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
}
if ($text == "▫️Rights") {
$step = "r";
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Add rights",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
}
if ($text == "𖠜 Edit Channel") {
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "𖠜 Select button",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"->"]],
[["text" =>"▫️Name"]],
[["text" =>"▫️User Old Channel"]],
[["text" =>"▫️about"],["text" =>"▫️Rights"]]], ]) ]);
}
if ($text == "▫️User Old Channel") {
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "𖠜 Select button",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"->"]],
[["text" =>"𖠜 Channel 1"],["text" =>"𖠜 Channel 2"]],
[["text" =>"𖠜 Channel 3"],["text" =>"𖠜 Channel 4"]],
[["text" =>"𖠜 Channel 5"],["text" =>"𖠜 Channel 6"]],
[["text" =>"𖠜 Channel 7"],["text" =>"𖠜 Channel 8"]]], ]) ]);
}
if ($text == "𖠜 Add Number") {
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "𖠜 Select button",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"->"]],
[["text" =>"Login1"],["text" =>"Login2"]],
[["text" =>"Login3"],["text" =>"Login4"]],
[["text" =>"Login5"],["text" =>"Login6"]],
[["text" =>"Login7"],["text" =>"Login8"]],
[["text" =>"Login bot"],["text" =>"Login band"]]], ]) ]);
}
if ($text == "𖠜 Pin All") {
bot('sendMessage',['chat_id'=>$chat_id,'message_id'=>$message_id,'text'=>"➧ Send Username ➧ pin user ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
file_put_contents('mode', 'pinall');
shell_exec("pm2 stop aa.php");
shell_exec("pm2 stop ac.php");
shell_exec("pm2 stop bu.php");
shell_exec("pm2 stop bc.php");
shell_exec("pm2 stop cc.php");
shell_exec("pm2 stop ca.php");
shell_exec("pm2 stop da.php");
shell_exec("pm2 stop dc.php");
shell_exec("pm2 stop ea.php");
shell_exec("pm2 stop ec.php");
shell_exec("pm2 stop ra.php");
shell_exec("pm2 stop rc.php");
shell_exec("pm2 stop 7a.php");
shell_exec("pm2 stop 7c.php");
shell_exec("pm2 stop 8a.php");
shell_exec("pm2 stop 8c.php");

unlink('users');
unlink('u2');
unlink('u3');
unlink('u4');
unlink('u5');
unlink('u6');
unlink('u7');
unlink('u8');
}
if ($text == "𖠜 Rest Checkers") {
$type = file_get_contents("type");
if($type == "c"){
shell_exec("pm2 stop ac.php");
shell_exec("pm2 start ac.php");
}
if($type == "a"){
shell_exec("pm2 stop aa.php");
shell_exec("pm2 start aa.php");
}
$type = file_get_contents("type2");
if($type == "c"){
shell_exec("pm2 stop bc.php");
shell_exec("pm2 start bc.php");
}
if($type == "a"){
shell_exec("pm2 stop bu.php");
shell_exec("pm2 start bu.php");
}
$type = file_get_contents("type3");
if($type == "c"){
shell_exec("pm2 stop cc.php");
shell_exec("pm2 start cc.php");
}
if($type == "a"){
shell_exec("pm2 stop ca.php");
shell_exec("pm2 start ca.php");
}
$type = file_get_contents("type4");
if($type == "c"){
shell_exec("pm2 stop dc.php");
shell_exec("pm2 start dc.php");
}
if($type == "a"){
shell_exec("pm2 stop da.php");
shell_exec("pm2 start da.php");
}
$type = file_get_contents("type5");
if($type == "c"){
shell_exec("pm2 stop ec.php");
shell_exec("pm2 start ec.php");
}
if($type == "a"){
shell_exec("pm2 stop ea.php");
shell_exec("pm2 start ea.php");
}
$type = file_get_contents("type6");
if($type == "c"){
shell_exec("pm2 stop rc.php");
shell_exec("pm2 start rc.php");
}
if($type == "a"){
shell_exec("pm2 stop ra.php");
shell_exec("pm2 start ra.php");
}
$type = file_get_contents("type7");
if($type == "c"){
shell_exec("pm2 stop 7c.php");
shell_exec("pm2 start 7c.php");
}
if($type == "a"){
shell_exec("pm2 stop 7a.php");
shell_exec("pm2 start 7a.php");
}
$type = file_get_contents("type8");
if($type == "c"){
shell_exec("pm2 stop 8c.php");
shell_exec("pm2 start 8c.php");
}
if($type == "a"){
shell_exec("pm2 stop 8a.php");
shell_exec("pm2 start 8a.php");
}
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "⌁ Done Rest all checkers 🐊",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);

}
if ($text == "𖠜 Run All") {
$type = file_get_contents("type");
if($type == "c"){
shell_exec("pm2 stop ac.php");
shell_exec("pm2 start ac.php");
}
if($type == "a"){
shell_exec("pm2 stop aa.php");
shell_exec("pm2 start aa.php");
}
$type = file_get_contents("type2");
if($type == "c"){
shell_exec("pm2 stop bc.php");
shell_exec("pm2 start bc.php");
}
if($type == "a"){
shell_exec("pm2 stop bu.php");
shell_exec("pm2 start bu.php");
}
$type = file_get_contents("type3");
if($type == "c"){
shell_exec("pm2 stop cc.php");
shell_exec("pm2 start cc.php");
}
if($type == "a"){
shell_exec("pm2 stop ca.php");
shell_exec("pm2 start ca.php");
}
$type = file_get_contents("type4");
if($type == "c"){
shell_exec("pm2 stop dc.php");
shell_exec("pm2 start dc.php");
}
if($type == "a"){
shell_exec("pm2 stop da.php");
shell_exec("pm2 start da.php");
}
$type = file_get_contents("type5");
if($type == "c"){
shell_exec("pm2 stop ec.php");
shell_exec("pm2 start ec.php");
}
if($type == "a"){
shell_exec("pm2 stop ea.php");
shell_exec("pm2 start ea.php");
}
$type = file_get_contents("type6");
if($type == "c"){
shell_exec("pm2 stop rc.php");
shell_exec("pm2 start rc.php");
}
if($type == "a"){
shell_exec("pm2 stop ra.php");
shell_exec("pm2 start ra.php");
}
$type = file_get_contents("type7");
if($type == "c"){
shell_exec("pm2 stop 7c.php");
shell_exec("pm2 start 7c.php");
}
if($type == "a"){
shell_exec("pm2 stop 7a.php");
shell_exec("pm2 start 7a.php");
}
$type = file_get_contents("type8");
if($type == "c"){
shell_exec("pm2 stop 8c.php");
shell_exec("pm2 start 8c.php");
}
if($type == "a"){
shell_exec("pm2 stop 8a.php");
shell_exec("pm2 start 8a.php");
}
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "⌁ Done Run all checkers 🐊",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
$info = json_decode(file_get_contents('info.json'),true);
$info["num1"] = "on";
file_put_contents('info.json', json_encode($info));
$info["num2"] = "on";
file_put_contents('info.json', json_encode($info));
$info["num3"] = "on";
file_put_contents('info.json', json_encode($info));
$info["num4"] = "on";
file_put_contents('info.json', json_encode($info));
$info["num5"] = "on";
file_put_contents('info.json', json_encode($info));
$info["num6"] = "on";
file_put_contents('info.json', json_encode($info));
$info["num7"] = "on";
file_put_contents('info.json', json_encode($info));
$info["num8"] = "on";
file_put_contents('info.json', json_encode($info));
}
if ($text == "𖠜 Stop All") {
shell_exec("pm2 stop al.php");
shell_exec("pm2 stop bl.php");
shell_exec("pm2 stop cl.php");
shell_exec("pm2 stop dl.php");
shell_exec("pm2 stop el.php");
shell_exec("pm2 stop rl.php");
shell_exec("pm2 stop 7l.php");
shell_exec("pm2 stop 8l.php");
shell_exec("pm2 stop aa.php");
shell_exec("pm2 stop ac.php");
shell_exec("pm2 stop bu.php");
shell_exec("pm2 stop bc.php");
shell_exec("pm2 stop cc.php");
shell_exec("pm2 stop ca.php");
shell_exec("pm2 stop da.php");
shell_exec("pm2 stop dc.php");
shell_exec("pm2 stop ea.php");
shell_exec("pm2 stop ec.php");
shell_exec("pm2 stop ra.php");
shell_exec("pm2 stop rc.php");
shell_exec("pm2 stop 7a.php");
shell_exec("pm2 stop 7c.php");
shell_exec("pm2 stop 8a.php");
shell_exec("pm2 stop 8c.php");
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "⌁ Done stop all checkers ⚓",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
$info = json_decode(file_get_contents('info.json'),true);
$info["num1"] = "off";
file_put_contents('info.json', json_encode($info));
$info["num2"] = "off";
file_put_contents('info.json', json_encode($info));
$info["num3"] = "off";
file_put_contents('info.json', json_encode($info));
$info["num4"] = "off";
file_put_contents('info.json', json_encode($info));
$info["num5"] = "off";
file_put_contents('info.json', json_encode($info));
$info["num6"] = "off";
file_put_contents('info.json', json_encode($info));
$info["num7"] = "off";
file_put_contents('info.json', json_encode($info));
$info["num8"] = "off";
file_put_contents('info.json', json_encode($info));
}
if(file_exists('mode')){
$mode = file_get_contents('mode');
$users = explode("\n", file_get_contents('users'));
if(preg_match("/@+/", $text)){
if($mode == 'pinall'){
$user = explode("@", $text) [1];
if (!in_array($user, $users)) {
file_put_contents("users", "\n" . $user, FILE_APPEND);
file_put_contents("u2", "\n" . $user, FILE_APPEND);
file_put_contents("u3", "\n" . $user, FILE_APPEND);
file_put_contents("u4", "\n" . $user, FILE_APPEND);
file_put_contents("u5", "\n" . $user, FILE_APPEND);
file_put_contents("u6", "\n" . $user, FILE_APPEND);
file_put_contents("u7", "\n" . $user, FILE_APPEND);
file_put_contents("u8", "\n" . $user, FILE_APPEND);
bot('sendMessage', ['chat_id' => $chat_id, 'text'=>"@$user : ⌁ Done Pin All.🚀",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
shell_exec("pm2 start aa.php");
shell_exec("pm2 start ac.php");
shell_exec("pm2 start bu.php");
shell_exec("pm2 start bc.php");
shell_exec("pm2 start cc.php");
shell_exec("pm2 start ca.php");
shell_exec("pm2 start da.php");
shell_exec("pm2 start dc.php");
shell_exec("pm2 start ea.php");
shell_exec("pm2 start ec.php");
shell_exec("pm2 start ra.php");
shell_exec("pm2 start rc.php");
shell_exec("pm2 start 7a.php");
shell_exec("pm2 start 7c.php");
shell_exec("pm2 start 8a.php");
shell_exec("pm2 start 8c.php");

} else {
bot('sendMessage', ['chat_id' => $chat_id, 'text'=>"@$user : Already Exists.",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
}
unlink('mode');
} elseif($mode == 'Unpin'){
echo 'unpin';
$user = explode("@", $text) [1];
$data = str_replace("\n" . $user, "", file_get_contents("users"));
file_put_contents("users", $data);
file_put_contents("users",preg_replace('~[\r\n]+~',"\n",trim(file_get_contents("users"))));
bot('sendMessage', ['chat_id' => $chat_id,  'text' => "⌁ Done Delet User List 1 :@$user",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
unlink('mode');
} elseif($mode == 'addL'){
echo $mode;
$ex = explode("\n", $text);
$userT = "";
$userN = "";
foreach ($ex as $u) {
$users = explode("\n", file_get_contents("users"));
 $user = explode("@", $u) [1];
if (!in_array($user, $users)) {
$userT = $userT . "\n" . $user;
}
else {
$userN = $userN . "\n" . $user;
}
}
file_put_contents("users", $userT, FILE_APPEND);
bot('sendMessage', ['chat_id' => $chat_id,  'text' => "⌁ Done Added Users To List 1 :\n" . countUsers($userT, "1") ,'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
unlink('mode');
}
}}
if(file_exists('mode')){
$mode = file_get_contents('mode');
$users = explode("\n", file_get_contents('u2'));
if(preg_match("/@+/", $text)){
if($mode == 'Pi0n'){
$user = explode("@", $text) [1];
if (!in_array($user, $users)) {
file_put_contents("u2", "\n" . $user, FILE_APPEND);
$EzTG->sendMessage(['chat_id'=>$cha,'text'=>"⌁ Done Delet User List 2 : @$user",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
} else {
bot('sendMessage', ['chat_id' => $chat_id, 'text'=>"@$user : Already Exists.",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
}
unlink('mode');
} elseif($mode == 'Unpin2'){
echo 'Unpin2';
$user = explode("@", $text) [1];
$data = str_replace("\n" . $user, "", file_get_contents("u2"));
file_put_contents("u2", $data);
file_put_contents("u2",preg_replace('~[\r\n]+~',"\n",trim(file_get_contents("u2"))));
bot('sendMessage', ['chat_id' => $chat_id,  'text' => "⌁ Done Delet User List 2 : @$user",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
unlink('mode');
}elseif($mode == 'ad2'){
echo $mode;
$ex = explode("\n", $text);
$userT = "";
$userN = "";
foreach ($ex as $u) {
$addL = explode("\n", file_get_contents("u2"));
$user = explode("@", $u) [1];
if (!in_array($user, $users)) {
$userT = $userT . "\n" . $user;
}
else {
$userN = $userN . "\n" . $user;
}
}
file_put_contents("u2", $userT, FILE_APPEND);
bot('sendMessage', ['chat_id' => $chat_id,  'text' => "⌁ Done Added Users To List 2 :\n" . countUsers($userT, "1") ,'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
unlink('mode');
}
}}
if(file_exists('mode')){
$mode = file_get_contents('mode');
$users = explode("\n", file_get_contents('u3'));
if(preg_match("/@+/", $text)){
if($mode == 'P0in'){
$user = explode("@", $text) [1];
if (!in_array($user, $users)) {
file_put_contents("u3", "\n" . $user, FILE_APPEND);
$EzTG->sendMessage(['chat_id'=>$cha,'text'=>"@$user : ⌁ Done Pin.",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
} else {
bot('sendMessage', ['chat_id' => $chat_id, 'text'=>"@$user : Already Exists.",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);}
unlink('mode');
}elseif($mode == 'Unpin3'){
echo 'Unpin3';
$user = explode("@", $text) [1];
$data = str_replace("\n" . $user, "", file_get_contents("u3"));
file_put_contents("u3", $data);
file_put_contents("u3",preg_replace('~[\r\n]+~',"\n",trim(file_get_contents("u3"))));
bot('sendMessage', ['chat_id' => $chat_id,  'text' => "⌁ Done Delet User List 3 : @$user",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
unlink('mode');
}elseif($mode == 'ad3'){
echo $mode;
$ex = explode("\n", $text);
$userT = "";
$userN = "";
foreach ($ex as $u) {
$addL = explode("\n", file_get_contents("u3"));
$user = explode("@", $u) [1];
if (!in_array($user, $users)) {
$userT = $userT . "\n" . $user;
}
else {
$userN = $userN . "\n" . $user;
}
}
file_put_contents("u3", $userT, FILE_APPEND);
bot('sendMessage', ['chat_id' => $chat_id,  'text' => "⌁ Done Added Users To List 3 :\n" . countUsers($userT, "1") ,'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
unlink('mode');
}
}}
if(file_exists('mode')){
$mode = file_get_contents('mode');
$users = explode("\n", file_get_contents('u6'));
if(preg_match("/@+/", $text)){
if($mode == 'P0in'){
$user = explode("@", $text) [1];
if (!in_array($user, $users)) {
file_put_contents("u6", "\n" . $user, FILE_APPEND);
$EzTG->sendMessage(['chat_id'=>$cha,'text'=>"@$user : ⌁ Done Pin.",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
} else {
bot('sendMessage', ['chat_id' => $chat_id, 'text'=>"@$user : Already Exists.",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);}
unlink('mode');
}elseif($mode == 'Unpin6'){
echo 'Unpin6';
$user = explode("@", $text) [1];
$data = str_replace("\n" . $user, "", file_get_contents("u6"));
file_put_contents("u6", $data);
file_put_contents("u6",preg_replace('~[\r\n]+~',"\n",trim(file_get_contents("u6"))));
bot('sendMessage', ['chat_id' => $chat_id,  'text' => "⌁ Done Delet User List 6 : @$user",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
unlink('mode');
}elseif($mode == 'ad6'){
echo $mode;
$ex = explode("\n", $text);
$userT = "";
$userN = "";
foreach ($ex as $u) {
$addL = explode("\n", file_get_contents("u6"));
$user = explode("@", $u) [1];
if (!in_array($user, $users)) {
$userT = $userT . "\n" . $user;
}
else {
$userN = $userN . "\n" . $user;
}
}
file_put_contents("u6", $userT, FILE_APPEND);
bot('sendMessage', ['chat_id' => $chat_id,  'text' => "⌁ Done Added Users To List 6 :\n" . countUsers($userT, "1") ,'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
unlink('mode');
}
}}
if(file_exists('mode')){
$mode = file_get_contents('mode');
$users = explode("\n", file_get_contents('u7'));
if(preg_match("/@+/", $text)){
if($mode == 'P0in'){
$user = explode("@", $text) [1];
if (!in_array($user, $users)) {
file_put_contents("u7", "\n" . $user, FILE_APPEND);
$EzTG->sendMessage(['chat_id'=>$cha,'text'=>"@$user : ⌁ Done Pin.",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
} else {
bot('sendMessage', ['chat_id' => $chat_id, 'text'=>"@$user : Already Exists.",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);}
unlink('mode');
}elseif($mode == 'Unpin7'){
echo 'Unpin7';
$user = explode("@", $text) [1];
$data = str_replace("\n" . $user, "", file_get_contents("u7"));
file_put_contents("u7", $data);
file_put_contents("u7",preg_replace('~[\r\n]+~',"\n",trim(file_get_contents("u7"))));
bot('sendMessage', ['chat_id' => $chat_id,  'text' => "⌁ Done Delet User List 7 : @$user",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
unlink('mode');
}elseif($mode == 'ad7'){
echo $mode;
$ex = explode("\n", $text);
$userT = "";
$userN = "";
foreach ($ex as $u) {
$addL = explode("\n", file_get_contents("u7"));
$user = explode("@", $u) [1];
if (!in_array($user, $users)) {
$userT = $userT . "\n" . $user;
}
else {
$userN = $userN . "\n" . $user;
}
}
file_put_contents("u7", $userT, FILE_APPEND);
bot('sendMessage', ['chat_id' => $chat_id,  'text' => "⌁ Done Added Users To List 7 :\n" . countUsers($userT, "1") ,'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
unlink('mode');
}
}}
if(file_exists('mode')){
$mode = file_get_contents('mode');
$users = explode("\n", file_get_contents('u8'));
if(preg_match("/@+/", $text)){
if($mode == 'P0in'){
$user = explode("@", $text) [1];
if (!in_array($user, $users)) {
file_put_contents("u8", "\n" . $user, FILE_APPEND);
$EzTG->sendMessage(['chat_id'=>$cha,'text'=>"@$user : ⌁ Done Pin.",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
} else {
bot('sendMessage', ['chat_id' => $chat_id, 'text'=>"@$user : Already Exists.",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);}
unlink('mode');
}elseif($mode == 'Unpin8'){
echo 'Unpin8';
$user = explode("@", $text) [1];
$data = str_replace("\n" . $user, "", file_get_contents("u8"));
file_put_contents("u8", $data);
file_put_contents("u8",preg_replace('~[\r\n]+~',"\n",trim(file_get_contents("u8"))));
bot('sendMessage', ['chat_id' => $chat_id,  'text' => "⌁ Done Delet User List 8 : @$user",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
unlink('mode');
}elseif($mode == 'ad8'){
echo $mode;
$ex = explode("\n", $text);
$userT = "";
$userN = "";
foreach ($ex as $u) {
$addL = explode("\n", file_get_contents("u8"));
$user = explode("@", $u) [1];
if (!in_array($user, $users)) {
$userT = $userT . "\n" . $user;
}
else {
$userN = $userN . "\n" . $user;
}
}
file_put_contents("u8", $userT, FILE_APPEND);
bot('sendMessage', ['chat_id' => $chat_id,  'text' => "⌁ Done Added Users To List 8 :\n" . countUsers($userT, "1") ,'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
unlink('mode');
}
}}
if(file_exists('mode')){
$mode = file_get_contents('mode');
$users = explode("\n", file_get_contents('u4'));
if(preg_match("/@+/", $text)){
if($mode == 'P0in'){
$user = explode("@", $text) [1];
if (!in_array($user, $users)) {
file_put_contents("u4", "\n" . $user, FILE_APPEND);
$EzTG->sendMessage(['chat_id'=>$cha,'text'=>"@$user : ⌁ Done Pin.",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
} else {
bot('sendMessage', ['chat_id' => $chat_id, 'text'=>"@$user : Already Exists.",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
}
unlink('mode');
} elseif($mode == 'Unpin4'){
echo 'Unpin4';
$user = explode("@", $text) [1];
$data = str_replace("\n" . $user, "", file_get_contents("u4"));
file_put_contents("u4", $data);
file_put_contents("u4",preg_replace('~[\r\n]+~',"\n",trim(file_get_contents("u4"))));
bot('sendMessage', ['chat_id' => $chat_id,  'text' => "⌁ Done Delet User List 4 : @$user",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
unlink('mode');
}elseif($mode == 'ad4'){
echo $mode;
$ex = explode("\n", $text);
$userT = "";
$userN = "";
foreach ($ex as $u) {
$addL = explode("\n", file_get_contents("u4"));
$user = explode("@", $u) [1];
if (!in_array($user, $users)) {
$userT = $userT . "\n" . $user;
}
else {
$userN = $userN . "\n" . $user;
}
}
file_put_contents("u4", $userT, FILE_APPEND);
bot('sendMessage', ['chat_id' => $chat_id,  'text' => "⌁ Done Added Users To List 4 :\n" . countUsers($userT, "1") ,'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
unlink('mode');
}
}}
if(file_exists('mode')){
$mode = file_get_contents('mode');
$users = explode("\n", file_get_contents('u5'));
if(preg_match("/@+/", $text)){
if($mode == 'P0in'){
$user = explode("@", $text) [1];
if (!in_array($user, $users)) {
file_put_contents("u5", "\n" . $user, FILE_APPEND);
$EzTG->sendMessage(['chat_id'=>$cha,'text'=>"@$user : ⌁ Done Pin ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
} else {
bot('sendMessage', ['chat_id' => $chat_id, 'text'=>"@$user : Already Exists.",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
}
unlink('mode');
} elseif($mode == 'Unpin5'){
echo 'Unpin5';
$user = explode("@", $text) [1];
$data = str_replace("\n" . $user, "", file_get_contents("u5"));
file_put_contents("u5", $data);
file_put_contents("u5",preg_replace('~[\r\n]+~',"\n",trim(file_get_contents("u5"))));
bot('sendMessage', ['chat_id' => $chat_id,  'text' => "⌁ Done Delet User List 5 : @$user",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
unlink('mode');
}elseif($mode == 'ad5'){
echo $mode;
$ex = explode("\n", $text);
$userT = "";
$userN = "";
foreach ($ex as $u) {
$addL = explode("\n", file_get_contents("u5"));
$user = explode("@", $u) [1];
if (!in_array($user, $users)) {
$userT = $userT . "\n" . $user;
}
else {
$userN = $userN . "\n" . $user;
}
}
file_put_contents("u5", $userT, FILE_APPEND);
bot('sendMessage', ['chat_id' => $chat_id,  'text' => "⌁ Done Added Users To List 5 :\n" . countUsers($userT, "1") ,'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
unlink('mode');
}
}}
}
if(file_exists('mode')){
$mode = file_get_contents('mode');
$users = explode("\n", file_get_contents('Band'));
if(preg_match("/@+/", $text)){
if($mode == 'p'){
$user = explode("@", $text) [1];
if (!in_array($user, $users)) {
file_put_contents("Band", "\n" . $user, FILE_APPEND);
bot('sendMessage', ['chat_id' => $chat_id, 'text'=>"@$user : ⌁ Done Pin All.",]);
} else {
bot('sendMessage', ['chat_id' => $chat_id, 'text'=>"@$user : Already Exists.",]);
}
unlink('mode');
} elseif($mode == 'Unband'){
echo 'unpin';
$user = explode("@", $text) [1];
$data = str_replace("\n" . $user, "", file_get_contents("Band"));
file_put_contents("Band", $data);
file_put_contents("Band",preg_replace('~[\r\n]+~',"\n",trim(file_get_contents("Band"))));
bot('sendMessage',['chat_id'=>$chat_id,'message_id'=>$message_id,  'text' => "⌁ Done deleted user from List Band : @$user",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Bc"]],]]) ]);
unlink('mode');
} elseif($mode == 'adband'){
echo $mode;
$ex = explode("\n", $text);
$userT = "";
$userN = "";
foreach ($ex as $u) {
$users = explode("\n", file_get_contents("Band"));
 $user = explode("@", $u) [1];
if (!in_array($user, $users)) {
$userT = $userT . "\n" . $user;
}
else {
$userN = $userN . "\n" . $user;
}
}
file_put_contents("Band", $userT, FILE_APPEND);
bot('sendMessage',['chat_id'=>$chat_id,'message_id'=>$message_id, 'text' => "⌁ Done added users to List band \n" . countUsers($userT, "1") ,'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Bc"]],]]) ]);
unlink('mode');
}
}}
////
if(file_exists('mode')){
$mode = file_get_contents('mode');
$users = explode("\n", file_get_contents('bot'));
if(preg_match("/@+/", $text)){
if($mode == 'p'){
$user = explode("@", $text) [1];
if (!in_array($user, $users)) {
file_put_contents("bot", "\n" . $user, FILE_APPEND);
bot('sendMessage', ['chat_id' => $chat_id, 'text'=>"@$user : ⌁ Done Pin All.",]);
} else {
bot('sendMessage', ['chat_id' => $chat_id, 'text'=>"@$user : Already Exists.",]);
}
unlink('mode');
} elseif($mode == 'Unbot'){
echo 'unpin';
$user = explode("@", $text) [1];
$data = str_replace("\n" . $user, "", file_get_contents("bot"));
file_put_contents("bot", $data);
file_put_contents("bot",preg_replace('~[\r\n]+~',"\n",trim(file_get_contents("bot"))));
bot('sendMessage',['chat_id'=>$chat_id,'message_id'=>$message_id,  'text' => "⌁ Done deleted user List bot : @$user",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Bc"]],]]) ]);
unlink('mode');
} elseif($mode == 'adbot'){
echo $mode;
$ex = explode("\n", $text);
$userT = "";
$userN = "";
foreach ($ex as $u) {
$users = explode("\n", file_get_contents("bot"));
 $user = explode("@", $u) [1];
if (!in_array($user, $users)) {
$userT = $userT . "\n" . $user;
}
else {
$userN = $userN . "\n" . $user;
}
}
file_put_contents("bot", $userT, FILE_APPEND);
bot('sendMessage',['chat_id'=>$chat_id,'message_id'=>$message_id, 'text' => "⌁ Done added users to List bot \n" . countUsers($userT, "1") ,'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Bc"]],]]) ]);
unlink('mode');
}
}}}
if ($chat_id == $group) {
if($text == "𖠜 Clear list"){
bot('sendMessage', ['chat_id' => $chat_id,
'text'=>"⌁ Choose button ",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text' => "⌁ List 📋 1",'callback_data' => "CLEAR1"]],
[['text' => "⌁ List 📋 2",'callback_data' => "CLEAR2"]],
[['text' => "⌁ List 📋 3",'callback_data' => "CLEAR3"]],
[['text' => "⌁ List 📋 4",'callback_data' => "CLEAR4"]],
[['text' => "⌁ List 📋 5",'callback_data' => "CLEAR5"]],
[['text' => "⌁ List 📋 6",'callback_data' => "CLEAR6"]],
[['text' => "⌁ List 📋 7",'callback_data' => "CLEAR7"]],
[['text' => "⌁ List 📋 8",'callback_data' => "CLEAR8"]],
[['text'=>"->",'callback_data'=>"#Back"]],
]])]);
}}
$info = json_decode(file_get_contents('info.json'),true);
$number1 = file_get_contents('phone1');
$number2 = file_get_contents('phone2');
$number3 = file_get_contents('phone3');
$number4 = file_get_contents('phone4');
$number5 = file_get_contents('phone5');
$number6 = file_get_contents('phone6');
$number7 = file_get_contents('phone7');
$number8 = file_get_contents('phone8');
$number9 = file_get_contents('phoneb');
$number10 = file_get_contents('phonen');
$num1 = $info["num1"];
$num2 = $info["num2"];
$num3 = $info["num3"];
$num4 = $info["num4"];
$num5 = $info["num5"];
$num6 = $info["num6"];
$num7 = $info["num7"];
$num8 = $info["num8"];
$num9 = $info["bot1"];
$num10 = $info["band1"];
if ($chat_id == $group) {
if($text == "𖠜 Numbers"){
bot('sendMessage', ['chat_id' => $chat_id,
'text'=>"⌁ info Numbers ♦️",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text' => "$number1",'callback_data' => "#Back"]],
[['text' => "$number2",'callback_data' => "#Back"]],
[['text' => "$number3",'callback_data' => "#Back"]],
[['text' => "$number4",'callback_data' => "#Back"]],
[['text' => "$number5",'callback_data' => "#Back"]],
[['text' => "$number6",'callback_data' => "#Back"]],
[['text' => "$number7",'callback_data' => "#Back"]],
[['text' => "$number8",'callback_data' => "#Back"]],
[['text' => "𖠜Bot : $number9",'callback_data' => "#Back"]],
[['text' => "𖠜Band : $number10",'callback_data' => "#Back"]],
[['text'=>"->",'callback_data'=>"#Back"]],
]])]);
}}
if($data == "#Bc"){
bot('deleteMessage',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id
]);
bot('sendMessage',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text' => "𝒘𝒆𝒍𝒄𝒐𝒎𝒆 , \n𝒊𝒏 𝒕𝒉𝒆 𝒄𝒉𝒆𝒄𝒌𝒆𝒓 𝒖𝒔𝒆𝒓 𝒏𝒂𝒎𝒆 𝒕𝒆𝒍𝒆𝒈𝒓𝒂𝒎 \n𝒅𝒆𝒗𝒆𝒍𝒐𝒑𝒆𝒅 𝒃𝒚 𝒌𝒂𝒓𝒓𝒂𝒓 𝒔𝒂𝒃𝒂𝒉 🇮🇶 @iii8i . ",
'reply_markup' => json_encode(['inline_keyboard' => [
[['text'=>"-𝒌𝒂𝒓𝒓𝒂𝒓 𝒔𝒂𝒃𝒂𝒉 🇮🇶'", 'url' => "https://t.me/l_lll"],['text'=>"-𝒎𝒆 𝒄𝒉𝒂𝒏𝒏𝒆𝒍'", 'url' => "https://t.me/iii8i"]],
]]) 
]);
unlink('mode');
}
if($data == "Band"){
bot('deleteMessage',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id
]);
bot('sendMessage',['chat_id'=>$chat_id2,'message_id'=>$message_id,
'text'=>"⌁ Data Checker Band , king @iii8i 🐊",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"▫️Add User",'callback_data'=>"M1"],['text'=>"▫️Delet User",'callback_data'=>"M2"]],
[['text'=>"▫️Stop",'callback_data'=>"M3"],['text'=>"▫️Run",'callback_data'=>"M4"]],
[['text'=>"▫️Delet Number",'callback_data'=>"dband"]],
[['text'=>"▫️Show Users",'callback_data'=>"MM"],['text'=>"▫️Delet All Users",'callback_data'=>"M8"]],
]
])]);
}
///////////////////////////////////////////
if($data == "bot"){
bot('deleteMessage',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id
]);
bot('sendMessage',['chat_id'=>$chat_id2,'message_id'=>$message_id,
'text'=>"⌁ Data Checker bot , king @iii8i 🐊",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"▫️Add User",'callback_data'=>"O1"],['text'=>"▫️Delet User",'callback_data'=>"O2"]],
[['text'=>"▫️Stop",'callback_data'=>"O3"],['text'=>"▫️Run",'callback_data'=>"O4"]],
[['text'=>"▫️Name Bot",'callback_data'=>"O5"]],
[['text'=>"▫️Delet Number",'callback_data'=>"dbot"]],
[['text'=>"▫️Show Users",'callback_data'=>"M7"],['text'=>"▫️Delet All Users",'callback_data'=>"O8"]],
]
])]);
}
if($data == "#bot"){
bot('deleteMessage',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id
]);
bot('sendMessage',['chat_id'=>$chat_id2,'message_id'=>$message_id,
'text'=>"⌁ Data Checker bot , king @iii8i",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"▫️Add User",'callback_data'=>"O1"],['text'=>"▫️Delet User",'callback_data'=>"O2"]],
[['text'=>"▫️Stop",'callback_data'=>"O3"],['text'=>"▫️Run",'callback_data'=>"O4"]],
[['text'=>"▫️Name Bot",'callback_data'=>"O5"]],
[['text'=>"▫️Delet Number",'callback_data'=>"dbot"]],
[['text'=>"▫️Show Users",'callback_data'=>"M7"],['text'=>"▫️Delet All Users",'callback_data'=>"O8"]],
]
])]);
}
if($data == "CLEAR1"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"- Done Delete all Usernames List 1 ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
file_put_contents("users", "");
}
if($data == "CLEAR2"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"- Done Delete all Usernames List 2 ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
file_put_contents("u2", "");
}
if($data == "CLEAR3"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"- Done Delete all Usernames List 3 ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
file_put_contents("u3", "");
}
if($data == "CLEAR4"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"- Done Delete all Usernames List 4 ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
file_put_contents("u4", "");
}
if($data == "CLEAR6"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"- Done Delete all Usernames List 6 ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
file_put_contents("u6", "");
}
if($data == "CLEAR7"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"- Done Delete all Usernames List 7 ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
file_put_contents("u7", "");
}
if($data == "CLEAR8"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"- Done Delete all Usernames List 8 ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
file_put_contents("u8", "");
}
if($data == "CLEAR5"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"- Done Delete all Usernames List 5 ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
file_put_contents("u5", "");
 
}
if ($chat_id == $group) {
if($text == "𖠜 Show list"){
bot('sendMessage', ['chat_id' => $chat_id,
'text'=>"⌁ Select button ",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text' => " Show All ⌁ 1",'callback_data' => "1Show"]],
[['text' => " Show All ⌁ 2",'callback_data' => "2Show"]],
[['text' => " Show All ⌁ 3",'callback_data' => "3Show"]],
[['text' => " Show All ⌁ 4",'callback_data' => "4Show"]],
[['text' => " Show All ⌁ 5",'callback_data' => "5Show"]],
[['text' => " Show All ⌁ 6",'callback_data' => "6Show"]],
[['text' => " Show All ⌁ 7",'callback_data' => "7Show"]],
[['text' => " Show All ⌁ 8",'callback_data' => "8Show"]],
[['text'=>"->",'callback_data'=>"#Back"]],
]])]);
 
}}
if($data == "1Show"){
if(file_exists("users")){
$users = explode("\n", file_get_contents("users"));
$list = "";
$i = 1;
foreach ($users as $user) {
if ($user != "") {
$list = $list . "\n$i  ➧ @$user";
$i++;}}
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>" ⌁ The All Users List 1 !  \n".$list,'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"Back",'callback_data'=>"#Back"]],
]])]);
$list = "";
}else{
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>" ⌁ No users in list 1",'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"Back",'callback_data'=>"#Back"]],
]])]);
}}
if($data == "2Show"){
if(file_exists("u2")){
$users = explode("\n", file_get_contents("u2"));
$list2 = "";
$i = 1;
foreach ($users as $user) {
if ($user != "") {
$list2 = $list2 . "\n$i  ➧ @$user";
$i++;}}
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>" ⌁ The All Users List 2  \n".$list2,'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
$list2 = "";
}else{
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>" ⌁ No users in list 2",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
}}
if($data == "3Show"){
if(file_exists("u3")){
$users = explode("\n", file_get_contents("u3"));
$list3 = "";
$i = 1;
foreach ($users as $user) {
if ($user != "") {
$list3 = $list3 . "\n$i  ➧ @$user";
$i++;}}
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>" ⌁ The All Users List 3   \n".$list3,'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
$list3 = "";
}else{
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>" ⌁ No users in list 3",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
}}
if($data == "4Show"){
if(file_exists("u4")){
$users = explode("\n", file_get_contents("u4"));
$list4 = "";
$i = 1;
foreach ($users as $user) {
if ($user != "") {
$list4 = $list4 . "\n$i  ➧ @$user";
$i++;}}
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>" ⌁ The All Users List 4 \n".$list4,'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
$list4 = "";
}else{
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>" ⌁ No users in list 4",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
}}
if($data == "6Show"){
if(file_exists("u6")){
$users = explode("\n", file_get_contents("u6"));
$list6 = "";
$i = 1;
foreach ($users as $user) {
if ($user != "") {
$list6 = $list6 . "\n$i  ➧ @$user";
$i++;}}
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>" ⌁ The All Users List 6  \n".$list6,'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"Black",'callback_data'=>"#Bc"]],
]])]);
$list6 = "";
}else{
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>" ⌁ No users in list 6",'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"Black",'callback_data'=>"#Bc"]],
]])]);
}}
if($data == "7Show"){
if(file_exists("u7")){
$users = explode("\n", file_get_contents("u7"));
$list7 = "";
$i = 1;
foreach ($users as $user) {
if ($user != "") {
$list7 = $list7 . "\n$i  ➧ @$user";
$i++;}}
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>" ⌁ The All Users List 7  \n".$list7,'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"Black",'callback_data'=>"#Bc"]],
]])]);
$list7 = "";
}else{
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>" ⌁ No users in list 7",'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"Black",'callback_data'=>"#Bc"]],
]])]);
}}
if($data == "8Show"){
if(file_exists("u8")){
$users = explode("\n", file_get_contents("u8"));
$list8 = "";
$i = 1;
foreach ($users as $user) {
if ($user != "") {
$list8 = $list8 . "\n$i  ➧ @$user";
$i++;}}
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>" ⌁ The All Users List 8  \n".$list8,'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"Black",'callback_data'=>"#Bc"]],
]])]);
$list8 = "";
}else{
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>" ⌁ No users in list 8",'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"Black",'callback_data'=>"#Bc"]],
]])]);
}}
if($data == "5Show"){
if(file_exists("u5")){
$users = explode("\n", file_get_contents("u5"));
$list5 = "";
$i = 1;
foreach ($users as $user) {
if ($user != "") {
$list5 = $list5 . "\n$i  ➧ @$user";
$i++;}}
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>" ⌁ The All Users List 5  \n".$list5,'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
$list5 = "";
}else{
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>" ⌁ No users in list 5 ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
}}
if($data == "MM"){
if(file_exists("Band")){
$users = explode("\n", file_get_contents("Band"));
$list = "";
$i = 1;
foreach ($users as $user) {
if ($user != "") {
$list = $list . "\n$i  ➧ @$user";
$i++;}}
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>" ⌁ The All Users List Band  \n".$list,'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"Black",'callback_data'=>"#Bc"]],
]])]);
$list = "";
}else{
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>" ⌁ No users in list Band",'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"Black",'callback_data'=>"#Bc"]],
]])]);
}}
if($data == "M7"){
if(file_exists("bot")){
$users = explode("\n", file_get_contents("bot"));
$list = "";
$i = 1;
foreach ($users as $user) {
if ($user != "") {
$list = $list . "\n$i  ➧@$user";
$i++;}}
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>" ⌁ The All Users List bot  \n".$list,'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"Black",'callback_data'=>"#Bc"]],
]])]);
$list = "";
}else{
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>" ⌁ No users in list bot",'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"Black",'callback_data'=>"#Bc"]],
]])]);
}}
if ($chat_id == $group) {
if($text == "𖠜 Add Nurerer4trmber"){
bot('sendMessage', ['chat_id' => $chat_id,
'text'=>"𖠜 Select button",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text' => "⌁ Number 1",'callback_data' => "ADD1"]],
[['text' => "⌁ Number 2",'callback_data' => "ADD2"]],
[['text'=>"⌁ Number 3",'callback_data'=>"ADD3"],['text'=>"⌁ Number 4",'callback_data'=>"ADD4"]],
[['text' => "⌁ Number 5",'callback_data' => "ADD5"]],
[['text' => "⌁ Number 6",'callback_data' => "ADD6"]],
[['text' => "⌁ Number 7",'callback_data' => "ADD7"]],
[['text' => "⌁ Number 8",'callback_data' => "ADD8"]],
]])]);
}}
if ($chat_id == $group) {
if($text == "𖠜 To Bot ↺ Band"){
bot('sendMessage', ['chat_id' => $chat_id,
'text'=>"⌁ Checkers Band and Bot 🐊",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"[ Checker Bot ]",'callback_data'=>"bot"],['text'=>"[ Checker Band ]",'callback_data'=>"Band"]],
]])]);
}}
if ($step == "ph") {
ph($text, $group);
$step = "";
system('screen -dmS MD php step.php');
}
if ($step == "p2") {
p2($text, $group);
$step = "";
system('screen -dmS MD php step.php');
}
if ($step == "DH") {
DH($text, $group);
$step = "";
system('screen -dmS MD php step.php');
}
if ($step == "p4") {
p4($text, $group);
$step = "";
system('screen -dmS MD php step.php');
}
if ($step == "p5") {
p5($text, $group);
$step = "";
system('screen -dmS MD php step.php');
}
if ($step == "p6") {
p6($text, $group);
$step = "";
system('screen -dmS MD php step.php');
}
if ($step == "p9") {
p9($text, $group);
$step = "";
system('screen -dmS MD php step.php');
}
if ($step == "p7") {
p7($text, $group);
$step = "";
system('screen -dmS MD php step.php');
}
if ($step == "p10") {
p10($text, $group);
$step = "";
system('screen -dmS MD php step.php');
}
if ($step == "p8") {
p8($text, $group);
$step = "";
system('screen -dmS MD php step.php');
}
if($data == "ADD1"){
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Checker number - 1 - \n⌁ Send You Number Phone\n⌁ Ex : +9647705789900 ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]]) ]);
shell_exec("pm2 stop aa.php");
shell_exec("pm2 stop ac.php");
shell_exec("pm2 stop al.php");
unlink("a.madeline");
unlink("a.madeline.lock");
file_put_contents("step","2");
  system('php g1.php');
}
if($data == "ADD2"){
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Checker number - 2 - \n⌁ Send You Number Phone \n⌁ Ex : +9647705789900 ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]]) ]);
shell_exec("pm2 stop bu.php");
shell_exec("pm2 stop bc.php");
shell_exec("pm2 stop bl.php");
unlink("b.madeline");
unlink("b.madeline.lock");
$step = "p2";}
if($data == "ADD3"){
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Checker number - 3 - \n⌁ Send You Number Phone \n⌁ Ex :  +9647705789900 ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]]) ]);
shell_exec("pm2 stop cc.php");
shell_exec("pm2 stop cl.php");
shell_exec("pm2 stop ca.php");
unlink("c.madeline");
unlink("c.madeline.lock");
$step = "DH";}
if($data == "ADD4"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Checker number - 4 - \n⌁ Send You Number Phone \n⌁ Ex : +9647705789900 ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]]) ]);
 shell_exec("pm2 stop dl.php");
shell_exec("pm2 stop da.php");
shell_exec("pm2 stop dc.php");
unlink("d.madeline");
unlink("d.madeline.lock");
$step = "p4";}
if($data == "ADD6"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Checker number - 6 - \n⌁ Send You Number Phone \n⌁ Ex : +9647705789900 ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]]) ]);
shell_exec("pm2 stop rl.php");
shell_exec("pm2 stop ra.php");
shell_exec("pm2 stop rc.php");
unlink("r.madeline");
unlink("r.madeline.lock");
$step = "p8";}
if($data == "ADD7"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Checker number - 7 - \n⌁ Send You Number Phone \n⌁ Ex : +9647705789900 ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]]) ]);
shell_exec("pm2 stop 7l.php");
shell_exec("pm2 stop 7a.php");
shell_exec("pm2 stop 7c.php");
unlink("7.madeline");
unlink("7.madeline.lock");
$step = "p9";}
if($data == "ADD8"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Checker number - 8 - \n⌁ Send You Number Phone \n⌁ Ex : +9647705789900 ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]]) ]);
shell_exec("pm2 stop 8l.php");
shell_exec("pm2 stop 8a.php");
shell_exec("pm2 stop 8c.php");
unlink("8.madeline");
unlink("8.madeline.lock");
$step = "p10";}
if($data == "ADD5"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Checker number - 5 - \n⌁ Send You Number Phone \n⌁ Ex : +9647705789900 ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]]) ]);
shell_exec("pm2 stop el.php");
shell_exec("pm2 stop ea.php");
shell_exec("pm2 stop ec.php");
unlink("e.madeline");
unlink("e.madeline.lock");
$step = "p5";
}
if($data == "M6"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,
'text'=>"⌁ Checker number - Band - \n⌁ Send You Number Phone \n⌁ Ex : +9647705789900 ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#bot"]],]]) ]);
shell_exec("pm2 stop Band.php");
shell_exec("pm2 stop ba.php");
unlink("Band.madeline");
unlink("Band.madeline.lock");
$step = "p6";
}
if($data == "O6"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,
'text'=>"⌁ Checker number - bot - \n⌁ Send You Number Phone \n⌁ Ex :  +9647705789900 ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#bot"]],]]) ]);
shell_exec("pm2 stop m.php");
shell_exec("pm2 stop ml.php");
unlink("bot.madeline");
unlink("bot.madeline.lock");
$step = "p7";
}
if ($chat_id == $group) {
if($text == "𖠜 Delet Number"){
bot('sendMessage', ['chat_id' => $chat_id,
'text'=>"⌁Select button",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text' => "⌁ Delet Number 1",'callback_data' => "1DL"]],
[['text' => "⌁ Delet Number 2",'callback_data' => "2DL"]],
[['text' => "⌁ Delet Number 3",'callback_data' => "3DL"]],
[['text' => "⌁ Delet Number 4",'callback_data' => "4DL"]],
[['text' => "⌁ Delet Number 5",'callback_data' => "5DL"]],
[['text' => "⌁ Delet Number 6",'callback_data' => "6DL"]],
[['text' => "⌁ Delet Number 7",'callback_data' => "7DL"]],
[['text' => "⌁ Delet Number 8",'callback_data' => "8DL"]],
[['text'=>"->",'callback_data'=>"#Back"]],
]])]);
 
}}
if($data == "1DL"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Done Delet Number  1",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
shell_exec("pm2 stop aa.php");
shell_exec("pm2 stop al.php");
shell_exec("pm2 stop ac.php");
system('rm -rf a.madeline');
system('rm -rf a.madeline.lock');
system('rm -rf a.madeline.lightState.php');
system('rm -rf a.madeline.lightState.php.lock');
system('rm -rf a.madeline.safe.php');
system('rm -rf a.madeline.safe.php.lock');
unlink("a.madeline"); 
unlink("a.madeline.lock");
unlink("a.madeline.lightState.php");
unlink("a.madeline.lightState.php.lock");
unlink("a.madeline.safe.php");
unlink("a.madeline.safe.php.lock");
$info = json_decode(file_get_contents('info.json'),true);
$info["number1"] = "No number";
file_put_contents('info.json', json_encode($info));
}
if($data == "2DL"){
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Done Delet Number  2",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
shell_exec("pm2 stop bu.php");
shell_exec("pm2 stop bl.php");
shell_exec("pm2 stop bc.php");
system('rm -rf b.madeline');
system('rm -rf b.madeline.lock');
system('rm -rf b.madeline.lightState.php');
system('rm -rf b.madeline.lightState.php.lock');
system('rm -rf b.madeline.safe.php');
system('rm -rf b.madeline.safe.php.lock');
unlink("b.madeline"); 
unlink("b.madeline.lock");
unlink("b.madeline.lightState.php");
unlink("b.madeline.lightState.php.lock");
unlink("b.madeline.safe.php");
unlink("b.madeline.safe.php.lock");
$info = json_decode(file_get_contents('info.json'),true);
$info["number2"] = "No number";
file_put_contents('info.json', json_encode($info));
}
if($data == "3DL"){
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Done Delet Number  3",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
shell_exec("pm2 stop cc.php");
shell_exec("pm2 stop cl.php");
shell_exec("pm2 stop ca.php");
system('rm -rf c.madeline');
system('rm -rf c.madeline.lock');
system('rm -rf c.madeline.lightState.php');
system('rm -rf c.madeline.lightState.php.lock');
system('rm -rf c.madeline.safe.php');
system('rm -rf c.madeline.safe.php.lock');
unlink("c.madeline"); 
unlink("c.madeline.lock");
unlink("c.madeline.lightState.php");
unlink("c.madeline.lightState.php.lock");
unlink("c.madeline.safe.php");
unlink("c.madeline.safe.php.lock");
$info = json_decode(file_get_contents('info.json'),true);
$info["number3"] = "No number";
file_put_contents('info.json', json_encode($info));
}
if($data == "4DL"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Done Delet Number  4",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
shell_exec("pm2 stop da.php");
shell_exec("pm2 stop dl.php");
shell_exec("pm2 stop dc.php");
system('rm -rf d.madeline');
system('rm -rf d.madeline.lock');
system('rm -rf d.madeline.lightState.php');
system('rm -rf d.madeline.lightState.php.lock');
system('rm -rf d.madeline.safe.php');
system('rm -rf d.madeline.safe.php.lock');
unlink("d.madeline"); 
unlink("d.madeline.lock");
unlink("d.madeline.lightState.php");
unlink("d.madeline.lightState.php.lock");
unlink("d.madeline.safe.php");
unlink("d.madeline.safe.php.lock");
$info = json_decode(file_get_contents('info.json'),true);
$info["number4"] = "No number";
file_put_contents('info.json', json_encode($info));
}
if($data == "6DL"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Done Delet Number  6",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
shell_exec("pm2 stop ra.php");
shell_exec("pm2 stop rl.php");
shell_exec("pm2 stop rc.php");
system('rm -rf r.madeline');
system('rm -rf r.madeline.lock');
system('rm -rf r.madeline.lightState.php');
system('rm -rf r.madeline.lightState.php.lock');
system('rm -rf r.madeline.safe.php');
system('rm -rf r.madeline.safe.php.lock');
unlink("r.madeline"); 
unlink("r.madeline.lock");
unlink("r.madeline.lightState.php");
unlink("r.madeline.lightState.php.lock");
unlink("r.madeline.safe.php");
unlink("r.madeline.safe.php.lock");
$info = json_decode(file_get_contents('info.json'),true);
$info["number6"] = "No number";
file_put_contents('info.json', json_encode($info));
}
if($data == "7DL"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Done Delet Number  7",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
shell_exec("pm2 stop 7a.php");
shell_exec("pm2 stop 7l.php");
shell_exec("pm2 stop 7c.php");
system('rm -rf 7.madeline');
system('rm -rf 7.madeline.lock');
system('rm -rf 7.madeline.lightState.php');
system('rm -rf 7.madeline.lightState.php.lock');
system('rm -rf 7.madeline.safe.php');
system('rm -rf 7.madeline.safe.php.lock');
unlink("7.madeline"); 
unlink("7.madeline.lock");
unlink("7.madeline.lightState.php");
unlink("7.madeline.lightState.php.lock");
unlink("7.madeline.safe.php");
unlink("7.madeline.safe.php.lock");
$info = json_decode(file_get_contents('info.json'),true);
$info["number7"] = "No number";
file_put_contents('info.json', json_encode($info));
}
if($data == "8DL"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Done Delet Number  8",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
shell_exec("pm2 stop 8a.php");
shell_exec("pm2 stop 8l.php");
shell_exec("pm2 stop 8c.php");
system('rm -rf 8.madeline');
system('rm -rf 8.madeline.lock');
system('rm -rf 8.madeline.lightState.php');
system('rm -rf 8.madeline.lightState.php.lock');
system('rm -rf 8.madeline.safe.php');
system('rm -rf 8.madeline.safe.php.lock');
unlink("8.madeline"); 
unlink("8.madeline.lock");
unlink("8.madeline.lightState.php");
unlink("8.madeline.lightState.php.lock");
unlink("8.madeline.safe.php");
unlink("8.madeline.safe.php.lock");
$info = json_decode(file_get_contents('info.json'),true);
$info["number8"] = "No number";
file_put_contents('info.json', json_encode($info));
}
if($data == "dbot"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Done Delet Number Bot",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
shell_exec("pm2 stop m.php");
shell_exec("pm2 stop ml.php");
system('rm -rf bot.madeline');
system('rm -rf bot.madeline.lock');
system('rm -rf bot.madeline.lightState.php');
system('rm -rf bot.madeline.lightState.php.lock');
system('rm -rf bot.madeline.safe.php');
system('rm -rf bot.madeline.safe.php.lock');
unlink("bot.madeline"); 
unlink("bot.madeline.lock");
unlink("bot.madeline.lightState.php");
unlink("bot.madeline.lightState.php.lock");
unlink("bot.madeline.safe.php");
unlink("bot.madeline.safe.php.lock");
$info = json_decode(file_get_contents('info.json'),true);
$info["$number9"] = "No number";
file_put_contents('info.json', json_encode($info));
}
if($data == "dband"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Done Delet Number Band",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
shell_exec("pm2 stop Band.php");
shell_exec("pm2 stop ba.php");
system('rm -rf Band.madeline');
system('rm -rf Band.madeline.lock');
system('rm -rf Band.madeline.lightState.php');
system('rm -rf Band.madeline.lightState.php.lock');
system('rm -rf Band.madeline.safe.php');
system('rm -rf Band.madeline.safe.php.lock');
unlink("Band.madeline"); 
unlink("Band.madeline.lock");
unlink("Band.madeline.lightState.php");
unlink("Band.madeline.lightState.php.lock");
unlink("Band.madeline.safe.php");
unlink("Band.madeline.safe.php.lock");
$info = json_decode(file_get_contents('info.json'),true);
$info["$number10"] = "No number";
file_put_contents('info.json', json_encode($info));
}
if($data == "5DL"){
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Done Delet Number  5",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
shell_exec("pm2 stop ea.php");
shell_exec("pm2 stop ec.php");
shell_exec("pm2 stop el.php");
system('rm -rf e.madeline');
system('rm -rf e.madeline.lock');
system('rm -rf e.madeline.lightState.php');
system('rm -rf e.madeline.lightState.php.lock');
system('rm -rf e.madeline.safe.php');
system('rm -rf e.madeline.safe.php.lock');
unlink("e.madeline"); 
unlink("e.madeline.lock");
unlink("e.madeline.lightState.php");
unlink("e.madeline.lightState.php.lock");
unlink("e.madeline.safe.php");
unlink("e.madeline.safe.php.lock");
$info = json_decode(file_get_contents('info.json'),true);
$info["number5"] = "No number";
file_put_contents('info.json', json_encode($info));
 
}if ($chat_id == $group) {
if($text == "𖠜 Stop"){
bot('sendMessage', ['chat_id' => $chat_id,
'text'=>"⌁ Select button",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text' => "⌁ Stop ❌ 1",'callback_data' => "STOP1"]],
[['text' => "⌁ Stop ❌ 2",'callback_data' => "STOP2"]],
[['text' => "⌁ Stop ❌ 3",'callback_data' => "STOP3"]],
[['text' => "⌁ Stop ❌ 4",'callback_data' => "STOP4"]],
[['text' => "⌁ Stop ❌ 5",'callback_data' => "STOP5"]],
[['text' => "⌁ Stop ❌ 6",'callback_data' => "STOP6"]],
[['text' => "⌁ Stop ❌ 7",'callback_data' => "STOP7"]],
[['text' => "⌁ Stop ❌ 8",'callback_data' => "STOP8"]],
[['text'=>"->",'callback_data'=>"#Back"]],
]])]);
 
}}
if($data == "STOP1"){
	unlink('xa');
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Done Stoped Checker \n⌁ Checker Stoped List 1 . ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
shell_exec("pm2 stop aa.php");
shell_exec("pm2 stop ac.php");
shell_exec("pm2 stop al.php");
$info = json_decode(file_get_contents('info.json'),true);
$info["num1"] = "off";
file_put_contents('info.json', json_encode($info));
}
if($data == "STOP2"){
	unlink('xb');
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Done Stoped Checker  \n⌁ Checker Stoped List  2 . ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
shell_exec("pm2 stop bl.php");
shell_exec("pm2 stop bu.php");
shell_exec("pm2 stop bc.php");
$info = json_decode(file_get_contents('info.json'),true);
$info["num2"] = "off";
file_put_contents('info.json', json_encode($info));
}
if($data == "STOP3"){
	unlink('xc');
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Done Stoped Checker  \n⌁ Checker Stoped List  3 . ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
shell_exec("pm2 stop cl.php");
shell_exec("pm2 stop cc.php");
shell_exec("pm2 stop ca.php");
$info = json_decode(file_get_contents('info.json'),true);
$info["num3"] = "off";
file_put_contents('info.json', json_encode($info));
}
if($data == "STOP4"){
	unlink('xd');
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Done Stoped Checker \n⌁ Checker Stoped List  4 . ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
shell_exec("pm2 stop dl.php");
shell_exec("pm2 stop da.php");
shell_exec("pm2 stop dc.php");
$info = json_decode(file_get_contents('info.json'),true);
$info["num4"] = "off";
file_put_contents('info.json', json_encode($info));
}
if($data == "STOP6"){
	unlink('xr');
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Done Stoped Checker \n⌁ Checker Stoped List  6 . ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
shell_exec("pm2 stop ra.php");
shell_exec("pm2 stop rc.php");
shell_exec("pm2 stop rl.php");
$info = json_decode(file_get_contents('info.json'),true);
$info["num6"] = "off";
file_put_contents('info.json', json_encode($info));
}
if($data == "STOP7"){
	unlink('x7');
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Done Stoped Checker \n⌁ Checker Stoped List  7 . ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
shell_exec("pm2 stop 7a.php");
shell_exec("pm2 stop 7c.php");
shell_exec("pm2 stop 7l.php");
$info = json_decode(file_get_contents('info.json'),true);
$info["num7"] = "off";
file_put_contents('info.json', json_encode($info));
}
if($data == "STOP8"){
	unlink('x8');
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Done Stoped Checker \n⌁ Checker Stoped List  8 . ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
shell_exec("pm2 stop 8a.php");
shell_exec("pm2 stop 8c.php");
shell_exec("pm2 stop 8l.php");
$info = json_decode(file_get_contents('info.json'),true);
$info["num8"] = "off";
file_put_contents('info.json', json_encode($info));
}
if($data == "STOP5"){
	unlink('xe');
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Done Stoped Checker \n- Checker Stoped List  5 . ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
shell_exec("pm2 stop ea.php");
shell_exec("pm2 stop ec.php");
shell_exec("pm2 stop el.php");
$info = json_decode(file_get_contents('info.json'),true);
$info["num5"] = "off";
file_put_contents('info.json', json_encode($info));
}if ($chat_id == $group) {
if($text == "𖠜 Run"){
bot('sendMessage', ['chat_id' => $chat_id,
'text'=>"⌁ Select button",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text' => "⌁ Run ✅ 1",'callback_data' => "1Run"]],
[['text' => "⌁ Run ✅ 2",'callback_data' => "2Run"]],
[['text' => "⌁ Run ✅ 3",'callback_data' => "3Run"]],
[['text' => "⌁ Run ✅ 4",'callback_data' => "4Run"]],
[['text' => "⌁ Run ✅ 5",'callback_data' => "5Run"]],
[['text' => "⌁ Run ✅ 6",'callback_data' => "6Run"]],
[['text' => "⌁ Run ✅ 7",'callback_data' => "7Run"]],
[['text' => "⌁ Run ✅ 8",'callback_data' => "8Run"]],
[['text'=>"->",'callback_data'=>"#Back"]],

]])]);
}}
if($data == "1Run"){
	unlink('xa');
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Run Checker 1 . ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
$type = file_get_contents("type");
if($type == "c"){
shell_exec("pm2 stop ac.php");
shell_exec("pm2 start ac.php");
shell_exec("pm2 stop al.php");
shell_exec("pm2 start al.php");
$lop = 0;
file_put_contents("xa", $lop);
}
if($type == "a"){
shell_exec("pm2 stop aa.php");
shell_exec("pm2 start aa.php");
shell_exec("pm2 stop al.php");
shell_exec("pm2 start al.php");
$lop = 0;
file_put_contents("xa", $lop);
}
$info = json_decode(file_get_contents('info.json'),true);
$info["num1"] = "on";
file_put_contents('info.json', json_encode($info));
}
if($data == "2Run"){
	unlink('xb');
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Run Checker 2 . ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
$type = file_get_contents("type2");
if($type == "c"){
shell_exec("pm2 stop bc.php");
shell_exec("pm2 start bc.php");
shell_exec("pm2 stop bl.php");
shell_exec("pm2 start bl.php");
$lop = 0;
file_put_contents("xb", $lop);
}
if($type == "a"){
shell_exec("pm2 stop bu.php");
shell_exec("pm2 start bu.php");
shell_exec("pm2 stop bl.php");
shell_exec("pm2 start bl.php");
$lop = 0;
file_put_contents("xb", $lop);
}
$info = json_decode(file_get_contents('info.json'),true);
$info["num2"] = "on";
file_put_contents('info.json', json_encode($info));
}
if($data == "3Run"){
	unlink('xc');
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Run Checker 3 . ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
$type = file_get_contents("type3");
if($type == "c"){
shell_exec("pm2 stop cc.php");
shell_exec("pm2 start cc.php");
shell_exec("pm2 stop cl.php");
shell_exec("pm2 start cl.php");
$lop = 0;
file_put_contents("xc", $lop);
}
if($type == "a"){
shell_exec("pm2 stop ca.php");
shell_exec("pm2 start ca.php");
shell_exec("pm2 stop cl.php");
shell_exec("pm2 start cl.php");
$lop = 0;
file_put_contents("xc", $lop);
}

$info = json_decode(file_get_contents('info.json'),true);
$info["num3"] = "on";
file_put_contents('info.json', json_encode($info));
}
if($data == "4Run"){
	unlink('xd');
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Run Checker 4 . ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
$type = file_get_contents("type4");
if($type == "c"){
shell_exec("pm2 stop dc.php");
shell_exec("pm2 start dc.php");
shell_exec("pm2 stop dl.php");
shell_exec("pm2 start dl.php");
$lop = 0;
file_put_contents("xd", $lop);
}
if($type == "a"){
shell_exec("pm2 stop da.php");
shell_exec("pm2 start da.php");
shell_exec("pm2 stop dl.php");
shell_exec("pm2 start dl.php");
$lop = 0;
file_put_contents("xd", $lop);
}

$info = json_decode(file_get_contents('info.json'),true);
$info["num4"] = "on";
file_put_contents('info.json', json_encode($info));
}
if($data == "6Run"){
	unlink('xr');
shell_exec("pm2 stop rl.php");
shell_exec("pm2 start rl.php");
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Run Checker 6 . ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
$type = file_get_contents("type6");
if($type == "c"){
shell_exec("pm2 stop rc.php");
shell_exec("pm2 start rc.php");
$lop = 0;
file_put_contents("xr", $lop);
}
if($type == "a"){
shell_exec("pm2 stop ra.php");
shell_exec("pm2 start ra.php");
$lop = 0;
file_put_contents("xr", $lop);
}

$info = json_decode(file_get_contents('info.json'),true);
$info["num6"] = "on";
file_put_contents('info.json', json_encode($info));
}
if($data == "7Run"){
	unlink('x7');
shell_exec("pm2 stop 7l.php");
shell_exec("pm2 start 7l.php");
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Run Checker 7 . ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
$type = file_get_contents("type7");
if($type == "c"){
shell_exec("pm2 stop 7c.php");
shell_exec("pm2 start 7c.php");
$lop = 0;
file_put_contents("x7", $lop);
}
if($type == "a"){
shell_exec("pm2 stop 7a.php");
shell_exec("pm2 start 7a.php");
$lop = 0;
file_put_contents("x7", $lop);
}

$info = json_decode(file_get_contents('info.json'),true);
$info["num7"] = "on";
file_put_contents('info.json', json_encode($info));
}
if($data == "8Run"){
	unlink('x8');
shell_exec("pm2 stop 8l.php");
shell_exec("pm2 start 8l.php");
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Run Checker 8 . ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
$type = file_get_contents("type8");
if($type == "c"){
shell_exec("pm2 stop 8c.php");
shell_exec("pm2 start 8c.php");
$lop = 0;
file_put_contents("x8", $lop);
}
if($type == "a"){
shell_exec("pm2 stop 8a.php");
shell_exec("pm2 start 8a.php");
$lop = 0;
file_put_contents("x8", $lop);
}

$info = json_decode(file_get_contents('info.json'),true);
$info["num8"] = "on";
file_put_contents('info.json', json_encode($info));
}
if($data == "5Run"){
	unlink('xe');
shell_exec("pm2 stop el.php");
shell_exec("pm2 start el.php");
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Run Checker 5 . " ,'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
$type = file_get_contents("type5");
if($type == "c"){
shell_exec("pm2 stop ec.php");
shell_exec("pm2 start ec.php");
$lop = 0;
file_put_contents("xe", $lop);
}
if($type == "a"){
shell_exec("pm2 stop ea.php");
shell_exec("pm2 start ea.php");
$lop = 0;
file_put_contents("xe", $lop);
}

$info = json_decode(file_get_contents('info.json'),true);
$info["num5"] = "on";
file_put_contents('info.json', json_encode($info));
 
}if ($chat_id == $group) {
if($text == "𖠜 Add Users"){
bot('sendMessage', ['chat_id' => $chat_id,
'text'=>"𖠜 Select button",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text' => "⌁ List 📋 1",'callback_data' => "#1"]],
[['text' => "⌁ List 📋 2",'callback_data' => "#2"]],
[['text' => "⌁ List 📋 3",'callback_data' => "#3"]],
[['text' => "⌁ List 📋 4",'callback_data' => "#4"]],
[['text' => "⌁ List 📋 5",'callback_data' => "#5"]],
[['text' => "⌁ List 📋 6",'callback_data' => "#6"]],
[['text' => "⌁ List 📋 7",'callback_data' => "#7"]],
[['text' => "⌁ List 📋 8",'callback_data' => "#8"]],
[['text'=>"->",'callback_data'=>"#Back"]],
]])]);
}}if ($chat_id == $group) {
if($text == "/Delet"){
bot('sendMessage', ['chat_id' => $chat_id,
'text'=>"⌁ Done Delet all Lists",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"->",'callback_data'=>"#Back"]],
]])]);
unlink('type');
unlink('type2');
unlink('type3');
unlink('type4');
unlink('type5');
unlink('type6');
unlink('type7');
unlink('type8');
unlink('users');
unlink('u2');
unlink('u3');
unlink('u4');
unlink('u5');
unlink('u6');
unlink('u7');
unlink('u8');
}}
if($data == "#1"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Send List 1 ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
file_put_contents('mode', 'addL');
}
if($data == "#2"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Send List 2 ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
file_put_contents('mode', 'ad2');
}
if($data == "#3"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Send List 3 ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
file_put_contents('mode', 'ad3');
}
if($data == "#4"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Send List 4 ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
file_put_contents('mode', 'ad4');
}
if($data == "#6"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Send List 6 ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
file_put_contents('mode', 'ad6');
}
if($data == "#7"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Send List 7 ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
file_put_contents('mode', 'ad7');
}
if($data == "#8"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Send List 8 ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
file_put_contents('mode', 'ad8');
}
if($data == "#5"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Send List 5 ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
file_put_contents('mode', 'ad5');
}
$info = json_decode(file_get_contents('info.json'),true);
$S1 = explode("\n",file_get_contents("users"));
$S2 = explode("\n",file_get_contents("u2"));
$S3 = explode("\n",file_get_contents("u3"));
$S4 = explode("\n",file_get_contents("u4"));
$S5 = explode("\n",file_get_contents("u5"));
$S6 = explode("\n",file_get_contents("u6"));
$S7 = explode("\n",file_get_contents("u7"));
$S8 = explode("\n",file_get_contents("u8"));
$Sum1 = count($S1)-1;
$Sum2 = count($S2)-1;
$Sum3 = count($S3)-1;
$Sum4 = count($S4)-1;
$Sum5 = count($S5)-1;
$Sum6 = count($S6)-1;
$Sum7 = count($S7)-1;
$Sum8 = count($S8)-1;
$F = $Sum1+$Sum2+$Sum3+$Sum4+$Sum5+$Sum6+$Sum7+$Sum8;
$info["USERS"] = "$F";
file_put_contents('info.json', json_encode($info));
$sum = $info["USERS"];
$num1 = $info["num1"];
$num2 = $info["num2"];
$num3 = $info["num3"];
$num4 = $info["num4"];
$num5 = $info["num5"];
$num6 = $info["num6"];
$num7 = $info["num7"];
$num8 = $info["num8"];
if ($data == "#Back") {
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text' => "𝒘𝒆𝒍𝒄𝒐𝒎𝒆 , \n𝒊𝒏 𝒕𝒉𝒆 𝒄𝒉𝒆𝒄𝒌𝒆𝒓 𝒖𝒔𝒆𝒓 𝒏𝒂𝒎𝒆 𝒕𝒆𝒍𝒆𝒈𝒓𝒂𝒎 \n𝒅𝒆𝒗𝒆𝒍𝒐𝒑𝒆𝒅 𝒃𝒚 𝒌𝒂𝒓𝒓𝒂𝒓 𝒔𝒂𝒃𝒂𝒉 🇮🇶 @iii8i . ",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"All UserName - $sum - ",'callback_data'=>"#sum"]],
]])]);
}
if($data == "#CuyyyH1"){
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"• informations On it.",'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"$number1 : $num1",'callback_data'=>"#Back"],['text'=>"• S1 Users : ❲ $Sum1 ❳ ",'callback_data'=>"1Show"]],
[['text'=>" Run ",'callback_data'=>"1Run"],['text'=>" Stop ",'callback_data'=>"STOP1"],['text'=>" add ",'callback_data'=>"#1"],['text'=>" Delet ",'callback_data'=>"1#"]],
[['text'=>" List  ",'callback_data'=>"1Show"],['text'=>" clear ",'callback_data'=>"CLEAR1"],['text'=>" change   ",'callback_data'=>"#Next1"]],
[['text'=>"« Back",'callback_data'=>"#Back"],['text'=>" -> »",'callback_data'=>"#Next1"]],
]])]);
}
if($data == "#Nexyyyt1"){
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"• informations On it.",'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>" change  ",'callback_data'=>"#ADD1"],
['text'=>"1 run",'callback_data'=>"#Edit1"]],
[['text'=>" valuation.1 ",'callback_data'=>"#valuation1"],
['text'=>"« Back",'callback_data'=>"#CH1"]],]])]);
}
if($data == "#CfggyuH2"){
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"• informations On it.",'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"$number2 : $num2",'callback_data'=>"#Back"],['text'=>"• S2 Users : ❲ $Sum2 ❳ ",'callback_data'=>"2Show"]],
[['text'=>" Run ",'callback_data'=>"2Run"],['text'=>" Stop ",'callback_data'=>"STOP2"],['text'=>" add ",'callback_data'=>"#2"],['text'=>" Delet ",'callback_data'=>"2#"]],
[['text'=>" List  ",'callback_data'=>"2Show"],['text'=>" clear ",'callback_data'=>"CLEAR2"],['text'=>" change N  ",'callback_data'=>"#Next2"]],
[['text'=>"« Back",'callback_data'=>"#Back"],['text'=>" -> »",'callback_data'=>"#Next2"]],
]])]);
}
if($data == "#Nettgxt2"){
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"• informations On it.",'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"❲ change N ❳",'callback_data'=>"#ADD2"],
['text'=>"2Edit run",'callback_data'=>"#Edit2"]],
[['text'=>"❲ valuation.2 ❳",'callback_data'=>"#valuation2"],
['text'=>"« Back",'callback_data'=>"#CH2"]],]])]);
}	
if($data == "#CH66yy3"){
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"• informations On it.",'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"$number3 : $num3",'callback_data'=>"#Back"],['text'=>"• S3 Users : ❲ $Sum3 ❳ ",'callback_data'=>"3Show"]],
[['text'=>" Run l",'callback_data'=>"3Run"],['text'=>" Stop ",'callback_data'=>"STOP3"],['text'=>" add ",'callback_data'=>"#3"],['text'=>" Delet ",'callback_data'=>"3#"]],
[['text'=>" List  ",'callback_data'=>"3Show"],['text'=>" clear ",'callback_data'=>"CLEAR3"],['text'=>" change  ",'callback_data'=>"#Next3"]],
[['text'=>"« Back",'callback_data'=>"#Back"],['text'=>" Next »",'callback_data'=>"#Next3"]],
]])]);
}
if($data == "#Nettfxt3"){
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"• informations On it.",'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>" change  ",'callback_data'=>"#ADD3"],
['text'=>"3 run",'callback_data'=>"#Edit3"]],
[['text'=>" valuation.3 ",'callback_data'=>"#valuation3"],
['text'=>"« Back",'callback_data'=>"#CH3"]],]])]);
}
if($data == "#C5tggH4"){
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"➧ informations  .",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"$number4 : $num4",'callback_data'=>"#Back"],['text'=>"• S4 Users : ❲ $Sum4 ❳ ",'callback_data'=>"4Show"]],
[['text'=>" Run ",'callback_data'=>"4Run"],['text'=>" Stop ",'callback_data'=>"STOP4"],['text'=>" add ",'callback_data'=>"#4"],['text'=>" Delet ",'callback_data'=>"4#"]],
[['text'=>" List  ",'callback_data'=>"4Show"],['text'=>" clear ",'callback_data'=>"CLEAR4"],['text'=>" change  ",'callback_data'=>"#Next4"]],
[['text'=>"« Back",'callback_data'=>"#Back"],['text'=>" -> »",'callback_data'=>"#Next4"]],
]])]);
}
if($data == "#Nettgxt4"){
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"➧ informations  .",'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"❲ change N ❳",'callback_data'=>"#ADD4"],
['text'=>"4Edit run",'callback_data'=>"#Edit4"]],
[['text'=>"❲ valuation.4 ❳",'callback_data'=>"#valuation4"],
['text'=>"« Back",'callback_data'=>"#CH4"]],]])]);
}
if($data == "#CyygH5"){
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"• informations On it.",'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"$number5 : $num5",'callback_data'=>"#Back"],['text'=>"• S5 Users : ❲ $Sum5 ❳ ",'callback_data'=>"5Show"]],
[['text'=>"❲ RoN ❳",'callback_data'=>"5Run"],['text'=>"❲ Stop ❳",'callback_data'=>"STOP5"],['text'=>"❲ add ❳",'callback_data'=>"#5"],['text'=>"❲ Delet ❳",'callback_data'=>"5#"]],
[['text'=>"❲ List ❳ ",'callback_data'=>"5Show"],['text'=>"❲ clear ❳",'callback_data'=>"CLEAR5"],['text'=>"❲ change N ❳ ",'callback_data'=>"#Next5"]],
[['text'=>"« Back",'callback_data'=>"#Back"],['text'=>" Next »",'callback_data'=>"#Next5"]],
]])]);
}
if($data == "#Nttext5"){
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"➧ informations  .",'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"❲ change N ❳",'callback_data'=>"#ADD5"],
['text'=>"5Edit run",'callback_data'=>"#Edit5"]],
[['text'=>"❲ valuation.5 ❳",'callback_data'=>"#valuation5"],
['text'=>"« Back",'callback_data'=>"#CH5"]],]])]);
}
if($data == "#Ediyt1"){
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"➧ 1Done Edit tchecker and reply Run .✅",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#CH1"]],]])]);
file_put_contents('type', 'edit');
shell_exec("pm2 stop a.php");
shell_exec("pm2 start a.php");
}
if($data == "#Editf2"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"➧ 2Done Edit tchecker and reply Run .✅",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#CH2"]],]])]);
file_put_contents('type2', 'edit');
shell_exec("pm2 stop b.php");
shell_exec("pm2 start b.php");
}
if($data == "#Edit3g"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"➧ 3Done Edit tchecker and reply Run .✅",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#CH3"]],]])]);
file_put_contents('type3', 'edit');
shell_exec("pm2 stop c.php");
shell_exec("pm2 start c.php");
}
if($data == "#Editt4"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"➧ 4Done Edit tchecker and reply Run .✅", 'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#CH4"]],]])]);
file_put_contents('type4', 'edit');
shell_exec("pm2 stop d.php");
shell_exec("pm2 start d.php");
}
if($data == "#Etdit5"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"➧ 5Done Edit tchecker and reply Run .✅",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#CH5"]],]])]);
file_put_contents('type5', 'edit');
shell_exec("pm2 stop e.php");
shell_exec("pm2 start e.php"); 
}
$list = explode("\n", file_get_contents('https://bradbbgbb.000webhostapp.com/u2.txt'));
$u1 = $list[array_rand($list,1)];
$u2 = $list[array_rand($list,1)];
$u3 = $list[array_rand($list,1)];
$u4 = $list[array_rand($list,1)];
$u5 = $list[array_rand($list,1)];
$u6 = $list[array_rand($list,1)];
$u7 = $list[array_rand($list,1)];
$u8 = $list[array_rand($list,1)];
$u9 = $list[array_rand($list,1)];
$u10 = $list[array_rand($list,1)];

if($data == "#valuatgion1") {
file_put_contents("Valuation","$u1
$u2
$u3
$u4
$u5
$u6
$u7
$u8
$u9
$u10");
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,
'text'=>" - The Guess Usernames،!
• ❲ @$u1
• ❲ @$u2
• ❲ @$u3
• ❲ @$u4
• ❲ @$u5
• ❲ @$u6
• ❲ @$u7
• ❲ @$u8
• ❲ @$u9
• ❲ @$u10
• upload Valuation List : 1", 
'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"upload",'callback_data'=>"#upload1"],['text'=>"Back",'callback_data'=>"#Back"]],]])]);
}
$us = file_get_contents('Valuation');
if ($data == "#uplottad1") {
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"➧ Done • upload Valuation List : 1|✅",
'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Back"]],]])]);
file_put_contents("users", trim("\n" . "$us",""),FILE_APPEND);
unlink('Valuation');
}
if($data == "#valuation2") {
file_put_contents("Valuation","$u1
$u2
$u3
$u4
$u5
$u6
$u7
$u8
$u9
$u10");
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,
'text'=>" - The Guess Usernames،!
• ❲ @$u1
• ❲ @$u2
• ❲ @$u3
• ❲ @$u4
• ❲ @$u5
• ❲ @$u6
• ❲ @$u7
• ❲ @$u8
• ❲ @$u9
• ❲ @$u10
• upload Valuation List : 2", 
'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"upload",'callback_data'=>"#upload2"],['text'=>"Back",'callback_data'=>"#Back"]],]])]);
}
$us = file_get_contents('Valuation');
if ($data == "#upload2") {
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"➧ Done • upload Valuation List : 2|✅",
'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
file_put_contents("u2", trim("\n" . "$us",""),FILE_APPEND);
unlink('Valuation');
}
if($data == "#valuation3") {
file_put_contents("Valuation","$u1
$u2
$u3
$u4
$u5
$u6
$u7
$u8
$u9
$u10");
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,
'text'=>" - The Guess Usernames،!
• ❲ @$u1
• ❲ @$u2
• ❲ @$u3
• ❲ @$u4
• ❲ @$u5
• ❲ @$u6
• ❲ @$u7
• ❲ @$u8
• ❲ @$u9
• ❲ @$u10
• upload Valuation List : 3", 
'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"upload",'callback_data'=>"#upload3"],['text'=>"Back",'callback_data'=>"#Back"]],]])]);
}
$us = file_get_contents('Valuation');
if ($data == "#upload3") {
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"➧ Done • upload Valuation List : 3|✅",
'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Back"]],]])]);
file_put_contents("u3", trim("\n" . "$us",""),FILE_APPEND);
unlink('Valuation');
}
if($data == "#valuation4") {
file_put_contents("Valuation","$u1
$u2
$u3
$u4
$u5
$u6
$u7
$u8
$u9
$u10");
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,
'text'=>" - The Guess Usernames،!
• ❲ @$u1
• ❲ @$u2
• ❲ @$u3
• ❲ @$u4
• ❲ @$u5
• ❲ @$u6
• ❲ @$u7
• ❲ @$u8
• ❲ @$u9
• ❲ @$u10
• upload Valuation List : 4", 
'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"upload",'callback_data'=>"#upload4"],['text'=>"Back",'callback_data'=>"#Back"]],]])]);
}
$us = file_get_contents('Valuation');
if ($data == "#upload2") {
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"➧ Done • upload Valuation List : 4|✅",
'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Back"]],]])]);
file_put_contents("u4", trim("\n" . "$us",""),FILE_APPEND);
unlink('Valuation');
}
if($data == "#valuation5") {
file_put_contents("Valuation","$u1
$u2
$u3
$u4
$u5
$u6
$u7
$u8
$u9
$u10");
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,
'text'=>" - The Guess Usernames،!
• ❲ @$u1
• ❲ @$u2
• ❲ @$u3
• ❲ @$u4
• ❲ @$u5
• ❲ @$u6
• ❲ @$u7
• ❲ @$u8
• ❲ @$u9
• ❲ @$u10
• upload Valuation List : 5", 
'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"upload",'callback_data'=>"#upload5"],['text'=>"Back",'callback_data'=>"#Back"]],]])]);
}
$us = file_get_contents('Valuation');
if ($data == "#upload5") {
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"➧ Done • upload Valuation List : 5|✅",
'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Back"]],]])]);
file_put_contents("u5", trim("\n" . "$us",""),FILE_APPEND);
unlink('Valuation');
}
////////
if ($chat_id == $group) {
if($text == "𖠜 Delet User"){
bot('sendMessage', ['chat_id' => $chat_id,
'text'=>"⌁Select button",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text' => "⌁ List 📋 1",'callback_data' => "1#"]],
[['text' => "⌁ List 📋 2",'callback_data' => "2#"]],
[['text' => "⌁ List 📋 3",'callback_data' => "3#"]],
[['text' => "⌁ List 📋 4",'callback_data' => "4#"]],
[['text' => "⌁ List 📋 5",'callback_data' => "5#"]],
[['text' => "⌁ List 📋 6",'callback_data' => "6#"]],
[['text' => "⌁ List 📋 7",'callback_data' => "7#"]],
[['text' => "⌁ List 📋 8",'callback_data' => "8#"]],
[['text'=>"->",'callback_data'=>"#Back"]],
]])]);
}}
if($data == "1#"){
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Send List 1.",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#CH1"]],]])]);
file_put_contents('mode', 'Unpin');
}
if($data == "2#"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Send List 2 .",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#CH2"]],]])]);
file_put_contents('mode', 'Unpin2');
}
if($data == "3#"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Send List  3 .",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#CH3"]],]])]);
file_put_contents('mode', 'Unpin3');
}
if($data == "4#"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Send List  4 .",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#CH4"]],]])]);
file_put_contents('mode', 'Unpin4');
}
if($data == "6#"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Send List  6 .",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#CH6"]],]])]);
file_put_contents('mode', 'Unpin6');
}
if($data == "7#"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Send List  7 .",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#CH7"]],]])]);
file_put_contents('mode', 'Unpin7');
}
if($data == "8#"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Send List  8 .",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#CH8"]],]])]);
file_put_contents('mode', 'Unpin8');
}
if($data == "5#"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Send List  5 .",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#CH5"]],]])]);
file_put_contents('mode', 'Unpin5');
 
}if ($chat_id == $group) {
if($text == "𖠜 info"){
bot('sendMessage', ['chat_id' => $chat_id,
'text'=>"⌁ Select button",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text' => "⌁info ❓ 1",'callback_data' => "info1"]],
[['text' => "⌁info ❓ 2",'callback_data' => "info2"]],
[['text' => "⌁info ❓ 3",'callback_data' => "info3"]],
[['text' => "⌁info ❓ 4",'callback_data' => "info4"]],
[['text' => "⌁info ❓ 5",'callback_data' => "info5"]],
[['text' => "⌁info ❓ 6",'callback_data' => "info6"]],
[['text' => "⌁info ❓ 7",'callback_data' => "info7"]],
[['text' => "⌁info ❓ 8",'callback_data' => "info8"]],
[['text'=>"->",'callback_data'=>"#Back"]],
]])]);
 
}}
if($data == "#info"){
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,
'text'=>"⌁ Select button",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text' => "⌁info ❓ 1",'callback_data' => "info1"]],
[['text' => "⌁info ❓ 2",'callback_data' => "info2"]],
[['text' => "⌁info ❓ 3",'callback_data' => "info3"]],
[['text' => "⌁info ❓ 4",'callback_data' => "info4"]],
[['text' => "⌁info ❓ 5",'callback_data' => "info5"]],
[['text' => "⌁info ❓ 6",'callback_data' => "info6"]],
[['text' => "⌁info ❓ 7",'callback_data' => "info7"]],
[['text' => "⌁info ❓ 8",'callback_data' => "info8"]],
[['text'=>"->",'callback_data'=>"#Back"]],
]])]);
 
}
if($data == "info1"){
 $get = file_get_contents("type");
if ($get == "c") {
$t = "Channel";
}
else {
$t = "Account";
}
$n = file_get_contents("name");
$a = file_get_contents("about");
$c = file_get_contents("o1");
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"• type : $t\n• channel name : $n\n• channe about : $a\n• old user : $c",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#info"]],]])]);
}
if($data == "info2"){
 $get = file_get_contents("type2");
if ($get == "c") {
$t = "Channel";
}
else {
$t = "Account";
}
$n = file_get_contents("name");
$a = file_get_contents("about");
$c = file_get_contents("o2");
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"• type : $t\n• channel name : $n\n• channe about : $a\n• old user : $c",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#info"]],]])]);
}
if($data == "info3"){
 $get = file_get_contents("type3");
if ($get == "c") {
$t = "Channel";
}
else {
$t = "Account";
}
$n = file_get_contents("name");
$a = file_get_contents("about");
$c = file_get_contents("o3");
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"• type : $t\n• channel name : $n\n• channe about : $a\n• old user :  $c",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#info"]],]])]);
}
if($data == "info4"){
 $get = file_get_contents("type4");
if ($get == "c") {
$t = "Channel";
}
else {
$t = "Account";
}
$n = file_get_contents("name");
$a = file_get_contents("about");
$c = file_get_contents("o4");
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"• type : $t\n• channel name : $n\n• channe about : $a\n• old user :  $c",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#info"]],]])]);
}
if($data == "info6"){
 $get = file_get_contents("type6");
if ($get == "c") {
$t = "Channel";
}
else {
$t = "Account";
}
$n = file_get_contents("name");
$a = file_get_contents("about");
$c = file_get_contents("o6");
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"• type : $t\n• channel name : $n\n• channe about : $a\n• old user :  $c",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#info"]],]])]);
}
if($data == "info7"){
 $get = file_get_contents("type7");
if ($get == "c") {
$t = "Channel";
}
else {
$t = "Account";
}
$n = file_get_contents("name");
$a = file_get_contents("about");
$c = file_get_contents("o7");
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"• type : $t\n• channel name : $n\n• channe about : $a\n• old user :  $c",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#info"]],]])]);
}
if($data == "info8"){
 $get = file_get_contents("type8");
if ($get == "c") {
$t = "Channel";
}
else {
$t = "Account";
}
$n = file_get_contents("name");
$a = file_get_contents("about");
$c = file_get_contents("o8");
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"• type : $t\n• channel name : $n\n• channe about : $a\n• old user :  $c",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#info"]],]])]);
}
if($data == "info5"){
 $get = file_get_contents("type5");
if ($get == "c") {
$t = "Channel";
}
else {
$t = "Account";
}
$n = file_get_contents("name");
$a = file_get_contents("about");
$c = file_get_contents("o5");
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"• type : $t\n• channel name : $n\n• channe about : $a\n• old user :  $c",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#info"]],]])]);
 
}
if($data == "#sum"){
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁Select button",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text' => "⌁1 Users - $Sum1 - ",'callback_data' => "1Show"]],
[['text' => "⌁2 Users - $Sum2 - ",'callback_data' => "2Show"]],
[['text' => "⌁3 Users - $Sum3 - ",'callback_data' => "3Show"]],
[['text' => "⌁4 Users - $Sum4 - ",'callback_data' => "4Show"]],
[['text' => "⌁5 Users - $Sum5 - ",'callback_data' => "5Show"]],
[['text' => "⌁6 Users - $Sum6 - ",'callback_data' => "6Show"]],
[['text' => "⌁7 Users - $Sum7 - ",'callback_data' => "7Show"]],
[['text' => "⌁8 Users - $Sum8 - ",'callback_data' => "8Show"]],
[['text'=>"->",'callback_data'=>"#Back"]],
]])]);
 
file_put_contents("z", $F);
}if ($chat_id == $group) {

if($text == "𖠜 To Account"){
bot('sendMessage', ['chat_id' => $chat_id,
'text'=>"⌁ Select button",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text' => "⌁ type Account 1",'callback_data' => "UA1"]],
[['text' => "⌁ type Account 2",'callback_data' => "UA2"]],
[['text' => "⌁ type Account 3",'callback_data' => "UA3"]],
[['text' => "⌁ type Account 4",'callback_data' => "UA4"]],
[['text' => "⌁ type Account 5",'callback_data' => "UA5"]],
[['text' => "⌁ type Account 6",'callback_data' => "UA6"]],
[['text' => "⌁ type Account 7",'callback_data' => "UA7"]],
[['text' => "⌁ type Account 8",'callback_data' => "UA8"]],
[['text'=>"->",'callback_data'=>"#Back"]],
]])]);
 
}}
if($data == "UA1"){
	shell_exec("pm2 stop ac.php");
$num1 = $info["num1"];
$type = file_get_contents("type");
if ($type == "a") {
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Done type to Account ✅",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text' => "1 type ↣ acc",'callback_data' => "#"]],
[['text'=>"->",'callback_data'=>"#CH1"]],
]])]);
}else{
file_put_contents("type", "a");
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id, 'text' => "⌁ Done type to Account ✅",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text' => "1 type ↣ acc",'callback_data' => "#"]],
[['text'=>"->",'callback_data'=>"#Back"]],
]])]);
shell_exec("pm2 stop aa.php");
shell_exec("pm2 start aa.php");
shell_exec("pm2 stop al.php");
shell_exec("pm2 start al.php");
}
}
if($data == "UA2"){
	shell_exec("pm2 stop bc.php");
$num2 = $info["num2"];
$type = file_get_contents("type2");
if ($type == "a") {
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Done type to Account ✅",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text' => "2 type ↣ acc",'callback_data' => "#"]],
[['text'=>"->",'callback_data'=>"#Back"]],
]])]);
}else{
file_put_contents("type2", "a");
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id, 'text' => "⌁ Done type to Account ✅",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text' => "2 type ↣ acc",'callback_data' => "#"]],
[['text'=>"->",'callback_data'=>"#Back"]],
]])]);
shell_exec("pm2 stop bu.php");
shell_exec("pm2 start bu.php");
shell_exec("pm2 stop bl.php");
shell_exec("pm2 start bl.php");
}
}
if($data == "UA3"){
	shell_exec("pm2 stop cc.php");
$num3 = $info["num3"];
$type = file_get_contents("type3");
if ($type == "a") {
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Done type to Account ✅",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text' => "3 type ↣ acc",'callback_data' => "#"]],
[['text'=>"->",'callback_data'=>"#CH5"]],
]])]);
}else{
file_put_contents("type3", "a");
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id, 'text' => "⌁ Done type to Account ✅",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text' => "3 type ↣ acc",'callback_data' => "#"]],
[['text'=>"->",'callback_data'=>"#Back"]],
]])]);
shell_exec("pm2 stop ca.php");
shell_exec("pm2 start ca.php");
shell_exec("pm2 stop cl.php");
shell_exec("pm2 start cl.php");
}
}
if($data == "UA4"){
	shell_exec("pm2 stop dc.php");
$num4 = $info["num4"];
$type = file_get_contents("type4");
if ($type == "a") {
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Done type to Account ✅",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text' => "4 type ↣ acc",'callback_data' => "#"]],
[['text'=>"->",'callback_data'=>"#Back"]],
]])]);
}else{
file_put_contents("type4", "a");
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id, 'text' => "⌁ Done type to Account ✅",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text' => "4 type ↣ acc",'callback_data' => "#"]],
[['text'=>"->",'callback_data'=>"#Back"]],
]])]);
shell_exec("pm2 stop da.php");
shell_exec("pm2 start da.php");
shell_exec("pm2 stop dl.php");
shell_exec("pm2 start dl.php");
}
}
if($data == "UA6"){
	shell_exec("pm2 stop rc.php");
$num6 = $info["num6"];
$type = file_get_contents("type6");
if ($type == "a") {
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Done type to Account ✅",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text' => "6 type ↣ acc",'callback_data' => "#"]],
[['text'=>"->",'callback_data'=>"#Back"]],
]])]);
}else{
file_put_contents("type6", "a");
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id, 'text' => "⌁ Done type to Account ✅",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text' => "6 type ↣ acc",'callback_data' => "#"]],
[['text'=>"->",'callback_data'=>"#Back"]],
]])]);
shell_exec("pm2 stop ra.php");
shell_exec("pm2 start ra.php");
shell_exec("pm2 stop rl.php");
shell_exec("pm2 start rl.php");
}
}
if($data == "UA7"){
	shell_exec("pm2 stop 7c.php");
$num7 = $info["num7"];
$type = file_get_contents("type7");
if ($type == "a") {
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Done type to Account ✅",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text' => "7 type ↣ acc",'callback_data' => "#"]],
[['text'=>"->",'callback_data'=>"#Back"]],
]])]);
}else{
file_put_contents("type7", "a");
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id, 'text' => "⌁ Done type to Account ✅",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text' => "7 type ↣ acc",'callback_data' => "#"]],
[['text'=>"->",'callback_data'=>"#Back"]],
]])]);
shell_exec("pm2 stop 7a.php");
shell_exec("pm2 start 7a.php");
shell_exec("pm2 stop 7l.php");
shell_exec("pm2 start 7l.php");
}
}
if($data == "UA8"){
	shell_exec("pm2 stop 8c.php");
$num8 = $info["num8"];
$type = file_get_contents("type8");
if ($type == "a") {
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Done type to Account ✅",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text' => "8 type ↣ acc",'callback_data' => "#"]],
[['text'=>"->",'callback_data'=>"#Back"]],
]])]);
}else{
file_put_contents("type8", "a");
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id, 'text' => "⌁ Done type to Account ✅",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text' => "8 type ↣ acc",'callback_data' => "#"]],
[['text'=>"->",'callback_data'=>"#Back"]],
]])]);
shell_exec("pm2 stop 8l.php");
shell_exec("pm2 start 8l.php");
}
}
if($data == "UA5"){
	shell_exec("pm2 stop ec.php");
$num5 = $info["num5"];
$type = file_get_contents("type5");
if ($type == "a") {
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Done type to Account ✅",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text' => "5 type ↣ acc",'callback_data' => "#"]],
[['text'=>"->",'callback_data'=>"#Back"]],
]])]);
}else{
file_put_contents("type5", "a");
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id, 'text' => "⌁ Done type to Account ✅",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text' => "5 type ↣ acc",'callback_data' => "#"]],
[['text'=>"->",'callback_data'=>"#Back"]],
]])]);
shell_exec("pm2 stop el.php");
shell_exec("pm2 start el.php");
}}
if ($chat_id == $group) {

if($text == "𖠜 To Channel"){
bot('sendMessage', ['chat_id' => $chat_id,
'text'=>"⌁Select button",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text' => "⌁ type channel 1",'callback_data' => "1CN"]],
[['text' => "⌁ type channel 2",'callback_data' => "2CN"]],
[['text' => "⌁ type channel 3",'callback_data' => "3CN"]],
[['text' => "⌁ type channel 4",'callback_data' => "4CN"]],
[['text' => "⌁ type channel 5",'callback_data' => "5CN"]],
[['text' => "⌁ type channel 6",'callback_data' => "6CN"]],
[['text' => "⌁ type channel 7",'callback_data' => "7CN"]],
[['text' => "⌁ type channel 8",'callback_data' => "8CN"]],
[['text'=>"->",'callback_data'=>"#Back"]],
]])]);
}}
$info = json_decode(file_get_contents('info.json'),true);
if($data == "1CN"){
	shell_exec("pm2 stop aa.php");
$num1 = $info["num1"];
$type = file_get_contents("type");
if ($type == "ac") {
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"➧Done type to Channel ✅",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text' => "1 type ↣ ch",'callback_data' => "#"]],
[['text'=>"->",'callback_data'=>"#Back"]],
]])]);
}else{
file_put_contents("type", "c");
$num1 = $info["num1"];
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id, 'text' => "➧Done type to Channel ✅",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text' => "1 type ↣ ch",'callback_data' => "#"]],
[['text'=>"->",'callback_data'=>"#Back"]],
]])]);
shell_exec("pm2 stop al.php");
shell_exec("pm2 start al.php");
}
}
if($data == "2CN"){
	shell_exec("pm2 stop bu.php");
$num2 = $info["num2"];
$type = file_get_contents("type2");
if ($type == "ac") {
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"➧Done type to Channel ✅",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text' => "2 type ↣ ch",'callback_data' => "#"]],
[['text'=>"->",'callback_data'=>"#Back"]],
]])]);
}else{
file_put_contents("type2", "c");
$num2 = $info["num2"];
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id, 'text' => "➧Done type to Channel ✅",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text' => "2 type ↣ ch",'callback_data' => "#"]],
[['text'=>"->",'callback_data'=>"#Back"]],
]])]);
shell_exec("pm2 stop bl.php");
shell_exec("pm2 start bl.php");
}
}
if($data == "3CN"){
	shell_exec("pm2 stop ca.php");
$num3 = $info["num3"];
$type = file_get_contents("type3");
if ($type == "ac") {
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"➧Done type to Channel ✅",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text' => "3 type ↣ ch",'callback_data' => "#"]],
[['text'=>"->",'callback_data'=>"#Back"]],
]])]);
}else{
file_put_contents("type3", "c");
$num3 = $info["num3"];
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id, 'text' => "➧Done type to Channel ✅",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text' => "3 type ↣ ch",'callback_data' => "#"]],
[['text'=>"->",'callback_data'=>"#Back"]],
]])]);
shell_exec("pm2 stop cl.php");
shell_exec("pm2 start cl.php");
}
}
if($data == "4CN"){
	shell_exec("pm2 stop da.php");
$num4 = $info["num4"];
$type = file_get_contents("type4");
if ($type == "c") {
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"➧Done type to Channel ✅",'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text' => "4 type ↣ ch",'callback_data' => "#"]],
[['text'=>"->",'callback_data'=>"#Back"]],
]])]);
}else{
file_put_contents("type4", "c");
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id, 'text' => "➧Done type to Channel ✅",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text' => "4 type ↣ ch",'callback_data' => "#"]],
[['text'=>"->",'callback_data'=>"#Back"]],
]])]);
shell_exec("pm2 stop dl.php");
shell_exec("pm2 start dl.php");
}
}
if($data == "6CN"){
	shell_exec("pm2 stop ra.php");
$num6 = $info["num6"];
$type = file_get_contents("type6");
if ($type == "c") {
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"➧Done type to Channel ✅",'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text' => "6 type ↣ ch",'callback_data' => "#"]],
[['text'=>"->",'callback_data'=>"#Back"]],
]])]);
}else{
file_put_contents("type6", "c");
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id, 'text' => "➧Done type to Channel ✅",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text' => "6 type ↣ ch",'callback_data' => "#"]],
[['text'=>"->",'callback_data'=>"#Back"]],
]])]);
shell_exec("pm2 stop rl.php");
shell_exec("pm2 start rl.php");
}
}
if($data == "7CN"){
	shell_exec("pm2 stop 7a.php");
$num7 = $info["num7"];
$type = file_get_contents("type7");
if ($type == "c") {
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"➧Done type to Channel ✅",'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text' => "7 type ↣ ch",'callback_data' => "#"]],
[['text'=>"->",'callback_data'=>"#Back"]],
]])]);
}else{
file_put_contents("type7", "c");
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id, 'text' => "➧Done type to Channel ✅",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text' => "7 type ↣ ch",'callback_data' => "#"]],
[['text'=>"->",'callback_data'=>"#Back"]],
]])]);
shell_exec("pm2 stop 7l.php");
shell_exec("pm2 start 7l.php");
}
}
if($data == "8CN"){
	shell_exec("pm2 stop 8a.php");
$num8 = $info["num8"];
$type = file_get_contents("type8");
if ($type == "c") {
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"➧Done type to Channel ✅",'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text' => "8 type ↣ ch",'callback_data' => "#"]],
[['text'=>"->",'callback_data'=>"#Back"]],
]])]);
}else{
file_put_contents("type8", "c");
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id, 'text' => "➧Done type to Channel ✅",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text' => "8 type ↣ ch",'callback_data' => "#"]],
[['text'=>"->",'callback_data'=>"#Back"]],
]])]);
shell_exec("pm2 stop 8l.php");
shell_exec("pm2 start 8l.php");
}
}
if($data == "5CN"){
	$num5 = $info["num5"];
$type = file_get_contents("type5");
if ($type == "ac") {
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"➧Done type to Channel ✅",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text' => "5 type ↣ ch",'callback_data' => "#"]],
[['text'=>"->",'callback_data'=>"#Back"]],
]])]);
}else{
file_put_contents("type5", "c");
$num5 = $info["num5"];
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id, 'text' => "➧Done type to Channel ✅",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text' => "5 type ↣ ch",'callback_data' => "#"]],
[['text'=>"->",'callback_data'=>"#Back"]],
]])]);
shell_exec("pm2 stop el.php");
shell_exec("pm2 start el.php");
}}
$in = json_decode(file_get_contents('in.json'),true);
$loop1 = $in["loop1"];
$loop2 = $in["loop2"];
$loop3 = $in["loop3"];
$loop4 = $in["loop4"];
$loop5 = $in["loop5"];
$loop6 = $in["loop6"];
$loop7 = $in["loop7"];
$loop8 = $in["loop8"];
$loop9 = $in["loop9"];
$loopb = $in["loopb"];
if ($chat_id == $group) {
if($text == '𖠜 Requests'){
bot('sendMessage', ['chat_id' => $chat_id,
'text'=>"𖠜 Clicks Requests Of Numbers 𓆪 •",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"1 ↣  $loop1",'callback_data'=>"U"],['text'=>"2 ↣  $loop2",'callback_data'=>"U"]],
[['text'=>"3 ↣  $loop3",'callback_data'=>"U"],['text'=>"4 ↣  $loop4",'callback_data'=>"U"]],
[['text'=>"5 ↣  $loop5",'callback_data'=>"U"],['text'=>"6 ↣  $loop7",'callback_data'=>"U"]],
[['text'=>"7 ↣  $loop8 ",'callback_data'=>"U"],['text'=>"8 ↣ $loop9",'callback_data'=>"U"]],
[['text'=>"Bot ↣ $loop6",'callback_data'=>"U"]],
[['text'=>"Band ↣ $loopb",'callback_data'=>"U"]],
[['text'=>"↺",'callback_data'=>"U"]],
]])]);
}}
if($data == "U"){
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,
'text'=>"𖠜 Clicks Requests Of Numbers 𓆪 •",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"1 ↣  $loop1",'callback_data'=>"N"],['text'=>"2 ↣  $loop2",'callback_data'=>"N"]],
[['text'=>"3 ↣  $loop3",'callback_data'=>"N"],['text'=>"4 ↣  $loop4",'callback_data'=>"N"]],
[['text'=>"5 ↣  $loop5",'callback_data'=>"N"],['text'=>"6 ↣  $loop7",'callback_data'=>"N"]],
[['text'=>"7 ↣  $loop8 ",'callback_data'=>"N"],['text'=>"8 ↣ $loop9",'callback_data'=>"N"]],
[['text'=>"Bot ↣ $loop6",'callback_data'=>"N"]],
[['text'=>"Band ↣ $loopb",'callback_data'=>"U"]],
[['text'=>"↺",'callback_data'=>"U"]],
]])]);
}
if($data == "N"){
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,
'text'=>"𖠜 Clicks Requests Of Numbers 𓆪 •",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"1 ↣  $loop1",'callback_data'=>"U"],['text'=>"2 ↣  $loop2",'callback_data'=>"U"]],
[['text'=>"3 ↣  $loop3",'callback_data'=>"U"],['text'=>"4 ↣  $loop4",'callback_data'=>"U"]],
[['text'=>"5 ↣  $loop5",'callback_data'=>"U"],['text'=>"6 ↣  $loop7",'callback_data'=>"U"]],
[['text'=>"7 ↣  $loop8 ",'callback_data'=>"U"],['text'=>"8 ↣ $loop9",'callback_data'=>"U"]],
[['text'=>"Bot ↣ $loop6",'callback_data'=>"U"]],
[['text'=>"Band ↣ $loopb",'callback_data'=>"U"]],
[['text'=>"↺",'callback_data'=>"U"]],
]])]);
}


if($data == "M1"){
bot('deleteMessage',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id
]);
bot('sendMessage',['chat_id'=>$chat_id2,'message_id'=>$message_id,
 'text'=>"⌁ Add users list Band ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Bc"]],]]) ]);
file_put_contents('mode', 'adband');
}
if($data == "M2"){
bot('deleteMessage',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id
]);
bot('sendMessage',['chat_id'=>$chat_id2,'message_id'=>$message_id,
 'text'=>"⌁ Add users list Band ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Bc"]],]]) ]);
file_put_contents('mode', 'Unband');
}
if($data == "M4"){
	bot('deleteMessage',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id
]);
bot('sendMessage',['chat_id'=>$chat_id2,'message_id'=>$message_id,
'text'=>"
⌁ Im Run Band ✅
",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Bc"]],]]) ]);
 unlink('xba');   
shell_exec("pm2 stop Band.php");
shell_exec("pm2 start Band.php");
shell_exec("pm2 stop ba.php");
shell_exec("pm2 start ba.php");
$lop = 0;
file_put_contents("xba", $lop);
$info = json_decode(file_get_contents('info.json'),true);
$info["Band"] = "on";
file_put_contents('info.json', json_encode($info));
}
if($data == "M3"){
	bot('deleteMessage',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id
]);
bot('sendMessage',['chat_id'=>$chat_id2,'message_id'=>$message_id,
'text'=>"
⌁ Im stopped Band ✅
",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Bc"]],]]) ]);
    unlink('xba');
shell_exec("pm2 stop Band.php");
shell_exec("pm2 stop ba.php");
    $lop = 0;
file_put_contents("xba", $lop);
$info = json_decode(file_get_contents('info.json'),true);
$info["Band"] = "off";
file_put_contents('info.json', json_encode($info));
}
if($data == "M8"){
bot('deleteMessage',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id
]);
bot('sendMessage',['chat_id'=>$chat_id2,'message_id'=>$message_id,
'text'=>"⌁ Send the user to delete !",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Bc"]],]]) ]);
unlink("Band");
}

if($data == "O1"){
bot('deleteMessage',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id
]);
bot('sendMessage',['chat_id'=>$chat_id2,'message_id'=>$message_id,
 'text'=>"⌁ Add users list Bot",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#bot"]],]]) ]);
file_put_contents('mode', 'adbot');
}
if($data == "O2"){
bot('deleteMessage',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id
]);
bot('sendMessage',['chat_id'=>$chat_id2,'message_id'=>$message_id,
 'text'=>"⌁ send banned users list ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#bot"]],]]) ]);
file_put_contents('mode', 'Unbot');
}
if($data == "O4"){
	unlink('xm');
	bot('deleteMessage',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id
]);
bot('sendMessage',['chat_id'=>$chat_id2,'message_id'=>$message_id,
'text'=>"
⌁ Im Run bot ✅
",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#bot"]],]]) ]);
shell_exec("pm2 stop m.php");
shell_exec("pm2 start m.php");
shell_exec("pm2 stop ml.php");
shell_exec("pm2 start ml.php");
$lop = 0;
file_put_contents("xm", $lop);
$info = json_decode(file_get_contents('info.json'),true);
$info["bot"] = "on";
file_put_contents('info.json', json_encode($info));
}
if($data == "O3"){
	unlink('xm');
	bot('deleteMessage',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id
]);
bot('sendMessage',['chat_id'=>$chat_id2,'message_id'=>$message_id,
'text'=>"
⌁ Im stopped bot ✅
",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#bot"]],]]) ]);
shell_exec("pm2 stop m.php");
shell_exec("pm2 stop ml.php");
$info = json_decode(file_get_contents('info.json'),true);
$info["bot"] = "off";
file_put_contents('info.json', json_encode($info));
}
if($data == "O8"){
bot('deleteMessage',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id
]);
bot('sendMessage',['chat_id'=>$chat_id2,'message_id'=>$message_id,
'text'=>"⌁ Send the user to delete ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#bot"]],]]) ]);
unlink("bot");
}
if($data == "O5"){
bot('deleteMessage',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id
]);
bot('sendMessage',['chat_id'=>$chat_id2,'message_id'=>$message_id,
'text'=>"- Send the Name Bot !",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#bot"]],]]) ]);
$step = "bot";
}
$lastupdid = $update['result'][0]['update_id'] + 1; 
}
while (true) {
global $last_up;
$get_up = getupdates($last_up + 1);
$last_up = $get_up['update_id'];
if ($get_up) {
run($get_up);
sleep(1);
}
}
?>