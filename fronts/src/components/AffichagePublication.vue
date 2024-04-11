<template>

  <div v-if="loading">
    Loading...
  </div>
  <div v-else>
    <div class="publication" v-for="publication in publications" :key="publication.id" @click="goToPublication(publication.id)">
      <h2>{{ publication.title }}</h2>
      <div class="containervi" v-if="publication.media_path">
        <img v-if="publication.media_path.includes('.jpg') || publication.media_path.includes('.png') || publication.media_path.includes('.webp')" :src="publication.media_path" alt="Image">
        <video v-else controls :src="publication.media_path">
        Your browser does not support the video tag.
      </video>

    </div>
        <p class="publication-date"> {{ publication.created_at }}</p>
      <div class="interaction">
        <!-- Add your interaction elements here -->
      </div>
    </div>
  </div>
</template>

  
<script setup>
import { ref, onMounted } from 'vue';
import { useRouter } from 'vue-router';


const router = useRouter();

const publications = ref([]);
const loading = ref(true);
// const props = defineProps(['publication']);


const goToPublication = (id) => {
  console.log(id);
  router.push({ name: 'AffichagePublication', params: { id } });
};

async function fetchData() {
  const response1 = await fetch('http://127.0.0.1:8000/api/posts');
  const data = await response1.json();
  publications.value = data;
  loading.value = false;
};
onMounted(() => {
  fetchData();
});

// async function fetchUrl() {
//   const response1 = await fetch('http://127.0.0.1:8000/api/posts');
//   const data = await response1.json();
//   publications.value = data;
//   loading.value = false;
//   // console.log(data);
// };
// onMounted(() => {
//   fetchData();
// });
// const toggleLike = (publication) => {
//   publication.liked = !publication.liked;
//   if (publication.liked) {
//     publication.likes++;
//   } else {
//     publication.likes--;²
//   }
// };
</script>


  
<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');


.publication {
  background-color: #ffffff;
  border: 1px solid #d7dadc;
  border-radius: 8px;
  padding: 20px;
  margin-bottom: 20px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  font-family: 'Poppins';
  width: 80%;
  float: right;
  transition: 0.2s;
}

.publication:hover{
  background-color: #f8f8f8;
  border: 2px solid #d7dadc;
}

.publication h2 {
  display: flex;
  justify-content: center;
  margin-top: 0;
  margin-bottom: 10px;
  font-size: 18px;
  font-weight: 500;
  transition: 0.2s;
}

.publication h2:hover {
  text-decoration: underline;
  font-weight: 600;
  color: #FF4500;
}

.containervi{
  display: flex;
  align-items: center;
  justify-content: center;
}

.publication img,
.publication video {
  max-width: 100%;
  height: auto;
  margin-bottom: 10px;
}

/* .interaction {
  display: flex;
  align-items: center;
  margin-top: 10px;
} */

/* .interaction span {
  margin-right: 10px;
  color: #666;
  font-size: 14px;
} */

/* .interaction img {
  width: 20px; 
  height: 20px; 
  margin-right: 5px;
  vertical-align: middle; */
  /* cursor: pointer; */
/* } */
</style>

  