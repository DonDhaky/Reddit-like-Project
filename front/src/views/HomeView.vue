<script setup>
//import TheWelcome from '../components/TheWelcome.vue'
import { ref } from 'vue';

const apiUrl = 'http://localhost:8000/api';

const fetchUsers = async () => {
  const response = await fetch(`${apiUrl}/users`);
  console.log('GET response:', await response.json());
};

const fetchProfile2 = async () => {
  const response = await fetch(`${apiUrl}/profile/2`);
  console.log('GET response:', await response.json());
};

const fetchSubreppits = async () => {
  const response = await fetch(`${apiUrl}/subreppits`);
  console.log('GET response:', await response.json());
};

const fetchSubreppit3 = async () => {
  const response = await fetch(`${apiUrl}/subreppit/3`);
  console.log('GET response:', await response.json());
};

const fetchPosts = async () => {
  const response = await fetch(`${apiUrl}/posts`);
  console.log('GET response:', await response.json());
};

const fetchPost9 = async () => {
  const response = await fetch(`${apiUrl}/post/9`);
  console.log('GET response:', await response.json());
};

</script>

<template>
    <div id="container">
        <div class="div">
            <button @click="fetchUsers">fetchUsers</button>
            <button @click="fetchProfile2">fetchProfile2</button>
        </div>
        <div class="div">
            <button @click="fetchSubreppits">fetchSubreppits</button>
            <button @click="fetchSubreppit3">fetchSubreppit3</button>
        </div>
        <div class="div">
            <button @click="fetchPosts">fetchPosts</button>
            <button @click="fetchPost9">fetchPost9</button>
        </div>
    </div>
</template>

<style scoped >

#container {
    position: absolute;
    left: 100px;
    display: block;
    /*outline: 1px dashed red;*/
}

.div {
    margin-bottom: 20px;
}

</style>
