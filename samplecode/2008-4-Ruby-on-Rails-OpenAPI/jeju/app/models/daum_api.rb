require 'net/http'
require 'json'

class DaumAPI < ActiveRecord::Base
  APIKEY = "eabfe8aec71ad2abb19dec062851c995a8fa7e00"
  HOST = "apis.daum.net"
  
  def self.get_json(path, q)
    Net::HTTP.start(HOST) do |http|
      r = http.get("#{path}?apikey=#{APIKEY}&q=#{URI.encode(q)}&output=json")
      JSON.parse(r.body)['channel']
    end
  end

end
