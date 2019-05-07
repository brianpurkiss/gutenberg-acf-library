
## Quick instructions for registering Gutenberg blocks


`sample-block-register-block.php` registers the Gutenberg Block while `block-sample-block.php` is the block contents. `acf-declaration.php` is the ACF field declaration in PHP form, but it doesn't have to be in a php file.

Once a block has been registered and then called from `acf.php` - the block contents will automatically be called. So all you need to do is declare and name the block.

The block contents is built out just like any other ACF content using the_field(), get_field(), repeater loops, and whatever else you may wish to use.

This block should have a corresponding SCSS file in the library with a matching file name and directory. Keeping the block's styles in an isolated file allows for easy long term maintenance and scaling.

Putting the contents of the block in a separate file and calling it from `block-sample-block.php` allows you to use the layout as a page section or a Gutenberg Block. For example, if you have a footer CTA that you want to use in the footer as a page setting and as a Gutenberg Block so you can use it elsewhere, then that can be possible with a singular codebase. 
