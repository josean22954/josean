<?php
/**
 * Actions of module "Firewall".
 *
 * MagnusBilling <info@magnusbilling.com>
 * 01/02/2014
 * Defaults!/usr/bin/fail2ban-client !requiretty
 */

class FirewallController extends Controller
{

    public $attributeOrder = 'date DESC';

    public function init()
    {

        echo json_encode([
            $this->nameSuccess => $this->success,
            $this->nameRoot    => $this->attributes,
            $this->nameMsg     => $this->msg . 'This option has been discontinued.',
        ]);

    }

}
