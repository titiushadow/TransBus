import './sass/app.scss';
import 'bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';
import 'datatables.net-bs5/css/dataTables.bootstrap5.min.css';
import 'datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css';
import 'datatables.net-select-bs5/css/select.bootstrap5.min.css';
import 'boxicons';
import '../css/app.css';

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';
import axios from 'axios';
import { Head } from '@inertiajs/vue3'; // Importe o componente Head aqui

const appName = window.document.getElementsByTagName('title')[0]?.innerText;

createInertiaApp({
  title: (title) => `${title} - ${appName}`,
  resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
  setup({ el, App, props, plugin }) {
    const app = createApp({ render: () => h(App, props) });
    app.use(plugin);
    app.use(ZiggyVue, Ziggy);
    app.use(Head); // Adicione o plugin Head aqui
    app.config.globalProperties.$axios = axios;
    app.mount(el);
  },
  progress: {
    color: '#4B5563',
  },
});
