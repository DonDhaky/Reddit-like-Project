<script setup>
import { ref } from 'vue';

const title = ref('');
const content = ref('');
const mediaFile = ref(null);
const mediaPreview = ref(null);
const isImage = ref(false);
const isLoggedIn = ref(false);


const handleMediaChange = (event) => {
  const file = event.target.files[0];
  if (!file) return;

  mediaFile.value = file;
};


const createPost = async () => {
  try {

    if (!isLoggedIn.value) {
      window.location.href = '/login';
      return;
    }

    const formData = new FormData();
    formData.append('title', title.value);
    formData.append('content', content.value);
    formData.append('media', mediaFile.value);

    const response = await fetch('http://127.0.0.1:8000/api/posts', { // API a changer / confirmer ?
      method: 'POST',
      body: formData
    });

    if (!response.ok) {
      throw new Error('Erreur lors de la création de la publication.');
    }

    title.value = '';
    content.value = '';
    mediaFile.value = null;
    mediaPreview.value = null;

    window.location.href = '/';
  } 
  
  catch (error) 
  {
    console.error(error);
  }
};

</script>

<template>
  <div class ="container">
    <h2>Créer une nouvelle publication</h2>
    <form @submit.prevent="createPost">
      <div>
        <label for="title">Titre :</label>
        <input type="text" id="title" v-model="title" required>
      </div>
      <div>
        <label for="content">Contenu :</label>
        <textarea id="content" v-model="content" rows="5" required></textarea>
      </div>
      <div>
        <label for="media">Média :</label>
        <input type="file" id="media" @change="handleMediaChange" accept="image/*, video/*">
        <div v-if="mediaPreview">
          <img :src="mediaPreview" v-if="isImage" alt="Aperçu de l'image">
          <video :src="mediaPreview" v-else controls autoplay loop muted height="200"></video>
        </div>
      </div>
      <button type="submit">Publier</button>
    </form>
    <div v-if="!isLoggedIn">
      <p>Connectez-vous pour pouvoir créer un post.</p>
      <router-link to="/login">Se connecter</router-link>
    </div>    
  </div>
</template>

<style scoped>
.container {
  max-width: 600px;
  margin: 0 auto;
  padding: 20px;
}

h2 {
  text-align: center;
  color: #333;
}

form {
  margin-top: 20px;
}

label {
  display: block;
  margin-bottom: 5px;
}

input[type="text"],
textarea {
  width: 100%;
  padding: 10px;
  margin-bottom: 15px;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-sizing: border-box;
}

input[type="file"] {
  margin-top: 5px;
}

button[type="submit"] {
  display: block;
  width: 100%;
  padding: 10px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

.media-preview {
  margin-top: 10px;
  text-align: center;
}

.media-preview img,
.media-preview video {
  max-width: 100%;
  max-height: 200px;
  margin-top: 10px;
}
</style>
