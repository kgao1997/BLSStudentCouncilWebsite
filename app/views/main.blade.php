@extends('master')



@section('title')
  BLSSC
@stop 

@section('header')
  

 

  <div id = "header", style = "background-color:#BDA0CB; text-align:center; background-image: url('http://www.boston.com/community/blogs/rock_the_schoolhouse/bostonlatinschool.jpg');width:1350px;height:200px;color: transparent">
    <h1> 
      <img src="http://upload.wikimedia.org/wikipedia/en/5/5f/Boston_Latin_School_logo.png" alt="Go WolfPack!!!">
      "__________________________________________________"
      <img src="http://upload.wikimedia.org/wikipedia/en/5/5f/Boston_Latin_School_logo.png" alt = "Go WolfPack!!!">
    </h1>
  </div>

@stop

@section('content')
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">

   <style>
    body {
      background-image:  url("http://www.featurepics.com/FI/Thumb300/20110202/Purple-Ornate-Pattern-1776509.jpg");
      background-position: center top;
      background-color: #BF5FFF;
    }
    </style>
  

  <div id = "SchoolHeader", style = "color:pink;font-family: 'Tangerine', serif;font-size: 30px;text-shadow: 4px 4px 4px #aaa;height:100px;width:600px; margin: 0 auto;">
    <h1> Welcome to the Boston Latin School Student Council </h1>
  </div>


  <div id = "body3", style = "text-align:right">
  </div>

  <div id="menu" style="background-color:#BDA0CB;height:200px;width:120px;float:left;">
    <b>Menu</b><br>
    Schedule<br>
    Meeting Minutes<br>
    Mission Statement
  </div>
 


@stop