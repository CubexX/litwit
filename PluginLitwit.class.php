<?php

if (!class_exists('Plugin')) {
    die('Hacking attemp!');
}

class PluginLitwit extends Plugin {
    public function Init() {
        //$this->Viewer_AppendStyle(Plugin::GetTemplatePath(__CLASS__)."css/style.css");
    }
}