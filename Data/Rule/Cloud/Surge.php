<?php

# 触发下载
header('Content-Disposition: attachment; filename='.'Surge.Conf');

# 设置开启哪些模块 | 必须放置在Controller控制器前面
$DefaultModule  = "true";
$AdvancedModule = "true";
$DIRECTModule   = "true";
$REJECTModule   = "true";
$KEYWORDModule  = "true";
$IPCIDRModule   = "true";
$OtherModule    = "true";
$RewriteModule  = "true";

# 引用Controller控制器模块
require '../Controller/Controller.php';

# 设定参数默认值
$ConfigDefaultFile = $Surge_Config_Module;

# 检测GET请求参数
if(empty($Config)){$Config = $ConfigDefaultFile.$Cache;}else{$Config = $Config.$Cache;}
$ConfigArray = get_headers($Config,true); 
$ConfigSize  = $ConfigArray['Content-Length']; 
if($ConfigSize<"524288"&&$ConfigSize>"100"){$ConfigFile = $Config;}else{$ConfigFile = $ConfigDefaultFile;}
if(strstr($ConfigFile,"http://")&&strstr($ConfigFile,".cfg")){$ConfigSuccess = $ConfigFile;}else{$ConfigSuccess = $ConfigDefaultFile;}

# 现在暂时还是单线程,后续可能会改成循环请求或多线程请求
$ConfigModuleCURL   = curl_init();
curl_setopt($ConfigModuleCURL,CURLOPT_URL,"$ConfigSuccess");
curl_setopt($ConfigModuleCURL,CURLOPT_RETURNTRANSFER,true);
$ConfigCURLF        = curl_exec($ConfigModuleCURL);
curl_close($ConfigModuleCURL);

# Surge[General]规则模板
echo "$ConfigCURLF\r\n";

# 最后模块内容输出
echo "[Rule]\r\n";
echo "# Default\r\n".$Surge_Default;
echo "# PROXY\r\n".$Surge_Advanced;
echo "# DIRECT\r\n".$Surge_DIRECT;
echo "# REJECT\r\n".$Surge_REJECT;
echo "# KEYWORD\r\n".$Surge_KEYWORD;
echo "# IP-CIDR\r\n".$Surge_IPCIDR;
echo "# Other\r\n".$Surge_Other;
echo "[URL Rewrite]\r\n";
echo "# Rewrite\r\n".$Surge_Rewrite;

?>