import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import AproposView from '../views/AproposView.vue'
import SinscrireView from '../views/SinscrireView.vue'



const routes = [
  {
    path: '/',
    name: 'home',
    component: HomeView
  },
  {
    path: '/Apropos',
    name: 'Apropos',
    component: AproposView
  },
  {
    path: '/Sinscrire',
    name: 'Sinscrire',
    component: SinscrireView
  },
  
  
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
