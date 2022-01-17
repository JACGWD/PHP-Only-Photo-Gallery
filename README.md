# PHP-Only-Photo-Gallery
 Simple introductory exercise for learning PHP basics


## Web IV Sequence

### Definitions
- Web 1.0
  - HTML
  - Inline style
  - Table based design
  - Single content author/publisher
  - Golden age of Dreamweaver
  - Desktop-only
- Web 2.0
  - Database-driven content
  - Social/Community based content
  - Templates
  - Cascading Style Sheets (for all style)
  - Javascript (interactivity)
  - Large scale platforms: Facebook, Google, etc
  - Mobile (mainly) & Desktop, and many others
- Web 3?
  - Decentralized?
  - Blockchain-driven?
  
  
### Web technology vocabulary
  - Web hosting 
  - Web server
  - Database
  - Database server
  - Domain Name System (DNS)
  - Whois
  - Ping
  - Traceroute
  - Linux
  - Apache
  - MySQL
  - PHP

### Introduction to various software used in Web 2.0
- LAMP (servers)
  - Linux
  - Apache
  - MySQL
  - PHP
- MAMP (for local development)
  - Your MAMP does not require the internet to work
- Visual Studio Code
  - Multi-language editor
    - HTML
    - CSS
    - PHP
    - Javascript
    - Markdown
    - Many many more
- GitHub
  - Site
  - Atom (VS Code)
  - Desktop
### Cascading Style Sheets
  - Page layout
  - Typography
  - Animation

### Exercises & Projects
#### Install MAMP
- For Mac
- For Windows
#### Install GitHub Desktop 
- Share /Applications/MAMP/htdocs/ as a repository
- Intro to push/pull
#### Intro to PHP
- Variables
- Constants
- Includes (require)
- Files
  - index
  - header
  - footer
  - nav
- Folders
  - Data source
  - Themes
    - Active theme
      - functions

### What you Need to Know About PHP

#### Basic Concepts
- PHP contains instructions given directly to the web server.
- PHP is used to get data from the MySQL database server.
- PHP is case sensitive. Usually lowercase. Constants are written in ALL CAPS.
- PHP tags can be inserted inside HTML
- A PHP tag starts with <?php
- A PHP tag ends with ?>
- A PHP instruction always finishes with a ; at the end of the line. 
- You can name a file index.html or index.php, it makes no difference to the Apache web server.
- A .php file with only HTML inside works fine.
- If you add PHP code to a .html file, it will not work because the .php file extension tells Apache to do read and execute the PHP instructions inside the file.
- PHP can use either "double quotes" or 'single quotes'.

#### PHP variables
- The $ symbol means "variable".
- You give a variable a name and a value like this: $name = "value"; Ex: $firstname = "John";



#### PHP Quirks
- PHP "lives" in a different folder than than Apache. Sometimes you have to tell PHP exactly where you want it to find files. Ex: the "root" folder for PHP is "PHP" while for Apache the "root" folder is "htdocs". This is important when you include (or require) files.
- "echo" in PHP is the same as "print this on the screen".
- Concatenation: the "putting together" of different pieces of information with PHP. For example: echo "John" . " Smith"  The dot in between the two quoted pieces of text tells PHP to print "John" and then " Smith". (note the space before the capital S, otherwise you would get JohnSmith).
- If you want PHP to add extra lines in between tags add this to the end of an echo line:  . "\r\n"; 
- When writing HTML that has double quotes (like <a href=\"\">) inside a PHP tag, use single quotes for the line of PHP. It won't interfere with the HTML. Ex: <?php echo '<a href="something ' 

#### Database-related PHP Concepts
- Recordset: a set of information pulled from a database query. Ex: data for multiple web pages.
- Record: one single record that is part of a dataset. Ex: data for one single web page.

#### PHP Data Structures
- A PHP array is a set of related information.
- A constant is a piece of information that never changes.
- A variable is a piece of information that always changes.

#### PHP Debugging
- PHP can break easily. Don't worry about it. 
- PHP writes errors to the Applications/MAMP/logs/php_error.log file. Look at it often.
- A completely blank white screen means PHP encountered an error and died. Look at the PHP error log.
