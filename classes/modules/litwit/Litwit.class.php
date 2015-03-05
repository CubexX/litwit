<?php

class PluginLitwit_ModuleLitwit extends Module
{
    public function GetPost() {
        $account = Config::Get("plugin.litwit.account");

        $res = file_get_contents("https://twitter.com/" . $account);

        preg_match("|dir=\"ltr\" data-aria-label-part=\"0\">(.*)</p>|", $res, $post);
        preg_match('|js-nav js-tooltip"\n  href="(.*)"|', $res, $link);
        preg_match('|data-aria-label-part="last">(.*)<\/span>|', $res, $date);
        $post["text"] = preg_replace("|/hashtag|", "https://twitter.com/hashtag", $post[1]);
        $post["link"] = preg_replace("|^/|", "https://twitter.com/", $link[1]);
        $post["date"] = $date[1];
        return $post;
    }

    public function Init()
    {
        // TODO: Implement Init() method.
    }
}

?>
