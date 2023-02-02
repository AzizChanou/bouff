import './bootstrap';
import '../css/app.css';

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue3';
import { InertiaProgress } from '@inertiajs/progress';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';
import { createPinia } from 'pinia';
import VueLazyload from 'vue-lazyload';
import lozad from 'lozad';


const observer = lozad(); // lazy loads elements with default selector as '.lozad'
observer.observe();

const pinia = createPinia();
const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Bouff';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, app, props, plugin }) {
        return createApp({ render: () => h(app, props) })
            .use(plugin)
            .use(pinia)
            .use(observer)
            .use(VueLazyload, {
                preLoad: 1.3,
                //error: errorimage,
                //loading: loadimage,
                attempt: 2,
                observer: true,
                lazyComponent: true
            })
            .use(ZiggyVue)
            .mount(el);
    },
});

InertiaProgress.init({ color: '#1b213d' });
