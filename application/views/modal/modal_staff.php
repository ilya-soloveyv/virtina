<div class="modal-close" data-dismiss="modal" aria-label="Close"></div>
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="data">
            <div class="l">
                <div class="img" style="background-image: url('/images/staff/<?php echo $this->data['staff'][0]->sStaffImg; ?>');"></div>                
            </div>
            <div class="r">
                <div class="up open_modal_staff" data-iStaffID='<?php echo $this->data['prev']; ?>'></div>
                <div class="down open_modal_staff" data-iStaffID='<?php echo $this->data['next']; ?>'></div>
                <div class="info">
                    <div class="name"><?php echo $this->data['staff'][0]->sStaffName; ?></div>
                    <div class="post"><?php echo $this->data['staff'][0]->sStaffPost; ?></div>
                    <div class="text"><?php echo $this->data['staff'][0]->tStaggText; ?></div>
                </div>
            </div>
        </div>
    </div>
</div>