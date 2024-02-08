// $(document).ready(function() {
// });

function desableAtStart(){
    document.getElementById("donor_if_others__specify_gender").disabled = true;
    document.getElementById("donor_if_other__specify_relationship").disabled = true;
    document.getElementById("donor_if_other__specify_marital_sts").disabled = true;
    document.getElementById("donor_if_other__specify_edu_sts").disabled = true;
    document.getElementById("donor_if_other__specify_swap_resn").disabled = true;
    document.getElementById("donor_specify_insul").disabled = true;
    document.getElementById("donor_specify_cad").disabled = true;
    document.getElementById("donor_specify_cva").disabled = true;
    document.getElementById("donor_bmi").readOnly = true;

    //smoking
    document.getElementById("donor_duration__years__smok").disabled = true;
    document.getElementById("donor_no_of_cigarrete_or_beedies__per_day_").disabled = true;
    document.getElementById("donor_if_left_smoking_then_duration_of_abstenance__years_").disabled = true;

    //tobacco
    document.getElementById("donor_duration__years__tob").disabled = true;
    document.getElementById("donor_if_left_tobacco_then_duration_of_abstenance__years_").disabled = true;

    //alcohol
    document.getElementById("donor_duration__years__alcho").disabled = true;
    document.getElementById("donor_quantity_per_day__in_ml_").disabled = true;

    //drugs
    document.getElementById("donor_drug_name").disabled = true;
    document.getElementById("donor_duration__years__dru").disabled = true;
    document.getElementById("donor_drug_frequency__per_day_").disabled = true;

    //hypertension
    document.getElementById("donor_hypertention_duration").disabled = true;
    document.getElementById("donor_number_of_antihypertensive_tablets").disabled = true;
    document.getElementById("donor_antihypertensive_tablet_specification").disabled = true;

    //diabeties
    document.getElementById("donor_type").disabled = true;
    document.getElementById("donor_number_of_drugs_dbt").disabled = true;
    document.getElementById("donor_insuline").disabled = true;

    //cva
    document.getElementById("donor_number_of_stroke___episode").disabled = true;

    //hypothy
    document.getElementById("donor_hypothyroidism_duration").disabled = true;
    document.getElementById("donor_dose_of_thyroxin").disabled = true;
    document.getElementById("donor_hypothyroidism_last_tsh_level").disabled = true;

    //hyperthy
    document.getElementById("donor_hyperthyroidism_duration").disabled = true;
    document.getElementById("donor_number_of_drugs_hyperthy").disabled = true;

    //h/o malig
    document.getElementById("donor_specify_diagnosis").disabled = true;
    document.getElementById("donor_specify_treatment_taken").disabled = true;
    document.getElementById("donor_last_remission_duration_in_years__cancer_free_interval_").disabled = true;

    //h/o renal calculus
    document.getElementById("donor_side_affected").disabled = true;
    document.getElementById("donor_number_of_episode").disabled = true;
    document.getElementById("donor_type_of_calculi").disabled = true;
    document.getElementById("donor_size_of_calculus").disabled = true;
    document.getElementById("donor_treatment_taken").disabled = true;
    document.getElementById("donor_specify_treatment").disabled = true;
    document.getElementById("donor_disease_free_interval_calculi").disabled = true;

    //h/o tuberculosis
    document.getElementById("donor_type_of_tuberculosis").disabled = true;
    document.getElementById("donor_extrapulmonary_type").disabled = true;
    document.getElementById("donor_if_other__specify").disabled = true;
    document.getElementById("donor_att_complete__").disabled = true;
    document.getElementById("donor_duration_of_att").disabled = true;
    document.getElementById("donor_duration_from_treatment__disease_free_interval_").disabled = true;
    
    //asthma
    document.getElementById("donor_duration").disabled = true;
    document.getElementById("donor_treatment_specify").disabled = true;

    //surgery
    document.getElementById("donor_surgery_history_specify").disabled = true;
    document.getElementById("donor_if_taking_any_medication__upload_prescription").disabled = true;

    //covid
    document.getElementById("donor_disease_free_interval_covid").disabled = true;
    document.getElementById("donor_specify_type_of_involvement").disabled = true;

    //covid vaccine
    document.getElementById("donor_number_of_vaccine").disabled = true;
    document.getElementById("donor_last_dose_duration__years__covd").disabled = true;

    //hepatisis vaccine
    document.getElementById("donor_number_of_doses").disabled = true;
    document.getElementById("donor_last_dose_duration__years__hepatts").disabled = true;
    document.getElementById("donor_titer_value_specify").disabled = true;

    //preganancy
    document.getElementById("donor_gravida").disabled = true;
    document.getElementById("donor_para").disabled = true;
    document.getElementById("donor_abortion").disabled = true;
    document.getElementById("donor_duration_from_last_pregnancy").disabled = true;
    document.getElementById("donor_h_o_hypertension_in_pregnancy").disabled = true;
    document.getElementById("donor_h_o_edema_in_pregnancy").disabled = true;
    document.getElementById("donor_h_o_eclampsia___pre_eclampsia").disabled = true;

    //menstrual cycle
    document.getElementById("donor_menstrual_cycle").disabled = true;
    document.getElementById("donor_avg_duration_of_cycle").disabled = true;
    document.getElementById("donor_avg_duration_of_menses_days").disabled = true;

    //others
    document.getElementById("donor_specify_fami_hist").disabled = true;
    document.getElementById("donor_specify_drug_alg").disabled = true;
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
    changeOnClick('donor_gender', ['donor_if_others__specify_gender']);
    changeOnClick('donor_relationship_with__recipient', ['donor_if_other__specify_relationship']);
    changeOnClick('donor_marital_status', ['donor_if_other__specify_marital_sts']);
    changeOnClick('donor_educational_status', ['donor_if_other__specify_edu_sts']);
    changeOnClick('donor_reason_for_swap_transplant', ['donor_if_other__specify_swap_resn']);

    changeOnClick('donor_smoker', ['donor_duration__years__smok', 'donor_no_of_cigarrete_or_beedies__per_day_', 'donor_if_left_smoking_then_duration_of_abstenance__years_'], "yes");
    
    changeOnClick('donor_tobacco_use', ['donor_duration__years__tob', 'donor_if_left_tobacco_then_duration_of_abstenance__years_'], "yes");
    changeOnClick('donor_alcohol_use', ['donor_duration__years__alcho', 'donor_quantity_per_day__in_ml_'], "yes");
    changeOnClick('donor_drug_abuse', ['donor_drug_name', 'donor_duration__years__dru', 'donor_drug_frequency__per_day_'], "yes");

    changeOnClick('donor_hypertention', 
    ['donor_hypertention_duration', 
    'donor_number_of_antihypertensive_tablets', 'donor_antihypertensive_tablet_specification'], "yes");

    changeOnClick('donor_diabetes', 
    ['donor_type', 
    'donor_number_of_drugs_dbt', 'donor_insuline', 'donor_specify_insul'], "yes");

    changeOnClick('donor_cad', 
    ['donor_specify_cad'], "yes");

    changeOnClick('donor_cva', 
    ['donor_number_of_stroke___episode', 
    'donor_specify_cva'], "yes");

    changeOnClick('donor_hypothyroidism', 
    ['donor_hypothyroidism_duration', 
    'donor_dose_of_thyroxin', 'donor_hypothyroidism_last_tsh_level'], "yes");

    changeOnClick('donor_hyperthyroidism', 
    ['donor_hyperthyroidism_duration', 
    'donor_number_of_drugs_hyperthy'], "yes");

    changeOnClick('donor_h_o_malignancy', 
    ['donor_specify_diagnosis', 
    'donor_specify_treatment_taken', 'donor_last_remission_duration_in_years__cancer_free_interval_'], "yes");

    changeOnClick('donor_h_o_renal_calculus_disease', 
    ['donor_side_affected', 
    'donor_number_of_episode', 'donor_type_of_calculi',
    'donor_size_of_calculus', 'donor_treatment_taken',
    'donor_specify_treatment', 'donor_disease_free_interval_calculi',
    ], "yes");

    changeOnClick('donor_h_o_tuberculosis', 
    ['donor_type_of_tuberculosis', 
    //'donor_extrapulmonary_type', 'donor_if_other__specify',
    'donor_att_complete__', //'donor_duration_of_att',
    'donor_duration_from_treatment__disease_free_interval_'
    ], "yes");

    changeOnClick('donor_type_of_tuberculosis', 
    ['donor_extrapulmonary_type', 
    ], "extrapulmonary");

    changeOnClick('donor_extrapulmonary_type', 
    ['donor_if_other__specify', 
    ], "other"); 

    changeOnClick('donor_att_complete__', 
    ['donor_duration_of_att', 
    ], "yes"); 

    changeOnClick('donor_h_o_malignancy', 
    ['donor_specify_diagnosis', 
    'donor_specify_treatment_taken', 'donor_last_remission_duration_in_years__cancer_free_interval_'], "yes");

    changeOnClick('donor_copd_asthama', 
    ['donor_duration', 
    'donor_treatment_specify'], "yes");

    changeOnClick('donor_past_history_of_surgery', 
    ['donor_surgery_history_specify', 
    'donor_if_taking_any_medication__upload_prescription'], "yes");

    changeOnClick('donor_h_o_covid', 
    ['donor_disease_free_interval_covid', 
    'donor_specify_type_of_involvement'], "yes");

    changeOnClick('donor_covid_vaccine', 
    ['donor_number_of_vaccine', 
    'donor_last_dose_duration__years__covd'], "yes");

    changeOnClick('donor_hepatitis_b_vaccine', 
    ['donor_number_of_doses', 
    'donor_last_dose_duration__years__hepatts', 'donor_titer_value_specify'], "yes");

    changeOnClick('donor_pregnancy_history', 
    ['donor_gravida', 
    'donor_para', 'donor_abortion',
    'donor_duration_from_last_pregnancy', 'donor_h_o_hypertension_in_pregnancy',
    'donor_h_o_edema_in_pregnancy', 'donor_h_o_eclampsia___pre_eclampsia',
    ], "yes");

    changeOnClick('donor_menopause_attended', 
    ['donor_menstrual_cycle', 
    'donor_avg_duration_of_cycle', 'donor_avg_duration_of_menses_days'], "no");

    changeOnClick('donor_family_history_of_any_inherited_disease', 
    ['donor_specify_fami_hist', 
   ], "yes");

   changeOnClick('donor_drug_allergy', 
    ['donor_specify_drug_alg', 
   ], "yes");

}


function onLoadFunction() {
    desableAtStart();

    disableGroupsAtStart();
}

function calBMI() {
    document.getElementById("donor_bmi").value =  ((document.getElementById("donor_weight__kg_").value) / ((document.getElementById("donor_height__cm_").value) ** 2)) * 10000;  
}

function calAge() {
    const dobInput = document.getElementById('donor_dob').value;
    const dob = new Date(dobInput);
    const currentDate = new Date();
    const age = currentDate.getFullYear() - dob.getFullYear();
    document.getElementById('donor_age').value = age;
}


// Attach the function to the window.onload event
window.onload = onLoadFunction;

document.getElementById("donor_height__cm_").addEventListener('input', calBMI);
document.getElementById("donor_weight__kg_").addEventListener('input', calBMI);
document.getElementById("donor_dob").addEventListener('input', calAge);
