<template>
  <div>
    <AffichagePublication v-for="publication in publications" :key="publication.id" :publication="publication" />
  </div>
</template>

<script setup>
import AffichagePublication from '@/components/AffichagePublication.vue';
// import { ref } from 'vue';

// const publications = ref([
//   {
//     id: 1,
//     titre: "Première publication",
//     contenu: "lien vers l'image ou la vidéo",
//     type: "image",
//     likes: 10,
//     commentaires: 5,
//     partages: 2
//   },
//   {
//     id: 2,
//     titre: "Troisième Publication",
//     contenu: "lien vers l'image ou la vidéo",
//     type: "video",
//     likes: 15,
//     commentaires: 7,
//     partages: 3
//   }
// ]);
</script>

<style scoped>

</style>