let OPTION_TRIANGLE = $("#option-triangle");
let OPTION_CIRCLE = $("#option-circle");
let OPTION_COMBINE = $("#option-combine");
let OPTIONS = $(".option");

// Hover effects
OPTIONS.on("click", function(){
    // this.querySelector("svg").style.width = 200;
    location.href = $(this).data("src");
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
            dt = data;
        },
        error: function(data) {
            console.log(data);
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
