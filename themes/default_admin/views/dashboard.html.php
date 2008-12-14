<? defined("SYSPATH") or die("No direct script access."); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Tranisitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <title>G3: Admin Dashboard</title>
    <link rel="stylesheet" href="<?= url::file("lib/yui/reset-fonts-grids.css") ?>" type="text/css" media="screen,projection">
    <link rel="stylesheet" href="<?= $item_theme->url("css/screen.css") ?>" type="text/css" media="screen,projection">
    <script src="<?= url::file("lib/jquery.js") ?>"></script>
    <script src="<?= url::file("lib/jquery-ui.packed.js") ?>"></script>
    <link rel="stylesheet" href="<?= $item_theme->url("jquery/superfish.css") ?>" type="text/css" media="screen,projection">
    <link rel="stylesheet" href="<?= $item_theme->url("jquery/superfish-navbar.css") ?>" type="text/css" media="screen,projection">
    <script src="<?= $item_theme->url("jquery/superfish.js") ?>"></script>
    <script type="text/javascript"> 
      $(document).ready(function(){ 
        $("ul.sf-menu").superfish({ 
          pathClass:  'current' 
        }); 
      }); 
    </script>
    
    <style type="text/css">
      #gSiteAdminMenu {
      clear: both;
      font-size: 1.2em;
      margin: 0 20px;
      }
      #gContent {
        font-size: 1.1em;
      }
      .gBlock {
        border: 1px solid #e7e7e7;
        margin-bottom: 1em;
        padding: .4em;
      }
      .gBlock h2 {
        background-color: #e7e7e7;
        margin: -.4em;
        padding: .2em .6em;
        background: #f4f4f4 url('<?= $item_theme->url("images/ico-draggable.png") ?>') no-repeat center right;
        cursor: move;
      }
      .gClose {
        background-color: #f1f1f1;
        border: 1px solid #ccc;
        color: #ccc;
        display: block;
        float: right;
        padding: .1em .2em;
      }
      a.gClose:hover {
        border-color: #999;
        color: #999;
        text-decoration: none;
      }
      #gPhotoStream .gBlockContent {
        overflow: scroll; 
      }
    </style>
  </head>

  <body>
    <div id="doc4" class="yui-t5 gView">
      <div id="hd">
        <div id="gHeader">
          <ul id="gLoginMenu">
            <li><a href="/index.php/album/1">View the Gallery</a></li>
            <li id="gLoginLink"><a href="/index.php/logout">Logout</a></li>
          </ul>
          <img src="<?= $item_theme->url("images/logo.png") ?>" id="gLogo" alt="Gallery 3: Your Photos on Your Web Site" />
          <ul id="gSiteAdminMenu" class="sf-menu sf-navbar">
            <li><a href="#">Dashboard</a><li>
            <li><a href="#">General Settings</a><li>
            <li class="current"><a href="#">Content</a>
              <ul>
                <li><a href="#">Comments</a>
                  <ul>
                    <li><a href="#">Comment moderation</a></li>
                  </ul>
                </li>
                <li><a href="#">Tags</a><li>
              </ul>
            </li>
            <li><a href=#>Modules</a></li>
            <li><a href=#>Presentation</a>
              <ul>
                <li><a href="#">Themes</a></li>
                <li><a href="#">Image sizes</a><li>
              </ul>
            </li>
            <li><a href="#">Users/Groups</a>
              <ul>
                <li><a href="#">List Users</a></li>
                <li><a href="#">Create new user</a><li>
                <li><a href="#">Edit Profile</a></li>
              </ul>
            </li>
            <li><a href="#">Maintenance</a><li>
            <li><a href="#">Statistics</a><li>
          </ul>
          <!--ul id="gBreadcrumbs" class="gClearFix">
            <li><a href="#">Dashboard</a></li>
          </ul-->
        </div>
      </div>
      <div id="bd">
        <div id="yui-main">
          <div class="yui-b">
            <div id="gContent" class="yui-g">

              <div class="gBlock">
                <a href="" class="gClose">X</a>
                <h2>Welcome to Gallery 3!</h2>
                <div class="gBlockContent">
                  <p>This is your administration dashboard and it provides a quick overview of status messages,
                  recent updates, and frequently used options. Add or remove blocks and rearrange them 
                  to tailor to your needs. The admin menu provides quick access to all of Gallery 3's options
                  and settings. Here are a few of the most used options to get you started.</p> 
                  <ul>
                    <li><a href="#">General Settings</a> - General configuation options for your Gallery.</li>
                    <li><a href="#">Modules</a> - Manage available and installed modules.</li>
                    <li><a href="#">Presentation</a> - Choose a theme, set image sizes.</li>
                  </ul>
                </div>
              </div>
              
              <div class="gBlock">
                <a href="" class="gClose">X</a>
                <h2>Status Messages</h2>
                <ul class="gBlockContent gMessages">
                  <li class="gWarning"><a href="#" title="">Gallery 3.1 is available, you're running Gallery 3.0. Update now!</a></li>
                  <li class="gError"><a href="#" title="">Unable to write to /home/username/gallery3/var</a></li>
                  <li class="gSuccess"><a href="#" title="">Permissions issues fixed</a></li>
                  <li class="gInfo"><a href="#" title="">Just a plain information message</a></li>
                  <li class="gHelp"><a href="#" title="">Contextual help or tip<br/>And here's a second line</a></li>
                </ul>
              </div>
              
              <div id="gPhotoStream" class="gBlock">
                <a href="" class="gClose">X</a>
                <h2>Photo Stream</h2>
                <div class="gBlockContent">
                  <p>Recent photos added to your Gallery</p>
                  <img src="<?= $theme->url("images/photostream.png") ?>" alt="" />
                  <p class="gWarning">Slider type of display. Show titles underneath or on hover. Draw a keyline around albums, or differentiate some how. Each will be linked to item view</p>
                </div>
              </div>
              
              <div id="gLogEntries" class="gBlock">
                <a href="" class="gClose">X</a>
                <h2>Recent Comments</h2>
                <ul class="gBlockContent">
                  <li><a href="">username</a> 2008-12-10 23:02:23 Something happened</li>
                  <li><a href="">username</a> 2008-12-10 23:02:23 Someone logged in</li>
                  <li><a href="">username</a> 2008-12-10 23:02:23 New module installed</li>
                  <li><a href="">username</a> 2008-12-10 23:02:23 Someone logged in</li>
                  <li><a href="">username</a> 2008-12-10 23:02:23 RSS feed updated</li>
                </ul>
              </div>
              
              <div id="gLogEntries" class="gBlock">
                <a href="" class="gClose">X</a>
                <h2>Log Entries</h2>
                <ul class="gBlockContent">
                  <li>2008-12-10 23:02:23 Something happened</li>
                  <li>2008-12-10 23:02:23 Someone logged in</li>
                  <li>2008-12-10 23:02:23 New module installed</li>
                  <li>2008-12-10 23:02:23 Someone logged in</li>
                  <li>2008-12-10 23:02:23 RSS feed updated</li>
                </ul>
              </div>
              
            </div>
          </div>
        </div>
        <div id="gSidebar" class="yui-b">
        
          <div id="gAvailableBlocks" class="gBlock">
            <a href="" class="gClose">X</a>
            <form class="gBlockContent">
              <fieldset>
                <legend>Add Dashboard Blocks</legend>
                <label for="">Available blocks</label>
                <select name="" id="">
                  <option>Somthing</option>
                  <option>Somthing else</option>
                </select>
              </fieldset>
            </form>
          </div>
          
          <div id="gPlatform" class="gBlock">
            <a href="" class="gClose">X</a>
            <h2>Gallery Stats</h2>
            <ul class="gBlockContent">
              <li>Version: 3.0</li>
              <li>Your gallery has 34 albums containing 842 photos with 26 comments.</li>
            </ul>
          </div>
          
          <div id="gPlatform" class="gBlock">
            <a href="" class="gClose">X</a>
            <h2>Platform Information</h2>
            <ul class="gBlockContent">
              <li>Platform
                <ul>
                  <li>Apache 2.0.24
                    <ul>
                      <li>mod_rewrite: active</li>
                    </ul>
                  </li>
                  <li>PHP 5.2.8
                    <ul>
                      <li>Memory: 32MB</li>
                      <li></li>
                      <li></li>
                    </ul>
                  </li>
                  <li>MySQL 5.0.1</li>
                  <li>Graphics Toolkits
                    <ul>
                      <li>ImageMagick 1.6</li>
                      <li>GD</li>
                      <li>FFMPEG</li>
                    </ul>                  
                  </li>
                </ul>
              </li>
            </ul>
            <p class="gWarning">^ Display as a tree widget</p>
          </div>
          
          <div id="gProjectNews" class="gBlock">
            <a href="" class="gClose">X</a>
            <h2>Gallery Project News</h2>
            <ul class="gBlockContent">
              <li>10-Apr <a href="#">Gallery 3.1 released!</a></li>
              <li>26-Feb <a href="#">New theme tutorials now available</a></li>
              <li>4-Feb <a href="#">Gallery 3.0 released!</a></li>
            </ul>
          </div>
          
        </div>
      </div>
      <div id="ft">
        <div id="gFooter">
          Footer
        </div>
      </div>
    </div>

  </body>
</html>