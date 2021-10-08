function toCelsius()
{
    let fahrenheit = prompt("fahrenheit")
    let value = (fahrenheit - 32)*5/9
    document.getElementById("answer_section").innerHTML = value;
}          
toCelsius()