var _xmlHttp = createXmlHttpRequestObject(); // récupère la référence
à l'objet XMLHttpRequest
function createXmlHttpRequestObject() { // crée l'objet XMLHttpRequest
var _xmlHttp; // objet XMLHttpRequest temporaire
 if(window.ActiveXObject){ // si sous Internet Explorer
     try{
 _xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
 }catch (e) {
 _xmlHttp = false;
 }
 } else { // si c'est Mozilla ou un autre browser
 try {
 _xmlHttp = new XMLHttpRequest();
 }catch (e) {
 _xmlHttp = false;
 }
 }
 // affiche un message d'erreur ou l'objet créé
 if (!_xmlHttp) alert("Error creating the XMLHttpRequest object.");
 else return _xmlHttp;
}
function process(){ // utilise XMLHttpRequest pour requête HTTP
asynchrone
if(_xmlHttp&&_xmlHttp.readyState!=0){
_xmlHttp.abort()
}
_xmlHttp=createXmlHttpRequestObject();
if(_xmlHttp){ // si pas occupé
 _xmlHttp.open("GET","php/select.php", true);
// se prépare à exécuter monscript.php sur le serveur
 _xmlHttp.onreadystatechange = handleServerResponse;
// défini l'action a exécuter lors de la réception de la réponse
 _xmlHttp.send(null); // lance la requête sur le serveur
 } else {
setTimeout('process()', 1000); // si occupé réessaie dans
une seconde
}
}
function handleServerResponse() { // exécuté quand le serveur répond
 if (_xmlHttp.readyState == 4) { // si la transaction est finie
 if (_xmlHttp.status == 200) { // si fini comme il faut
 var Response = _xmlHttp.responseText; // extrait le code XML
reçu
 document.getElementById("select").innerHTML = Response;
 //setTimeout('process()', 1000); // relance la séquence
 }else { // status différent de 200 = erreur
 alert("There was a problem accessing the server: " +
_xmlHttp.statusText);
 }
 }
}