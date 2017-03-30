
var app = new Vue({
  el: '#identity',
  data: {
    nom: 'Sarah Rebouh',
    job: 'journaliste web - développeur web'
  }
})

var foot = new Vue({
  el: '#foot',
  data: {
    competence: 'Compétences',
    portfolio: 'Portfolio',
    diplomes: 'Diplomes',
    contact: 'Contact'
  }
})

var hastag = new Vue({
  el: '#hashtag',
  data: {
    presse:'#Presse',
    com:'#Communication',
    social:'#RéseauxSociaux',
    photo:'#Photographie #Vidéo',
    voyage:'#Voyages',
    musique:'#Musique',
    gastronomie:'#Gastronomie',
    sport:'#Football #Ski #Randonnée',
    humour:'#Humour #Convivialité',
    polyvalence:'#Polyvalence #Défis'
  }
})
