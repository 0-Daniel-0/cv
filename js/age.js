var birthday = new Date("2003");

function updateaAge() {
    var ageElement = document.getElementById("age");
    var age = new Date().getFullYear() - birthday.getFullYear();
    ageElement.textContent = age + " jaar";
}

updateaAge();