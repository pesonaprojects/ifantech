<?php
define("TOKEN", "secret-token");
define("REMOTE_REPOSITORY", "git@github.com:username/repository.git");
define("DIR", "/var/www/vhosts/repository/");
define("BRANCH", "refs/heads/master");
define("LOGFILE", "deploy.log");
define("GIT", "/usr/bin/git");
define("MAX_EXECUTION_TIME", 180);
define("BEFORE_PULL", "");
define("AFTER_PULL", "");

require_once("deployer.php");