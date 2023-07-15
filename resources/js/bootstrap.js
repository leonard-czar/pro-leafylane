window.Popper = require("popper.js").default;
window.$ = window.jQuery = require("jquery");

require("bootstrap");
require("baguetteBox.min");
require("bootsnav");
require("bootstrap-select");
require("bootstrap.min");
require("contact-form-script");
require("custom");
require("form-validator");
require("images-loded.min");
require("inewsticker");
require("isotope");
require("jquery-3.2.1.min");
require("jquery-nicescroll.min");
require("jquery-superslides.min");
require("owl.carousel.min");
require("popper.min");
require("script");
require("mycustom");
require("main");
require("jquery.min");
import "bootstrap";

// corana template
require("assets/vendors/js/vendor.bundle.base");
require("assets/vendors/chart.js/Chart.min");
require("assets/vendors/progressbar.js/progressbar.min");
require("assets/vendors/jvectormap/jquery-jvectormap.min");

require("assets/vendors/jvectormap/jquery-jvectormap-world-mill-en");
require("assets/vendors/owl-carousel-2/owl.carousel.min");
require("assets/js/off-canvas");
require("assets/js/hoverable-collapse");
require("assets/js/misc");
require("assets/js/settings");
require("assets/js/todolist");
require("assets/js/dashboard");

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

import axios from "axios";
window.axios = axios;

window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

// import Pusher from 'pusher-js';
// window.Pusher = Pusher;

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: import.meta.env.VITE_PUSHER_APP_KEY,
//     wsHost: import.meta.env.VITE_PUSHER_HOST ?? `ws-${import.meta.env.VITE_PUSHER_APP_CLUSTER}.pusher.com`,
//     wsPort: import.meta.env.VITE_PUSHER_PORT ?? 80,
//     wssPort: import.meta.env.VITE_PUSHER_PORT ?? 443,
//     forceTLS: (import.meta.env.VITE_PUSHER_SCHEME ?? 'https') === 'https',
//     enabledTransports: ['ws', 'wss'],
// });
