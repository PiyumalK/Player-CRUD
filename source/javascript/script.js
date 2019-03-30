var select = document.getElementById("playerposition");
select.onchange = function(){
    var role = document.getElementById("playerrole");
    var optionsAsString = "";
    var roles = [];
    if (select.value === "Forward") {
        roles = ['--select an option--', 'Center Forward', 'Left Winger', 'Right Winger'];
    } else if (select.value === "Midfielder") {
        roles = ['--select an option--', 'Left Midfielder', 'Center Attacking', 'Center Defending', 'Right Midfielder'];
    } else if (select.value === "Defender") {
        roles = ['--select an option--', 'Right Back', 'Center Back', 'Left Back'];
    } else if (select.value === "Goal Keeper") {
        roles = ['-'];
    }
    for(var i = 0; i < roles.length; i++) {
        optionsAsString += "<option value='" + roles[i] + "'>" + roles[i] + "</option>";
    }
    role.innerHTML = optionsAsString;
};