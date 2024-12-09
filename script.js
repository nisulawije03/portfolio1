
    window.onload = function() {
    const greetingElement = document.querySelector('header h1');
    const hour = new Date().getHours();
    let greeting = "Welcome!!!!";

    if (hour >= 5 && hour < 12) {
    greeting = "Good Morning!";
} else if (hour >= 12 && hour < 17) {
    greeting = "Good Afternoon!";
} else if (hour >= 17 && hour < 21) {
    greeting = "Good Evening!";
} else {
    greeting = "Welcome to My Portfolio!";
}

    greetingElement.textContent = greeting;
}

function showAlert() {
        alert("Thank you for contacting us! I will get back to you shortly.");
    }
