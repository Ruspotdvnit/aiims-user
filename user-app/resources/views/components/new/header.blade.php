<div class="container py-4 ">
    <div class="card">
        <div class="card-header">
            <h2>Demographic profile </h2>
        </div>
        @php
            $who = '';
            if($type=='recp')
            {
                $who="Recipient";
            }else{ 
                $who="Donor"; 
            }
        @endphp
        <div class="card-body px-5">
            <div class="row g-3">
                <div class="col-4">
                    <x-new.single-input-text :sub=$type type="text" 
                    extra={{$who}} > First Name </x-new.single-input-text>
                </div>
                <div class="col-4">
                    <x-new.single-input-text :sub=$type type="text" 
                    extra={{$who}} > Middle Name </x-new.single-input-text>
                </div>
                <div class="col-4">
                    <x-new.single-input-text :sub=$type type="text" 
                    extra={{$who}} > Last Name </x-new.single-input-text>
                </div>
            </div>
            <div class="row g-3 mt-1">
                <div class="col-3">
                    <x-new.single-input-text :sub=$type type="date" > DOB </x-new.single-input-text>
                </div>
                <div class="col-3">
                    <x-new.single-input-text :sub=$type type="text" > Age </x-new.single-input-text>
                </div>
                <div class="col-3">
                    <x-new.menu :data="$genderMenu" :sub="$type" > Gender </x-new.menu>
                </div>
                <div class="col-3">
                    <x-new.single-input-text type="text" :sub=$type tail="_gender"> If Others, Specify </x-new.single-input-text>
                </div>
            </div>
            <div class="row g-3 mt-1">
                <div class="col-6">
                    <x-new.single-input-text type="text" :sub=$type > CRN_No </x-new.single-input-text>
                </div>
                <div class="col-6">
                    <x-new.single-input-text type="text" :sub=$type > Notto ID </x-new.single-input-text>
                </div>
            </div>
            <div class="row g-3 mt-1">
                <div class="col-4">
                    <x-new.menu :data="$bg" :sub=$type > Blood Group </x-new.menu>
                </div>
                <div class="col-4">
                    <x-new.menu :data="$binaryMenu" :sub=$type > RH </x-new.menu>
                </div>
            </div>
            <div class="row g-3 mt-1">
                <div class="col-6">
                    <x-new.single-input-text type="text" :sub=$type > Adhar Number </x-new.single-input-text>
                </div>
                <div class="col-6">
                    <x-new.single-input-text type="date" :sub=$type > Date of Registration </x-new.single-input-text>
                </div>
            </div>
            <div class="row g-3 mt-1">
                <div class="col-4">
                    <x-new.single-input-text :sub=$type type="text"> 
                        @if($type=="recp") Donor @else Recipient @endif First Name </x-new.single-input-text>
                </div>
                <div class="col-4">
                    <x-new.single-input-text :sub=$type type="text"> 
                        @if($type=="recp") Donor @else Recipient @endif Middle Name </x-new.single-input-text>
                </div>
                <div class="col-4">
                    <x-new.single-input-text :sub=$type type="text"> 
                        @if($type=="recp") Donor @else Recipient @endif Last Name </x-new.single-input-text>
                </div>
            </div>
            <div class="row g-3 mt-1">
                <div class="col-4">
                    <x-new.menu :data="$relationshipWithDonor" :sub=$type > 
                        Relationship with @if($type=="recp") Donor @else Recipient @endif </x-new.menu>
                </div>
                <div class="col-4">
                    <x-new.single-input-text type="text" :sub=$type tail="_relationship" > If other, Specify </x-new.single-input-text>
                </div>
            </div>
            <div class="row g-3 mt-1">
                <div class="col">
                    <x-input-text-groupp name="Address" :sub="$type" :cbcData=$addressData />                
                </div>
            </div>
            
            <div class="row g-3 mt-1">
                <div class="col-6">
                    <x-new.single-input-text :sub=$type type="text"> Mobile No 1 </x-new.single-input-text>
                </div>
                <div class="col-6">
                    <x-new.single-input-text :sub=$type type="text"> Mobile No 2 </x-new.single-input-text>
                </div>
            </div>
            <div class="row g-3 mt-1">
                <div class="col-4">
                    <x-new.single-input-text :sub=$type type="text"> Height (cm) </x-new.single-input-text>
                </div>  
                <div class="col-4">
                    <x-new.single-input-text :sub=$type type="text"> Weight (kg) </x-new.single-input-text>
                </div>
                <div class="col-4">
                    <x-new.single-input-text :sub=$type type="text"> BMI </x-new.single-input-text>
                </div>
            </div>
            
            <div class="row g-3 mt-1">
                <div class="col-3">
                    <x-new.menu :data="$maritalStatus" :sub=$type > Marital status </x-new.menu>
                </div>
                <div class="col-3">
                    <x-new.single-input-text :sub=$type type="text" tail="_marital_sts" > If other, Specify </x-new.single-input-text>
                </div>
                <div class="col-3">
                    <x-new.single-input-text :sub=$type type="date"> Date_of_Marriage </x-new.single-input-text>
                </div>
                <div class="col-3">
                    <x-new.single-input-text :sub=$type type="text"> Marital duration in years </x-new.single-input-text>
                </div>
            </div>
            <div class="row g-3 mt-1">
                <div class="col-4">
                    <x-new.menu :data="$educationalStatus" :sub=$type > Educational Status </x-new.menu>
                </div>
                <div class="col-4">
                    <x-new.single-input-text :sub=$type type="text" tail="_edu_sts" > If other, Specify </x-new.single-input-text>
                </div>
                <div class="col-4">
                    <x-new.menu :data="$yesNoMenu" :sub=$type > Health insurance </x-new.menu>
                </div>
            </div>
            <div class="row g-3 mt-1">
                <div class="col">
                    <x-new.single-input-text type="text" :sub=$type > Profession </x-new.single-input-text>
                </div>
            </div>
            <div class="row g-3 mt-1">
                <div class="col-4">
                    <x-new.menu :data="$yesNoMenu" :sub=$type > Willingness for swap transplant </x-new.menu>
                </div>
                <div class="col-4">
                    <x-new.menu :data="$swapTransplantReason" :sub=$type > Reason for swap transplant </x-new.menu>
                </div>
                <div class="col">
                    <x-new.single-input-text type="text" :sub=$type tail="_swap_resn" > If other, specify </x-new.single-input-text>
                </div>
            </div>
            <div class="row g-3 mt-1">
                <div class="col-4">
                    <x-new.menu :data="$yesNoMenu" :sub=$type > Addiction </x-new.menu>
                </div>
            </div>
            <div class="row g-3 mt-1">
                <div class="col-4">
                    <x-new.menu :data="$yesNoMenu" :sub=$type > Smoker </x-new.menu>
                </div>
                <div class="col-4">
                    <x-new.single-input-text type="text" :sub=$type tail="_smok" > Duration (years) </x-new.single-input-text>
                </div>
                <div class="col-4">
                    <x-new.menu :data="$menuGap5Upto15" :sub=$type > No of cigarrete or beedies (per day) </x-new.menu>
                </div>
            </div>
            <div class="row g-3 mt-1">
                <div class="col-6">
                    <x-new.menu :data="$menuGap3Upto5" :sub=$type > If left smoking then duration of abstenance (years) </x-new.menu>
                </div>
            </div>
            <div class="row g-3 mt-1">
                <div class="col-4">
                    <x-new.menu :data="$yesNoMenu" :sub=$type > Tobacco use </x-new.menu>
                </div>
                <div class="col-4">
                    <x-new.single-input-text type="text" :sub=$type tail="_tob" > Duration (years) </x-new.single-input-text>
                </div>
                <div class="col-4">
                    <x-new.menu :data="$menuGap3Upto5" :sub=$type > If left tobacco then duration of abstenance (years) </x-new.menu>
                </div>
            </div>
            <div class="row g-3 mt-1">
                <div class="col-4">
                    <x-new.menu :data="$yesNoMenu" :sub=$type > Alcohol use </x-new.menu>
                </div>
                <div class="col-4">
                    <x-new.single-input-text type="text" :sub=$type  tail="_alcho" > Duration (years) </x-new.single-input-text>
                </div>
                <div class="col-4">
                    <x-new.single-input-text type="text" :sub=$type > Quantity per day (in ml) </x-new.single-input-text>
                </div>
            </div>
            <div class="row g-3 mt-1">
                <div class="col-4">
                    <x-new.menu :data="$yesNoMenu" :sub=$type > Drug Abuse </x-new.menu>
                </div>
                <div class="col-4">
                    <x-new.single-input-text type="text" :sub=$type > Drug Name </x-new.single-input-text>
                </div>
                <div class="col-4">
                    <x-new.single-input-text type="text" :sub=$type tail="_dru" > Duration (years) </x-new.single-input-text>
                </div>
            </div>
            <div class="row g-3 mt-1">
                <div class="col-4">
                    <x-new.single-input-text type="text" :sub=$type > Drug Frequency (per day) </x-new.single-input-text>
                </div>
            </div>
        </div>  
    </div>
</div>