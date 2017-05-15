require.config({
    baseUrl: "assets",
    paths: {
        "jquery": "js/jquery",
        "job_change": "mobile/js/job_change",
        "title":"mobile/js/title"
    }
});
require(['jquery', 'job_change', 'title'], function($, _, _){})
