require.config({
    baseUrl: "assets",
    paths: {
        "jquery": "js/jquery",
        "bootstrap": "lib/bootstrap/js/bootstrap.min",
        "header": "js/header",
        "user_nav": "js/user_nav"
    }
});
require(["jquery",'bootstrap','header','user_nav'], function ($,_,_,_) {

});