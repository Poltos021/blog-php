<?php
function Gethash($pass){
  $salt = 'ighy^*^&dgfu_)*^``HJUGHUFShg8udfygoy``udf_y78gre';
  return sha1(sha1($pass . $salt) . $salt);
}
