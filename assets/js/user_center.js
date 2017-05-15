require.config({
    baseUrl: "assets",
    paths: {
        "jquery": "js/jquery",
        "header": "js/header",
        "user_nav":"js/user_nav"

    }
});
require(['jquery', 'header', 'user_nav'], function($, _, _) {



});