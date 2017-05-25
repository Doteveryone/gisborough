if ENV['RACK_ENV'] == 'production'
  require 'rack/ssl'
end

require 'sinatra/base'
require './lib/routing'

class Gisborough < Sinatra:: Base
  def is_home_for_path(path_string)
    path_string.strip == "/"
  end

  MAPPINGS.each do |route, options|
    get route do
      is_home = is_home_for_path(route)

      erb options[:template].to_sym, layout: :main_layout, locals: {pagetitle: options[:title], is_home: is_home}
    end
  end
end
