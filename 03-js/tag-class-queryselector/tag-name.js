function changeBackground() {
    // let Ps= document.getElementsByTagName('p');
    // let Ps= document.getElementsByClassName('matrix');
    // let Ps= document.querySelectorAll('.matrix');
    let Ps= document.querySelectorAll('p');
    
    console.log(Ps);
    Ps[0].style.backgroundColor = 'blue';
    Ps[1].style.backgroundColor = 'green';
    Ps[2].style.backgroundColor = 'yellow';
}

function reset() {
    let Ps= document.getElementsByTagName('p');
    console.log(Ps);
    Ps[0].style.backgroundColor = '';
    Ps[1].style.backgroundColor = '';
    Ps[2].style.backgroundColor = '';
}