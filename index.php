<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Comtrols</title>
    <link rel="stylesheet" href="css/jquery.timepicker.css"></link>
    <style>
        body{background: linear-gradient(0deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%); color: white; font-family: system-ui; -webkit-user-select: none; /* Safari */        
        -moz-user-select: none; /* Firefox */
        -ms-user-select: none; /* IE10+/Edge */
        user-select: none; /* Standard */
        }

        #title{text-align: center !important; font-size:30px;}
        #view1{height:90vh;}
        #view2{height:90vh; display:none;}
        #view3{height:90vh; display:none;}
        #lightBulb{display:block; font-size:30px; margin-bottom: 15px;} 
        #lightButton{display:inline-block; background: #00000080;padding: 20px;height: 95px; width: 95px;margin: 0px 20px;border-radius: 20px;}

        #timerLightContainer{text-align:center; margin-top:100px;}
        #timeChoiceTitle{width:60%; text-align:center; display:block; margin: 25px auto;}
        #timePicker{height:30px; margin: 7px auto; display: block;}
        #backBtn{position: fixed; bottom: 50px; left:20px;}

        .ui-timepicker-wrapper{width: 151px;}
        #timeSubmit{
            text-align: center;
            border: solid 1px white;
            padding: 10px;
            width: 90px;
            margin: 0 auto;
            margin-top: 50px;
        }

    </style>
</head>
<body>
    <h1 id="title">Welcome To Your Hue 💡 Automation tool, Joseph's</h1>
    <div id="view1">
        <p style="text-align:center; margin-bottom:50px; padding-top:70px;">Let's start by selecting the light you want to control.</p>
        <section style="text-align:center;">
            <div class="lightButton1" id="lightButton">
                <span id="lightBulb">💡</span>
                <span>Tamys Light</span>
            </div>
            <div class="lightButton2" id="lightButton">
                <span id="lightBulb">💡</span>
                <span>Couch Light</span>
            </div>
        <section>
        
        <br>
        <section style="text-align:center;">
            <div class="lightButton3" id="lightButton">
                <span id="lightBulb">💡</span>
                <span>Matts Light</span>
            </div>
            <div class="lightButton4" id="lightButton">
                <span id="lightBulb">💡</span>
                <span>TV Light</span>
            </div>
        <section>
    </div>

    <div id="view2">
        <div id="timerLightContainer"></div>
        <p id="timeChoiceTitle">Choose a time you'd like the automatticaly turn off this light.<p>
            <input id="timePicker" placeholder="Select a time."></input>
            <div id="timeSubmit">Submit</div>
        <div id="backBtn">👈  GO BACK </div>
    </div>

    <div id="view3">
        <p id="completionMsg"></p>
        <div id="backBtn">👈  GO BACK </div>
    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="js/jquery.timepicker.js"></script>
<script src="js/main.js"></script>
</body>
</html>
        
