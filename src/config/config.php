<?php

return array(

	/**
	 * URI of the blog
	 */
	'uri' => 'blog',

	/**
	 * Page title of the blog index page
	 *
	 * @type string
	 */
	'index_page_title' => 'My blog',

	/**
	 * Meta description of the blog index page
	 *
	 * @type string
	 */
	'index_page_meta_description' => 'This is the description for my blog',

	/**
	 * Meta keywords of the blog index page
	 *
	 * @type string
	 */
	'index_page_meta_keywords' => 'These are the keywords for my blog',

	/**
	 * RSS feed title
	 *
	 * @type string
	 */
	'rss_feed_title' => 'My blog',

	/**
	 * RSS feed description
	 *
	 * @type string
	 */
	'rss_feed_description' => 'This is the description for my blog',

	/**
	 * Determines whether to show adjacent (i.e. previous and next) post links on the post view page
	 *
	 * @type bool
	 */
	'show_adjacent_posts_on_view' => true,

	/**
	 * Determines whether to show the archives on the index page
	 *
	 * @type bool
	 */
	'show_archives_on_index' => true,

	/**
	 * Determines whether to show the archives on the view page
	 *
	 * @type bool
	 */
	'show_archives_on_view' => true,

	/**
	 * The number of posts to show per page on the index
	 *
	 * @type int
	 */
	'results_per_page' => 4,

	/**
	 * Date format for published date, shown on posts.index and posts.view. Should be
	 * a valid date() format string, e.g.
	 *
	 * @type string
	 */
	'published_date_format' => 'j\<\s\u\p\>S\<\/\s\u\p\> F \'y',

	/**
	 * The view to use for the posts index page. You can change this to a view in your
	 * app, and inside your own view you can @include the various elements in the package
	 * or you can use this one provided, but there's no layout or anything.
	 */
	'index_view' => 'laravel-blog::index',

	/**
	 * The view to use for the post detail page. You can change this to a view in your
	 * app, and inside your own view you can @include the various elements in the package
	 * or you can use this one provided, but there's no layout or anything.
	 */
	'view_view' => 'laravel-blog::view',

	/**
	 * The path, relative to the public_path() directory, where the original images are stored.
	 */
	'originals_dir' => '/uploads/packages/fbf/laravel-blog/originals/',

	/**
	 * The path, relative to the public_path() directory, where the thumbnail images are stored.
	 */
	'thumbnails_image_dir' => '/uploads/packages/fbf/laravel-blog/thumbnails/',

	/**
	 * The width of the thumbnail images.
	 */
	'thumbnail_image_width' => 200,

	/**
	 * The height of the thumbnail images.
	 */
	'thumbnail_image_height' => 150,

	/**
	 * The path, relative to the public_path() directory, where the details images are stored.
	 */
	'details_image_dir' => '/uploads/packages/fbf/laravel-blog/details/',

	/**
	 * The max width of the details page images. The resized version of images will fit within this size
	 */
	'details_image_max_width' => 450,

	/**
	 * The max height of the details page images. The resized version of images will fit within this size
	 */
	'details_image_max_height' => 450,

);