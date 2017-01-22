<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Tweets;

class TweetsController extends Controller
{

  public function show()
  {

   $tweets_array = [
     'https://twitter.com/Iifeinword/status/818296061114466305',
     'https://twitter.com/vibacy/status/820451325192220673',
     'https://twitter.com/jjjjcccjjf/status/820343169883586561',
     'https://twitter.com/moviepoets/status/817966563248705536',
     'https://twitter.com/insincere/status/813960416585977857',
     'https://twitter.com/jjjjcccjjf/status/819364007177916417',
     'https://twitter.com/69Chris_/status/740745702494633984',
     'https://twitter.com/HeartIessly/status/802387580960509952',
     'https://twitter.com/jjjjcccjjf/status/818669205067182080',
     'https://twitter.com/DonaldGIoverr/status/818638083470094342',
     'https://twitter.com/jjjjcccjjf/status/818640151429677056',
     'https://twitter.com/jjjjcccjjf/status/818365488786853888',
     'https://twitter.com/PoemPorns/status/818125366543974402',
     'https://twitter.com/PoemPorns/status/818110299588829184',
     'https://twitter.com/jjjjcccjjf/status/817966054248824832',
     'https://twitter.com/jjjjcccjjf/status/817945315181346818',
     'https://twitter.com/jjjjcccjjf/status/817897230031958016',
     'https://twitter.com/jjjjcccjjf/status/817896804955996161',
     'https://twitter.com/jjjjcccjjf/status/817890923921051648',
     'https://twitter.com/Iunacy/status/810165412033925121',
     'https://twitter.com/worldlyepics/status/813982313881235456',
     'https://twitter.com/jjjjcccjjf/status/817879853961650176',
     'https://twitter.com/jjjjcccjjf/status/817879117169209345',
     'https://twitter.com/jjjjcccjjf/status/817646342826840068',
     'https://twitter.com/jjjjcccjjf/status/817646276825247744',
     'https://twitter.com/jjjjcccjjf/status/817610542906896386',
     'https://twitter.com/AdventureDreams/status/817596793018077188',
     'https://twitter.com/PoemPorns/status/816570036911476736',
     'https://twitter.com/jjjjcccjjf/status/816465794074673152',
     'https://twitter.com/jjjjcccjjf/status/816450979339997184',
     'https://twitter.com/jjjjcccjjf/status/816301975004319745',
     'https://twitter.com/jjjjcccjjf/status/816301858465550336',
     'https://twitter.com/jjjjcccjjf/status/814447445283176448',
     'https://twitter.com/jjjjcccjjf/status/811771525393170432',
     'https://twitter.com/jjjjcccjjf/status/811771460029136896',
     'https://twitter.com/jjjjcccjjf/status/811771289169956864',
     'https://twitter.com/jjjjcccjjf/status/806433157608140800',
     'https://twitter.com/jjjjcccjjf/status/805795840996409345',
     'https://twitter.com/PoemPorns/status/805245498500255744',
     'https://twitter.com/jjjjcccjjf/status/804596901119029252',
     'https://twitter.com/jjjjcccjjf/status/804594387158085632',
     'https://twitter.com/jjjjcccjjf/status/804233633800167424',
     'https://twitter.com/jjjjcccjjf/status/802568002176565248',
     'https://twitter.com/jjjjcccjjf/status/735458306454474752',
   ];

   $tweet = New Tweets();

   $tweet->setTweetsArray($tweets_array);
   $tweet->setHtmlTweets();
   $html_tweets = $tweet->getTweetsArray();

   return view('tweets', ['html_tweets' => $html_tweets]);

  }

}
