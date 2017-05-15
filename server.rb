require 'sinatra'
require './lib/routing'

helpers do
  def is_home
    !locals[:title]
  end
end

def is_home_for_path(path_string)
  path_string.strip == "/"
end

MAPPINGS.each do |route, options|
  get route do
    is_home = is_home_for_path(route)

    erb options[:template].to_sym, layout: :main_layout, locals: {pagetitle: options[:title], is_home: is_home}
  end
end
