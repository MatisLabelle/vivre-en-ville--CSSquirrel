<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Markmap</title>
<style>
* {
  margin: 0;
  padding: 0;
}
#mindmap {
  display: block;
  width: 100vw;
  height: 100vh;
}
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/markmap-toolbar@0.17.2/dist/style.css">
</head>
<body>
<svg id="mindmap"></svg>
<script src="https://cdn.jsdelivr.net/npm/d3@7.8.5/dist/d3.min.js"></script><script src="https://cdn.jsdelivr.net/npm/markmap-view@0.17.2/dist/browser/index.js"></script><script src="https://cdn.jsdelivr.net/npm/markmap-toolbar@0.17.2/dist/index.js"></script><script>(r => {
                setTimeout(r);
              })(() => {
  const {
    markmap,
    mm
  } = window;
  const {
    el
  } = markmap.Toolbar.create(mm);
  el.setAttribute('style', 'position:absolute;bottom:20px;right:20px');
  document.body.append(el);
})</script><script>((getMarkmap, getOptions, root2, jsonOptions) => {
              const markmap = getMarkmap();
              window.mm = markmap.Markmap.create(
                "svg#mindmap",
                (getOptions || markmap.deriveOptions)(jsonOptions),
                root2
              );
            })(() => window.markmap,null,{"content":"","children":[{"content":"Home","children":[{"content":"MODÈLE: home.php","children":[{"content":"partials php:","children":[{"content":"footer.php","children":[],"payload":{"lines":"6,7"}},{"content":"navbar.php","children":[],"payload":{"lines":"7,9"}}],"payload":{"lines":"4,5"}}],"payload":{"lines":"2,3"}},{"content":"Témoignages","children":[{"content":"temoignage.php","children":[],"payload":{"lines":"11,12"}},{"content":"name:group","children":[],"payload":{"lines":"13,14"}},{"content":"quote:group","children":[],"payload":{"lines":"15,16"}},{"content":"img:group","children":[],"payload":{"lines":"17,18"}}],"payload":{"lines":"9,10"}}],"payload":{"lines":"0,1"}},{"content":"News-hub","children":[{"content":"MODÈLE: news-hub.php","children":[{"content":"partials php:","children":[{"content":"footer.php","children":[],"payload":{"lines":"25,26"}},{"content":"navbar.php","children":[],"payload":{"lines":"26,27"}},{"content":"sidebar-archive.php","children":[],"payload":{"lines":"27,28"}},{"content":"breadcrumb.php","children":[],"payload":{"lines":"28,30"}}],"payload":{"lines":"23,24"}}],"payload":{"lines":"21,22"}},{"content":"Hero","children":[{"content":"h1 titre","children":[],"payload":{"lines":"32,33"}}],"payload":{"lines":"30,31"}},{"content":"Carte de nouvelle","children":[{"content":"card-news.php","children":[],"payload":{"lines":"36,37"}}],"payload":{"lines":"34,35"}}],"payload":{"lines":"19,20"}},{"content":"News-article","children":[{"content":"TYPE DE CONTENU (POST TYPE): nouvelle","children":[],"payload":{"lines":"40,41"}},{"content":"MODÈLE: news-article.php","children":[{"content":"partials php:","children":[{"content":"footer.php","children":[],"payload":{"lines":"46,47"}},{"content":"navbar.php","children":[],"payload":{"lines":"47,48"}},{"content":"sidebar-news.php","children":[],"payload":{"lines":"48,49"}},{"content":"breadcrumb.php","children":[],"payload":{"lines":"49,50"}},{"content":"article-nav.php","children":[],"payload":{"lines":"50,52"}}],"payload":{"lines":"44,45"}}],"payload":{"lines":"42,43"}},{"content":"Auteur","children":[{"content":"CHAMPS PERSONNALISÉS","children":[{"content":"article-title : Titre","children":[],"payload":{"lines":"56,57"}},{"content":"article-date : Date","children":[],"payload":{"lines":"58,59"}},{"content":"article-content : Contenu texte","children":[],"payload":{"lines":"60,61"}},{"content":"article-author : Group","children":[{"content":"Name","children":[],"payload":{"lines":"64,65"}},{"content":"Role","children":[],"payload":{"lines":"65,66"}},{"content":"Email","children":[],"payload":{"lines":"66,67"}},{"content":"Phone number","children":[],"payload":{"lines":"67,69"}}],"payload":{"lines":"62,63"}}],"payload":{"lines":"54,55"}}],"payload":{"lines":"52,53"}},{"content":"title","children":[],"payload":{"lines":"69,70"}},{"content":"img","children":[],"payload":{"lines":"71,72"}},{"content":"info","children":[],"payload":{"lines":"73,74"}}],"payload":{"lines":"38,39"}},{"content":"Services-hub","children":[{"content":"MODÈLE: services-hub.php","children":[{"content":"partials php:","children":[{"content":"footer.php","children":[],"payload":{"lines":"81,82"}},{"content":"navbar.php","children":[],"payload":{"lines":"82,83"}},{"content":"breadcrumb.php","children":[],"payload":{"lines":"83,85"}}],"payload":{"lines":"79,80"}}],"payload":{"lines":"77,78"}},{"content":"Hero","children":[{"content":"h1 titre","children":[],"payload":{"lines":"87,88"}}],"payload":{"lines":"85,86"}}],"payload":{"lines":"75,76"}},{"content":"Service","children":[{"content":"TYPE DE CONTENU (POST TYPE): service","children":[],"payload":{"lines":"91,92"}},{"content":"MODÈLE: service.php","children":[{"content":"partials php:","children":[{"content":"footer.php","children":[],"payload":{"lines":"97,98"}},{"content":"navbar.php","children":[],"payload":{"lines":"98,99"}},{"content":"breadcrumb.php","children":[],"payload":{"lines":"99,101"}}],"payload":{"lines":"95,96"}}],"payload":{"lines":"93,94"}},{"content":"Hero","children":[{"content":"h1 titre","children":[],"payload":{"lines":"103,104"}}],"payload":{"lines":"101,102"}},{"content":"service en cours","children":[{"content":"Partials: current.php","children":[],"payload":{"lines":"107,108"}},{"content":"Service en cours...","children":[],"payload":{"lines":"109,110"}}],"payload":{"lines":"105,106"}},{"content":"projet","children":[],"payload":{"lines":"111,112"}}],"payload":{"lines":"89,90"}},{"content":"Team","children":[{"content":"MODÈLE: team.php","children":[],"payload":{"lines":"115,116"}},{"content":"Hero","children":[{"content":"h1 titre","children":[],"payload":{"lines":"119,120"}}],"payload":{"lines":"117,118"}},{"content":"person","children":[{"content":"partials php:","children":[{"content":"footer.php","children":[],"payload":{"lines":"125,126"}},{"content":"navbar.php","children":[],"payload":{"lines":"126,127"}},{"content":"breadcrumb.php","children":[],"payload":{"lines":"127,129"}}],"payload":{"lines":"123,124"}},{"content":"PARTIALS: team-member.php","children":[],"payload":{"lines":"129,130"}},{"content":"Name (text)","children":[],"payload":{"lines":"131,132"}},{"content":"Rôle (text)","children":[],"payload":{"lines":"133,134"}}],"payload":{"lines":"121,122"}}],"payload":{"lines":"113,114"}},{"content":"About","children":[{"content":"Hero","children":[{"content":"h1 titre","children":[],"payload":{"lines":"139,140"}},{"content":"partials php:","children":[{"content":"footer.php","children":[],"payload":{"lines":"143,144"}},{"content":"navbar.php","children":[],"payload":{"lines":"144,145"}},{"content":"breadcrumb.php","children":[],"payload":{"lines":"145,147"}}],"payload":{"lines":"141,142"}}],"payload":{"lines":"137,138"}}],"payload":{"lines":"135,136"}},{"content":"Contact-us","children":[{"content":"modèle: contact.php","children":[{"content":"partials php:","children":[{"content":"footer.php","children":[],"payload":{"lines":"153,154"}},{"content":"navbar.php","children":[],"payload":{"lines":"154,155"}},{"content":"breadcrumb.php","children":[],"payload":{"lines":"155,157"}}],"payload":{"lines":"151,152"}}],"payload":{"lines":"149,150"}}],"payload":{"lines":"147,148"}},{"content":"404","children":[{"content":"partials php:","children":[{"content":"footer.php","children":[],"payload":{"lines":"161,162"}},{"content":"navbar.php","children":[],"payload":{"lines":"162,163"}}],"payload":{"lines":"159,160"}}],"payload":{"lines":"157,158"}}]},{})</script>
</body>
</html>
