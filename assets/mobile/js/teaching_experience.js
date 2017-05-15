require.config({
    baseUrl: "assets",
    paths: {
        "jquery": "js/jquery",
        "teaching_experience": "mobile/js/teaching_experience",
        "title":"mobile/js/title"
    }
});
require(['jquery', 'teaching_experience', 'title'], function($, _, _){})
