##SAARCH Website Redesign

###Summary

Redesign of saarch.com. Focusing brand message, responsive webdesign, easy to use CMS.

###Tools Used

Framework: [Bootstrap](http://getbootstrap.com)

CMS: [Kirby](http://getkirby.com)

Filtering: [MixItUp 2](http://mixitup.kunkalabs.com)

###Features

Pages are dynamically generated from text files in the content folder. Each page template saved in site>templates pulls the appropriate text from the text file. Since there is no database to connect to, pages load extremely quickly, and it's very easy to change content.

The project filtering is decently robust. We can use any combination of tags we want to filter or sort projects.

###Adding a new project

To add a new project, duplicate the structure of one of the other projects. Replace 01 with the number you'd like the project to appear in order. You can use a utility like [Bulk Rename Utility](http://www.bulkrenameutility.co.uk/Main_Intro.php) to quickly renumber the folders if you add a new one.

Edit the project.txt file in that folder, but don't change the file name! Fill in the project detail in that text file. The CMS will automatically pull all of the information from this file and dynamically generate the page.

To add images, put jpgs in the file with the file naming convention 01.jpg, 02.jpg, 03.jpg, etc. The 01.jpg will be used for the project photo on the main project page. They should be saved at 800x600, but this will be made more flexible in the future.

###Editing a page
Almost all of the content for the site is loaded from the text files stored in the content folder. Some things, like headings, are in the site>template folder, and in their respective template. To change the content on the site, all you need to do is change the text in the text file.

For example, if I wanted to update a project description, I would open up the project.txt file in content>03-projects>insert-project-name-here. The project description is in the "Text" section. Changing it in that text file will change it throughout the whole site. Same thing with the project title. Changing it there will change it on the project page, on the project thumbnails, and on any relevant project link.

###Adding a relevant project
Adding a list of relevant projects for each project is a little bit tricky. At the bottom of the project.txt file for the project you want to edit, you'll see the "Related" tag. There have to be exactly 4 relevant projects, in the format "-/project/project-name". Note that you need both the hyphen at the beginning and the project name WITHOUT the number in front of it.