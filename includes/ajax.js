// Exécute un appel AJAX GET
// Prend en paramètres l'URL cible et la fonction callback appelée en cas de succès
// function ajaxGet(url, callback) {
//     var req = new XMLHttpRequest();
//     req.open("GET", url);
//     req.addEventListener("load", function () {
//         if (req.status >= 200 && req.status < 400) {
//             // Appelle la fonction callback en lui passant la réponse de la requête
//             callback(req.responseText);
//         } else {
//             console.error(req.status + " " + req.statusText + " " + url);
//         }
//     });
//     req.addEventListener("error", function () {
//         console.error("Erreur réseau avec l'URL " + url);
//     });
//     req.send(null);
// }

function ajax_get_request(callback, url, async) {
  var xhr = new XMLHttpRequest(); // Création de l'objet
  // Définition de la fonction à exécuter à chaque changement d'état
  xhr.onreadystatechange = function(){
    if (callback && xhr.readyState == 4 && xhr.status == 200){
      // Si le serveur a fini son travail// et que le code d'état indique que tout s'est bien passé// => On appelle la fonction callback en lui passant la réponse
      callback(xhr.responseText);
    }
  };

  xhr.open("GET", url, async); // Initialisation de l'objet
  xhr.send(); // Envoi de la requête
}
