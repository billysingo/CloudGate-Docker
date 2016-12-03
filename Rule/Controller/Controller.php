<?php

# 关闭所有 Notice | Warning 级别的错误
error_reporting(E_ALL^E_NOTICE^E_WARNING);

# 页面禁止缓存 | UTF-8编码
header("cache-control:no-cache,must-revalidate");
header("Content-Type:text/html;charset=UTF-8");

# 默认模块API托管在Github[GithubUserContent] | 模块数组 | 请求模块禁止缓存
$ModuleAPI    = "https://raw.githubusercontent.com/BurpSuite/CloudGate-RuleList/master/Rule/";
$HostsAPI     = "https://raw.githubusercontent.com/racaljk/hosts/master/hosts";
$ModuleArray  = array("Advanced","Basic","DIRECT","Default","HostsFix","IPCIDR","KEYWORD","REJECT","Rewrite","YouTube","Other","USERAGENT");
$Cache        = '?Cache='.sha1(mt_rand()).'&TimeStamp='.time();

# 接收GET请求参数
$Fix       = $_GET['Fix'];
$Tolerance = $_GET['Tolerance'];
$Interval  = $_GET['Interval'];
$Config    = $_GET['Config'];
$Logo      = $_GET['Logo'];
$AutoGroup = $_GET['AutoGroup'];
$Rule      = $_GET['Rule'];
$Apple     = $_GET['Apple'];
$IPV6      = $_GET['IPV6'];
$Group     = $_GET['Group'];
$DNS1      = $_GET['DNS1'];
$DNS2      = $_GET['DNS2'];
$Config1   = $_GET['Config1'];
$Config2   = $_GET['Config2'];
$Config3   = $_GET['Config3'];
$Config4   = $_GET['Config4'];
$Config5   = $_GET['Config5'];
$Flag1     = $_GET['Flag1'];
$Flag2     = $_GET['Flag2'];
$Flag3     = $_GET['Flag3'];
$Flag4     = $_GET['Flag4'];
$Flag5     = $_GET['Flag5'];

# 设定参数默认值
$Module       = "https://raw.githubusercontent.com/BurpSuite/CloudGate-RuleList/master/Module/Module";
$AutoGroupURL = "http://www.gstatic.com/generate_204";
$HostsFixIP   = "202.171.253.103";
$YouTubeIP    = "219.76.4.3";
$HTTPSURL     = "true";

# 默认云端模块地址
$Potatso_Config_Module      = "https://raw.githubusercontent.com/BurpSuite/CloudGate-RuleList/master/General/Potatso_General.cfg";
$ABIGT_Config_Module        = "https://raw.githubusercontent.com/BurpSuite/CloudGate-RuleList/master/General/A.BIG.T_General.cfg";
$Surge_Config_Module        = "https://raw.githubusercontent.com/BurpSuite/CloudGate-RuleList/master/General/Surge_General.cfg";
$Shadowrocket_Config_Module = "https://raw.githubusercontent.com/BurpSuite/CloudGate-RuleList/master/General/Shadowrocket_General.cfg";

# 参数组合一起就是完整的模块地址
$AdvancedFile  = $ModuleAPI.$ModuleArray[0].$Cache;
$BasicFile     = $ModuleAPI.$ModuleArray[1].$Cache;
$DIRECTFile    = $ModuleAPI.$ModuleArray[2].$Cache;
$DefaultFile   = $ModuleAPI.$ModuleArray[3].$Cache;
$HostsFixFile  = $ModuleAPI.$ModuleArray[4].$Cache;
$IPCIDRFile    = $ModuleAPI.$ModuleArray[5].$Cache;
$KEYWORDFile   = $ModuleAPI.$ModuleArray[6].$Cache;
$REJECTFile    = $ModuleAPI.$ModuleArray[7].$Cache;
$RewriteFile   = $ModuleAPI.$ModuleArray[8].$Cache;
$YouTubeFile   = $ModuleAPI.$ModuleArray[9].$Cache;
$OtherFile     = $ModuleAPI.$ModuleArray[10].$Cache;
$USERAGENTFile = $ModuleAPI.$ModuleArray[11].$Cache;

# 现在暂时还是单线程,后续可能会改成循环请求或多线程请求
if($AdvancedModule =="true"){$AdvancedModuleCURL  = curl_init();
curl_setopt($AdvancedModuleCURL,CURLOPT_URL,"$AdvancedFile");
curl_setopt($AdvancedModuleCURL,CURLOPT_RETURNTRANSFER,true);
$AdvancedCURLF  = curl_exec($AdvancedModuleCURL);
curl_close($AdvancedModuleCURL);}
if($BasicModule    =="true"){$BasicModuleCURL     = curl_init();
curl_setopt($BasicModuleCURL,CURLOPT_URL,"$BasicFile");
curl_setopt($BasicModuleCURL,CURLOPT_RETURNTRANSFER,true);
$BasicCURLF     = curl_exec($BasicModuleCURL);
curl_close($BasicModuleCURL);}
if($DIRECTModule   =="true"){$DIRECTModuleCURL    = curl_init();
curl_setopt($DIRECTModuleCURL,CURLOPT_URL,"$DIRECTFile");
curl_setopt($DIRECTModuleCURL,CURLOPT_RETURNTRANSFER,true);
$DIRECTCURLF    = curl_exec($DIRECTModuleCURL);
curl_close($DIRECTModuleCURL);}
if($DefaultModule  =="true"){$DefaultModuleCURL   = curl_init();
curl_setopt($DefaultModuleCURL,CURLOPT_URL,"$DefaultFile");
curl_setopt($DefaultModuleCURL,CURLOPT_RETURNTRANSFER,true);
$DefaultCURLF   = curl_exec($DefaultModuleCURL);
curl_close($DefaultModuleCURL);}
if($IPCIDRModule   =="true"){$IPCIDRModuleCURL    = curl_init();
curl_setopt($IPCIDRModuleCURL,CURLOPT_URL,"$IPCIDRFile");
curl_setopt($IPCIDRModuleCURL,CURLOPT_RETURNTRANSFER,true);
$IPCIDRCURLF    = curl_exec($IPCIDRModuleCURL);
curl_close($IPCIDRModuleCURL);}
if($KEYWORDModule  =="true"){$KEYWORDModuleCURL   = curl_init();
curl_setopt($KEYWORDModuleCURL,CURLOPT_URL,"$KEYWORDFile");
curl_setopt($KEYWORDModuleCURL,CURLOPT_RETURNTRANSFER,true);
$KEYWORDCURLF   = curl_exec($KEYWORDModuleCURL);
curl_close($KEYWORDModuleCURL);}
if($REJECTModule   =="true"){$REJECTModuleCURL    = curl_init();
curl_setopt($REJECTModuleCURL,CURLOPT_URL,"$REJECTFile");
curl_setopt($REJECTModuleCURL,CURLOPT_RETURNTRANSFER,true);
$REJECTCURLF    = curl_exec($REJECTModuleCURL);
curl_close($REJECTModuleCURL);}
if($RewriteModule  =="true"){$RewriteModuleCURL   = curl_init();
curl_setopt($RewriteModuleCURL,CURLOPT_URL,"$RewriteFile");
curl_setopt($RewriteModuleCURL,CURLOPT_RETURNTRANSFER,true);
$RewriteCURLF   = curl_exec($RewriteModuleCURL);
curl_close($RewriteModuleCURL);}
if($YouTubeModule  =="true"){$YouTubeModuleCURL   = curl_init();
curl_setopt($YouTubeModuleCURL,CURLOPT_URL,"$YouTubeFile");
curl_setopt($YouTubeModuleCURL,CURLOPT_RETURNTRANSFER,true);
$YouTubeCURLF   = curl_exec($YouTubeModuleCURL);
curl_close($YouTubeModuleCURL);}
if($OtherModule    =="true"){$OtherModuleCURL     = curl_init();
curl_setopt($OtherModuleCURL,CURLOPT_URL,"$OtherFile");
curl_setopt($OtherModuleCURL,CURLOPT_RETURNTRANSFER,true);
$OtherCURLF     = curl_exec($OtherModuleCURL);
curl_close($OtherModuleCURL);}
if($USERAGENTModule=="true"){$USERAGENTModuleCURL = curl_init();
curl_setopt($USERAGENTModuleCURL,CURLOPT_URL,"$USERAGENTFile");
curl_setopt($USERAGENTModuleCURL,CURLOPT_RETURNTRANSFER,true);
$USERAGENTCURLF = curl_exec($USERAGENTModuleCURL);
curl_close($USERAGENTModuleCURL);}
if($HostsModule    =="true"){$HostsModuleCURL     = curl_init();
curl_setopt($HostsModuleCURL,CURLOPT_URL,"$HostsAPI");
curl_setopt($HostsModuleCURL,CURLOPT_RETURNTRANSFER,true);
$HostsCURLF     = curl_exec($HostsModuleCURL);
curl_close($HostsModuleCURL);}
if($HostsFixModule =="true"){$HostsFixModuleCURL  = curl_init();
curl_setopt($HostsFixModuleCURL,CURLOPT_URL,"$HostsFixFile");
curl_setopt($HostsFixModuleCURL,CURLOPT_RETURNTRANSFER,true);
$HostsFixCURLF  = curl_exec($HostsFixModuleCURL);
curl_close($HostsFixModuleCURL);}

# 正则表达式替换规则格式
$Surge_Default         = preg_replace('/([^])([ \s]+)/','$1,DIRECT$2',$DefaultCURLF."\r\n");
$Surge_Advanced        = preg_replace('/([^])([ \s]+)/','$1,Proxy$2',$AdvancedCURLF."\r\n");
$Surge_Basic           = preg_replace('/([^])([ \s]+)/','$1,Proxy$2',$BasicCURLF."\r\n");
$Surge_DIRECT          = preg_replace('/([^])([ \s]+)/','$1,DIRECT$2',$DIRECTCURLF."\r\n");
$Surge_REJECT          = preg_replace('/([^])([ \s]+)/','$1,REJECT$2',$REJECTCURLF."\r\n");
$Surge_KEYWORD         = preg_replace('/([^])([ \s]+)/','DOMAIN-KEYWORD,$1$2,force-remote-dns',$KEYWORDCURLF."\r\n");
$Surge_IPCIDR          = preg_replace('/([^])([ \s]+)/','IP-CIDR,$1$2,no-resolve',$IPCIDRCURLF."\r\n");
$Surge_Rewrite         = preg_replace('/([^])([ \s]+)/','$1$2',$RewriteCURLF."\r\n");
$Surge_Other           = preg_replace('/([^])([ \s]+)/','$1$2',$OtherCURLF."\r\n");
$Shadowrocket_Default  = preg_replace('/([^])([ \s]+)/','$1,DIRECT$2',$DefaultCURLF."\r\n");
$Shadowrocket_Advanced = preg_replace('/([^])([ \s]+)/','$1,Proxy$2',$AdvancedCURLF."\r\n");
$Shadowrocket_Basic    = preg_replace('/([^])([ \s]+)/','$1,Proxy$2',$BasicCURLF."\r\n");
$Shadowrocket_DIRECT   = preg_replace('/([^])([ \s]+)/','$1,DIRECT$2',$DIRECTCURLF."\r\n");
$Shadowrocket_REJECT   = preg_replace('/([^])([ \s]+)/','$1,REJECT$2',$REJECTCURLF."\r\n");
$Shadowrocket_KEYWORD  = preg_replace('/([^])([ \s]+)/','DOMAIN-KEYWORD,$1$2,force-remote-dns',$KEYWORDCURLF."\r\n");
$Shadowrocket_IPCIDR   = preg_replace('/([^])([ \s]+)/','IP-CIDR,$1$2,no-resolve',$IPCIDRCURLF."\r\n");
$Shadowrocket_Rewrite  = preg_replace('/([^])([ \s]+)/','$1$2',$RewriteCURLF."\r\n");
$Shadowrocket_Other    = preg_replace('/([^])([ \s]+)/','$1$2',$OtherCURLF."\r\n");
$Potatso_Default       = preg_replace('/([^])([ \s]+)/','  - $1,DIRECT$2',$DefaultCURLF."\r\n");
$Potatso_Advanced      = preg_replace('/([^])([ \s]+)/','  - $1,Proxy$2',$AdvancedCURLF."\r\n");
$Potatso_Basic         = preg_replace('/([^])([ \s]+)/','$1,Proxy$2',$BasicCURLF."\r\n");
$Potatso_DIRECT        = preg_replace('/([^])([ \s]+)/','  - $1,DIRECT$2',$DIRECTCURLF."\r\n");
$Potatso_REJECT        = preg_replace('/([^])([ \s]+)/','  - $1,REJECT$2',$REJECTCURLF."\r\n");
$Potatso_KEYWORD       = preg_replace('/([^])([ \s]+)/','  - DOMAIN-MATCH,$1$2',$KEYWORDCURLF."\r\n");
$Potatso_IPCIDR        = preg_replace('/([^])([ \s]+)/','  - IP-CIDR,$1$2',$IPCIDRCURLF."\r\n");
$Potatso_OtherF        = preg_replace('/([^])([ \s]+)/','  - $1$2',$OtherCURLF."\r\n");
$Potatso_Other         = preg_replace('/  - FINAL,Proxy/','',$Potatso_OtherF."\r\n");
$ABIGT_Default         = preg_replace('/([^])([ \s]+)/','$1,DIRECT$2',$DefaultCURLF."\r\n");
$ABIGT_Advanced        = preg_replace('/([^])([ \s]+)/','$1,Proxy$2',$AdvancedCURLF."\r\n");
$ABIGT_Basic           = preg_replace('/([^])([ \s]+)/','$1,Proxy$2',$BasicCURLF."\r\n");
$ABIGT_DIRECT          = preg_replace('/([^])([ \s]+)/','$1,DIRECT$2',$DIRECTCURLF."\r\n");
$ABIGT_REJECT          = preg_replace('/([^])([ \s]+)/','$1,REJECT$2',$REJECTCURLF."\r\n");
$ABIGT_KEYWORD         = preg_replace('/([^])([ \s]+)/','DOMAIN-KEYWORD,$1$2,force-remote-dns',$KEYWORDCURLF."\r\n");
$ABIGT_IPCIDR          = preg_replace('/([^])([ \s]+)/','IP-CIDR,$1$2,no-resolve',$IPCIDRCURLF."\r\n");
$ABIGT_Rewrite         = preg_replace('/([^])([ \s]+)/','$1$2',$RewriteCURLF."\r\n");
$ABIGT_Other           = preg_replace('/([^])([ \s]+)/','$1$2',$OtherCURLF."\r\n");
$ABIGT_USERAGENT       = preg_replace('/([^])([ \s]+)/','$1$2',$USERAGENTCURLF."\r\n");
$Wingy_Default         = str_replace ("DOMAIN-SUFFIX,","      - s,",$DefaultCURLF."\r\n");
$Wingy_AdvancedF       = str_replace ("DOMAIN-SUFFIX,","      - s,",$AdvancedCURLF."\r\n");
$Wingy_Advanced        = str_replace ("DOMAIN,","      - c,",$Wingy_AdvancedF."\r\n");
$Wingy_BasicF          = str_replace ("DOMAIN-SUFFIX,","      - s,",$BasicCURLF."\r\n");
$Wingy_Basic           = str_replace ("DOMAIN,","      - s,",$Wingy_BasicF."\r\n");
$Wingy_REJECTT         = str_replace ("DOMAIN,","      - c,",$REJECTCURLF."\r\n");
$Wingy_REJECT          = str_replace ("DOMAIN-SUFFIX,","      - s,",$Wingy_REJECTT."\r\n");
$Wingy_DIRECTT         = str_replace ("DOMAIN,","      - c,",$DIRECTCURLF."\r\n");
$Wingy_DIRECT          = str_replace ("DOMAIN-SUFFIX,","      - s,",$Wingy_DIRECTT."\r\n");

?>
