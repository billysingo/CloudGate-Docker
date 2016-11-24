<?php

# 引用Controller控制器模块
require '../Controller/Controller.php';

# 关闭所有 Notice | Warning 级别的错误
error_reporting(E_ALL^E_NOTICE^E_WARNING);

# 页面禁止缓存 | UTF-8编码 | 触发下载
header("cache-control:no-cache,must-revalidate");
header("Content-Type:text/html;charset=UTF-8");
header('Content-Disposition: attachment; filename='.'Shadowrocket.Conf');

# Shadowrocket[General]规则模板
echo "[General]\r\n";
echo "bypass-system = true\r\n";
echo "loglevel = notify\r\n";
echo "skip-proxy = 10.0.0.0/8,17.0.0.0/8,172.16.0.0/12,192.168.0.0/16,localhost,*.local,::ffff:0:0:0:0/1,::ffff:128:0:0:0/1,*.crashlytics.com\r\n";
echo "bypass-tun = 10.0.0.0/8,127.0.0.0/24,172.0.0.0/8,192.168.0.0/16\r\n";
echo "dns-server = 8.8.8.8,8.8.4.4\r\n";
echo "#  \r\n";
echo "# Shadowrocket Config File [CloudGate]\r\n";
echo "# Download Time: " . date("Y-m-d H:i:s") . "\r\n";
echo "#  \r\n";

# 最后模块内容输出
echo "[Rule]\r\n";
echo "# Default\r\n".$Shadowrocket_Default;
echo "# PROXY\r\n".$Shadowrocket_Advanced;
echo "# DIRECT\r\n".$Shadowrocket_DIRECT;
echo "# REJECT\r\n".$Shadowrocket_REJECT;
echo "# KEYWORD\r\n".$Shadowrocket_KEYWORD;
echo "# IP-CIDR\r\n".$Shadowrocket_IPCIDR;
echo "# Other\r\n".$Shadowrocket_Other;
echo "[URL Rewrite]\r\n";
echo "# Rewrite\r\n".$Shadowrocket_Rewrite;

?>