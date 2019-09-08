function toggle() {
    var c = document.getElementById("current");
    var p = document.getElementById("past");
    if (p.style.display === "block" && c.style.display === "block") {
        c.style.display = "block";
        p.style.display = "none";
    }
    else {
        c.style.display = "block";
        p.style.display = "none";
    }
}

function toggle2() {
    var c = document.getElementById("current");
    var p = document.getElementById("past");
    if (p.style.display === "block" && c.style.display === "block") {
        c.style.display = "none";
        p.style.display = "block";
    }
    else {
        c.style.display = "none";
        p.style.display = "block";
    }
}

function showDiv()  {
    if (document.getElementById('hidden').style.display === "block") {
        document.getElementById('hidden').style.display = "none";
    } else {
        document.getElementById('hidden').style.display = "block";
    }
    if (document.getElementById('hidden2').style.display === "block") {
        document.getElementById('hidden2').style.display = "none";
    }

}


function showDiv2()  {
    if (document.getElementById('hidden2').style.display === "block") {
        document.getElementById('hidden2').style.display = "none";
    } else {
        document.getElementById('hidden2').style.display = "block";
    }
}




