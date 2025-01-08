import Alpine from 'alpinejs';
import hljs from 'highlight.js/lib/core';
import javascript from 'highlight.js/lib/languages/javascript';
import php from 'highlight.js/lib/languages/php';
import quicklink from "quicklink/dist/quicklink.js";
import confetti from 'canvas-confetti';

window.addEventListener('load', () => {
    quicklink.listen();
});

document.addEventListener('DOMContentLoaded', function() {
    const target = document.getElementById('discussion');

    if ( target ) {
        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {s
                    confetti({
                        particleCount: 50,
                        spread: 70,
                        origin: { y: 0.6 }
                    });
                    // Place your action here
                    observer.unobserve(entry.target); // Stop observing if you only want the action to trigger once
                }
            });
        }, { threshold: 0.1 }); // Adjust threshold as needed

        observer.observe(target);
    }
});

hljs.registerLanguage('javascript', javascript);
hljs.registerLanguage('php', php);

window.Alpine = Alpine;
hljs.highlightAll();
Alpine.start();

