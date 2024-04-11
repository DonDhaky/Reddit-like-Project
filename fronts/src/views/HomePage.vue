<script setup>
import NavBar from "@/views/NavBar.vue"
import SubReppit from "./SubReppit.vue";
// import AffichagePublicationView from "./AffichagePublicationView.vue";
import AffichagePublication from "@/components/AffichagePublication.vue";
</script>

<template>
    <div id="app">
        <NavBar/>
        <div class="container">
            <SubReppit/>
            <div class="content">
                <AffichagePublication/>
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
  flex: 1; /* This will make the content div take up the remaining space */
}
</style>