//mobileApp

var ma = 0;
	function mobileappp(dis, url, buton, wybor){
		alert("aaa");
		if(wybor == true){
//		if (ma == 0){
			
		var o = document.createElement('input');
			o.setAttribute('value', 'opis');
			o.setAttribute('type', 'text');
			o.setAttribute('id', 'dpisapp');
			o.setAttribute('name', 'plik[]');
			o.className = 'upload';
			var kontener = document.getElementById(dis);
			kontener.appendChild(o);
			
		var u = document.createElement('input');
			u.setAttribute('value', 'url');
			u.setAttribute('type', 'text');
			u.setAttribute('id', 'urllink');
			u.setAttribute('name', 'plik[]');
			u.className = 'upload';
			var kontener = document.getElementById(url);
			kontener.appendChild(u);
			
		var dodaj = document.createElement('input');
			dodaj.setAttribute('type', 'button');
			dodaj.setAttribute('id', 'but');
			dodaj.setAttribute('name', 'plik[]');
			dodaj.setAttribute('onclick', 'kolejny();');
			dodaj.className = 'upload';
			var kontener = document.getElementById(buton);
			kontener.appendChild(dodaj);
			
		//	ma = 1;
	//		}
		}
		else if(wybor == false){
			//if( ma == 1){
				var e1 = document.getElementById('dpisapp');
				var e2 = document.getElementById('urllink');
				var e3 = document.getElementById('but');
				var e4 = document.getElementById('idurllink');
				
				e1.remove();
				e2.remove();
				e3.remove();
				e4.remove();
			//	ma = 0;
		//}
		}

	}