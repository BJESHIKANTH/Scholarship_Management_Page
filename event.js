/*<!--*/

(function() {
var CRITEO_COM_TOKEN="AwnOWg2dzaxHPelVjqOT/Y02cSxnG2FkjXO7DlX9VZF0eyD0In8IIJ9fbDFZGXvxNvn6HaF51qFHycDGLOkj1AUAAACAeyJvcmlnaW4iOiJodHRwczovL2NyaXRlby5jb206NDQzIiwiZmVhdHVyZSI6IlByaXZhY3lTYW5kYm94QWRzQVBJcyIsImV4cGlyeSI6MTY5NTE2Nzk5OSwiaXNTdWJkb21haW4iOnRydWUsImlzVGhpcmRQYXJ0eSI6dHJ1ZX0=",addTrialToken=function(e){var t=document.createElement("meta");t.httpEquiv="origin-trial",t.content=e,document.head.appendChild(t)},tokenAdded=function(){for(var e=0,t=document.getElementsByTagName("meta");e<t.length;e++){var n=t[e];if("origin-trial"===n.httpEquiv&&n.content===CRITEO_COM_TOKEN)return!0}return!1},isChrome=function(){return!!window.chrome};
isChrome()&&!tokenAdded()&&addTrialToken(CRITEO_COM_TOKEN);var onLoad=function(e){"complete"===document.readyState?setTimeout(e):window.addEventListener?window.addEventListener("load",e,!1):window.attachEvent("onload",e)},dropIframe=function(e,o){var t;(!true||"joinAdInterestGroup"in navigator)&&((t=document.createElement("iframe")).allow="join-ad-interest-group",t.width=t.height="0",t.style.display="none",t.title=o,t.src=e,document.body.appendChild(t),"undefined"!=typeof criteo_q&&"function"==typeof criteo_q.removeLater?criteo_q.removeLater(t):setTimeout(function(){document.body.removeChild(t)},3e4))},callFledge=function(e,o){var t=e+"/interest-group"+"?data="+o;onLoad(function(){isChrome()&&dropIframe(t,"Criteo Fledge iframe")})};
callFledge('https://fledge.as.criteo.com', 'rL4f_HxXRXZFSWF4OXF2M3dvTFV2NTJFdit6UEkvd1BjL0FmZldoV0tlZ013bm4zbE5Ib1hUYm1FVXYzTzdtajZXYmh1fA');
})();

/*-->*/