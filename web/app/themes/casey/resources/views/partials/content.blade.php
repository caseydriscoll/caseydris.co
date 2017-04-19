<article @php(post_class())>
  <header>
    <h2 class="entry-title">
      @php( fab_the_category_link() )
      <a href="{{ get_permalink() }}">{{ get_the_title() }}</a>
    </h2>
    @include('partials/entry-meta')
  </header>
  <div class="entry-summary">
    @php(the_excerpt())
  </div>
</article>
