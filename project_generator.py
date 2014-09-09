import csv
import os

directory = "C:/wamp/www/content/03-projects/"

with open('projects.csv', newline='') as csvfile:
	spamreader = csv.reader(csvfile, delimiter=',', quotechar='"')
	for row in spamreader:
        
		foldername = row[0]+"-"+row[1]+"/"
		filename = "project.txt"
		fullpath = directory+foldername

		if not os.path.exists(fullpath):
			os.makedirs(fullpath)

		os.chdir(fullpath)

		fh = open(filename, 'a')

		newline = "\n"
		sep = "----"+newline

		fh.write("Title: "+row[2]+newline)
		fh.write(sep)
		fh.write("Client: "+row[3]+newline)
		fh.write(sep)
		fh.write("Location: "+row[4]+newline)
		fh.write(sep)
		fh.write("Date: "+row[5]+newline)
		fh.write(sep)
		fh.write("Tags: "+row[7]+newline)
		fh.write(sep)
		fh.write("SF: "+row[6]+newline)
		fh.write(sep)
		fh.write("Text: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel tincidunt neque. Integer luctus sapien a mi aliquet, ornare rutrum quam luctus. Sed convallis enim sit amet posuere bibendum. Nam diam nibh, pellentesque et imperdiet nec, cursus egestas dui. Curabitur et erat at justo venenatis scelerisque. Vivamus at pellentesque orci. Nullam a metus id neque hendrerit efficitur. Praesent imperdiet purus eu vestibulum pellentesque. Nam non ligula id ante egestas tincidunt. Curabitur pharetra augue id lacus aliquet, ac bibendum ex aliquet. Proin massa libero, posuere et lectus vel, ultrices fermentum dui. Etiam porttitor dignissim dolor, vitae condimentum augue rhoncus sit amet."+newline+newline+"Mauris fringilla convallis risus, eu lacinia leo tincidunt eget. In mattis sed dui sit amet porttitor. Aenean accumsan leo ipsum, ut pretium metus ultricies quis. Vestibulum lacinia nunc et dui accumsan convallis. Etiam vulputate elit sit amet purus fringilla, vitae fringilla nibh placerat. Fusce tincidunt velit in ipsum feugiat, quis congue metus feugiat. Fusce aliquet nec lacus quis mattis. Morbi magna massa, faucibus finibus tortor sed, consequat viverra nisl. Duis leo mi, commodo sit amet neque eget, dictum bibendum est. Vestibulum rhoncus nulla non quam dictum blandit. Duis tincidunt aliquam leo a pulvinar. Cras laoreet lorem ex, in posuere ante pulvinar et."+newline)
		fh.write(sep)