import '../global/app.js'
import { defineComponent } from 'vue';
//import { createApp } from 'vue';
import { createApp } from 'vue/dist/vue.esm-bundler'; //Para resolver el problema de cargar varios componentes
import ExampleComponent from './components/ExampleComponent.vue';



const app = createApp({})
app.component('example-component', ExampleComponent);
app.mount("#app");








//Esta forma es para que abra el componente en un <div id='ExampleComponent'>
// import { createApp } from 'vue';
// const app = createApp(ExampleComponent)
//     .mount("#ExampleComponent")