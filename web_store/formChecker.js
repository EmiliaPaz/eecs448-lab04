let validate = function(){
    let username = document.getElementById("username").value;
    let password = document.getElementById("password").value;
    let tacos = parseInt(document.getElementById("tacos_q").value);
    let burger = parseInt(document.getElementById("burger_q").value);
    let hotdog = parseInt(document.getElementById("hotdog_q").value);
    let delivery = document.getElementById("delivery").value;

    // Quantities
    if(tacos<0 || burger<0 || hotdog<0)
    {
        window.alert("Invalid quantity. Need at least one of each item");
        return false;
    }

    return true;

}
