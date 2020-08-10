<?php

echo "<h2> TEST HTTP BEGIN</h2><br/>";

echo "REMOTE_ADDR = " . $_SERVER['REMOTE_ADDR'] . "<br/>";
echo "PHP_SELF = " . $_SERVER['PHP_SELF'] . "<br/>";
echo "SERVER_NAME = " . $_SERVER['SERVER_NAME'] . "<br/>";
echo "HTTP_HOST = " . $_SERVER['HTTP_HOST'] . "<br/>";
echo "HTTP_REFERER = " . $_SERVER['HTTP_REFERER'] . "<br/>";
echo "HTTP_USER_AGENT = " . $_SERVER['HTTP_USER_AGENT'] . "<br/>";
echo "SCRIPT_NAME = " . $_SERVER['SCRIPT_NAME'] . "<br/>";

echo "<h2> TEST HTTP END</h2><br/>";
