<?php $this->load->view('admin/basic/header'); ?>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/admin">Админка</a></li>
        <li class="breadcrumb-item active">Дома</li>
    </ol>
</nav>

<div class="container-fluid container-catalog">
    <div class="row">
        <?php
            foreach ($this->data['catalog'] as $k => $v) {
                echo '
                    <div class="col">
                        <div class="card">
                            <a href="/admin/dom/'.$v->iDomID.'"><img class="card-img-top" src="/images/dom/'.$v->iDomID.'/1.jpg" alt=""></a>
                            <div class="card-body">
                                <h5 class="card-title">Дом №'.$v->iDomID.'</h5>
                                <h6 class="card-subtitle mb-2 text-muted">'.$v->sDomTitle.'</h6>
                            </div>
                        </div>
                    </div>
                ';
            }
        ?>
    </div>
    <a href="/admin/dom/0" class="btn btn-secondary">Добавить дом</a>    
</div>

<?php $this->load->view('admin/basic/footer'); ?>