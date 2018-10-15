<?php $this->load->view('basic/header'); ?>

<div class="container-fluid">
    <div id="sitemap">
        <h1>Карта сайта</h1>
        <?php

            function addElement ($sitemap, $i) {
                if(isset($sitemap[$i]) && !empty($sitemap[$i]) && is_array($sitemap[$i]))
                {
                    echo "<ul>";
                    foreach ($sitemap[$i] as $k => $v) {
                        echo "<li>";
                            echo "<a href='".$v['url']."'>".$v['name']."</a>";
                            addElement ($sitemap, $k);
                        echo "</li>";
                    }
                    echo "</ul>"; 
                }
                // $str = "";
                // $str.= "<li>";
                //     $str.= "<a href='".$v['url']."'>".$v['name']." ".$k."</a>";
                //     if(isset($sitemap[$k]))
                //     {
                //         $str.= "<ul><li>111</li></ul>"; 
                //     }
                // $str.= "</li>";
                // return $str;
            }

            addElement($this->data['sitemap'], 0);

        ?>
    </div>
</div>

<script>
    $(document).ready(function () {
        $("header").addClass("dark")
    });
</script>

<?php $this->load->view('basic/footer'); ?>