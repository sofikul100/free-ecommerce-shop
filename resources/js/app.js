import './bootstrap';
import '../css/app.css';

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';


// ===== sweet alert2=======//
import VueSweetalert2 from 'vue-sweetalert2';
import 'sweetalert2/dist/sweetalert2.min.css';



const appName = import.meta.env.VITE_APP_NAME || 'Free Ecommerce Shop';






createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        const app =  createApp({ render: () => h(App, props) })
            app.use(plugin)
            app.use(ZiggyVue, Ziggy)
            app.use(VueSweetalert2)
            window.Swal = app.config.globalProperties.$swal
            app.config.globalProperties.$route = route
            app.mount(el);
    },
    progress: false
});

