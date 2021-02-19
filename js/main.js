let backBtn = document.getElementById("backBtn");
let view1 = document.getElementById("view1");
let view2 = document.getElementById("view2");
let view3 = document.getElementById("view3");

backBtn.addEventListener("click", backHome);


document.querySelectorAll('#lightButton').forEach(item => {
    item.addEventListener('click', event => {
      displayTimer($(item).attr('class'));
    })
  })

function backHome(){
    window.location.href = 'https://codecreate.tech/home'
}

function displayTimer(lightClass){
    view1.style.display = "none";
    view2.style.display = "block";

    let userLight;
    switch(lightClass){
        case "lightButton1":
        userLight = "Tamys Light"
        break;

        case "lightButton2":
        userLight = "Couch Light"
        break;

        case "lightButton3":
        userLight = "Matts Light"
        break;

        case "lightButton4":
        userLight = "TV Light"
        break;
    }

    document.getElementById("timerLightContainer").innerHTML = '<div class="' + lightClass +'" id="lightButton"> <span id="lightBulb">💡</span><span>'+ userLight +'</span></div>'
    $('#timePicker').timepicker();
}


