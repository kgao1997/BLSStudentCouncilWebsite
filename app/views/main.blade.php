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
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine|Courgette">

   <style>
    body {
      background-image:  url("http://1-art.eu/images/backgrounds/rice-paper/ricepaper-blue.jpg");
      background-position: center top;
      background-color: #BF5FFF;
    }
    </style>
  

  <div id = "SchoolHeader", style = "color:pink;font-family: 'Tangerine', serif;font-size: 30px;text-shadow: 4px 4px 4px #aaa;height:100px;width:600px; margin: 0 auto;">
    <h1> Welcome to the Boston Latin School Student Council </h1>
  </div>

<style>
ul {
    float: left;
    width: 100%;
    padding: 0;
    margin: 0;
    list-style-type: none;
}

a {
    float: left;
    width: 6em;
    text-decoration: none;
    color: white;
    background-color:  Purple;
    padding: 0.2em 0.6em;
    border-right: 1px solid white;
}

a:hover {
    background-color: fuchsia;
}

li {
    display: inline;
}
</style>


<div id="menu"; style = " 
    font-family:'Courgette',serif;font size:18px;float:left; margin-left: 100px">
  <ul>
      
      <li><a href="/main">Main Page</a></li>
      <li><a href="/meetingMinutes">Meeting Minutes</a></li>
      <li><a href="/news">News</a></li>
  </ul>
  </div>



@stop