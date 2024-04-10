<template>
  <div v-if="publication">
    <h2>{{ publication.titre }}</h2>
    <div v-if="publication.type === 'image'">
      <img :src="publication.contenu" alt="Image">
    </div>
    <div v-else-if="publication.type === 'video'">
      <video :src="publication.contenu" controls></video>
    </div>
    <div>
      <p>Description: {{ publication.description }}</p>
      <p>Likes: {{ publication.likes }}</p>
      <button @click="toggleLike(publication)">
        {{ publication.liked ? 'Unlike' : 'Like' }}
      </button>
      <p>Commentaires: {{ publication.commentaires }}</p>
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
