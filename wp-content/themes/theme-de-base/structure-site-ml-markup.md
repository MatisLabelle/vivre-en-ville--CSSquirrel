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
            })(() => window.markmap,null,{"content":"","children":[{"content":"Home","children":[{"content":"MODÈLE: home.php","children":[],"payload":{"lines":"2,3"}},{"content":"Témoignages","children":[{"content":"temoignage.php","children":[],"payload":{"lines":"6,7"}},{"content":"name:group","children":[],"payload":{"lines":"8,9"}},{"content":"quote:group","children":[],"payload":{"lines":"10,11"}},{"content":"img:group","children":[],"payload":{"lines":"12,13"}}],"payload":{"lines":"4,5"}}],"payload":{"lines":"0,1"}},{"content":"News-hub","children":[{"content":"MODÈLE: news-hub.php","children":[],"payload":{"lines":"16,17"}},{"content":"Hero","children":[{"content":"h1 titre","children":[],"payload":{"lines":"20,21"}}],"payload":{"lines":"18,19"}},{"content":"Carte de nouvelle","children":[{"content":"card-news.php","children":[],"payload":{"lines":"24,25"}}],"payload":{"lines":"22,23"}}],"payload":{"lines":"14,15"}},{"content":"News-article","children":[{"content":"TYPE DE CONTENU (POST TYPE): nouvelle","children":[],"payload":{"lines":"28,29"}},{"content":"MODÈLE: news-article.php","children":[],"payload":{"lines":"30,31"}},{"content":"Auteur","children":[{"content":"PARTIALS: news-author.php","children":[],"payload":{"lines":"34,35"}},{"content":"name","children":[],"payload":{"lines":"36,37"}},{"content":"info","children":[],"payload":{"lines":"38,39"}},{"content":"contact","children":[],"payload":{"lines":"40,41"}}],"payload":{"lines":"32,33"}},{"content":"title","children":[],"payload":{"lines":"42,43"}},{"content":"img","children":[],"payload":{"lines":"44,45"}},{"content":"info","children":[],"payload":{"lines":"46,47"}}],"payload":{"lines":"26,27"}},{"content":"Services-hub","children":[{"content":"MODÈLE: services-hub.php","children":[],"payload":{"lines":"50,51"}},{"content":"Hero","children":[{"content":"h1 titre","children":[],"payload":{"lines":"54,55"}}],"payload":{"lines":"52,53"}}],"payload":{"lines":"48,49"}},{"content":"Service","children":[{"content":"TYPE DE CONTENU (POST TYPE): service","children":[],"payload":{"lines":"58,59"}},{"content":"MODÈLE: service.php","children":[],"payload":{"lines":"60,61"}},{"content":"Hero","children":[{"content":"h1 titre","children":[],"payload":{"lines":"64,65"}}],"payload":{"lines":"62,63"}},{"content":"service en cours","children":[{"content":"Partials: current.php","children":[],"payload":{"lines":"68,69"}},{"content":"Service en cours...","children":[],"payload":{"lines":"70,71"}}],"payload":{"lines":"66,67"}},{"content":"projet","children":[],"payload":{"lines":"72,73"}}],"payload":{"lines":"56,57"}},{"content":"Team","children":[{"content":"MODÈLE: team.php","children":[],"payload":{"lines":"76,77"}},{"content":"Hero","children":[{"content":"h1 titre","children":[],"payload":{"lines":"80,81"}}],"payload":{"lines":"78,79"}},{"content":"person","children":[{"content":"PARTIALS: team-member.php","children":[],"payload":{"lines":"84,85"}},{"content":"Name","children":[],"payload":{"lines":"86,87"}},{"content":"Rôle","children":[],"payload":{"lines":"88,89"}}],"payload":{"lines":"82,83"}}],"payload":{"lines":"74,75"}},{"content":"About","children":[{"content":"Hero","children":[{"content":"h1 titre","children":[],"payload":{"lines":"94,95"}}],"payload":{"lines":"92,93"}}],"payload":{"lines":"90,91"}},{"content":"Contact-us","children":[],"payload":{"lines":"96,97"}},{"content":"404","children":[],"payload":{"lines":"98,99"}}]},{})</script>
</body>
</html>
