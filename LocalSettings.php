<?php
# This file was automatically generated by the MediaWiki 1.32.0
# installer. If you make manual changes, please keep track in case you
# need to recreate them later.
#
# See includes/DefaultSettings.php for all configurable settings
# and their default values, but don't forget to make changes in _this_
# file, not there.
#
# Further documentation for configuration settings may be found at:
# https://www.mediawiki.org/wiki/Manual:Configuration_settings

# Protect against web entry
if ( !defined( 'MEDIAWIKI' ) ) {
	exit;
}


## Uncomment this to disable output compression
# $wgDisableOutputCompression = true;

$wgSitename = "Robotic Eagles Wiki (aka the Build Season Bible)";
$wgMetaNamespace = "Robotic_Eagles_Wiki_(aka_the_Build_Season_Bible)";

## The URL base path to the directory containing the wiki;
## defaults for all runtime URL paths are based off of this.
## For more information on customizing the URLs
## (like /w/index.php/Page_title to /wiki/Page_title) please see:
## https://www.mediawiki.org/wiki/Manual:Short_URL
$wgScriptPath = "";

## The protocol and server name to use in fully-qualified URLs
$wgServer = "http://www.roboticeagles.dreamhosters.com";


## The URL path to static resources (images, scripts, etc.)
$wgResourceBasePath = $wgScriptPath;


$wgUploadDirectory = $wgResourceBasePath;

# Uploads:
$wgUploadPath = "img_auth.php";

// Add several file types to the default array
$wgFileExtensions = array_merge(
    $wgFileExtensions, array(
        'pdf', 'ppt', 'jp2', 'webp', 'doc','docx', 'xls', 'xlsx', 'jpg', 'jpeg', 'png', 'xml', 'html', 'cpp', 'jar', 'js', 'py', 'c', 'h', 'php', 'stl', 'dwg', 'dxf', 'dgn', 'sh', 'mp3', 'flac', 'wav', 'aiff', 'aac', 'ogg', 'wma', 'alac'
        )
    );

## The URL path to the logo.  Make sure you change this from the default,
## or else you'll overwrite your logo when you upgrade!
$wgLogo = "$wgResourceBasePath/resources/assets/robotic_eagle_logo.jpg";

## UPO means: this is also a user preference option

$wgEnableEmail = true;
$wgEnableUserEmail = true; # UPO

$wgEmergencyContact = "apache@www.roboticeagles.dreamhosters.com";
$wgPasswordSender = "apache@www.roboticeagles.dreamhosters.com";

$wgEnotifUserTalk = true; # UPO
$wgEnotifWatchlist = true; # UPO
$wgEmailAuthentication = true;

## Database settings
$wgDBtype = "mysql";
$wgDBserver =  "127.0.0.1"; #"mysql.roboticeagles.dreamhosters.com";
$wgDBname = "roboticeagles_dreamhoste";
$wgDBuser = "roboticeaglesdre";
$wgDBpassword = "thefirstlawofrobotics";

# MySQL specific settings
$wgDBprefix = "";

# MySQL table options to use during installation or update
$wgDBTableOptions = "ENGINE=InnoDB, DEFAULT CHARSET=binary";

## Shared memory settings
$wgMainCacheType = CACHE_NONE;
$wgMemCachedServers = [];

## To enable image uploads, make sure the 'images' directory
## is writable, then set this to true:
$wgEnableUploads = true;
$wgUseImageMagick = true;
$wgImageMagickConvertCommand = "/usr/bin/convert";

# InstantCommons allows wiki to use images from https://commons.wikimedia.org
$wgUseInstantCommons = false;

# Periodically send a pingback to https://www.mediawiki.org/ with basic data
# about this MediaWiki instance. The Wikimedia Foundation shares this data
# with MediaWiki developers to help guide future development efforts.
$wgPingback = true;

## If you use ImageMagick (or any other shell command) on a
## Linux server, this will need to be set to the name of an
## available UTF-8 locale
$wgShellLocale = "C.UTF-8";

## Set $wgCacheDirectory to a writable directory on the web server
## to make your wiki go slightly faster. The directory should not
## be publically accessible from the web.
#$wgCacheDirectory = "$IP/cache";

# Site language code, should be one of the list in ./languages/data/Names.php
$wgLanguageCode = "en";

$wgSecretKey = "440f44e61236629f8786236345d74d5cb7e466ce6e14941345fa9692d87afb21";

# Changing this will log out all existing sessions.
$wgAuthenticationTokenVersion = "1";

# Site upgrade key. Must be set to a string (default provided) to turn on the
# web installer while LocalSettings.php is in place
$wgUpgradeKey = "b721c4b879b71c94";

## For attaching licensing metadata to pages, and displaying an
## appropriate copyright notice / icon. GNU Free Documentation
## License and Creative Commons licenses are supported so far.
$wgRightsPage = ""; # Set to the title of a wiki page that describes your license/copyright
$wgRightsUrl = "";
$wgRightsText = "";
$wgRightsIcon = "";

# Path to the GNU diff3 utility. Used for conflict resolution.
$wgDiff3 = "/usr/bin/diff3";

# The following permissions were set based on your choice in the installer
# * permissions: createaccount, createpage, createtalk, edit, editmyoptions, editmyprivateinfo, editmywatchlist, read, viewmyprivateinfo, viewmywatchlist, writeapi
$wgGroupPermissions['*']['createaccount'] = false;
$wgGroupPermissions['*']['edit'] = false;
$wgGroupPermissions['*']['read'] = false;

# admin permissions: applychangetags, changetags, createaccount, createpage, createtalk, edit, editcontentmodel, editmyusercss, editmyuserjs, editmyuserjson, minoredit, move, move-categorypages, move-rootuserpages, move-subpages, movefile, purge, read, reupload, reupload-shared, sendemail, upload, writeapi
$wgGroupPermissions['admin'] = $wgGroupPermissions['user'];
$wgGroupPermissions['admin']['createaccount'] = true;

# user permissions: applychangetags, changetags, createpage, createtalk, edit, editcontentmodel, editmyusercss, editmyuserjs, editmyuserjson, minoredit, move, move-categorypages, move-rootuserpages, move-subpages, movefile, purge, read, reupload, reupload-shared, sendemail, upload, writeapi
$wgGroupPermissions['user']['move'] = false;

# viewer permissions: 
$wgGroupPermissions['viewer'] = $wgGroupPermissions['*'];
$wgGroupPermissions['viewer']['read'] = true;


$wgWhitelistRead = array(
    "Sponsors", "Fundraising", "MediaWiki:Common.css", "MediaWiki:Common.js"
    );

## Default skin: you can change the default skin. Use the internal symbolic
## names, ie 'vector', 'monobook':
$wgDefaultSkin = "timeless";

# Enabled skins.
# The following skins were automatically enabled:
wfLoadSkin( 'MonoBook' );
wfLoadSkin( 'Timeless' );
wfLoadSkin( 'Vector' );


# Enabled extensions. Most of the extensions are enabled by adding
# wfLoadExtensions('ExtensionName');
# to LocalSettings.php. Check specific extension documentation for more details.
# The following extensions were automatically enabled:
wfLoadExtension( 'CodeEditor' );
wfLoadExtension( 'ConfirmEdit' );
wfLoadExtension( 'Interwiki' );
wfLoadExtension( 'MultimediaViewer' );
wfLoadExtension( 'PdfHandler' );
wfLoadExtension( 'Renameuser' );
wfLoadExtension( 'ReplaceText' );
wfLoadExtension( 'SpamBlacklist' );
wfLoadExtension( 'TitleBlacklist' );
wfLoadExtension( 'WikiEditor' );
wfLoadExtension( 'SyntaxHighlight_GeSHi' );


# End of automatically generated settings.
# Add more configuration options below.

