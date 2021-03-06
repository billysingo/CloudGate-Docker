<?php

# 触发下载
header('Content-Disposition: attachment; filename='.'Potatso.Conf');

# 设置开启哪些模块 | 必须放置在Controller控制器前面
$DefaultModule  = "true";
$AdvancedModule = "true";
$DIRECTModule   = "true";
$REJECTModule   = "true";
$KEYWORDModule  = "true";
$IPCIDRModule   = "true";
$OtherModule    = "true";

# 引用Controller控制器模块
require '../Controller/Controller.php';

# Potatso[General]规则模板
echo"ruleSets:\r\n";
echo"# \r\n";
echo"# Potatso Config File [CloudGate]\r\n";
echo"# Download Time: " . date("Y-m-d H:i:s") . "\r\n";
echo"#\r\n";
echo"- name: CloudGate\r\n";
echo"  rules: \r\n";

# 最后模块内容输出
echo "# Default\r\n".$Potatso_Default;
echo "# PROXY\r\n".$Potatso_Advanced;
echo "# DIRECT\r\n".$Potatso_DIRECT;
echo "# REJECT\r\n".$Potatso_REJECT;
echo "# KEYWORD\r\n".$Potatso_KEYWORD;
echo "# IP-CIDR\r\n".$Potatso_IPCIDR;
echo "# Other\r\n".$Potatso_Other;

?>