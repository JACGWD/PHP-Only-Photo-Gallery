# Read Me: Templates files folder

In PHP-based web sites, the templates are the place where designers create the HTML. 

Templates define what HTML parts go on what page. In other words, they define the functionality of the page: navigation, forms, text and image content, sidebars, footer, etc.

Templates don't have content, they are placeholders - very much like master pages in InDesign. The modern web is all about templates calling up the content from a database. Programmers worry about getting the content out of the database and into the template. Designs take that content and design it/lay it out by using HTML and CSS.

The tricky part is "filling in the blanks", mixing the PHP that calls up the content with the HTML of the template. It is a bit tricky at first but it gets easy once you get the principle.

## Tip

- PHP can use either "double quotes" or 'single quotes'
- Always use single quotes for PHP because HTML uses double quotes: it is less confusing that way and also avoids conflicts with double quotes
  