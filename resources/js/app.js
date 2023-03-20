import './bootstrap';

import Alpine from 'alpinejs';
import { createApp } from 'vue';
import App from './App.vue';
import NavBar from './components/NavBar.vue';
import SideBar from './components/SideBar.vue';
import PreviewImage from './components/PreviewImage.vue';
import Test from './components/Test.vue';

window.Alpine = Alpine;

Alpine.start();

const app = createApp();
const previewImage = createApp(PreviewImage);

app
    .component('NavBar', NavBar)
    .component('SideBar', SideBar)
    .component('Test', Test);
app.mount('#app');




previewImage.mount('PreviewImage', PreviewImage);

