
<!-- <div class="intro">
  <img class="col-xs-6" src="view/images/gaucheHome.png" alt="" id="gauche">
  <img class="col-xs-5" src="view/images/droiteHome.png" alt="" id="droite">
  <img src="view/images/focus.png" alt="" id="focus" class="">
</div> -->


<div class="content">
    <div class="container">

        <div class="">
            <img id="me" class="col-xs-12" src="view/images/sarahrebouh.png" alt="">

            <div class="col-xs-12" id="hashtag">


                <div id="app">
                  <a href="#"><p id="show-modal" @click="showModal = true">#Presse</p></a>
                  <!-- use the modal component, pass in the prop -->
                  <modal v-if="showModal" @close="showModal = false">
                      <div slot="body">
                          <h2>#Presse</h2>
                          <p>Journaliste web de métier, j'ai décidé après cinq ans de périgrinations dans les rédactions de France et de Navarre
                          de passer du côté obscure de la force : le développement web. Je reste néanmoins très attachée à mes premiers amours : la presse.
                          </p>
                      </div>
                  </modal>
                </div>

                <div id="app1">
                  <a href="#"><p id="show-modal" @click="showModal = true">#Communication</p></a>
                  <!-- use the modal component, pass in the prop -->
                  <modal v-if="showModal" @close="showModal = false">
                      <div slot="body">
                          <h2>#Communication</h2>
                          <p>Titulaire d'un DUT Information-Communication option publicité, je maîtrise les différents outils de création visuelle. La vidéo, les réseaux sociaux et le contenu digital n'ont que très peu de secrets pour moi !</p>
                      </div>
                  </modal>
                </div>

                <div id="app2">
                  <a href="#"><p id="show-modal" @click="showModal = true">#RéseauxSociaux</p></a>
                  <!-- use the modal component, pass in the prop -->
                  <modal v-if="showModal" @close="showModal = false">
                      <div slot="body">
                          <h2>#RéseauxSociaux</h2>
                          <p>Certains disent que je suis droguée aux réseaux sociaux... J'ai toujours trouvé cette formule un peu exagérée mais force est de constater que
                          Facebook, Twitter, Instagram, Youtube et Snapchat font partie de ma vie depuis maintenant plusieurs années !</p>
                      </div>
                  </modal>
                </div>

                <div id="app3">
                  <a href="#"><p id="show-modal" @click="showModal = true">#Photos</p></a>
                      <!-- use the modal component, pass in the prop -->
                  <modal v-if="showModal" @close="showModal = false">
                      <div slot="body">
                          <h2>#Photo</h2>
                          <p>J'affectionne depuis plusieurs années la photographie et plus particulièrement la photo de voyages et de paysages. Munie de mon reflex, j'enchaîne les clichés
                          pour ne rien oublier des merveilles de ce monde.</p>
                      </div>
                  </modal>
                </div>
                <div id="app4">
                  <a href="#"><p id="show-modal" @click="showModal = true">#Voyages</p></a>
                  <!-- use the modal component, pass in the prop -->
                  <modal v-if="showModal" @close="showModal = false">
                      <div slot="body">
                          <h2>#Voyages</h2>
                          <p>Le voyage est pour moi une réelle drogue. J'ai la bougeotte depuis que j'ai goûté à la liberté et à l'ouverture d'esprit que procure le voyage.
                          Norvège, Nouvelle-Zélande, Vietnam, Thaïlande, Laos, Cuba... Et ce n'est pas terminé.</p>
                      </div>
                  </modal>
                </div>
                <div id="app5">
                  <a href="#"><p id="show-modal" @click="showModal = true">#Musique</p></a>
                  <!-- use the modal component, pass in the prop -->
                  <modal v-if="showModal" @close="showModal = false">
                      <div slot="body">
                          <h2>#Musique</h2>
                          <p>La musique berce mes journées depuis ma plus tendre enfance. Je saute de Francis Cabrel à Kerry James !
                          Les concerts et festivals estivaux sont pour moi des rendez-vous incontournables. </p>
                      </div>
                  </modal>
                </div>
                <div id="app6">
                  <a href="#"><p id="show-modal" @click="showModal = true">#Football #Randonnée #Ski</p></a>
                  <!-- use the modal component, pass in the prop -->
                  <modal v-if="showModal" @close="showModal = false">
                      <div slot="body">
                          <h2>#Sport</h2>
                          <p>Je pratique le football depuis l'âge de 10 ans. Père entraîneur, frère footballeur... Sans surprise j'ai suivi le schéma familial. J'aime aussi la randonnée, avec quelques belles boucles à mon actif, ainsi que le ski, avec quelques
                              belles chutes à mon palmarès.</p>
                      </div>
                  </modal>
                </div>
                <div id="app7">
                  <a href="#"><p id="show-modal" @click="showModal = true">#Humour #Convivialité</p></a>
                  <!-- use the modal component, pass in the prop -->
                  <modal v-if="showModal" @close="showModal = false">
                      <div slot="body">
                          <h2>#Humour #Convivialité</h2>
                          <p>“Je ne plaisante jamais avec l'humour" comme disait l'auteur hongrois Frigyes Karinthy. La convivialité est tout aussi importante pour moi. Sans convivialité, pas de partage et d'esprit de camaraderies.</p>
                      </div>
                  </modal>
                </div>
                <div id="app8">
                  <a href="#"><p id="show-modal" @click="showModal = true">#Polyvalence</p></a>
                  <!-- use the modal component, pass in the prop -->
                  <modal v-if="showModal" @close="showModal = false">
                      <div slot="body">
                          <h2>#Polyvalence #Défis</h2>
                          <p>Photo, vidéo, communication, développement web, réseaux sociaux, rédaction web, design, community management. La polyvalence est ma marque de fabrique. Relever des défis, c'est ce qui me libère de la routine. </p>
                      </div>
                  </modal>
                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/x-template" id="modal-template">
    <transition name="modal">
        <div class="modal-mask">
            <div class="modal-wrapper">
                <div class="modal-container">
                    <button class="modal-default-button" @click="$emit('close')">
                        x
                    </button>
                    <div class="tag presse">
                        <slot name="body">
                            Oups, une erreur est survenue.
                        </slot>
                    </div>


                </div>
            </div>
        </div>
    </transition>
</script>
<script src="view/js/animations.js" type="text/javascript"></script>
