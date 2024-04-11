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
            USER<br>
            <button @click="fetchUsers">fetchUsers</button>
            <button @click="fetchProfile2">fetchProfile2</button><br>
            (résultats console)
            <p></p>
            <form @submit.prevent="formUserSubmission">
                <label>name</label><br>
                <input type="text" v-model="formUser.name"><br>
                <label>login</label><br>
                <input type="text" v-model="formUser.login"><br>
                <label>email</label><br>
                <input type="text" v-model="formUser.email"><br>
                <label>password</label><br>
                <input type="text" v-model="formUser.password"><br>
                <label>password_confirmation</label><br>
                <input type="text" v-model="formUser.password_confirmation"><br>
                <label>age</label><br>
                <input type="text" v-model="formUser.age"><br>
                <label>is_admin</label><br>
                <input type="text" v-model="formUser.is_admin"><br>
                <button type="submit">AddUser</button><br><br>
            </form>
            <form @submit.prevent="formDeleteUserSubmission(formDeleteUser.user_id)">
                <label>user_id</label><br>
                <input type="number" v-model="formDeleteUser.user_id"><br>
                <button type="submit">DeleteUser</button>
            </form>
        </div>
        <div class="div">
            SUBREPPITS<br>
            <button @click="fetchSubreppits">fetchSubreppits</button>
            <button @click="fetchSubreppit3">fetchSubreppit3</button><br>
            (résultats console)
            <p></p>
            <form @submit.prevent="formSubreppitSubmission">
                <label>title</label><br>
                <input type="text" v-model="formSubreppit.title"><br>
                <label>description</label><br>
                <input type="text" v-model="formSubreppit.description"><br>
                <label>media_path</label><br>
                <input type="text" v-model="formSubreppit.media_path"><br>
                <button type="submit">AddSubreppit</button><br><br>
            </form>
            <form @submit.prevent="formDeleteSubreppitSubmission(formDeleteSubreppit.subreppit_id)">
              <input type="number" v-model="formDeleteSubreppit.subreppit_id"><br>
              <button type="submit">DeleteSubreppit</button>
            </form>
        </div>
        <div class="div">
            POSTS<br>
            <button @click="fetchPosts">fetchPosts</button>
            <button @click="fetchPost9">fetchPost9</button><br>
            (résultats console)
            <p></p>
            <form @submit.prevent="formPostSubmission">
                <label>title</label><br>
                <input type="text" v-model="formPost.title"><br>
                <label>content</label><br>
                <input type="text" v-model="formPost.content"><br>
                <label>media_path</label><br>
                <input type="text" v-model="formPost.media_path"><br>
                <label>user_id</label><br>
                <input type="number" v-model="formPost.user_id"><br>
                <label>subreppit_id</label><br>
                <input type="number" v-model="formPost.subreppit_id"><br>
                <label>likes</label><br>
                <input type="number" v-model="formPost.likes"><br>
                <button type="submit">AddPost</button><br><br>
            </form>
            <form @submit.prevent="formDeletePostSubmission(formDeletePost.post_id)">
                <label>post_id</label><br>
                <input type="number" v-model="formDeletePost.post_id"><br>
                <button type="submit">DeletePost</button>
            </form>
        </div>
        <div class="div">
            COMMENTS<br>
            <form @submit.prevent="formCommentSubmission">
                <label>title</label><br>
                <input type="text" v-model="formComment.title"><br>
                <label>content</label><br>
                <input type="text" v-model="formComment.content"><br>
                <label>user_id</label><br>
                <input type="number" v-model="formComment.user_id"><br>
                <label>post_id</label><br>
                <input type="number" v-model="formComment.post_id"><br>
                <button type="submit">AddComment</button><br><br>
            </form>
            <form @submit.prevent="formDeleteCommentSubmission(formDeleteComment.comment_id)">
                <label>comment_id</label><br>
                <input type="number" v-model="formDeleteComment.comment_id"><br>
                <button type="submit">DeleteComment</button>
            </form>
        </div>
    </div>
</template>

<style scoped >

#container {
    position: absolute;
    left: 100px;
    display: flex;
    padding: 10px;
    background-color: bisque;
    /*outline: 1px dashed red;*/
}

.div {
    margin-bottom: 20px;
}

</style>
