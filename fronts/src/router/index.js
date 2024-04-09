
import { createRouter, createWebHistory } from 'vue-router'
import CreatePostPage from '@/views/CreatePostPage.vue'
import UserRegistrationPage from '@/views/UserRegistrationPage.vue'
import LoginPage from '@/views/LoginPage.vue'
import UserAccountPage from '@/views/UserAccountPage.vue'
import Navbar from '@/views/NavBar.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',

    },
    {
      path: '/affichage/:id',
      name: "AffichagePublication",
      component: AffichagePublicationView
    }

      component: Navbar,
    },

    {
      path: '/create-post',
      component: CreatePostPage
    },

    {
      path: '/registration',
      name: 'registration',
      component: UserRegistrationPage
    },

    {
      path: '/login',
      component: LoginPage
    },

    {
      path: '/my-account',
      component: UserAccountPage
    }


  ]
});

export default router;
