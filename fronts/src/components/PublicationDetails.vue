<template>
    <div>
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
        <p>Commentaires: {{ publication.commentaires }}</p>
      </div>
    </div>
  </template>
  
  <script setup>
  import { ref } from 'vue';
  
  const publication = ref({
    titre: '',
    contenu: '',
    type: '',
    description: '',
    likes: 0,
    commentaires: 0
  });
  </script>
  