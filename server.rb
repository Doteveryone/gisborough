require 'rack/ssl'
require 'sinatra'
require './lib/routing'

use Rack::SSL if ENV['RACK_ENV'] == 'production'

def is_home_for_path(path_string)
  path_string.strip == "/"
end

MAPPINGS.each do |route, options|
  get route do
    is_home = is_home_for_path(route)

    erb options[:template].to_sym, layout: :main_layout, locals: {pagetitle: options[:title], is_home: is_home}
  end
end
