let img = [];
let imgCont = document.querySelector('.img_defil');
let nbimg = 4




for(let i = 1;i<= nbimg;i++){
	img.push('img/img'+i+'.jpg');
}

function defil(i){
	if(i > img.length-1){
		i = 0;
	}
	imgCont.style.backgroundImage = "url("+img[i]+")";
	

	i++;
	tempo = setTimeout("defil("+i+")",5000);
}

defil(0);


