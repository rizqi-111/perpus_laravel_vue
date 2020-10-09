import Home from '../views/Home.vue'
import About from '../views/About.vue'
import Add from '../views/Create.vue'
import Show from '../views/Show.vue'
import Edit from '../views/Edit.vue'
export default{
    mode:'history',
    linkActiveClass: 'active',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/about',
            name: 'about',
            component: About
        },
        {
            path: '/add',
            name: 'addBook',
            component: Add
        },
        {
            path: '/show',
            name: 'showBook',
            component: Show
        },
        {
            path: '/edit',
            name: 'editBook',
            component: Edit
        }
    ]
}