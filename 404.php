<?php /* Template Name: 404 */
  get_header()
?>

<main class="site-content site-content--brand-background">
	<div class="container">
		<h1 class="title title--xxxl">
      404 Error.
    </h1>

    <p>
    The page you were looking for couldn't be found.<br/>
    Maybe try a search?
    </p>

    <div class="row">
      <form role="search" class="col-md-8 relative error404__search" id="searchform" method="get" action="<?php echo home_url('/'); ?>">
        <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="Type something to search…">
        <span class="absolute right-0 bottom-1 w-auto">
          <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.6656 10.7188L15.7812 13.8344C16.0719 14.1281 16.0719 14.6031 15.7781 14.8969L14.8938 15.7812C14.6031 16.075 14.1281 16.075 13.8344 15.7812L10.7188 12.6656C10.5781 12.525 10.5 12.3344 10.5 12.1344V11.625C9.39688 12.4875 8.00937 13 6.5 13C2.90937 13 0 10.0906 0 6.5C0 2.90937 2.90937 0 6.5 0C10.0906 0 13 2.90937 13 6.5C13 8.00937 12.4875 9.39688 11.625 10.5H12.1344C12.3344 10.5 12.525 10.5781 12.6656 10.7188ZM2.5 6.5C2.5 8.7125 4.29063 10.5 6.5 10.5C8.7125 10.5 10.5 8.70938 10.5 6.5C10.5 4.2875 8.70938 2.5 6.5 2.5C4.2875 2.5 2.5 4.29063 2.5 6.5Z" fill="white"/>
          </svg>
        </span>
      </form>
    </div>
	</div>
</main>

<?php get_footer() ?>