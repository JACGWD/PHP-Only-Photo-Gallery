# PHP Includes Read Me

PHP includes are bits of code you use often in many different places. For example, you might have the same navigation bar on five thousand different pages on a web site. Why write it over and over again 5000 times? That's both a waste of time and error-prone. Includes let you write it once and "include" it in 5000 different places. That

The web server reads the "include" instruction in the PHP file and basically copy/pastes the *contents* of the included file where the instruction is on the page. When you look at the HTML source code in the browser, you just see the included code, not the PHP instructions.