//import './bootstrap';
import '../css/app.css';
import '../css/semi-dark.css';
import '../plugins/simplebar/js/simplebar.min';
import '../plugins/metismenu/js/metisMenu.min';
import '../js/main.js';

import '../plugins/chartjs/js/Chart.min';
import '../plugins/chartjs/js/Chart.extension';
import '../plugins/apexcharts-bundle/js/apexcharts.min';



import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue3';
import { InertiaProgress } from '@inertiajs/progress';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';

const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, app, props, plugin }) {
        return createApp({ render: () => h(app, props) })
            .use(plugin)
            .use(ZiggyVue, Ziggy)
            .mount(el);
    },
});

InertiaProgress.init({ color: '#4B5563' });