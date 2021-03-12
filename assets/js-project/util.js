var base_url = 'http://localhost/Work/FynTune/';

function getParameterByPageName(PageName) {

    var url = window.location.href;
    var idx = url.indexOf(PageName);
    var category = url.substring(idx).split("/")[1];
    return category;
}
