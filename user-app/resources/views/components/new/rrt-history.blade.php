<div class="container py-4 ">
    <div class="card">
        <div class="card-header">
            <h2>RRT History</h2>
        </div>
        <div class="card-body px-5">
            <div class="row g-3 mt-1">
                <div class="col-4">
                    <x-new.menu :data="$yesNoMenu" :sub=$type > MODALITY </x-new.menu>
                </div>
                <div class="col-8">
                    <x-new.menu :data="$menuGap5Upto10" :sub=$type > NUMBER OF PREVIOUS KIDNEY TRANSPLANT </x-new.menu>
                </div>
            </div>

            <div class="row g-3  mt-1">
                <div class="col-6">
                    <x-new.menu :data="$yesNoMenu" :sub=$type > PAST HISTORY OF ANY OTHER ORGAN TRANSPLANT </x-new.menu>
                </div>
                <div class="col-6">
                    <x-new.single-input-text type="text" :sub=$type > If Yes, Specify </x-new.single-input-text>
                </div>
            </div>

            <div class="row g-3 mt-1">
                <x-new.single-input-text type="date" makecol :sub=$type > DATE OF HD INITIATION </x-new.single-input-text>
            </div>

            <div class="my-3">
                <label class="col-form-label"> HD DIALYSIS ACCESS HISTORY </label>
                <div class="card border-light">
                    <div class="card-body bg-body-secondary">
                        <div class="row mt-2">
                            <div class="col-4">
                                <x-new.menu :data="$dailysisAccessMenu" :sub=$type > Dailysis Access Type </x-new.menu>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-4">
                                <x-new.menu :data="$siteofavf" :sub=$type > SITE OF AVF </x-new.menu>
                            </div>
                            <div class="col-4">
                                <x-new.menu :data="$siteofcather" :sub=$type > SITE OF CATHTER </x-new.menu>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-3 mt-1">
                <div class="col-4">
                    <x-new.menu :data="$hdfreq" :sub=$type > HD Frequency </x-new.menu>
                </div>
                <div class="col-4">
                    <x-new.menu :data="$yesNoMenu" :sub=$type > History of femoral cannulation </x-new.menu>
                </div>
                <div class="col-4">
                    <x-new.menu :data="$yesNoMenu" :sub=$type > Side (left/right) </x-new.menu>
                </div>
            </div>

            <div class="row g-3 mt-1">
                <div class="col-4">
                    <x-new.menu :data="$yesNoMenu" :sub=$type > HISTORY OF IJVC cathter </x-new.menu>
                </div>
                <div class="col-4">
                    <x-new.single-input-text type="text" :sub=$type > Number of ijvc catheterization </x-new.single-input-text>
                </div>
            </div>

            <div class="row g-3 mt-1">
                <div class="col-4">
                    <x-new.menu :data="$yesNoMenu" :sub=$type > History of CRBSI </x-new.menu>
                </div>
                <div class="col-4">
                    <x-new.single-input-text type="text" :sub=$type tail="_crbsi" > Number of episode </x-new.single-input-text>
                </div>
            </div>

            <div class="row g-3 mt-1">
                <div class="col-4">
                    <x-new.menu :data="$yesNoMenu" :sub=$type > History of central venous stenosis </x-new.menu>
                </div>
                <div class="col-4">
                    <x-new.single-input-text type="text" :sub=$type tail="_cvs"> If Yes, Specify </x-new.single-input-text>
                </div>
            </div>

            <div class="row g-3 mt-1">
                <div class="col-4">
                    <x-new.menu :data="$yesNoMenu" :sub=$type > History of AVF failed </x-new.menu>
                </div>
                <div class="col-4">
                    <x-new.single-input-text type="text" :sub=$type > Number of failed AVF </x-new.single-input-text>
                </div>
            </div>

            <div class="row g-3 mt-1">
                <div class="col-6">
                    <x-new.single-input-text type="text" :sub=$type > Dry weight </x-new.single-input-text>
                </div>
                <div class="col-6">
                    <x-new.single-input-text type="text" :sub=$type > Native Kidney output </x-new.single-input-text>
                </div>
            </div>

            <div class="row g-3 mt-1">
                <div class="col-6">
                    <x-new.single-input-text type="text" :sub=$type > Native kidney Disease (Bx Report if available) </x-new.single-input-text>
                </div>
                <div class="col-6">
                    <x-new.single-input-text type="text" :sub=$type > Serology status (if positive -detail Rx history) </x-new.single-input-text>
                </div>
            </div>

            <div class="row g-3 mt-1">
                <div class="col-6">
                    <x-new.single-input-text type="text" :sub=$type > H/O Femoral cannulation </x-new.single-input-text>
                </div>
                <div class="col-6">
                    <x-new.single-input-text type="text" :sub=$type > Antiplatelet/Anticoagulant </x-new.single-input-text>
                </div>
            </div>

        </div>
    </div>
</div>