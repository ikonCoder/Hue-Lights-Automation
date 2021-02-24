<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' >
    <title>Home Comtrols</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="css/aos.css" />
    <link rel="stylesheet" href="css/jquery.timepicker.css"></link>
    <link rel="stylesheet" href="css/main.css"></link>
</head>
<body>
    <span id="background"></span>
    <div id="overlay">
        <div id="view1">
        <h1 id="title">Home</h1>
            <section id="section1_view1" style="text-align:center;" data-aos="fade-right">
                <div class="lightButton1" id="lightButton">
                    <span id="lightBulb">💡</span>
                    <span id="room">Bedroom</span>
                    <span id="room_bulb">Tamy</span>
                </div>
                <div class="lightButton2" id="lightButton">
                    <span id="lightBulb">💡</span>
                    <span id="room">Living Room</span>
                    <span id="room_bulb">Couch</span>
                </div>
                <br>
                <section style="text-align:center;">
                    <div class="lightButton3" id="lightButton" style="margin-top:50px;">
                        <span id="lightBulb">💡</span>
                        <span id="room">Bedroom</span>
                        <span id="room_bulb">Matt</span>
                    </div>
                    <div class="lightButton4" id="lightButton" style="margin-top:50px;">
                        <span id="lightBulb">💡</span>
                        <span id="room">Living Room</span>
                        <span id="room_bulb">TV</span>
                    </div>
                </section>
                <p style="width: 100%; position:absolute; bottom:40%; font-size:14.5px;">Start by selecting the light you want to control.</p>
            </section>
        </div>
        <div id="view2">
        <h1 id="title">Home</h1>
            <section id="section1_view2" style="text-align:center;" data-aos="fade-right">
                <div id="timerLightContainer"></div>
                <p id="timeChoiceTitle">Choose a time you'd like the automatticaly turn off this light.</p>
                    <input id="timePicker" placeholder="Select a time."></input>
                    <div id="timeSubmit">
                        <button type="button" class="btn btn-dark" onclick="submitTimer()">Submit</button>                    
                    </div>
                <br> <br>
            </section>
        </div>
        <div id="view3">
            <p id="completionMsg"></p>
        </div>
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15.0.0/dist/smooth-scroll.polyfills.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="js/jquery.timepicker.js"></script>
<script src="js/main.js"></script>
<script>
    AOS.init({
    duration: 1200,
})
  
const scroll = new SmoothScroll('#navMenu a[href*="#"]', {
    speed: 500
}); 
</script>
</body>
</html>
