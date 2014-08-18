@extends('master')



@section('title')
  BLSSC
@stop 

@section('header')
  

 

  <div id = "header", style = "background-color:#FFA500; text-align:center">
    <h1> 
      Welcome to the Boston Latin School Student Council!
    </h1>
  </div>

@stop

@section('content')

   <style>
    body {
      background-image:  url("http://upload.wikimedia.org/wikipedia/en/2/20/BLS_Wolfpack.png");
      background-repeat: no-repeat;
      background-position: center top;
      background-color: #BF5FFF;
    }
    </style>
  
  <div id = "meetingHeader", style="background-color:#8A2BE2;height:100px;width:200px;float:right;">
    <h1>
      Meeting news!
    </h1>
  </div>

  <div id = "body1", style = "text-align:center">
    <p>
      The First meeting will be September 8th after school (9/8/2014)
    </p>
  </div>

  <div id = "body2", style = "text-align:center">
    <p>
    Hi everybody!  
    </p>
  </div>

  <div id = "body3", style = "text-align:right">
  </div>

  <div id="menu" style="background-color:#FFD700;height:200px;width:120px;float:left;">
    <b>Menu</b><br>
    Schedule<br>
    Meeting Minutes<br>
    Mission Statement
  </div>
  
  <div id="footer" style="background-color:#FFA500;clear:both;text-align:bottom-center;">
  Copyright:  Boston Latin School Student Council and Kevin Gao</div>

  </div>


@stop