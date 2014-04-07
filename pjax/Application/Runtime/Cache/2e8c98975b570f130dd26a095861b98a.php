<?php if (!defined('THINK_PATH')) exit();?><h2><?php echo ($data["name"]); ?></h2>
<h1>About me</h1>
<a class="btn btn-lg btn-primary" href="http://wx.cn/index.php/index/index" role="button">View navbar docs &raquo;</a>
<pre>
# pjax


            .--.
           /    \
          ## a  a
          (   '._)
           |'-- |
         _.\___/_   ___pjax___
       ."\> \Y/|<'.  '._.-'
      /  \ \_\/ /  '-' /
      | --'\_/|/ |   _/
      |___.-' |  |`'`
        |     |  |
        |    / './
       /__./` | |
          \   | |
           \  | |
           ;  | |
           /  | |
     jgs  |___\_.\_
          `-"--'---'

## pjax = pushState + ajax

pjax is a jQuery plugin that uses ajax and pushState to deliver a fast browsing experience with real permalinks, page titles, and a working back button.

pjax works by grabbing html from your server via ajax and replacing the content of a container on your page with the ajax'd html. It then updates the browser's current url using pushState without reloading your page's layout or any resources (js, css), giving the appearance of a fast, full page load. But really it's just ajax and pushState.

For [browsers that don't support pushState][compat] pjax fully degrades.
</pre>