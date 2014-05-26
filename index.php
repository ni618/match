<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link href="http://meyerweb.com/eric/tools/css/reset/reset.css" rel="stylesheet" type="text/css">
    <style>
html, body, .container, .boy-area, .girl-area, .content
{height: 100%;}
.container  {overflow: hidden;}

.boy-area   {width: 20%; background: #DDD; float: left;}
.girl-area  {width: 20%; background: #DDD; float: right;}
.content    {width: 60%; background: #FFF;}

.boy-area, .girl-area, .content {display:table;}
.boy-area > div, .girl-area > div, .content > div
{display:table-cell; vertical-align: middle;}

.player     {text-align: center;}
.player img 
{border: 1px solid #888; padding: 2px; margin: 5px; height: 50px;}

.selected:first-child {float: left;}
.selected:last-child  {float: right;}
.selected img
{border: 1px solid #888; padding: 2px; margin: 30px; height: 200px;}

.content
{text-align: center;}
    </style>
</head>
<body>
    <div class="container">
        <div class="boy-area">
            <div>
                <div class="player"><img src="imgs/b1.jpg"></div>
                <div class="player"><img src="imgs/b2.jpg"></div>
                <div class="player"><img src="imgs/b3.jpg"></div>
                <div class="player"><img src="imgs/b4.jpg"></div>
                <div class="player"><img src="imgs/b5.jpg"></div>
                <div class="player"><img src="imgs/b6.jpg"></div>
                <div class="player"><img src="imgs/b7.jpg"></div>
                <div class="player"><img src="imgs/b8.jpg"></div>
                <div class="player"><img src="imgs/b9.jpg"></div>
            </div>
        </div>
        <div class="girl-area">
            <div>
                <div class="player"><img src="imgs/g1.jpg"></div>
                <div class="player"><img src="imgs/g2.jpg"></div>
                <div class="player"><img src="imgs/g3.jpg"></div>
                <div class="player"><img src="imgs/g4.jpg"></div>
                <div class="player"><img src="imgs/g5.jpg"></div>
                <div class="player"><img src="imgs/g6.jpg"></div>
                <div class="player"><img src="imgs/g7.jpg"></div>
                <div class="player"><img src="imgs/g8.jpg"></div>
                <div class="player"><img src="imgs/g9.jpg"></div>
            </div>
        </div>
        <div class="content">
            <div>
                <div class="selected">
                    <img src="b1.jpg">
                </div>
                <div class="selected">
                    <img src="g1.jpg">
                </div>
                <!--div>18</div-->
            </div>
        </div>
    </div>
</body>
</html>
