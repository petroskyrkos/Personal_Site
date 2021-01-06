// var sidebar = document.getElementById('sidebar');
// Stickyfill.add(sidebar);

// var navbar = document.getElementById('navbar');
// Stickyfill.add(navbar);

// var profileStikcy = document.getElementById('profileStikcy');
// Stickyfill.add(profileStikcy);



function display_c(){
    var refresh=1000; // Refresh rate in milli seconds
    mytime=setTimeout('display_ct()',refresh)
    }
        
function display_ct() {        
    var today = new Date();
    var date = today.getDate()+'/'+(today.getMonth()+1)+'/'+today.getFullYear();
    var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
    var dateTime = date+' '+time;
    document.getElementById("time").innerHTML = dateTime;
    display_c();
}