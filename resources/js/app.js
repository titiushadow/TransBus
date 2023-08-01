import './sass/app.scss';

import 'bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';
import 'boxicons';
import '../css/app.css';

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';

import axios from 'axios'; // Importe o axios aqui

const appName = window.document.getElementsByTagName('title')[0]?.innerText;

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        const app = createApp({ render: () => h(App, props) });
        app.use(plugin);
        app.use(ZiggyVue, Ziggy);
        app.config.globalProperties.$axios = axios; // Configurar o axios como propriedade global do Vue
        app.mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});
