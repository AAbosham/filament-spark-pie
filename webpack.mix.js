const mix = require("laravel-mix");

mix.disableNotifications();

mix.disableSuccessNotifications()

mix.options({
    terser: {
        extractComments: false,
    },
})

mix.setPublicPath("resources/dist")
mix.version()

mix.js("./resources/js/spark-pie.js", "resources/dist/js")

mix.options({
    processCssUrls: false,
});
