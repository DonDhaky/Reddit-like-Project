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

///////////////////// USER /////////////////////
//CREATE USER
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
  const token = getCookie('token');
  if (!token) {
    alert('Il faut être admin pour faire ça ici.');
    return;
  }
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
//----------------------------------------------------------
//UPDATE USER
let user_id_to_update;
const formUpdateUser = ref({
    name: '',
    login: '',
    email: '',
    password: '',
    password_confirmation: '',
    age: '',
    is_admin: 0
});
const getUserData = (async (user_id) => {
    user_id_to_update = user_id;
    const response = await fetch(`${apiUrl}/user/${user_id}`)
    .then(function(response){
           return response.json();
        }).then(function(json){
            console.log('GET getUserData response:', json.name);
            formUpdateUser.value = json;
            console.log('formUpdateUser.name:', formUpdateUser.value.name);
        })
         .catch(function(error){
            console.error(JSON.stringify('Error:', error));
        });
});
const formUpdateUserSubmission = (async (user_id) => {
  const token = getCookie('token');
  if (!token) {
    alert('Il faut être connecteyyy et admin pour faire ça aux autres users.');
    return;
  }
  try {
    const response = await fetch(`${apiUrl}/updateuser/${user_id}`, {
      method: 'PUT',
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify(formUpdateUser.value),
    });
    const data = await response.json();
    console.log(data);
  } catch (error) {
    console.error(JSON.stringify('Error:', error));
  }
});
//----------------------------------------------------------
//DELETE USER
const formDeleteUser = ref({
    user_id: 6
});
const formDeleteUserSubmission = (async (user_id) => {
  const token = getCookie('token');
  if (!token) {
    alert('Il faut être connecteyyy et être admin pour faire ça ici.');
    return;
  }
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
/////////////////// END USER ///////////////////


///////////////////// SUBREPPIT /////////////////////
//CREATE SUBREPPIT
const formSubreppit = ref({
  title: 'Chatons',
  content: '',
  media_path: 'https://media-eu.husse.com/media/19/41/b5/1655383250/accueillir-chaton-husse.webp'
});
const formSubreppitSubmission = (async () => {
  const token = getCookie('token');
  if (!token) {
    alert('Il faut être connecteyyy pour faire ça.');
    return;
  }
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
//----------------------------------------------------------
//UPDATE SUBREPPIT
let subreppit_id_to_update;
const formUpdateSubreppit = ref({
    title: '',
    description: '',
    media_path: ''
});
const getSubreppitData = (async (subreppit_id) => {
    subreppit_id_to_update = subreppit_id;
    const response = await fetch(`${apiUrl}/subreppit/${subreppit_id}`)
    .then(function(response){
           return response.json();
        }).then(function(json){
            formUpdateSubreppit.value = json;
        })
         .catch(function(error){
            console.error(JSON.stringify('Error:', error));
        });
});
const formUpdateSubreppitSubmission = (async (subreppit_id) => {
  const token = getCookie('token');
  if (!token) {
    alert('Il faut être connecteyyy pour faire ça.');
    return;
  }
  try {
    const response = await fetch(`${apiUrl}/updatesubreppit/${subreppit_id}`, {
      method: 'PUT',
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify(formUpdateSubreppit.value),
    });
    const data = await response.json();
    console.log(data);
  } catch (error) {
        console.error(JSON.stringify('Error:', error));
  }
});
//----------------------------------------------------------
//DELETE SUBREPPIT
const formDeleteSubreppit = ref({
  subreppit_id: 6
});
const formDeleteSubreppitSubmission = (async (subreppit_id) => {
  const token = getCookie('token');
  if (!token) {
    alert('Il faut être connecteyyy pour faire ça.');
    return;
  }
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
//////////////////// END SUBREPPIT ///////////////////

///////////////////// POST /////////////////////
//CREATE POST
const formPost = ref({
  title: 'Chaton',
  content: '',
  media_path: 'https://media-eu.husse.com/media/19/41/b5/1655383250/accueillir-chaton-husse.webp',
  user_id: 1,
  subreppit_id: 1,
  likes: 0
});
const formPostSubmission = (async () => {
  const token = getCookie('token');
  if (!token) {
    alert('Il faut être connecteyyy pour faire ça.');
    return;
  }
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
//----------------------------------------------------------
//UPDATE POST
let post_id_to_update;
const formUpdatePost = ref({
    title: '',
    content: '',
    media_path: '',
    user_id: 1,
    subreppit_id: 1,
    likes: 0
});
const getPostData = (async (post_id) => {
    post_id_to_update = post_id;
    const response = await fetch(`${apiUrl}/post/${post_id}`)
    .then(function(response){
           return response.json();
        }).then(function(json){
            formUpdatePost.value = json;
        })
         .catch(function(error){
            console.error(JSON.stringify('Error:', error));
        });
});
const formUpdatePostSubmission = (async (post_id) => {
  const token = getCookie('token');
  if (!token) {
    alert('Il faut être connecteyyy pour faire ça.');
    return;
  }
  try {
    const response = await fetch(`${apiUrl}/updatepost/${post_id}`, {
      method: 'PUT',
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify(formUpdatePost.value),
    });
    const data = await response.json();
    console.log(data);
  } catch (error) {
        console.error(JSON.stringify('Error:', error));
  }
});
//----------------------------------------------------------
//DELETE POST
const formDeletePost = ref({
  post_id: 18
});
const formDeletePostSubmission = (async (post_id) => {
  const token = getCookie('token');
  if (!token) {
    alert('Il faut être connecteyyy pour faire ça.');
    return;
  }
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
///////////////////// END POST ///////////////////////

const formComment = ref({
  title: 'Comment',
  content: 'This is pure shit',
  user_id: 1,
  post_id: 1
});
const formCommentSubmission = (async () => {
  const token = getCookie('token');
  if (!token) {
    alert('Il faut être connecteyyy pour faire ça.');
    return;
  }
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
  const token = getCookie('token');
  if (!token) {
    alert('Il faut être connecteyyy pour faire ça.');
    return;
  }
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

// VERIFICATION DE L'EXISTENCE D'UN COOKIE SELON SON NOM
function getCookie(name) {
  const value = `; ${document.cookie}`;
  const parts = value.split(`; ${name}=`);
  if (parts.length === 2) return parts.pop().split(';').shift();
}

</script>

<template>
    <div id="container">
        <div class="div">
            USER<br>
            <button @click="fetchUsers">fetch Users</button>
            <button @click="fetchProfile2">fetch Profile 2</button><br>
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
                <button type="submit">Add User</button><br><br>
            </form>
            <form @submit.prevent="getUserData(formUpdateUser.user_id)">
                <label>user_id</label><br>
                <input type="number" v-model="formUpdateUser.user_id"><br>
                <button type="submit">Choose User</button><br>
            </form>
            <form @submit.prevent="formUpdateUserSubmission(user_id_to_update)">
                <label>name</label><br>
                <input type="text" v-model="formUpdateUser.name"><br>
                <label>login</label><br>
                <input type="text" v-model="formUpdateUser.login"><br>
                <label>email</label><br>
                <input type="text" v-model="formUpdateUser.email"><br>
                <label>password</label><br>
                <input type="text" v-model="formUpdateUser.password"><br>
                <label>password_confirmation</label><br>
                <input type="text" v-model="formUpdateUser.password_confirmation"><br>
                <label>age</label><br>
                <input type="text" v-model="formUpdateUser.age"><br>
                <label>is_admin</label><br>
                <input type="text" v-model="formUpdateUser.is_admin"><br>
                <button type="submit">Update User</button><br><br>
            </form>
            <form @submit.prevent="formDeleteUserSubmission(formDeleteUser.user_id)">
                <label>user_id</label><br>
                <input type="number" v-model="formDeleteUser.user_id"><br>
                <button type="submit">Delete User</button>
            </form>
        </div>
        <div class="div">
            SUBREPPITS<br>
            <button @click="fetchSubreppits">fetch Subreppits</button>
            <button @click="fetchSubreppit3">fetch Subreppit 3</button><br>
            (résultats console)
            <p></p>
            <form @submit.prevent="formSubreppitSubmission">
                <label>title</label><br>
                <input type="text" v-model="formSubreppit.title"><br>
                <label>description</label><br>
                <input type="text" v-model="formSubreppit.description"><br>
                <label>media_path</label><br>
                <input type="text" v-model="formSubreppit.media_path"><br>
                <button type="submit">Add Subreppit</button><br><br>
            </form>
            <form @submit.prevent="getSubreppitData(formUpdateSubreppit.subreppit_id)">
                <label>subreppit_id</label><br>
                <input type="number" v-model="formUpdateSubreppit.subreppit_id"><br>
                <button type="submit">Choose Subreppit</button><br>
            </form>
            <form @submit.prevent="formUpdateSubreppitSubmission(subreppit_id_to_update)">
                <label>title</label><br>
                <input type="text" v-model="formUpdateSubreppit.title"><br>
                <label>description</label><br>
                <input type="text" v-model="formUpdateSubreppit.description"><br>
                <label>media_path</label><br>
                <input type="text" v-model="formUpdateSubreppit.media_path"><br>
                <button type="submit">Update Subreppit</button><br><br>
            </form>
            <form @submit.prevent="formDeleteSubreppitSubmission(formDeleteSubreppit.subreppit_id)">
              <input type="number" v-model="formDeleteSubreppit.subreppit_id"><br>
              <button type="submit">Delete Subreppit</button>
            </form>
        </div>
        <div class="div">
            POSTS<br>
            <button @click="fetchPosts">fetch Posts</button>
            <button @click="fetchPost9">fetch Post 9</button><br>
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
                <button type="submit">Add Post</button><br><br>
            </form>
            <form @submit.prevent="getPostData(formUpdatePost.post_id)">
                <label>post_id</label><br>
                <input type="number" v-model="formUpdatePost.post_id"><br>
                <button type="submit">Choose Post</button><br>
            </form>
            <form @submit.prevent="formUpdatePostSubmission(post_id_to_update)">
                <label>title</label><br>
                <input type="text" v-model="formUpdatePost.title"><br>
                <label>content</label><br>
                <input type="text" v-model="formUpdatePost.description"><br>
                <label>media_path</label><br>
                <input type="text" v-model="formUpdatePost.media_path"><br>
                <label>user_id</label><br>
                <input type="number" v-model="formUpdatePost.user_id"><br>
                <label>subreppit_id</label><br>
                <input type="number" v-model="formUpdatePost.subreppit_id"><br>
                <label>likes</label><br>
                <input type="number" v-model="formUpdatePost.likes"><br>
                <button type="submit">Update Post</button><br><br>
            </form>
            <form @submit.prevent="formDeletePostSubmission(formDeletePost.post_id)">
                <label>post_id</label><br>
                <input type="number" v-model="formDeletePost.post_id"><br>
                <button type="submit">Delete Post</button>
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
                <button type="submit">Add Comment</button><br><br>
            </form>
            <form @submit.prevent="formDeleteCommentSubmission(formDeleteComment.comment_id)">
                <label>comment_id</label><br>
                <input type="number" v-model="formDeleteComment.comment_id"><br>
                <button type="submit">Delete Comment</button>
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
    font-size: smaller;
    background-color: bisque;
    /*outline: 1px dashed red;*/
    z-index: 1;
}

.div {
    margin-right: 30px;
    margin-bottom: 20px;
}

</style>
