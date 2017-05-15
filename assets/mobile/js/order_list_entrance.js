require.config({
    baseUrl: "assets",
    paths: {
        "jquery": "js/jquery",
        "inter_appo_nav": "mobile/js/inter_appo_nav",
        "title":"mobile/js/title"
    }
});
require(['jquery', 'inter_appo_nav', 'title'], function($, _, _){})
