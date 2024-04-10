<script setup>
import { ref } from 'vue';

const formData = ref({
  email: '',
  password: ''
});

const loginUser = async () => {
  try {
    const response = await fetch('http://127.0.0.1:8000/api/auth/login', { 
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify(formData.value)
    });

    if (!response.ok) {
      throw new Error('Identifiant et/ou mot de passe incorrects.');
    }

    const { token } = await response.json();
    document.cookie = `token=${token};path=/`;


    window.location.href = '/';
  } 
  
  catch (error) {
    console.error(error);
  }
};

const logoutUser = async () => {
  try {
    document.cookie = 'token=;expires=Thu, 01 Jan 1970 00:00:00 UTC;path=/;';

    const response = await fetch('http://127.0.0.1:8000/api/auth/logout', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      }
    });

    if (!response.ok) {
      throw new Error('Erreur lors de la déconnexion.');
    }

    window.location.href = '/login';
  } 
  
  catch (error) 
  {
    console.error(error);
  }
};
</script>

<template>
    <div class="container">
      <h2>Connexion</h2>
      <form @submit.prevent="loginUser" class="form">
        <div class="form-div">
          <label for="email">E-mail :</label>
          <input type="email" id="email" v-model="formData.email" required class="input-field">
        </div>
        <div class="form-div">
          <label for="password">Mot de passe :</label>
          <input type="password" id="password" v-model="formData.password" required class="input-field">
        </div>
        <button type="submit" class="btn">Se connecter</button>
        <p v-if="errorMessage" class="error">{{ errorMessage }}</p>
      </form>
    </div>
  </template>

<style scoped>
.container {
  max-width: 400px;
  margin: 0 auto;
}

.form-div {
  margin-bottom: 20px;
}

label {
  display: block;
  margin-bottom: 5px;
}

.input-field {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-sizing: border-box;
}

.btn {
  display: inline-block;
  padding: 10px 20px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

.error {
  color: red;
}
</style>