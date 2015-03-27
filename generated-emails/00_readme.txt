HOW TO GENERATE A NEW TEMPLATE:

UPDATING THE CSS:
	1. Open styles.scss
	2. Change the $theme variable on line 37 to $c-blue. Save and compile.
	3. Open styles.css, copy everything.
	4. Open blue.css, delete everything and paste the copied source.
	5. Repeat for the remaining colors, replacing the source in each css file.


UPDATING THE HTML TEMPLATES:
	1. In the boilerplate.php file, uncomment the template you would like to export (lines 6-21)
	2. Open the boilerplate.php file in a browser and copy the source. Save as a new html file in a new folder under the generated-emails folder.
	3. Paste the content from the appropriate css file (see the note next to the $template varible in boilerplate.php) into a <style> block in the new html file.
	4. Delete the <link> reference in the new html file.
	5. Copy the source from the new html file. 
	6. Inline the CSS: http://zurb.com/ink/inliner.php