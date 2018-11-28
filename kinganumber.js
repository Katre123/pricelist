//if-result tingimused

//function defineeritakse kujul function tema nimi, sulud mida kasutatakse parameetrite kirjutamiseks aga me praegu ei kasuta neid. ja loogelised sulud.
//Function on blokk, mida kasutatakse koodis eriosade eristamiseks ja SUBMIT nupu sidumiseks. 

function shoe() {


//see, mida kasutaja sisestab kasti, saadakse see väärtus. mida hakatakse siis mujal koodis kasutama. 
	var resultMax = document.getElementById('size').value;

	if (resultMax>60) {
		showResult='<p>Sinu kinganumber on liiga suur. Oled kindel, et õige suurus?</p>';
		}
	else {
		showResult ='Sinu kinganumber on '+resultMax;
		}

	document.getElementById('result').innerHTML= showResult;

}
