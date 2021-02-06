<?php

namespace App\Handlers;

class LfmConfigHandler extends \Tagable\LaravelFilemanager\Handlers\ConfigHandler
{
    public function userField()
    {
        return parent::userField();
    }
}
