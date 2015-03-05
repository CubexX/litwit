<?php

class PluginLitwit_HookLitwit extends Hook
{

    public function RegisterHook()
    {
        $this->AddHook('template_litwit_post', 'GetPost', __CLASS__, -100);
    }


    public function GetPost()
    {
        $post = $this->PluginLitwit_Litwit_GetPost();
        $this->Viewer_Assign('post', $post);
        return $this->Viewer_Fetch(Plugin::GetTemplatePath(__CLASS__) . 'sidebar_post.tpl');
    }
}

?>
