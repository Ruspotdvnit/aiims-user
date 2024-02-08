// $(document).ready(function() {
// });

function desableAtStart(){
    document.getElementById("recp_if_others__specify_gender").disabled = true;
    document.getElementById("recp_if_other__specify_relationship").disabled = true;
    document.getElementById("recp_if_other__specify_marital_sts").disabled = true;
    document.getElementById("recp_if_other__specify_edu_sts").disabled = true;
    document.getElementById("recp_if_other__specify_swap_resn").disabled = true;
    document.getElementById("recp_specify_insul").disabled = true;
    document.getElementById("recp_specify_cad").disabled = true;
    document.getElementById("recp_specify_cva").disabled = true;
    document.getElementById("recp_bmi").readOnly = true;

    //smoking
    document.getElementById("recp_duration__years__smok").disabled = true;
    document.getElementById("recp_no_of_cigarrete_or_beedies__per_day_").disabled = true;
    document.getElementById("recp_if_left_smoking_then_duration_of_abstenance__years_").disabled = true;

    //tobacco
    document.getElementById("recp_duration__years__tob").disabled = true;
    document.getElementById("recp_if_left_tobacco_then_duration_of_abstenance__years_").disabled = true;

    //alcohol
    document.getElementById("recp_duration__years__alcho").disabled = true;
    document.getElementById("recp_quantity_per_day__in_ml_").disabled = true;

    //drugs
    document.getElementById("recp_drug_name").disabled = true;
    document.getElementById("recp_duration__years__dru").disabled = true;
    document.getElementById("recp_drug_frequency__per_day_").disabled = true;

    //hypertension
    document.getElementById("recp_hypertention_duration").disabled = true;
    document.getElementById("recp_number_of_antihypertensive_tablets").disabled = true;
    document.getElementById("recp_antihypertensive_tablet_specification").disabled = true;

    //diabeties
    document.getElementById("recp_type").disabled = true;
    document.getElementById("recp_number_of_drugs_dbt").disabled = true;
    document.getElementById("recp_insuline").disabled = true;

    //cva
    document.getElementById("recp_number_of_stroke___episode").disabled = true;

    //hypothy
    document.getElementById("recp_hypothyroidism_duration").disabled = true;
    document.getElementById("recp_dose_of_thyroxin").disabled = true;
    document.getElementById("recp_hypothyroidism_last_tsh_level").disabled = true;

    //hyperthy
    document.getElementById("recp_hyperthyroidism_duration").disabled = true;
    document.getElementById("recp_number_of_drugs_hyperthy").disabled = true;

    //h/o malig
    document.getElementById("recp_specify_diagnosis").disabled = true;
    document.getElementById("recp_specify_treatment_taken").disabled = true;
    document.getElementById("recp_last_remission_duration_in_years__cancer_free_interval_").disabled = true;

    //h/o renal calculus
    document.getElementById("recp_side_affected").disabled = true;
    document.getElementById("recp_number_of_episode").disabled = true;
    document.getElementById("recp_type_of_calculi").disabled = true;
    document.getElementById("recp_size_of_calculus").disabled = true;
    document.getElementById("recp_treatment_taken").disabled = true;
    document.getElementById("recp_specify_treatment").disabled = true;
    document.getElementById("recp_disease_free_interval_calculi").disabled = true;

    //h/o tuberculosis
    document.getElementById("recp_type_of_tuberculosis").disabled = true;
    document.getElementById("recp_extrapulmonary_type").disabled = true;
    document.getElementById("recp_if_other__specify").disabled = true;
    document.getElementById("recp_att_complete__").disabled = true;
    document.getElementById("recp_duration_of_att").disabled = true;
    document.getElementById("recp_duration_from_treatment__disease_free_interval_").disabled = true;
    
    //asthma
    document.getElementById("recp_duration").disabled = true;
    document.getElementById("recp_treatment_specify").disabled = true;

    //surgery
    document.getElementById("recp_surgery_history_specify").disabled = true;
    document.getElementById("recp_if_taking_any_medication__upload_prescription").disabled = true;

    //covid
    document.getElementById("recp_disease_free_interval_covid").disabled = true;
    document.getElementById("recp_specify_type_of_involvement").disabled = true;

    //covid vaccine
    document.getElementById("recp_number_of_vaccine").disabled = true;
    document.getElementById("recp_last_dose_duration__years__covd").disabled = true;

    //hepatisis vaccine
    document.getElementById("recp_number_of_doses").disabled = true;
    document.getElementById("recp_last_dose_duration__years__hepatts").disabled = true;
    document.getElementById("recp_titer_value_specify").disabled = true;

    //preganancy
    document.getElementById("recp_gravida").disabled = true;
    document.getElementById("recp_para").disabled = true;
    document.getElementById("recp_abortion").disabled = true;
    document.getElementById("recp_duration_from_last_pregnancy").disabled = true;
    document.getElementById("recp_h_o_hypertension_in_pregnancy").disabled = true;
    document.getElementById("recp_h_o_edema_in_pregnancy").disabled = true;
    document.getElementById("recp_h_o_eclampsia___pre_eclampsia").disabled = true;

    //menstrual cycle
    document.getElementById("recp_menstrual_cycle").disabled = true;
    document.getElementById("recp_avg_duration_of_cycle").disabled = true;
    document.getElementById("recp_avg_duration_of_menses_days").disabled = true;

    //others
    document.getElementById("recp_specify_fami_hist").disabled = true;
    document.getElementById("recp_specify_drug_alg").disabled = true;

    //rrt hist
    document.getElementById("recp_if_yes__specify").disabled = true;
    document.getElementById("recp_site_of_avf").disabled = true;
    document.getElementById("recp_site_of_cathter").disabled = true;
    document.getElementById("recp_side__left_right_").disabled = true;

    document.getElementById("recp_number_of_ijvc_catheterization").disabled = true;
    document.getElementById("recp_number_of_episode_crbsi").disabled = true;
    document.getElementById("recp_if_yes__specify_cvs").disabled = true;
    document.getElementById("recp_number_of_failed_avf").disabled = true;

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
    changeOnClick('recp_gender', ['recp_if_others__specify_gender']);
    changeOnClick('recp_relationship_with__donor', ['recp_if_other__specify_relationship']);
    changeOnClick('recp_marital_status', ['recp_if_other__specify_marital_sts']);
    changeOnClick('recp_educational_status', ['recp_if_other__specify_edu_sts']);
    changeOnClick('recp_reason_for_swap_transplant', ['recp_if_other__specify_swap_resn']);

    changeOnClick('recp_smoker', ['recp_duration__years__smok', 'recp_no_of_cigarrete_or_beedies__per_day_', 'recp_if_left_smoking_then_duration_of_abstenance__years_'], "yes");
    
    changeOnClick('recp_tobacco_use', ['recp_duration__years__tob', 'recp_if_left_tobacco_then_duration_of_abstenance__years_'], "yes");
    changeOnClick('recp_alcohol_use', ['recp_duration__years__alcho', 'recp_quantity_per_day__in_ml_'], "yes");
    changeOnClick('recp_drug_abuse', ['recp_drug_name', 'recp_duration__years__dru', 'recp_drug_frequency__per_day_'], "yes");

    changeOnClick('recp_hypertention', 
    ['recp_hypertention_duration', 
    'recp_number_of_antihypertensive_tablets', 'recp_antihypertensive_tablet_specification'], "yes");

    changeOnClick('recp_diabetes', 
    ['recp_type', 
    'recp_number_of_drugs_dbt', 'recp_insuline', 'recp_specify_insul'], "yes");

    changeOnClick('recp_cad', 
    ['recp_specify_cad'], "yes");

    changeOnClick('recp_cva', 
    ['recp_number_of_stroke___episode', 
    'recp_specify_cva'], "yes");

    changeOnClick('recp_hypothyroidism', 
    ['recp_hypothyroidism_duration', 
    'recp_dose_of_thyroxin', 'recp_hypothyroidism_last_tsh_level'], "yes");

    changeOnClick('recp_hyperthyroidism', 
    ['recp_hyperthyroidism_duration', 
    'recp_number_of_drugs_hyperthy'], "yes");

    changeOnClick('recp_h_o_malignancy', 
    ['recp_specify_diagnosis', 
    'recp_specify_treatment_taken', 'recp_last_remission_duration_in_years__cancer_free_interval_'], "yes");

    changeOnClick('recp_h_o_renal_calculus_disease', 
    ['recp_side_affected', 
    'recp_number_of_episode', 'recp_type_of_calculi',
    'recp_size_of_calculus', 'recp_treatment_taken',
    'recp_specify_treatment', 'recp_disease_free_interval_calculi',
    ], "yes");

    changeOnClick('recp_h_o_tuberculosis', 
    ['recp_type_of_tuberculosis', 
    //'recp_extrapulmonary_type', 'recp_if_other__specify',
    'recp_att_complete__', //'recp_duration_of_att',
    'recp_duration_from_treatment__disease_free_interval_'
    ], "yes");

    changeOnClick('recp_type_of_tuberculosis', 
    ['recp_extrapulmonary_type', 
    ], "extrapulmonary");

    changeOnClick('recp_extrapulmonary_type', 
    ['recp_if_other__specify', 
    ], "other"); 

    changeOnClick('recp_att_complete__', 
    ['recp_duration_of_att', 
    ], "yes"); 

    changeOnClick('recp_h_o_malignancy', 
    ['recp_specify_diagnosis', 
    'recp_specify_treatment_taken', 'recp_last_remission_duration_in_years__cancer_free_interval_'], "yes");

    changeOnClick('recp_copd_asthama', 
    ['recp_duration', 
    'recp_treatment_specify'], "yes");

    changeOnClick('recp_past_history_of_surgery', 
    ['recp_surgery_history_specify', 
    'recp_if_taking_any_medication__upload_prescription'], "yes");

    changeOnClick('recp_h_o_covid', 
    ['recp_disease_free_interval_covid', 
    'recp_specify_type_of_involvement'], "yes");

    changeOnClick('recp_covid_vaccine', 
    ['recp_number_of_vaccine', 
    'recp_last_dose_duration__years__covd'], "yes");

    changeOnClick('recp_hepatitis_b_vaccine', 
    ['recp_number_of_doses', 
    'recp_last_dose_duration__years__hepatts', 'recp_titer_value_specify'], "yes");

    changeOnClick('recp_pregnancy_history', 
    ['recp_gravida', 
    'recp_para', 'recp_abortion',
    'recp_duration_from_last_pregnancy', 'recp_h_o_hypertension_in_pregnancy',
    'recp_h_o_edema_in_pregnancy', 'recp_h_o_eclampsia___pre_eclampsia',
    ], "yes");

    changeOnClick('recp_menopause_attended', 
    ['recp_menstrual_cycle', 
    'recp_avg_duration_of_cycle', 'recp_avg_duration_of_menses_days'], "no");

    changeOnClick('recp_family_history_of_any_inherited_disease', 
    ['recp_specify_fami_hist', 
   ], "yes");

   changeOnClick('recp_drug_allergy', 
    ['recp_specify_drug_alg', 
   ], "yes");

   changeOnClick('recp_past_history_of_any_other_organ_transplant', 
    ['recp_if_yes__specify', 
   ], "yes");

   changeOnClick('recp_dailysis_access_type', 
    ['recp_site_of_avf', 
   ], "avf");

   changeOnClick('recp_dailysis_access_type', 
    ['recp_site_of_cathter', 
   ], "tunnel hd catheter");

   changeOnClick('recp_history_of_femoral_cannulation', 
    ['recp_side__left_right_', 
   ], "yes");

   changeOnClick('recp_history_of_ijvc_cathter', 
    ['recp_number_of_ijvc_catheterization', 
   ], "yes");

   changeOnClick('recp_history_of_crbsi', 
    ['recp_number_of_episode_crbsi', 
   ], "yes");

   changeOnClick('recp_history_of_central_venous_stenosis', 
    ['recp_if_yes__specify_cvs', 
   ], "yes");

   changeOnClick('recp_history_of_avf_failed', 
    ['recp_number_of_failed_avf', 
   ], "yes");

}



function onLoadFunction() {
    desableAtStart();

    disableGroupsAtStart();
}

function calBMI() {
    document.getElementById("recp_bmi").value =  ((document.getElementById("recp_weight__kg_").value) / ((document.getElementById("recp_height__cm_").value) ** 2)) * 10000;  
}

function calAge() {
    const dobInput = document.getElementById('recp_dob').value;
    const dob = new Date(dobInput);
    const currentDate = new Date();
    const age = currentDate.getFullYear() - dob.getFullYear();
    document.getElementById('recp_age').value = age;
}


// Attach the function to the window.onload event
window.onload = onLoadFunction;

document.getElementById("recp_height__cm_").addEventListener('input', calBMI);
document.getElementById("recp_weight__kg_").addEventListener('input', calBMI);
document.getElementById("recp_dob").addEventListener('input', calAge);
