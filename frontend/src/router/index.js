import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import ClientView from '../views/ClientView.vue'
import ClientEventView from '../views/ClientEventView.vue'
import GroupUserView from '../views/GroupUserView.vue'
import UserView from '../views/UserView.vue'
import RsvpView from '../views/RsvpView.vue'
import DataParticipantView from '../views/DataParticipantView.vue'
import ApproveParticipantView from '../views/ApproveParticipantView.vue'
import ImportParticipantView from '../views/ImportParticipantView.vue'
import BannerUploadView from '../views/BannerUploadView.vue'
import PageConfigView from '../views/PageConfigView.vue'
import FeedbackListView from '../views/FeedbackListView.vue'
import EventView from '../views/EventView.vue'
import UserEventView from '../views/UserEventView.vue'
import LoginView from '../views/auth/LoginView.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomeView
    },
    {
      path: '/client',
      name: 'client',
      component: ClientView
    },
    {
      path: '/client_event',
      name: 'client_event',
      component: ClientEventView
    },
    {
      path: '/group_user',
      name: 'group_user',
      component: GroupUserView
    },
    {
      path: '/view_user',
      name: 'view_user',
      component: UserView
    },
    {
      path: '/rsvp',
      name: 'rsvp',
      component: RsvpView
    },
    {
      path: '/data_participant',
      name: 'data_participant',
      component: DataParticipantView
    },
    {
      path: '/approve_participant',
      name: 'approve_participant',
      component: ApproveParticipantView
    },
    {
      path: '/import_participant',
      name: 'import_participant',
      component: ImportParticipantView
    },
    {
      path: '/banner_upload',
      name: 'banner_upload',
      component: BannerUploadView
    },
    {
      path: '/page_config',
      name: 'page_config',
      component: PageConfigView
    },
    {
      path: '/feedback_list',
      name: 'feedback_list',
      component: FeedbackListView
    },
    {
      path: '/event',
      name: 'event',
      component: EventView
    },
    {
      path: '/user_event',
      name: 'user_event',
      component: UserEventView
    },
    {
      path: '/login',
      name: 'login',
      component: LoginView
    }
  ]
})

export default router
