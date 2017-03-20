# config valid only for current version of Capistrano
lock '3.6.1'

set :application, 'gisborough'
set :repo_url, 'git@github.com:infovore/gisborough.git' 

set :scm, :git
set :ssh_options, { :forward_agent => true }

set :deploy_via, :remote_cache
set :copy_exclude, [".git", ".DS_Store", ".gitignore", ".gitmodules", "README.md", "config.rb", "scss", "config/"]

role :app, %w{twra2@paprika.tomarmitage.com}

namespace :deploy do

  desc 'Restart application'
  task :restart do
    on roles(:app), in: :sequence, wait: 5 do
      # Your restart mechanism here, for example:
      # execute :touch, release_path.join('tmp/restart.txt')
    end
  end

  after :restart, :clear_cache do
    on roles(:web), in: :groups, limit: 3, wait: 10 do
      # Here we can do anything such as:
      # within release_path do
      #   execute :rake, 'cache:clear'
      # end
    end
  end

  after :finishing, 'deploy:cleanup'

end
