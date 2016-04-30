import math

inputf = open("intel.csv")
outputf = open("log.csv","w")
content = inputf.readline()
lines = content.strip().split(';')
X = []
Y = []
for i,line in enumerate(lines):
  parts = line.split(',')
  parts[1] = float(parts[1])*1000000000
  parts[2] = float(parts[2])*1000000
  if i == 0:
    unitcost = parts[2]/parts[1]
  X.append(math.log10(parts[1]))
  Y.append(math.log10(unitcost))
 

for i,val in enumerate(X):
  outputf.write(str(val) + "," + str(Y[i]) + '\n')

