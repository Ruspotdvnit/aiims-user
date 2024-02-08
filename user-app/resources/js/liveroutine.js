// $(document).ready(function() {
// });

function desableAtStart(){
    document.getElementById("routine_mammography_desc_").disabled = true;
    document.getElementById("routine_uroflomentry_desc_").disabled = true;

    document.getElementById("routine_fundus_desc").disabled = true;
    document.getElementById("routine_opthalmology_desc").disabled = true;
    document.getElementById("routine_cardiology_desc").disabled = true;
    document.getElementById("routine_dental_desc").disabled = true;
    document.getElementById("routine_urology_desc").disabled = true;
    document.getElementById("routine_gynacology_desc").disabled = true;
    document.getElementById("routine_anasthesia_desc").disabled = true;
    document.getElementById("routine_psychiatry_desc").disabled = true;

    //2decho
    document.getElementById("routine_grade").disabled = true;

}

function genderChangeClick(id, arr, goal){
    // alert("'"+$("#"+id+" option:selected").val().trim()+"'");
    if($("#"+id+" option:selected").val().toLowerCase().trim() == goal){
        for(let subid of arr){
            document.getElementById(subid).disabled = false;
        }
    }
    else{
        for(let subid of arr){
            const ele = document.getElementById(subid);
            ele.value = null;
            ele.disabled = true;
        }
    }
}

function changeOnClick(id, arr, goal="other"){
    document.getElementById(id).addEventListener('change', function(event){
        genderChangeClick(id, arr, goal);
    });
}

function disableGroupsAtStart(){
    changeOnClick('routine_fundus_examination', ['routine_fundus_desc']);
    changeOnClick('routine_opthalmology', ['routine_opthalmology_desc']);
    changeOnClick('routine_cardiology', ['routine_cardiology_desc']);
    changeOnClick('routine_dental', ['routine_dental_desc']);
    changeOnClick('routine_urology', ['routine_urology_desc']);
    changeOnClick('routine_gynacology', ['routine_gynacology_desc']);
    changeOnClick('routine_anasthesia', ['routine_anasthesia_desc']);
    changeOnClick('routine_psychiatry', ['routine_psychiatry_desc']);

    changeOnClick('routine_is_mammography_normal', ['routine_mammography_desc_'], "no");
    changeOnClick('routine_normal', ['routine_uroflomentry_desc_'], "no");

    changeOnClick('routine_diastolic_dysfunction', ['routine_grade'], "yes");
}



function onLoadFunction() {
    desableAtStart();

    disableGroupsAtStart();
}


// Attach the function to the window.onload event
window.onload = onLoadFunction;
