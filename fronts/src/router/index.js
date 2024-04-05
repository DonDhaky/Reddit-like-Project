import { createRouter, createWebHistory } from 'vue-router'
import CreatePostPage from '@/views/CreatePostPage.vue'
import UserRegistrationPage from '@/views/UserRegistrationPage.vue'
import LoginPage from '@/views/LoginPage.vue'

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
    },

    {
      path: '/registration',
      component: UserRegistrationPage
    },

    {
      path: '/login',
      component: LoginPage
    }

  ]
})

export default router
