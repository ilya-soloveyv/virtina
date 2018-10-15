<?php

class Mailgun_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function send($p = false)
    {
        if(isset($p['to']) && !empty($p['to']) && isset($p['sub']) && !empty($p['sub']) && isset($p['mess']) && !empty($p['mess']))
        {
            exec("curl -s --user 'api:".$this->config->item('mailgun_api_key')."' https://api.mailgun.net/v3/mailgun.virtina.ru/messages -F from='Virtina <".$this->config->item('mailgun_mailfrom').">' -F to=".$p['to']." -F subject='".$p['sub']."' --form-string html='".$p['mess']."'", $res);
            var_dump($res);
        }
    }

    public function bounces()
    {
        // curl -s --user 'api:YOUR_API_KEY' -G \
        // https://api.mailgun.net/v3/YOUR_DOMAIN_NAME/bounces/a.b@abc.com
        exec("curl -s --user 'api:".$this->config->item('mailgun_api_key')."' -G https://api.mailgun.net/v3/mailgun.virtina.ru/bounces/".$this->config->item('mailgun_mailfrom'), $res);
        var_dump($res);
    }

}

?>