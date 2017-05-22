# Doteveryone explainers

code/content for explainers for [DotEveryone][doteveryone].

A [Sinatra][sinatra] application designed for deployment onto your PAAS of a choice (though really, it's just a stack of flat pages).

## DEVELOPMENT

You'll need [bundler][bundler] installed. Then:

```
bundle install
```

from the application directory will install everything you need, and

```
bundle exec rackup
```

will run a local server at `localhost:9292` and you can tweak to your heart's content. (If you prefer a server that will live-reload `server.rb` when it changes, you will want to `bundle exec shotgun`.

Note that styles are composed in `scss/gisborough.scss` . [Compass][compass] will compile them into CSS for you - just run `bundle exec compass watch` from the application directory to sit and generate full-fat CSS as necessary. Both compiled CSS and original SCSS are checked into Github.

## "Gisborough"?

[Gisborough.][gisborough]

[doteveryone]: http://www.doteveryone.org.uk
[sinatra]: http://www.sinatrarb.com/
[compass]: http://compass-style.org/
[bundler]: http://bundler.io/
[gisborough]: https://en.wikipedia.org/wiki/Gisborough_Moor
