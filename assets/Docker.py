#! /usr/bin/python3
# -*- coding: utf-8 -*-

import os

p = []

fl = open("/var/www/html/Reporteador/assets/ports.txt","r+")
for line in fl.readlines():
	p.append(str(int(line)+1)+"\n")
fl.seek(0)
fl.writelines(p)
fl.close()

P=[]
f = open("/var/www/html/Reporteador/assets/ports.txt","r+")
for line in f.readlines():
	P.append(str(int(line)))
f.close()

cmd = 'docker run -p '+P[0]+':5044 -p '+P[1]+':5601 -p '+P[2]+':9200 -p '+P[3]+':9300 --name welk'+P[4]+' elk'

print (cmd)
os.system (cmd)