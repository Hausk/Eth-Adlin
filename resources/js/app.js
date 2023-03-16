import './bootstrap';

import Alpine from 'alpinejs';
import { createApp } from 'vue';
import App from './App.vue';
import NavBar from './components/NavBar.vue';
import SideBar from './components/SideBar.vue';
import PreviewImage from './components/PreviewImage.vue';

window.Alpine = Alpine;

Alpine.start();

const app = createApp(App);
const previewImage = createApp(PreviewImage);
const navBar = createApp(NavBar);

app.component('SideBar', SideBar);
app.mount('#app');

navBar.mount('NavBar', NavBar);


previewImage.mount('PreviewImage', PreviewImage);

