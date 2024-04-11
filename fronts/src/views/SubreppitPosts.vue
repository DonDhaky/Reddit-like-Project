<template>
    <div>
      <h1>Posts associés au subreppit "{{ subreppitTitle }}" :</h1>
      <div v-if="loading">
        Loading...
      </div>
      <div v-else>
        <!-- Afficher les posts ici -->
      </div>
    </div>
  </template>
  
  <script setup>
  import { ref, onMounted } from 'vue';
  import { useRoute } from 'vue-router';
  
  const route = useRoute();
  const subreppitId = Number(route.params.id);
  const subreppitTitle = ref('');
  const posts = ref([]);
  const loading = ref(true);
  
  async function fetchSubreppitPosts(subreppitId) {

    const response = await fetch(`http://127.0.0.1:8000/api/subreppits/posts/${subreppitId}`);

    const data = await response.json();
    
    posts.value = data;

  }
  
  onMounted(() => {
    fetchSubreppitPosts(subreppitId);
  });
  </script>
  