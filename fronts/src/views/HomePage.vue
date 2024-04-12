<script setup>
import {ref, onMounted, computed} from 'vue';
import NavBar from "@/views/NavBar.vue"
import SubReppit from "./SubReppit.vue";


////////////////////////////////////////
import FormsTemp from "./Forms_temp.vue";
const temp = ref(false);
////////////////////////////////////////

// import AffichagePublicationView from "./AffichagePublicationView.vue";

import AffichagePublication from "@/components/AffichagePublication.vue";

const publications = ref([]);
const searchQuery = ref('');

const fetchData = async () => {
  const response1 = await fetch('http://127.0.0.1:8000/api/posts');
  const data = await response1.json();
  publications.value = data;
  console.log('Feetched publications', publications.value);
};

const handleSearch = (query) => {
  console.log('Search triggered with query', query);
  searchQuery.value = query;
};

const filteredPublications = computed(() => {
  console.log('Filtering publications with search query:', searchQuery.value);
  return publications.value.filter((publication) =>
    publication.title.toLowerCase().includes(searchQuery.value.toLowerCase())
  );
});

console.log('Filtered publications:', filteredPublications.value);

onMounted(() => {
  fetchData();
});
</script>

<template>
    <div id="app">
      <button @click="temp = !temp">Forms</button>
      <FormsTemp v-if="temp"/>

        <NavBar @search="handleSearch"/>
        <div class="container">
            <SubReppit/>
            <div class="content">
                <AffichagePublication :publications="filteredPublications"/>
            </div>
        </div>
    </div>
</template>

<style scoped>
#app {
  display: flex;
  flex-direction: column;
}

.container {
  display: flex;
}

.content {
  flex: 1;
}
</style>