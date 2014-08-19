@extends('master')



@section('title')
  BLSSC
@stop 

@section('header')
  

 

  <div id = "header", style = "background-color:#BDA0CB; text-align:center">
    <h1> 
      <img src="http://upload.wikimedia.org/wikipedia/en/5/5f/Boston_Latin_School_logo.png" alt="Go WolfPack!!!">
      Welcome to the Boston Latin School Student Council!
      <img src="http://upload.wikimedia.org/wikipedia/en/5/5f/Boston_Latin_School_logo.png" alt = "Go WolfPack!!!">
    </h1>
  </div>

@stop

@section('content')

   <style>
    body {
      background-image:  url("http://www.featurepics.com/FI/Thumb300/20110202/Purple-Ornate-Pattern-1776509.jpg");
      background-position: center top;
      background-color: #BF5FFF;
    }
    </style>
  
  <div id = "meetingHeader", style="background-color:#8A2BE2;height:100px;width:200px;float:right;">
    <h1>
      Meeting news!
    </h1>
  </div>

  <div id = "body1", style = "background-color:#B452CD; height:100px;width:400px; width: 50%; margin: 0 auto;">
    <p>
      The First meeting will be September 8th after school (9/8/2014)
    </p>
  </div>


  <div id = "body3", style = "text-align:right">
  </div>

  <div id="menu" style="background-color:#BDA0CB;height:200px;width:120px;float:left;">
    <b>Menu</b><br>
    Schedule<br>
    Meeting Minutes<br>
    Mission Statement
  </div>
  
  <div id="footer" style="background-color:#BDA0CB;clear:both;text-align:bottom-center;">
  Copyright: Kevin Gao</div>

  </div>


@stop