<template>
  <div>
    <AffichagePublication v-for="publication in publications" :key="publication.id" :publication="publication" />
  </div>
</template>

<script setup>
import AffichagePublication from '@/components/AffichagePublication.vue';
import { ref } from 'vue';

const publications = ref([
  // List of publications, you can initialize it with sample data
]);
</script>
