import Alpine from 'alpinejs';
import hljs from 'highlight.js/lib/core';
import javascript from 'highlight.js/lib/languages/javascript';
import php from 'highlight.js/lib/languages/php';
hljs.registerLanguage('javascript', javascript);
hljs.registerLanguage('php', php);

window.Alpine = Alpine;
hljs.highlightAll();
Alpine.start();

