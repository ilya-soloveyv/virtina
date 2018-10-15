<?php $this->load->view('admin/basic/header'); ?>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/admin">Админка</a></li>
        <li class="breadcrumb-item"><a href="/admin/dom">Дома</a></li>
        <li class="breadcrumb-item active"><?php if (isset($this->data['dom'][0]->iDomID)) { echo $this->data['dom'][0]->sDomTitle; } else { echo 'Новый дом'; } ?></li>
    </ol>
</nav>

<div class="container-fluid">

    <?php
        if ($this->session->flashdata('udpate')) {
            echo '<div class="alert alert-success" role="alert">'.$this->session->flashdata('udpate').'</div>';
        }
    ?>

    <div class="row">
        <div class="col-2">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-basic-tab" data-toggle="pill" href="#v-basic" role="tab" aria-controls="v-basic" aria-selected="true">Основная информация</a>
                <a class="nav-link" id="v-photo-tab" data-toggle="pill" href="#v-photo" role="tab" aria-controls="v-photo" aria-selected="false">Фотографии</a>
                <a class="nav-link" id="v-rooms-tab" data-toggle="pill" href="#v-rooms" role="tab" aria-controls="v-rooms" aria-selected="false">Комнаты</a>
            </div>
        </div>
        <div class="col-10">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-basic" role="tabpanel" aria-labelledby="v-basic-tab">
                    <form action="/admin/dom/update" method="POST">
                        <input type="hidden" name="iDomID" id="iDomID" value="<?php if (isset($this->data['dom'][0]->iDomID)) { echo $this->data['dom'][0]->iDomID; } else { echo 0; } ?>">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="sDomTitle">Название дома</label>
                                    <input type="text" class="form-control" name="sDomTitle" id="sDomTitle" value="<?php if (isset($this->data['dom'][0]->iDomID)) { echo $this->data['dom'][0]->sDomTitle; } ?>">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="sDomAlias">URI дома</label>
                                    <input type="text" class="form-control" name="sDomAlias" id="sDomAlias" value="<?php if (isset($this->data['dom'][0]->iDomID)) { echo $this->data['dom'][0]->sDomAlias; } ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="dom1_title">Слоган дома</label>
                            <input type="text" class="form-control" name="dom1_title" id="dom1_title" value="<?php if (isset($this->data['dom'][0]->iDomID)) { echo $this->data['dom'][0]->dom1_title; } ?>">
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="iDomArea">Площадь дома</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="iDomArea" id="iDomArea" value="<?php if (isset($this->data['dom'][0]->iDomID)) { echo $this->data['dom'][0]->iDomArea; } ?>">
                                        <div class="input-group-append">
                                            <div class="input-group-text">м<sup>2</sup></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="iDomFloor">Кол-во этажей</label>
                                    <input type="text" class="form-control" name="iDomFloor" id="iDomFloor" value="<?php if (isset($this->data['dom'][0]->iDomID)) { echo $this->data['dom'][0]->iDomFloor; } ?>">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="iDomRoomCount">Кол-во комнат</label>
                                    <input type="text" class="form-control" name="iDomRoomCount" id="iDomRoomCount" value="<?php if (isset($this->data['dom'][0]->iDomID)) { echo $this->data['dom'][0]->iDomRoomCount; } ?>">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="iDomSanuzelCount">Кол-во санузлов</label>
                                    <input type="text" class="form-control" name="iDomSanuzelCount" id="iDomSanuzelCount" value="<?php if (isset($this->data['dom'][0]->iDomID)) { echo $this->data['dom'][0]->iDomSanuzelCount; } ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="dom3_title">Залоголовок описания</label>
                            <input type="text" class="form-control" name="dom3_title" id="dom3_title" value="<?php if (isset($this->data['dom'][0]->iDomID)) { echo $this->data['dom'][0]->dom3_title; } ?>">
                        </div>
                        <div class="form-group">
                            <label for="dom3_text">Описание</label>
                            <textarea class="form-control" name="dom3_text" id="dom3_text" cols="30" rows="10"><?php if (isset($this->data['dom'][0]->iDomID)) { echo $this->data['dom'][0]->dom3_text; } ?></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Сохранить</button>
                    </form>
                </div>
                <div class="tab-pane fade" id="v-photo" role="tabpanel" aria-labelledby="v-photo-tab">
                    2
                </div>
                <div class="tab-pane fade" id="v-rooms" role="tabpanel" aria-labelledby="v-rooms-tab">

<div class="row">
  <div class="col-2">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
      <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
      <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>
      <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
    </div>
  </div>
  <div class="col-10">
    <div class="tab-content" id="v-pills-tabContent">
      <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">...</div>
      <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
      <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
      <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
    </div>
  </div>
</div>

                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('admin/basic/footer'); ?>