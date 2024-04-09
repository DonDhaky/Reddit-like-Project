<template>
  <div class="publication">
    <h2>{{ props.publication.titre }}</h2>
    <div v-if="props.publication.type === 'image'">
      <img :src="props.publication.contenu" alt="Image">
      <div @click="goToPublication(props.publication.id)">
        <!-- Contenu de la publication -->
      </div>
    </div>
    <div v-else-if="props.publication.type === 'video'">
      <video :src="props.publication.contenu" controls></video>
    </div>
    <div class="interaction">
      <!-- Add your interaction elements here -->
    </div>
  </div>
</template>

  
<script setup>
import { useRouter } from 'vue-router';

const router = useRouter();
const props = defineProps(['publication']);

const goToPublication = (id) => {
  router.push({ name: 'AffichagePublication', params: { id } });
};

// const toggleLike = (publication) => {
//   publication.liked = !publication.liked;
//   if (publication.liked) {
//     publication.likes++;
//   } else {
//     publication.likes--;
//   }
// };

// const fetchData = async () => {
//   try {
//     // UPDATE API quand dispo!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
//     const response = await fetch('https://localhost:8000/api/endpoint');
//     if (!response.ok) {
//       throw new Error('Erreur lors de la récupération des données.');
//     }
//     const data = await response.json();
//     // Manipulez les données reçues de l'API ici
//     console.log(data);
//   } catch (error) {
//     console.error('Erreur:', error.message);
//   }
// };

// onMounted(fetchData); // Appeler fetchData lorsque le composant est monté
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

  