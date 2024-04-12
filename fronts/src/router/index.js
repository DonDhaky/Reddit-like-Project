
import { createRouter, createWebHistory } from 'vue-router'
import AffichagePublicationView from '@/views/AffichagePublicationView.vue'
import CreatePostPage from '@/views/CreatePostPage.vue'
import UserRegistrationPage from '@/views/UserRegistrationPage.vue'
import LoginPage from '@/views/LoginPage.vue'
import UserAccountPage from '@/views/UserAccountPage.vue'
import Navbar from '@/views/NavBar.vue'
import HomePage from '@/views/HomePage.vue'
import PublicationDetails from '@/components/PublicationDetails.vue'
import SubreppitPosts from '@/views/SubreppitPosts.vue';

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomePage,

    },
    {
      path: '/affichage/:id',
      name: "AffichagePublication",
      component: PublicationDetails
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
      name: 'login',
      component: LoginPage
    },

    {
      path: '/my-account',
      name: 'myaccount',
      component: UserAccountPage
    },

    {
      path: '/subreppits/:id/posts',
      name: 'subreppit-posts',
      component: SubreppitPosts,
      props: true // permet de transmettre les paramètres de l'URL comme props au composant SubreppitPosts
    }
  ]
});

export default router;
