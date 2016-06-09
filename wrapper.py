import urllib, urllib2
import sys
import os
opt1 = sys.argv[1]
apiKey = sys.argv[2]
opt2 = sys.argv[3]
apiSecret = sys.argv[4]
opt3 = sys.argv[5]
file = sys.argv[6]
opt4 = sys.argv[7]
ci = sys.argv[8]


url = 'http://digitalsecurity-7407mm42.cloudapp.net/api/'
path = ci+'/job/'+os.environ['JOB_NAME']+'/ws/'+file
values = {'apiKey' : apiKey,
          'apiSecret' : apiSecret,
          'URL' : path
           }


data = urllib.urlencode(values)
req = urllib2.Request(url, data)
response = urllib2.urlopen(req)
#print response.geturl()
#print response.info()
the_page = response.read()
print the_page
