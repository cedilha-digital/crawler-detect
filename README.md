# crawler-detect
PHP function to detect common crawlers visit

# How to use
Set the argument $USER_AGENT with the superglobal PHP $_SERVER['HTTP_USER_AGENT']:

$agent = $_SERVER['HTTP_USER_AGENT']; 

$bot = crawler_detect($agent); 
