<template>
  <div class="publication-details" v-if="publication">
    <div class="publication-content">
      <h2 class="publication-title">{{ publication.titre }}</h2>
      <div class="publication-media" v-if="publication.type === 'image'">
        <img :src="publication.contenu" alt="Image">
      </div>
      <div class="publication-media" v-else-if="publication.type === 'video'">
        <video :src="publication.contenu" controls></video>
      </div>
      <p class="publication-description">Description: {{ publication.description }}</p>
    </div>
    <div class="publication-interaction">
      <p>Likes: {{ publication.likes }}</p>
      <button @click="toggleLike(publication)">
        {{ publication.liked ? 'Unlike' : 'Like' }}
      </button>
      <p>Commentaires: {{ publication.commentaires }}</p>
      <p>Partages: {{ publication.partages }}</p>
    </div>
  </div>
  <div v-else>
    <p>Loading...</p>
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import { useRoute } from 'vue-router';

const route = useRoute();

const publications = ref([
  {
    id: 1,
    titre: "Première publication",
    contenu: "lien vers l'image ou la vidéo",
    type: "image",
    likes: 10,
    commentaires: 5,
    partages: 2,
    description: "Description de la première publication",
    liked: false
  },
  {
    id: 2,
    titre: "Deuxieme Publication",
    contenu: "lien vers l'image ou la vidéo",
    type: "video",
    likes: 15,
    commentaires: 7,
    partages: 3,
    description: "Description de la deuxième publication",
    liked: false
  }
]);

const publication = ref(null);

onMounted(() => {
  const id = Number(route.params.id);
  publication.value = publications.value.find(pub => pub.id === id);
});

const toggleLike = (publication) => {
  publication.liked = !publication.liked;
  if (publication.liked) {
    publication.likes++;
  } else {
    publication.likes--;
  }
};
</script>

<style scoped>
.publication-details {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.publication-content {
  background-color: #ffffff;
  border: 1px solid #d7dadc;
  border-radius: 8px;
  padding: 20px;
  margin-bottom: 20px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  font-family: 'Poppins';
  width: 80%;
}

.publication-title {
  margin-top: 0;
  margin-bottom: 10px;
  font-size: 18px;
  font-weight: 500;
  text-align: center; /* Centrage du titre */
}

.publication-media {
  display: flex;
  justify-content: center; /* Centrage de l'image ou de la vidéo */
  margin-bottom: 10px;
}

.publication-media img,
.publication-media video {
  max-width: 100%;
  height: auto;
}

.publication-description {
  margin-top: 0;
  margin-bottom: 10px;
  text-align: center; /* Centrage de la description */
}

.publication-interaction {
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: 80%;
  padding: 10px 20px;
  border-top: 1px solid #d7dadc;
  font-size: 14px;
}
</style>
