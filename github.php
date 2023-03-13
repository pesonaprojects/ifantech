<?php
$LOCAL_ROOT         = "/path/to/repo/parent/directory";
$LOCAL_REPO_NAME    = "REPO_NAME";
$LOCAL_REPO         = "{$LOCAL_ROOT}/{$LOCAL_REPO_NAME}";
$REMOTE_REPO        = "git@github.com:username/reponame.git";
$BRANCH             = "master";

if ( $_POST['payload'] ) {
  if( file_exists($LOCAL_REPO) ) {
    shell_exec("cd {$LOCAL_REPO} && git pull");
    die("done " . mktime());
  } else {
    die("done " . mktime());
  }
}
?>