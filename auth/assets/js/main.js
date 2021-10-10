//Greet User
var time = new Date().getHours();
if (time < 12) {
    greeting = "Good morning, wash your hands 🌤";
} else if (time < 16) {
    greeting = "It's lunch🍛 time, what's on the menu!";
} else {
    greeting = "Good Evening";
}
document.getElementById("greet").innerHTML = greeting;