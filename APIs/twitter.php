<?php 
require "twitteroauth/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;
  $ck="TA51tEkHm6eTPoaypcjQKtuZy";
  $cs="6we6tiPIzf6PujbZlc3B1hU1n5IFEZvwGYDMKztYnMaOaBK2rE";
  $at="3087586719-GQmudIr681vvRz3LEonlcbtQYGbwsgXSGPkKylo";
  $ats="iuD4vJMGCWb87ngSRRAlhnMl0aClAtPnwkBVyPd5bD8I3";
  $connection = new TwitterOAuth($ck,$cs,$at,$ats);
  $content = $connection->get("account/verify_credentials");
  $statuses = $connection->get("statuses/home_timeline", ["count" => 25, "exclude_replies" => true]);
  print_r($statuses);
 ?>