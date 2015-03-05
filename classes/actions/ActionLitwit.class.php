<?php

class PluginLitwit_ActionLitwit extends ActionPlugin
{
    function Init()
    {
        $this->SetDefaultEvent('index');
    }

    protected function RegisterEvent()
    {
        $this->AddEvent('index', 'ShowPost');

    }

    public function ShowPost()
    {

    }
}
