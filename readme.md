##SAARCH Website Redesign

###Summary

Redesign of saarch.com. Focusing brand message, responsive webdesign, easy to use CMS.

###Tools Used

Framework: [Bootstrap](http://getbootstrap.com)

CMS: [Kirby](http://getkirby.com)

Filtering: [MixItUp 2](http://mixitup.kunkalabs.com)

###Features

Pages are dynamically generated from text files in the content folder. Each page template saved in site>templates pulls the appropriate text from the text file. Since there is no database to connect to, pages load extremely quickly, and it's very easy to change content.

The project filtering is very robust. We can use any combination of tags we want to filter or sort projects.

###Adding a new project

To add a new project, duplicate the project-template folder, and rename it with the format "01-project-name". Replace 01 with the number you'd like the project to appear in order. You can use a utility like [Bulk Rename Utility](http://www.bulkrenameutility.co.uk/Main_Intro.php) to quickly renumber the folders if you add a new one.

Edit the project.txt file in that folder, but don't change the file name! Fill in the project detail in that text file. The CMS will automatically pull all of the information from this file and dynamically generate the page.

To add images, put jpgs in the file with the file naming convention 01.jpg, 02.jpg, 03.jpg, etc. The 01.jpg will be used for the project photo on the main project page. They should be saved at 800x600, but this will be made more flexible in the future.

