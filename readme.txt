=== Reinstall Plugins ===
Contributors: alex-ye
Tags: plugin, plugins, upload
Requires at least: 5.2.0
Tested up to: 5.2.3
Stable tag: 0.2
License: GPLv3 or later
License URI: https://www.gnu.org/licenses/gpl-3.0.en.html

A simple plugin to allow plugins re-installation.

== Description ==

Reinstall Plugins is a simple plugin that extends the WordPress built-in package installer. WordPress by default allows plugins installation by uploading ZIP archive files. However, the site's admins cannot upgrade any plugin using the same standard process. This plugin enables you to do so and saves you valuable time and effort.

WordPress sites' owners or developers used to upload their plugin updates using techniques like FTP/SSH/File Managers..etc. This consumes their time and even puts the website at a possible security risk, especially if they forgot the archive files publicly accessible or messed up something else.

Reinstall Plugins will fix and remove the common WordPress limitation "destination already exists" and delete the targeted plugin directory before installing the newer version. After that WordPress will take place and continue the regular installation or upgrade process.

A common use-case would be when a plugin developer wants to upload his plugin upgrades easily without the need for advanced deployment tools.

= Contributing =
Developers can contribute to the source code on the [Github Repository](https://github.com/nash-ye/wp-reinstall-plugins).

== Installation ==

1. Upload and install the plugin
2. Upload the plugin you want to re-install.

== Changelog ==

= 0.2 =
* Update codebase.

= 0.1 =
* The Initial version.
