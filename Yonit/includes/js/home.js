$(document).ready(function(){
    $.getJSON("includes/data/suggestions.json", function (data) {
        var counter = 1;

        $.each(data, function (key1, val1) {
            $.each(val1, function (key2, val2) {
                $.each(val2, function (key, val) {
                    //console.log(key);
                    //console.log(val);
                    if (key == "title")
                        $("#suggestionTitle" + counter).text(val);
                    else if (key == "image")
                        $("#suggestionImg" + counter).attr("src", val);
                    else if (key == "href")
                        $("#suggestionLink" + counter).attr("href", val);
                    else if (key == "stars") {
                        //console.log($('#suggestionSelect' + counter + ' option[value="' + val + '"]').prop('selected'));
                        $('#suggestionSelect' + counter + ' option[value="' + val + '"]').prop('selected', true);
                        //console.log($('#suggestionSelect' + counter + ' option[value="' + val + '"]').prop('selected'));
                    }
                });
                counter++;
            });
        });
    });
});
