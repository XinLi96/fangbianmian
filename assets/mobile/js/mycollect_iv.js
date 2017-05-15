require.config({
    baseUrl: "assets",
    paths: {
        "jquery": "js/jquery",
        "bootstrap": "lib/bootstrap/js/bootstrap.min",
        "title":"mobile/js/title"
    }
});
require(['jquery', 'bootstrap', "title"], function($, _, _) {
});