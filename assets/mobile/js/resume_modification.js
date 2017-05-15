require.config({
    baseUrl: "assets",
    paths: {
        "jquery": "js/jquery",
        "resume_modification": "mobile/js/resume_modification",
        "title":"mobile/js/title"
    }
});
require(['jquery', 'resume_modification', 'title'], function($, _, _){})
