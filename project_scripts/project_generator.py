import csv
import os

localDir = "C:/wamp/www/content/03-projects/"

newline = '\n'

sep = '----' + newline

with open('projects.csv', newline='') as f:
	reader = csv.reader(f)
	for row in reader:
        
		fullname = localDir + row[0] + "-" + row[1] + "/"

		if not os.path.exists(fullname):
			os.makedirs(fullname)

		os.chdir(fullname)

		with open("project.txt", 'a') as t:

			t.write("Title: " + row[2] + newline)
			t.write(sep)
			t.write("Client: " + row[3] + newline)
			t.write(sep)
			t.write("Location: " + row[4] + newline)
			t.write(sep)
			t.write("Date: " + row[5] + "/01/01" + newline)
			t.write(sep)
			t.write("SF: " + row[6] + newline)
			t.write(sep)
			t.write("Tags: " + row[7] + newline)
			t.write(sep)
			t.write("Text: Duis placerat blandit velit eu maximus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed tristique dui ac leo pharetra pulvinar. Maecenas id sodales ipsum. Proin placerat quam sed ligula varius tempus. Aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit." + newline + newline + "Sed consequat, nibh ut interdum consequat, est metus placerat neque, sed ultricies sapien est vitae risus. Fusce viverra sapien neque, eu tempor leo iaculis at. Nunc tincidunt felis id aliquam volutpat. Sed vel libero eu libero lacinia consequat. Sed maximus augue enim, sit amet semper mi imperdiet et. Curabitur felis risus, scelerisque id magna a, aliquam sollicitudin ligula. Donec vel dui nec odio iaculis aliquet. Vestibulum molestie tortor et scelerisque scelerisque. Donec sagittis at urna at dignissim. Nulla facilisi. Aliquam vulputate ante in nunc aliquet, nec pulvinar lectus v" + newline)

