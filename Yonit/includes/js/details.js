function initialize() {
    var mapProp = {
        center: new google.maps.LatLng(48.8638118,2.2060195),
        zoom: 16,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
google.maps.event.addDomListener(window, 'load', initialize);

$(document).ready(function() {
    $(function () {
        $("#gallery").jGallery({
            "transition": "moveToLeft_moveFromRight",
            "transitionBackward": "moveToRight_moveFromLeft",
            "transitionCols": "1",
            "transitionRows": "1",
            "height": "450px",
            "width": "100%",
            "thumbHeight": 50,
            "title": true,
            "thumbnailsPosition": "bottom",
            "thumbType": "image",
            "backgroundColor": "#ebebeb",
            "browserHistory": false,
            "textColor": "000000",
            "mode": "standard"
        });
    });
});
