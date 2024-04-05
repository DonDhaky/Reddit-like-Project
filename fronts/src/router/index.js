import { createRouter, createWebHistory } from 'vue-router'
import CreatePostPage from '@/views/CreatePostPage.vue'
import UserRegistrationPage from '@/views/UserRegistrationPage.vue'
import SubReppit from '@/views/SubReppit.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: SubReppit
    },

    {
      path: '/create-post',
      component: CreatePostPage
    },

    {
      path: '/registration',
      component: UserRegistrationPage
    }

  ]
})

export default router
