// Profile detail manupulation

document.getElementById("form").style.visibility = "hidden";

function changeDetail() {
    document.getElementById("form").style.visibility = "visible";
    document.getElementById("details").style.display = "none";
}

function cancle() {
    document.getElementById("form").style.visibility = "hidden";
    document.getElementById("details").style.display = "block";
}

function updateDetail() {
    document.getElementById('displayName').innerHTML = localStorage.getItem("inputName");
    document.getElementById('displayEmail').innerHTML = localStorage.getItem("inputEmail");
}

updateDetail()

function saveChanges() {
    document.getElementById("form").style.visibility = "hidden";
    document.getElementById("details").style.display = "block";

    let inputName = document.getElementById('companyName').value;
    localStorage.setItem("inputName", inputName);

    let inputEmail = document.getElementById('email').value;
    localStorage.setItem("inputEmail", inputEmail);

    alert("Details saved")
    updateDetail()
}



// theme changing

function check() {
    if (document.getElementById('radioDark').checked == true) {
        console.log("Bg-dark");
        document.getElementById("navbar").classList.add("bg-dark");
        document.getElementById("navbar").classList.add("navbar-dark");
        document.body.style.background = "black";
        document.body.style.color = "white";
        document.getElementById("changeDetail").style.background = "black";
        document.getElementById("list-home-list").classList.add("bg-dark");
        document.getElementById("list-home-list").classList.add("text-white");
        document.getElementById("list-profile-list").classList.add("bg-dark");
        document.getElementById("list-profile-list").classList.add("text-white");
        document.getElementById("list-messages-list").classList.add("bg-dark");
        document.getElementById("list-messages-list").classList.add("text-white");
        document.getElementById("list-settings-list").classList.add("bg-dark");
        document.getElementById("list-settings-list").classList.add("text-white");

        document.getElementById("dark1").classList.add("bg-dark");
        document.getElementById("dark1").classList.add("text-white");
        document.getElementById("dark2").classList.add("bg-dark");
        document.getElementById("dark2").classList.add("text-white");
        document.getElementById("dark3").classList.add("bg-dark");
        document.getElementById("dark3").classList.add("text-white");
        document.getElementById("dark4").classList.add("bg-dark");
        document.getElementById("dark4").classList.add("text-white");

        let theme = "dark-mode"
        console.log(theme);
        localStorage.setItem("activeTheme",theme);
    }
    else if (document.getElementById('radioLight').checked == true) {
        console.log("Bg-light");
        document.getElementById("navbar").classList.remove("bg-dark");
        document.getElementById("navbar").classList.remove("navbar-dark");
        document.body.style.background = "white";
        document.body.style.color = "black";
        document.getElementById("changeDetail").style.background = "white";
        document.getElementById("list-home-list").classList.remove("bg-dark");
        document.getElementById("list-home-list").classList.remove("text-white");
        document.getElementById("list-profile-list").classList.remove("bg-dark");
        document.getElementById("list-profile-list").classList.remove("text-white");
        document.getElementById("list-messages-list").classList.remove("bg-dark");
        document.getElementById("list-messages-list").classList.remove("text-white");
        document.getElementById("list-settings-list").classList.remove("bg-dark");
        document.getElementById("list-settings-list").classList.remove("text-white");

        document.getElementById("dark1").classList.remove("bg-dark");
        document.getElementById("dark1").classList.remove("text-white");
        document.getElementById("dark2").classList.remove("bg-dark");
        document.getElementById("dark2").classList.remove("text-white");
        document.getElementById("dark3").classList.remove("bg-dark");
        document.getElementById("dark3").classList.remove("text-white");
        document.getElementById("dark4").classList.remove("bg-dark");
        document.getElementById("dark4").classList.remove("text-white");

        let theme = "light-mode"
        console.log(theme);
        localStorage.setItem("activeTheme",theme);
    
    }
    else {
        console.log("Nothing");
    }
}

if(localStorage.getItem("activeTheme") == "dark-mode"){
    document.getElementById("radioDark").checked = true;
}
else if(localStorage.getItem("activeTheme") == "light-mode"){
    document.getElementById("radioLight").checked = true;
}
else{
    document.getElementById("radioLight").checked = true;
}

check()
