<html>
    <head>
        <title>IT Data</title>
        <link href="/public/bootstrap/css/bootstrap.css" rel="stylesheet">
        <script src="/public/bootstrap/js/jquery.js"></script>
        <script src="/public/bootstrap/js/bootstrap.js"></script>
        <style type="text/css">
            body {
            padding-top: 60px;
            padding-bottom: 40px;
            }
        </style>
       
    </head>     
    <body>
        <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="/itdata/">IT Data</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="/itdata/">Home</a></li>
              <li><a href="/itdata/welcome/about">About</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li class="nav-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
            </ul>
            <form class="navbar-form pull-right" method="post" action="/itdata/login">
              <input class="span3" type="text" placeholder="Email" name='email'>
              <input class="span2" type="password" placeholder="Password" name='password'>
              <button type="submit" class="btn">Sign in</button>
              <a href="/itdata/newuser">New User</a>
            </form>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>    
        
<div class="container">