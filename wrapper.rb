
require "net/http"
require "uri"


opt1 = ARGV[0]
apiKey = ARGV[1]
opt2 = ARGV[2]
apiSecret = ARGV[3]
opt3 = ARGV[4]
file_name = ARGV[5]
opt4 =ARGV[6]
ci = ARGV[7]

path =ci+"/job/"+ENV['JOB_NAME']+"/ws/"+file_name



uri = URI.parse("http://10.187.39.62:9090/api_select/")

# Shortcut
#response = Net::HTTP.post_form(uri, {"apiKey" => "My query", "apiSecret" => "50","URL" => "8080"})

# Full control
http = Net::HTTP.new(uri.host, uri.port)

request = Net::HTTP::Post.new(uri.request_uri)
request.set_form_data({"apiKey" => apiKey, "apiSecret" => apiSecret,"URL" => path})

response = http.request(request)

puts response.body
