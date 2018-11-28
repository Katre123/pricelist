//if-else tingimused

var resultMax = 60;
var showResult= 44;

if (resultMax<60) {
	showResult='Sinu kinganumber on liiga suur. Oled kindel, et õige suurus?';
}
else {
	showResult = showResult;
}

document.getElementById('result').innerHTML= showResult;

