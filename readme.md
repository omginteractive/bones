# Bare Bones
A Lightweight Wordpress Development Theme, fork from Bones Theme (http://github.com/eddiemachado/bones)

Bare Bones is designed to make the life of developers easier. It's built
using HTML5 & has a strong semantic foundation.

Designed by Online Marketing Group
http://onlinemarketinggrp.com/

License: Coprright OMG Interactive. All Rights Reserved
License URI: 
To view Release & Update Notes, read the CHANGELOG.md file in the main folder.

For more news and to see why my parents constantly ask me what I'm
doing with my life, follow me on twitter: @eddiemachado

## Install

1. install node dependencies (Terminal)
  * ```cd <path_to_the_bones_theme>```
  * run ```npm install```
2. make sure ```gulp``` is installed
  * if not install it like this: ```npm update -g npm && npm install -g gulp```
  * the ```npm update``` command above, might require Administrative privileges
3. start grunt on the server, the bones themes' root folder, to generate the CSS, and to watch for changes in the LESS files during development (while making changes to the LESS files, make sure that grunt is running in the server so that LESS files are automatically compiled to CSS)
  * ```cd <path_to_the_bones_theme>```
  * run ```gulp``` and leave the Terminal window open
  
#### Submit Bugs & or Fixes:
https://github.com/omginteractive/bones/issues
  