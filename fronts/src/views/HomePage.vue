<script setup>
import NavBar from "@/views/NavBar.vue"
import SubReppit from "./SubReppit.vue";

////////////////////////////////////////
import { ref } from 'vue';
import FormsTemp from "./Forms_temp.vue";
const temp = ref(false);
////////////////////////////////////////

// import AffichagePublicationView from "./AffichagePublicationView.vue";
import AffichagePublication from "@/components/AffichagePublication.vue";
</script>

<template>
    <button @click="temp = !temp">Forms</button>
    <FormsTemp v-if="temp"/>
    <NavBar/>
    <!-- <AffichagePublicationView/> -->
    <AffichagePublication/>
    <SubReppit/>
</template>

<style scoped>
</style>