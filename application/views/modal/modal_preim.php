<div class="modal-close" data-dismiss="modal" aria-label="Close"></div>
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="l">
            <img class="bg" src="/images/index/section3/bg/<?php echo $this->data['preim'][0]->sImgBg; ?>">
            <img class="logo" src="/images/index/section3/ico_white/<?php echo $this->data['preim'][0]->iPreimID; ?>.svg">
        </div>
        <div class="r">
            <div class="up open_modal_preim" data-iPreimID="<?php echo $this->data['preim_prev_next']['prev']->iPreimID; ?>"><i class="material-icons">keyboard_arrow_up</i></div>
            <div class="down open_modal_preim" data-iPreimID="<?php echo $this->data['preim_prev_next']['next']->iPreimID; ?>"><i class="material-icons">keyboard_arrow_down</i></div>
            <div class="info">
                <div class="t">
                    <div class="text">
                        <div class="title"><?php echo $this->data['preim'][0]->sPreimTitle; ?></div>
                        <?php echo $this->data['preim'][0]->sPreimText; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>