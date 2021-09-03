let OPTION_TRIANGLE = $("#option-triangle");
let OPTION_CIRCLE = $("#option-circle");
let OPTION_COMBINE = $("#option-combine");
let OPTIONS = $(".option");

// Clicking on Options Generates new view
OPTIONS.on("click", function(){
    location.href += $(this).data("src");
});

$("#calculate").on("click", function(){
    // Get collection of inputs
    let vals = document.getElementsByTagName("input");
    // Convert HTMLcollection to array
    vals = [].slice.call(vals);

    // Replace array of elements with their values
    vals.forEach((e, i) => {
        vals[i] = e.value;
    });

    // Join inputs into a URL string
    let url = vals.join("/");
    console.log(window.location.pathname + "/" + url)
    let dt;
    $.ajax({
        // Extend the existing path with parameters
        url: window.location.pathname + "/" + url,
        // Gets JSON from server as result
        success: function(data){
            dt = JSON.parse(data);

            // remove unwanted keys from json
            delete dt.id;

            dt = JSON.stringify(dt);
        },
        error: function($jqXHR, textStatus, errorThrown) {
            console.log($jqXHR);
            console.log(textStatus);
            console.log(errorThrown);
        },
        // Encodes JSON into URI
        complete: function(){
            $.ajax({
                url: "/result/" + encodeURI(dt),
                success: function(data){
                    $(".content").html(data);
                },
            });
        }
    });
});
