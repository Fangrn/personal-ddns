<?php
require('config.php');
?>
<!doctype html>
<html>
<head>
<title>Personal_DDNS</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes, minimum-scale=0.5, maximum-scale=2.0" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<h3>DDNS, 仅个人使用</h3>
<a href="adm.php">管理</a>
<br>
<dl>
<dt>
使用方法(两种方法):
<br>
&nbsp;&nbsp;
1.自动获取客户端IP
</dt>
<dd>
http://<?=$config_link?>/ddns.php?key=xxxxxxxxx&domain=dddd
</dd>
<dt>
&nbsp;&nbsp;
2.强制指定IP
</dt>
<dd>
http://<?=$config_link?>/ddns.php?key=xxxxxxxxx&domain=dddd&ip=1.1.1.1
</dd>
<dt>
&nbsp;&nbsp;
建议每10-15分钟访问一次更新链接。超过60分钟未更新,对应域名重置为127.0.0.1
</dt>
<dt>
<br>
&nbsp;&nbsp;
例如:
</dt>
<dd>
domain= 可以有后缀，也可以没有后缀。
</dd>
<dd>
http://<?=$config_link?>/ddns.php?key=xxxxxxxxx&domain=my
</dd>
<dd>
http://<?=$config_link?>/ddns.php?key=xxxxxxxxx&domain=my.ddns.xxxx.xxx
</dd>

</dl>
<br><br>---end---<br><br>
</body>
</html>
