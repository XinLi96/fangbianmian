require.config({
    baseUrl: "assets",
    paths: {
        "jquery": "js/jquery",
        "become_mentor": "mobile/js/become_mentor",
        "title":"mobile/js/title"
    }
});
require(['jquery', 'become_mentor', 'title'], function($, _, _){})
