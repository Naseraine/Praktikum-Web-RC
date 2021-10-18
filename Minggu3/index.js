function chooseTheme(){
	let option = document.getElementById("colorTheme");

	if (option.options[option.selectedIndex].value == "black") {
		document.body.style.background = "black";
		document.body.style.color = "white";
	}
	else if (option.options[option.selectedIndex].value == "white") {
		document.body.style.background = "white";
		document.body.style.color = "black";
	}
    else if(option.options[option.selectedIndex].value == "yellow"){
        document.body.style.background = "yellow";
        document.body.style.color = "black";
    }
    else if(option.options[option.selectedIndex].value == "orange"){
        document.body.style.background = "orange";
        document.body.style.color = "black";
    }
    else if(option.options[option.selectedIndex].value == "red"){
        document.body.style.background = "red";
        document.body.style.color = "white";
    }
    else if(option.options[option.selectedIndex].value == "grey"){
        document.body.style.background = "grey";
        document.body.style.color = "white";
    }
}

function chooseWeather(){
	let option = document.getElementById("checkWeather");

	if (option.options[option.selectedIndex].value == "sunny") {
		document.getElementById("weather").innerHTML = "It is nice and sunny outside today. Wear shorts! Goto the beach, or park, and get an ice cream";	
	}
	else if (option.options[option.selectedIndex].value == "rainy") {
		document.getElementById("weather").innerHTML = "Rain is falling outside, take a rain coat and a brolly, and don't stay out for too long";
	}
    else if (option.options[option.selectedIndex].value == "cloudy") {
		document.getElementById("weather").innerHTML = "It is nice and cloudy outside today, wear a nice clothes and don't forget to bring an umbrella and watch out for clouds getting dark.";
	}
    else if (option.options[option.selectedIndex].value == "foogy") {
		document.getElementById("weather").innerHTML = "Today is foggy and cloudy, wear warm clothes and wear gloves, be careful when going out and pay close attention to the road.";
	}
	else{
		document.getElementById("weather").innerHTML = "";
	}
}

function getResult (){
	let number =  document.getElementById("getFactorial");
	let result = 1;
    for(let i = 1; i <= number.value; i++) {
      result *= i;
    }
    document.getElementById("result").innerHTML = `The factorial of ${number.value} is ${result} `;
}