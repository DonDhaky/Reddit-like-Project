import { createRouter, createWebHistory } from 'vue-router'
import AffichagePublicationView from '@/views/AffichagePublicationView.vue';


const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
    },

     {
    path: '/affichage',
    name: 'AffichagePublication',
    component: AffichagePublicationView
  }
    
  ]
})

export default router
