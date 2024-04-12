
<template>
  <div class="publication-details" v-if="posts">
    <div class="publication-content">
      <h2>{{ posts.title }}</h2>
      <div class="containervi" v-if="posts.media_path">
        <img v-if="posts.media_path.includes('.jpg') || posts.media_path.includes('.png') || posts.media_path.includes('.webp')" :src="posts.media_path" alt="Image">
        <video v-else controls :src="posts.media_path">
        Your browser does not support the video tag.
      </video>
      </div>
      <div class="publication-media" v-else-if="posts.type === 'video'">
        <video :src="posts.contenu" controls></video>
      </div>
      <p class="publication-description"> {{ posts.description }}</p>
      <p class="publication-date"> {{ posts.created_at }}</p>
    </div>
  </div>
  <div v-else>
    <p>Loading...</p>
  </div>
  </template>
  
  <script setup>
  import { ref, onMounted } from 'vue';
  import { useRoute } from 'vue-router';
// import { post } from 'wpapi/lib/http-transport';
  
  const route = useRoute();
  const subreppitId = Number(route.params.id);
  // const subreppitTitle = ref('');
  const posts = ref([]);
  // const loading = ref(true);
  
  async function fetchSubreppitPosts(subreppitId) {
    const response = await fetch(`http://127.0.0.1:8000/api/subreppit/${subreppitId}`);
    const data = await response.json();
    posts.value = data;
    console.log('Test', posts.value)
  }
  
  onMounted(() => {
    // console.log('Test', subreppitId);
    fetchSubreppitPosts(subreppitId);
  });
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
  margin: auto;
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

.interaction-icon {
  width: 24px;
  height: 24px; 
  margin-right: 5px;
  cursor: pointer;
}
</style>
