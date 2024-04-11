<script setup>
//import TheWelcome from '../components/TheWelcome.vue'
//import { ref } from 'vue';

const apiUrl = 'http://localhost:8000/api';

const fetchUsers = async () => {
  const response = await fetch(`${apiUrl}/users`);
  console.log('GET response:', await response.json());
};

const fetchProfile2 = async () => {
  const response = await fetch(`${apiUrl}/user/2`);
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

import { ref } from 'vue';

const formUser = ref({
  name: 'User',
  login: 'User',
  email: 'user@user.com',
  password: 'password',
  password_confirmation: 'password',
  age: '13',
  is_admin: 0
});
const formUserSubmission = (async () => {
  try {
    const response = await fetch(`${apiUrl}/adduser`, {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify(formUser.value),
    });
    const data = await response.json();
    console.log(data);
  } catch (error) {
    console.error(JSON.stringify('Error:', error));
  }
});

const formDeleteUser = ref({
  user_id: 6
});
const formDeleteUserSubmission = (async (user_id) => {
  try {
    const response = await fetch(`${apiUrl}/deleteuser/${user_id}`, {
      method: 'DELETE',
      headers: {
        'Content-Type': 'application/json',
      },
    });
    const data = await response.json();
    console.log(data);
  } catch (error) {
    console.error(JSON.stringify('Error:', error));
  }
});


const formSubreppit = ref({
  title: 'Chatons',
  content: '',
  media_path: 'https://media-eu.husse.com/media/19/41/b5/1655383250/accueillir-chaton-husse.webp'
});
const formSubreppitSubmission = (async () => {
  try {
    const response = await fetch(`${apiUrl}/addsubreppit`, {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify(formSubreppit.value),
    });
    const data = await response.json();
    console.log(data);
  } catch (error) {
    console.error(JSON.stringify('Error:', error));
  }
});

const formDeleteSubreppit = ref({
  subreppit_id: 6
});
const formDeleteSubreppitSubmission = (async (subreppit_id) => {
  try {
    const response = await fetch(`${apiUrl}/deletesubreppit/${subreppit_id}`, {
      method: 'DELETE',
      headers: {
        'Content-Type': 'application/json',
      },
    });
    const data = await response.json();
    console.log(data);
  } catch (error) {
    console.error(JSON.stringify('Error:', error));
  }
});


const formPost = ref({
  title: 'Chaton',
  content: '',
  media_path: 'https://media-eu.husse.com/media/19/41/b5/1655383250/accueillir-chaton-husse.webp',
  user_id: 1,
  subreppit_id: 1,
  likes: 0
});
const formPostSubmission = (async () => {
  try {
    const response = await fetch(`${apiUrl}/addpost`, {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify(formPost.value),
    });
    const data = await response.json();
    console.log(data);
  } catch (error) {
    console.error(JSON.stringify('Error:', error));
  }
});

const formDeletePost = ref({
  post_id: 18
});
const formDeletePostSubmission = (async (post_id) => {
  try {
    const response = await fetch(`${apiUrl}/deletepost/${post_id}`, {
      method: 'DELETE',
      headers: {
        'Content-Type': 'application/json',
      },
    });
    const data = await response.json();
    console.log(data);
  } catch (error) {
    console.error(JSON.stringify('Error:', error));
  }
});


const formComment = ref({
  title: 'Comment',
  content: 'This is pure shit',
  user_id: 1,
  post_id: 1
});
const formCommentSubmission = (async () => {
  try {
    const response = await fetch(`${apiUrl}/addcomment`, {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify(formComment.value),
    });
    const data = await response.json();
    console.log(data);
  } catch (error) {
    console.error(JSON.stringify('Error:', error));
  }
});

const formDeleteComment = ref({
  comment_id: 1
});
const formDeleteCommentSubmission = (async (comment_id) => {
  try {
    const response = await fetch(`${apiUrl}/deletecomment/${comment_id}`, {
      method: 'DELETE',
      headers: {
        'Content-Type': 'application/json',
      },
    });
    const data = await response.json();
    console.log(data);
  } catch (error) {
    console.error(JSON.stringify('Error:', error));
  }
});

</script>

<template>
    <div id="container">
        <div class="div">
            <button @click="fetchUsers">fetchUsers</button>
            <button @click="fetchProfile2">fetchProfile2</button>
        </div>
        <div class="div">
            <form @submit.prevent="formUserSubmission">
              <input type="text" v-model="formUser.name">
              <input type="text" v-model="formUser.login">
              <input type="text" v-model="formUser.email">
              <input type="text" v-model="formUser.password">
              <input type="text" v-model="formUser.password_confirmation">
              <input type="text" v-model="formUser.age">
              <input type="text" v-model="formUser.is_admin">
              <button type="submit">AddUser</button>
            </form>
            <form @submit.prevent="formDeleteUserSubmission(formDeleteUser.user_id)">
              <input type="number" v-model="formDeleteUser.user_id">
              <button type="submit">DeleteUser</button>
            </form>
        </div>
        <div class="div">
            <button @click="fetchSubreppits">fetchSubreppits</button>
            <button @click="fetchSubreppit3">fetchSubreppit3</button>
        </div>
        <div class="div">
            <form @submit.prevent="formSubreppitSubmission">
              <input type="text" v-model="formSubreppit.title">
              <input type="text" v-model="formSubreppit.description">
              <input type="text" v-model="formSubreppit.media_path">
              <button type="submit">AddSubreppit</button>
            </form>
            <form @submit.prevent="formDeleteSubreppitSubmission(formDeleteSubreppit.subreppit_id)">
              <input type="number" v-model="formDeleteSubreppit.subreppit_id">
              <button type="submit">DeleteSubreppit</button>
            </form>
        </div>
        <div class="div">
            <button @click="fetchPosts">fetchPosts</button>
            <button @click="fetchPost9">fetchPost9</button>
        </div>
        <div class="div">
            <form @submit.prevent="formPostSubmission">
              <input type="text" v-model="formPost.title">
              <input type="text" v-model="formPost.content">
              <input type="text" v-model="formPost.media_path">
              <input type="number" v-model="formPost.user_id">
              <input type="number" v-model="formPost.subreppit_id">
              <input type="number" v-model="formPost.likes">
              <button type="submit">AddPost</button>
            </form>
            <form @submit.prevent="formDeletePostSubmission(formDeletePost.post_id)">
              <input type="number" v-model="formDeletePost.post_id">
              <button type="submit">DeletePost</button>
            </form>
        </div>
        <div class="div">
            <form @submit.prevent="formCommentSubmission">
              <input type="text" v-model="formComment.title">
              <input type="text" v-model="formComment.content">
              <input type="number" v-model="formComment.user_id">
              <input type="number" v-model="formComment.post_id">
              <button type="submit">AddComment</button>
            </form>
            <form @submit.prevent="formDeleteCommentSubmission(formDeleteComment.comment_id)">
              <input type="number" v-model="formDeleteComment.comment_id">
              <button type="submit">DeleteComment</button>
            </form>
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
