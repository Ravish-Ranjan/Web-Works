const clrs = [
    "#a1c4fd 0%, #c2e9fb 100%",
    "#84fab0 0%, #8fd3f4 100%",
    "#e0c3fc 0%, #8ec5fc 100%",
    "#5ee7df 0%, #b490ca 100%",
];
function getRand(len){
    return  Math.floor(Math.random() * len);
}
function rans(){
    document.body.style.background = "linear-gradient(to right bottom," + clrs[getRand(clrs.length)] + ")";
    let labels = document.getElementsByTagName("label");
    let backg = document.getElementsByClassName("tile");
    for (let i = 0; i < labels.length; i++) {
        let at = clrs[getRand(clrs.length)];
        labels[i].style.backgroundImage = "linear-gradient(to right bottom," +at + ")";
        backg[i].style.backgroundImage = "linear-gradient(to right bottom," + at + ")";        
    }
}

