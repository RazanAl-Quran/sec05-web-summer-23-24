console.log("hello from calc js");

function sum() {
    let num1 = parseInt(document.getElementById("number1").value);
    console.log(typeof num1);
    console.log(num1);
    let num2 = parseInt(document.getElementById("number2").value);
    console.log(typeof num2);
    console.log(num2);

    document.getElementById('result').value = num1+num2; 
    
}


function multiply() {
    let num1 = parseInt(document.getElementById("number1").value);
    console.log(typeof num1);
    console.log(num1);
    let num2 = parseInt(document.getElementById("number2").value);
    console.log(typeof num2);
    console.log(num2);
     console.log('the multiplication of num1 and num2 = '+ num1*num2);
     

    alert('the multiplication of num1 and num2 = ' + num1*num2) ; 
    
}