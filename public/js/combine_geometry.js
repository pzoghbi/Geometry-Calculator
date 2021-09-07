$(document).ready(function(){


    const $checkboxes = $("input[type='checkbox']");
    let object1 = {};
    let object2 = {};

    $checkboxes.on("click", function(e){
        let checked = getCheckedInputs();
        if (checked.length > 2) {
            this.checked = false;
        }

        checked = getCheckedInputs();
        $("#btn-combine").prop("disabled", (checked.length !== 2));
    });

    function getCheckedInputs(){
        return $("input[type='checkbox']:checked");
    }
});
