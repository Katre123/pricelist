//alert('test');
//alert(9+1);

var a = 4;
var b = 5;

c = a + b; 

d = c/a

document.getElementById('result').innerHTML= 'Jagamise lõpptulemus on' + d + '<br>'+ 'Liitmise lõpptulemus on' + c;

// Arvutused

var e = 10
var f = 25

g=(e*f)/2

document.getElementById('triangle').innerHTML= 'kolmnurga pindala on' + g 


var a = 5.788878788;
var j = 2322.2579745415;

//Ümardamine
round = Math.round(a); //ümardab 
floor = Math.floor(a); //ümardab allapoole
point = a.toFixed(2); //komakoha määratlemine
number = j.toFixed(2);//komakoha määratlemine
unknown = Math.round(Math.random()*100); //suvalise nr valik
unknown1= (Math.random()*10000).toFixed(2);


// 2232.558
//22.32558

document.getElementById('round').innerHTML= round + '<br>'+ floor + '<br>'+ point+'<br>'+unknown+'<br>'+number+'<br>'+'unknown1';

