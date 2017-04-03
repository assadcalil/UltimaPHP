## UltimaPHP - Ultima Online OpenSource Server

UltimaPHP is a modern Ultima Online server written in PHP 7.0.

This server was created for thoes who ever wanted to create differend addaptations on the core of your shard.

I decided to build this project for study propose i've re-scripted the entire socket server to understand how it works and after that i decided to create a lightweight standalone version of the server that runs in any OS easly.

Note 1: The server works with clients 6.0.13 or greater, since this version many packets was changed and we will not spent time with older clients for now.

Note 2: I'm developing using the Ultima Online Classic Client Patch version 59 - 7.0.20.0

## How to install?

First of all you will need to install PHP 7.0 or greater, I reccomend to use PHP 7.1 it's ultra fast and MySQL Server 5.7 (or any database compatible with PDO) on your machine, for that open this links:

* [PHP download page](http://php.net/downloads.php) and get the version of PHP you want to use
* [MySQL dowload page](http://dev.mysql.com/downloads/mysql/) and get the right version of MySQL for your machine.

After install PHP and MySQL on the machine (mysql will ask to create the password or a new user on the instalation), edit the file ```ultimaphp.ini``` as you wish, import the file ```database.sql``` to your database (with some query program, like [MySQL Workbench](https://dev.mysql.com/downloads/workbench/)) and follow the next steps to start the server:

Note 1: The default owner account/password in the database is: test/test

Note 2: The default player account/password in the database is: test2/test

Note 3: Passwords is allways stored in MD5 encryption both in database and in server variables

### Linux

 * Open the terminal and navigate to the root folder of UltimaPHP project
 * Type: ```php7.0 startserver.php```

### Mac

 * We need someone with mac to help us :)

### Windows

 * Open the run dialog (SUPER+R) and type ```cmd``` then run
 * Navigate to PHP installation folder ```cd c:\php\installation\folder\```
 * And start the server ```php.exe c:\ultimaphp\instalation\folder\startserver.php```

## Base PHP compilation
#### For those, like me, who preffer to use an most performatic standalone PHP, with only what it really needs
```bash
./configure --prefix=/usr --with-config-file-path=/etc --enable-sockets --enable-bcmath --enable-mbstring --enable-zip --enable-pcntl --enable-ftp --enable-exif --enable-sysvmsg --enable-sysvsem --enable-sysvshm --enable-wddx --with-mcrypt --with-iconv --with-zlib-dir=/usr --with-xpm-dir=/usr --with-openssl --with-pdo-mysql=/usr --with-gettext=/usr --with-zlib=/usr --with-bz2=/usr --with-mysqli=/usr/bin/mysql_config
make
make install
```

### What is already working?

 * Package compression using the Huffman algorythin and the pre-defined Ultima Online Byte Tree
 * Package decompression using the Huffman algorythin and auto-generated Byte Trees (We dont really use it, but we've made it anyway)
 * Response PING request
 * Disconnect player
 * Login request
 * Login validation trought PDO Database
 * Send confirmation login packet
 * Server list response
 * Get client version information
 * Client server selection
 * Character list trought PDO Database (for old and new clients, packet change since client 7.0.13.0)
 * Client character selection
 * Enable locked client features
 * Receive the client language (We will use later to create an multi-language system)
 * Receive the client Screen Size (I really dunno why... but the client sends anyway before connect to the server, it may be used for enhanced client)
 * Receive the client flags (I dunno what this is too... but the client sends anyway before connect to the server, it may be used for enhanced client)
 * Send the player locale and body information to the client
 * Send all skill status to the client (the packet is already done but we need to create the database to store the skills and show the information on the packet to the client, for now we send all skills at 100.0 and all stats to 100)
 * Connecting the client to the world
 * Rendering multiple chars in the world
 * Handling many connections 
 * Update cursor color (Peace/War)
 * Play music
 * Update status bar info
 * Walk with the character on the world
 * Render and sync packet sending for clients around the player (still need get better)
 * Open Paperdoll
 * Changes sector light
 * Changes sector weather
 * Changes sector season
 * Change client render map range
 * Enable map diffs on the client
 * Drawn char and player in the world
 * Define mount speed
 * Show extended status
 * Change to war mode
 * Change to peace mode
 * Support for Encrypted clients (10%, we founded information about encrypt/decrypt the packets using the BLOWFISH/TWOFISH algorythin so it's an feature improvement)
 * Character Speech fully working
 * Character Speech renderin for players around fully working
 * Sysmessages
 * Unicode text
 * Item addition (command: .i <item> or .i <item>,arguments you want)

#### Usefull links that could help you code
 * [Sublime Text 3](http://www.sublimetext.com/3) recommended IDE used to program the server
 * [CodeFormatter](https://github.com/akalongman/sublimetext-codeformatter) used to format the code in K&R style
 * [SocketSniff](http://nirsoft.net/utils/socket_sniffer.html) program i use to monitor an program sockets communication
 * [POL Packet Guide](http://docs.polserver.com/packets/index.php) for learning all about the packages sent trought server and client
 * [Sphere 0.56d source](https://github.com/Sphereserver/Source) to discover how things works, maybe...
 * [RunUO repository](https://github.com/runuo/runuo) to see how things works
 * [POL Repository](https://github.com/polserver/polserver) to see how things works
 * [Ultima Online Classic - Patch 59 - 7.0.20.0](https://docs.google.com/uc?id=0B5JIbJ4zjyOaTnZEMmhjZW5oYnc&export=download) to download the same version i'm using to build the server

### Coding padronization

 * All .php files should start with `<?php and end with ?>`
 * All .php files should have the comment line header
 * All class names starts with UPPERCASE character, IE: class ClassName {...}
 * All method names must start with LOWERCASE character and all next words start with UPPERCASE character with no space, IE: goodMethodName()
 * All codes must be idented with tab
 * All codes must be formatted in K&R style before commited, manually or using your preffered tool

### Database padronization

 * All data storage tables must have an ID indexed
 * All secure information, like passwords, must be stored encrypted
 * All relashionship must have an foreign key linkng the table columns
 * All tables names must be LOWERCASE and words separated with underline, IE: good_table_name

#### CodeFormatter PHP configuration default:
```js
"codeformatter_php_path": "C:/php/php.exe",
"codeformatter_php_options":
{
    "indent_size": 1,
    "indent_with_tabs": true,
    "indent_style": "k&r",
    "newline_before_comment": true,
    "new_line_before": "",
    "new_line_after": "",
    "format_array_nested": true,
    "pear": true,
    "pear_add_header": "",
    "pear_newline_class": true,
    "pear_newline_trait": true,
    "pear_newline_function": false,
    "pear_switch_without_indent": false,
    "lowercase": true,
    "fluent": false,
    "list_class_function": false,
    "equals_align": false,
    "phpbb": false,
    "space_in_paren": false,
    "space_in_square": false
}
```

### Authors

 * João Escribano - Brazil
 * Ankron  - USA