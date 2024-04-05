import { createRouter, createWebHistory } from 'vue-router'
import CreatePostPage from '@/views/CreatePostPage.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
    },

    {
      path: '/create-post',
      component: CreatePostPage
    }

  ]
})

export default router
