import csv
import os
import xml.etree.ElementTree as ET

tree = ET.parse('blog_export.xml')
root = tree.getroot()

localDir = "C:/wamp/www/content/04-blog/"

newline = '\n'

sep = newline + '----'+ newline

for post in range(17, 37):

	itemnum = post - 16
	foldername = str(itemnum) + "-" + root[0][post][13].text
	
	author = str(root[0][post][3].text)
	author = author.replace('walter', 'Walter Schacht')
	author = author.replace('admin', 'Marshall Turner')
	author = author.replace('cima', 'Cima Malek-Aslani')
	author = author.replace('neil', 'Neil Parrish')
	author = author.replace('shazi', 'Shazi Tharian')
	author = author.replace('chris', 'Chris Taucher')
	author = author.replace('jonathan', 'Jonathan French')
	author = author.replace('evan', 'Evan Bourquard')

	postText = root[0][post][6].text

	fullname = localDir + foldername + "/"

	if not os.path.exists(fullname):
		os.makedirs(fullname)

	os.chdir(fullname)

	with open("blogarticle.txt", 'a') as t:

		t.write("Title: " + root[0][post][0].text)
		t.write(sep)
		t.write("Date: " + root[0][post][2].text)
		t.write(sep)
		t.write("Author: " + author)
		t.write(sep)
		t.write("Text: " + postText)
		t.write(sep)