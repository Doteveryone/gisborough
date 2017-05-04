require 'sinatra'
require './lib/routing'

MAPPINGS.each do |route, options|
  get route do
    erb options[:template].to_sym, layout: :main_layout, locals: {pagetitle: options[:title]}
  end
end
