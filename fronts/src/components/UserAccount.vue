<script setup>
import { ref, onMounted } from 'vue';

const user = ref(null);
const loading = ref(false);
const error = ref(null);
const editing = ref(false);

const fetchUserProfile = async () => {
  loading.value = true;
  
    const token = document.cookie.split('; ').find(row => row.startsWith('token=')).split('=')[1];
    

    const response = await fetch(`http://127.0.0.1:8000/api/current-user`, {
      method: 'GET',
      headers: {
        'Content-Type': 'application/json',
        'Authorization': `Bearer ${token}`
      }
    });

    user.value = await response.json();
};



const updateProfile = async () => {
  try {
    const token = document.cookie.split('; ').find(row => row.startsWith('token=')).split('=')[1];
    if (!token) {
      throw new Error('Token non trouvé.');
    }

    const response = await fetch(`http://127.0.0.1:8000/api/user`, {
      method: 'PUT',
      headers: {
        'Content-Type': 'application/json',
        'Authorization': `Bearer ${token}`
      },
      body: JSON.stringify(user.value)
    });

    if (!response.ok) {
      throw new Error('Le profil n\'a pas pu être mis à jour.');
    }

    editing.value = false;
  } catch (err) {
    error.value = err.message;
  }
};


const editProfile = () => {
  editing.value = true;
};

const cancelEdit = () => {
  editing.value = false;
};

const deleteAccount = async () => {
  if (confirm("Etes-vous sûr de vouloir supprimer votre compte ?")) {
    try {
      const response = await fetch(`http://127.0.0.1:8000/api/user/${user.value.id}`, {
        method: 'DELETE',
        headers: {
          'Content-Type': 'application/json',
        // Est ce qu'il faut ajouter des éléments d'authentification ??
    }
      });
      if (!response.ok) {
        throw new Error('Erreur lors de la suppression du compte.');
      }

      window.location.href = '/';
    } 
    
    catch (err) {
      error.value = err.message;
    }
  }
};

onMounted(fetchUserProfile);
</script>


<template>
    <div class="container">
      <h2>My account</h2>     
        <div v-if="error" class="error">{{ error }}</div>
        <div v-else>
          <div v-if="editing">
            <div class="form-group">
              <label for="login">Nom :</label>
              <input type="text" id="login" v-model="user.login" required>
            </div>
            <div class="form-group">
              <label for="email">e-mail :</label>
              <input type="email" id="email" v-model="user.email" required>
            </div>
            <button @click="updateProfile">Enregistrer</button>
            <button @click="cancelEdit">Annuler</button>
            <button @click="deleteAccount">Supprimer mon compte</button>
          </div>
          <div v-else>
            <div v-if = user>
              <p><strong>Login:</strong> {{ user.login }}</p>
              <p><strong>E-mail:</strong> {{ user.email }}</p>
            </div>
            <button @click="editProfile">Modifier</button>
            <button @click="deleteAccount">Supprimer mon compte</button>
          </div>
        </div>      
    </div>
  </template>


<style scoped>
.container {
  max-width: 400px;
  margin: 0 auto;
}

.form-group {
  margin-bottom: 20px;
}

label {
  display: block;
  margin-bottom: 5px;
}

input[type="text"],
input[type="email"] {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-sizing: border-box;
}

.error {
  color: red;
}
</style>