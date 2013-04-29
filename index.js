// JavaScript Document
function begin(){
	var style = getCookie("style");
	if(style!= "Default" && style!= "Low Vision" && style!= "Large Text"){
		style = "Default";
	}
	setActiveStyleSheet(style);
	
	css = style;
}

function setActiveStyleSheet(title) {
	var i, a, main;
	for(i=0; (a=document.getElementsByTagName("link")[i]); i++) {
		if(a.getAttribute("rel") && a.getAttribute("rel").indexOf("style") != -1 && a.getAttribute("title")){
			if(a.getAttribute("title")!="JQ" && a.getAttribute("title")!="JQL"){
				a.disabled = true;
				if(a.getAttribute("title") == title){
					a.disabled = false;
					setCookie("style", title, 100);
				}
			}else if(a.getAttribute("title")=="JQ"){
				if(title=="Low Vision"){
					a.disabled = true;
				}else{
					a.disabled = false;
				}
			}else{
				if(title=="Low Vision"){
					a.disabled = false;
				}else{
					a.disabled = true;
				}
			}
		}
	}
	for(i=0; (a=document.getElementsByTagName("script")[i]); i++){
		if(a.getAttribute("src")=="DefaultCount.js"){
			if(title=="Low Vision"){
				a.disabled = true;
			}else{
				a.disabled = false;
			}
		}
		if(a.getAttribute("src")=="LowCount.js"){
			if(title=="Low Vision"){
				a.disabled = false;
			}else{
				a.disabled = true;
			}
		}
	}
	return false;
}

//Set a cookie for the previously set style
function setCookie(c_name,value,exdays){
	var exdate=new Date();
	exdate.setDate(exdate.getDate() + exdays);
	var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
	document.cookie=c_name + "=" + c_value;
}

//Find out the previously set style
function getCookie(c_name){
	var i,x,y,ARRcookies=document.cookie.split(";");
	for (i=0;i<ARRcookies.length;i++){
		x=ARRcookies[i].substr(0,ARRcookies[i].indexOf("="));
		y=ARRcookies[i].substr(ARRcookies[i].indexOf("=")+1);
		x=x.replace(/^\s+|\s+$/g,"");
		if (x==c_name){
			return unescape(y);
		}
	}
	return "Default";
}