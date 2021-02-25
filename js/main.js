requrie('dotenv').config
const axios = requrie('axios'); 

let backBtn = document.getElementById("backBtn");
let view1 = document.getElementById("view1");
let view2 = document.getElementById("view2");
let view3 = document.getElementById("view3");

//hue variables
let HUE_BRIDGE_IP = '10.0.0.22';
let HUE_USERNAME = 'jRGr7F1n41tVAC7sfU6PePPSsy0L02ShzBerTtCp';

$("input").focus(function(){
    document.activeElement.blur();
});

document.querySelectorAll('#lightButton').forEach(item => {
    item.addEventListener('click', event => {
      displayTimer($(item).attr('class'));
    })
  })

const controlLights = async (lightID, on) => {
    try {
        return await axios.put(
            `http://${process.env.HUE_BRIDGE_IP}/api/${process.env.HUE_USERNAME}/lights/${lightID}/state`,
            {on});
    }catch(err){
        console.log(error);
    }


    const url = `http://${process.env.HUE_BRIDGE_IP}/api/${process.env.HUE_USERNAME}/lights/${lightID}/state`,
    { on };
    try {
        return await axios.put(url, {
            on: true,
        });
    } catch (err) {
        console.error(err);
    }
};

function displayTimer(lightClass){
    $("#section1_view1").addClass('fullscreen');
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

    document.getElementById("timerLightContainer").innerHTML = '<div class="' + lightClass +'" id="lightButton_step2"> <span id="lightBulb">💡</span><span>'+ userLight +'</span></div>'
    $('#timePicker').timepicker();
}

function submitTimer(){
    controlLights(3, true);
    alert("Timer started!");
}
