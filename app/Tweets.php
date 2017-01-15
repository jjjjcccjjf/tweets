<?php

namespace App;

class Tweets
{

  protected $tweets_url_array = [];
  protected $tweets_html_array = [];

  function addTweet($url){
    $this->tweets_url_array[] = $url;
  }

  function setTweetsArray($array){
    $this->tweets_url_array = $array;
  }

  function getTweetsArray(){
    return $this->tweets_html_array;
  }

  function getTweetHtml($url){
    // create curl resource
    $ch = curl_init();

    // set url
    curl_setopt($ch, CURLOPT_URL, "https://publish.twitter.com/oembed?url=$url");

    //return the transfer as a string
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    // $output contains the output string
    $res = json_decode($output = curl_exec($ch));

    // close curl resource to free up system resources
    curl_close($ch);

    return $res->html;
  }

  function setHtmlTweets(){

    foreach($this->tweets_url_array as $url){
      $this->tweets_html_array[] = $this->getTweetHtml($url);
    }

  }
}
