<?php
$a='https://www.xyz.com';
$b='abc$@gmail.com';
$c='192.135.240.0';
$d='00:4c:2d:31:7e:9f';
if(filter_var($b,FILTER_VALIDATE_EMAIL))
{
    echo "True";

}
else
{
    echo "False";
}

echo "<pre>";

