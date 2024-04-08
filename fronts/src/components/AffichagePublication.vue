<template>
  <div>
    <div class="publication">
      <h2>{{ publication1.titre }}</h2>
      <div v-if="publication1.type === 'image'">
        <img :src="publication1.contenu" alt="Image">
        <div @click="goToPublication(publication.id)">
    <!-- Contenu de la publication -->
  </div>
      </div>
      <div v-else-if="publication1.type === 'video'">
        <video :src="publication1.contenu" controls></video>
      </div>
      <div class="interaction">
        <!-- <span @click="toggleLike(publication2)">
          <img :src="publication2.liked ? './heart.svg' : './like.svg'" alt="Like"> {{ publication2.likes }}
        </span> -->
        <!-- <span><img src="./like.svg" alt="Like"> {{ publication1.likes }}</span> -->
        <!-- <span><img src="./comment.svg" alt="Commentaire"> {{ publication1.commentaires }}</span>
        <span><img src="./share.svg" alt="Partager"> {{ publication1.partages }}</span> -->
      </div>
    </div>

    <div class="publication">
      <h2>{{ publication2.titre }}</h2>
      <div v-if="publication2.type === 'image'">
        <img :src="publication2.contenu" alt="Image">
        <div @click="goToPublication(publication.id)">
    <!-- Contenu de la publication -->
  </div>
      </div>
      <div v-else-if="publication2.type === 'video'">
        <video :src="publication2.contenu" controls></video>
      </div>
      <div class="interaction">
        <!-- <span @click="toggleLike(publication2)">
          <img :src="publication2.liked ? './heart.svg' : './like.svg'" alt="Like"> {{ publication2.likes }} -->
        <!-- </span> -->
        <!-- <span><img src="./like.svg" alt="Like"> {{ publication1.likes }}</span> -->
        <!-- <span><img src="./comment.svg" alt="Commentaire"> {{ publication1.commentaires }}</span>
        <span><img src="./share.svg" alt="Partager"> {{ publication1.partages }}</span> -->
      </div>
    </div>
  </div>
</template>

  
<script setup>
import { ref, onMounted } from "vue";
import { useRouter } from 'vue-router';

const router = useRouter();

const goToPublication = (id) => {
  router.push({ name: 'AffichagePublication', params: { id } });
};

const publication1 = ref({
  titre: "Première publication",
  contenu: "lien vers l'image ou la vidéo",
  type: "image", // ou "video",
  likes: 10,
  commentaires: 5,
  partages: 2
});

const publication2 = ref({
  titre: "Deuxième publication",
  contenu: "lien vers l'image ou la vidéo",
  type: "video", // ou "image",
  likes: 15,
  commentaires: 7,
  partages: 3
});

// const toggleLike = (publication) => {
//   publication.liked = !publication.liked;
//   if (publication.liked) {
//     publication.likes++;
//   } else {
//     publication.likes--;
//   }
// };

const fetchData = async () => {
  try {
    // UPDATE API quand dispo!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
    const response = await fetch('https://localhost:8000/api/endpoint');
    if (!response.ok) {
      throw new Error('Erreur lors de la récupération des données.');
    }
    const data = await response.json();
    // Manipulez les données reçues de l'API ici
    console.log(data);
  } catch (error) {
    console.error('Erreur:', error.message);
  }
};

onMounted(fetchData); // Appeler fetchData lorsque le composant est monté
</script>


  
<style scoped>

.publication {
  background-color: #ffffff;
  border: 1px solid #d7dadc;
  border-radius: 8px;
  padding: 20px;
  margin-bottom: 20px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.publication h2 {
  margin-top: 0;
  margin-bottom: 10px;
  font-size: 18px;
}

.publication img,
.publication video {
  max-width: 100%;
  height: auto;
  margin-bottom: 10px;
}

/* .interaction {
  display: flex;
  align-items: center;
  margin-top: 10px;
} */

/* .interaction span {
  margin-right: 10px;
  color: #666;
  font-size: 14px;
} */

/* .interaction img {
  width: 20px; 
  height: 20px; 
  margin-right: 5px;
  vertical-align: middle; */
  /* cursor: pointer; */
/* } */
</style>

  