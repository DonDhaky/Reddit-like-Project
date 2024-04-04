<script setup>
import { ref } from 'vue';

const postData = ref({
  title: '',
  content: ''
});

const mediaFile = ref(null);
const mediaPreview = ref(null);
const isImage = ref(false);

const handleMediaChange = (event) => {
  const file = event.target.files[0];
  if (!file) return;

  // Vérifier si le fichier est une image ou une vidéo
  const fileType = file.type.split('/')[0];
  isImage.value = fileType === 'image';

  // Afficher une prévisualisation du média
  const reader = new FileReader();
  reader.onload = () => {
    mediaPreview.value = reader.result;
  };
  reader.readAsDataURL(file);

  mediaFile.value = file;
};

const createPost = async () => {
  try {
    const formData = new FormData();
    formData.append('title', postData.value.title);
    formData.append('content', postData.value.content);
    formData.append('media', mediaFile.value);

    const response = await fetch('/api/posts', { // API a changer une fois créer.
      method: 'POST',
      body: formData
    });

    if (!response.ok) {
      throw new Error('Erreur lors de la création de la publication.');
    }

    // Réinitialiser les champs du formulaire après la création réussie
    postData.value.title = '';
    postData.value.content = '';
    mediaFile.value = null;
    mediaPreview.value = null;

    // Rediriger l'utilisateur vers une autre page ou afficher une notification de réussite
    // Exemple : router.push('/posts');
  } catch (error) {
    console.error(error);
    // Gérer les erreurs, par exemple afficher un message d'erreur à l'utilisateur
  }
};
</script>

<template>
    <div>
      <h2>Créer une nouvelle publication</h2>
      <form @submit.prevent="createPost">
        <div>
          <label for="title">Titre :</label>
          <input type="text" id="title" v-model="postData.title" required>
        </div>
        <div>
          <label for="content">Contenu :</label>
          <textarea id="content" v-model="postData.content" rows="5" required></textarea>
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
    </div>
  </template>