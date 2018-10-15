<div id="modal_dom6" class="modal fade<?php if(!isset($this->data['room'][0]['photo'])) { echo ' noimage'; } ?>" tabindex="-1" role="dialog">

    <div class="modal-close" data-dismiss="modal" aria-label="Close"></div>
    <div class="zoom"><img src="/images/find.png"></div>

    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <?php
                echo '<div class="l">';
                    echo '<div class="owl-carousel">';
                        if (isset($this->data['room'][0]['photo']) && !empty($this->data['room'][0]['photo'])) {
                            foreach ($this->data['room'][0]['photo'] as $k => $v) {
                                echo '<img src="/images/dom/dom6/'.$this->data['room'][0]['iRoomID'].'/'.$v['sFileName'].'">';
                            }
                        }
                    echo '</div>';
                echo '</div>';
                echo '<div class="r">';
                    echo '<div class="desc">';
                        echo '<div class="t">';
                            echo '<div class="title">'.$this->data['room'][0]['sRoomTitle'].'</div>';
                            echo $this->data['room'][0]['tRoomText'];
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
            ?>
        </div>
    </div>

</div>