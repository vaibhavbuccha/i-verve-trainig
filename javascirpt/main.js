/**
 * 
 * 1. if we use backtracs than it add the value into an array or a object.
 * 2. if we use () it simply prints the statement.
 * 
 * 
 */


// console.log ("vaibahv");
// let arr =  `vaibhav , 12, 32`;
// console.log (arr[2]);


// js dom manupulation .

// 1. querySelector

let header = document.querySelector('h1');

header.style.background = 'grey';
console.log (window.innerHeight);
console.log(window.crypto);
console.log(window.devicePixelRatio = 5);
if(window.innerWidth <= 700){
    header.style.background = 'red';
    
}
console.log `${header}`;


// create an html element using createElement function

var elem = document.createElement('img')
Object.assign(elem, {
  className: 'my-image-class',
  src: 'https://dummyimage.com/320x240/ccc/fff.jpg',
  height: 120, // pixels
  width: 160, // pixels
  onclick: function () {
    alert('Clicked!')
  }
})
document.body.appendChild(elem)

