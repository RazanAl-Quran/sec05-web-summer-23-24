function evenOdd() {
    let num1 = parseInt(prompt('Enter a number')); 
    console.log(num1);
    console.log(typeof num1);
    if(num1%2==0) {
        console.log('even');
        // document.getElementById('evenOddResult').textContent = 'even';
        document.querySelector('#evenOddResult').textContent = 'even';
    } else {
        console.log('odd');
        document.getElementById('evenOddResult').textContent = 'odd';
    }
}

if('7'===7) {
    console.log('equal');
    
} else {
    console.log('not equal');
    
}