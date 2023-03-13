<?php
$LOCAL_ROOT         = "/www/wwwroot/waapi.es";
shell_exec("cd {$LOCAL_REPO} && git pull");
die("done " . mktime());
?>