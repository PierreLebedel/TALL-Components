import axios from 'axios';
window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

import hljs from 'highlight.js';
import hljsJs from 'highlight.js/lib/languages/javascript';
import hljsPhp from 'highlight.js/lib/languages/php';
import hljsBlade from 'highlightjs-blade';

hljs.registerLanguage("php", hljsPhp);
hljs.registerLanguage("blade", hljsBlade);
hljs.registerLanguage("javascript", hljsJs);
hljs.highlightAll();

import 'highlight.js/styles/github-dark-dimmed.css';

document.addEventListener('livewire:navigated', () => {
    document.querySelectorAll('pre > code').forEach((element) => {
        if(element.dataset.highlighted=='yes'){
            return;
        }
        hljs.highlightElement(element);
    });
})