<script setup>
import { ref } from 'vue';

const formData = ref({
  name: '',
  login: '',
  email: '',
  password: '',
  age: ''
});

const ageConfirmed = ref(false);

const registerUser = async () => {
  try {
    // Envoie les données d'inscription au back
    const response = await fetch('http://localhost:8000/api/users', { // A modifier 
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify({
        ...formData.value,
        ageConfirmed: ageConfirmed.value
      })
    });

    if (!response.ok) {
      throw new Error('Erreur lors de l\'inscription.');
    }

    // Redirection vers page "mon compte"
  } catch (error) {
    console.error(error);
    // Gérer les erreurs
  }
};
</script>

<template>
    <div class="container">
     <h2>Créer un compte utilisateur</h2>
      <form @submit.prevent="registerUser" class="form">
        <label for="name">Nom :</label>
        <input type="text" id="name" v-model="formData.name" required class="input-field">
        
        <label for="login">Login :</label>
        <input type="text" id="login" v-model="formData.login" required class="input-field">
        
        <label for="email">E-mail :</label>
        <input type="email" id="email" v-model="formData.email" required class="input-field">
        
        <label for="password">Password :</label>
        <input type="password" id="password" v-model="formData.password" required class="input-field">
        
        <label for="age">Âge :</label>
        <input type="number" id="age" v-model="formData.age" required class="input-field">
        
        <input type="checkbox" id="ageConfirmation" v-model="ageConfirmed" required>
        <label for="ageConfirmation">Je certifie sur l'honneur avoir plus de 13 ans.</label>
        
        <button type="submit" class="btn">S'inscrire</button>
      </form>
    </div>
  </template>
  
  <style scoped>
  .container {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
  }

  h1 {
  text-align: center;
  color: #333;
  }
  
  .form {
    background-color: #f9f9f9;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }
  
  .input-field {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
  }
  
  .btn {
    display: block;
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }
  
  label {
    display: block;
    margin-bottom: 5px;
  }
  </style>