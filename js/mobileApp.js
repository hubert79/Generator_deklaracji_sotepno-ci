//mobileApp

var ma = 0;
	function mobileAppp(dis, url, dislab, urllab,buton,  wybor){
		
		if(wybor == true){
		if (ma == 0){
			
		var ol = document.createElement('LABEL');
			//u.className = 'upload';
			ol.setAttribute('for', 'dpisapp');
			ol.setAttribute("id", "olid");
			ol.innerHTML = "Opis aplikacji mobilnej";
			var kontener = document.getElementById(dislab);
			kontener.appendChild(ol);	
			
		var o = document.createElement('input');
			o.setAttribute('type', 'text');
			o.setAttribute('id', 'dpisapp');
			o.setAttribute('name', 'plik[]');
			o.className = 'upload';
			var kontener = document.getElementById(dis);
			kontener.appendChild(o);
			
		var ul = document.createElement('LABEL');
			//u.className = 'upload';
			ul.setAttribute('for', 'arlmapp');
			ul.setAttribute("id", "ulid");
			ul.innerHTML = "Link aplikacji mobilnej";
			var kontener = document.getElementById(urllab);
			kontener.appendChild(ul);	
			
		var u = document.createElement('input');
			u.setAttribute('type', 'text');
			u.setAttribute('id', 'urlmapp');
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
			
			ma = 1;
			}
		}
		else if(wybor == false){
			if( ma == 1){
				var e1 = document.getElementById('dpisapp');
				var e2 = document.getElementById('urlmapp');
				var e3 = document.getElementById('but');
				var e4 = document.getElementById('olid');
				var e5 = document.getElementById('ulid');
				
				e1.remove();
				e2.remove();
				e3.remove();
				e4.remove();
				e5.remove();
				ma = 0;
			}
		}

	}