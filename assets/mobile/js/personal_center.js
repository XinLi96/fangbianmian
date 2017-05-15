require.config({
    baseUrl: "assets",
    paths: {
        "jquery": "js/jquery",
        "personal_center": "mobile/js/personal_center",
        "title":"mobile/js/title"
    }
});
require(['jquery', 'personal_center', 'title'], function($, _, _){})
