<?php
/**
 * Define vital and essential options
 *
 * @package wp-options-manager
 */

namespace OptionsManager;


class Options {

	/**
	 * Get an array of all WP core options vital
	 * for running the WP install
	 *
	 * @todo evaluate option and potentially move to default_options
	 *
	 * @return array names of all vital wp core options
	 */
	public static function get_vital_options() {

		$blog_id = get_current_blog_id();

		$wp_vital_options = array(
			'siteurl',
			'blogname',
			'blogdescription',
			'users_can_register',
			'admin_email',
			'start_of_week',
			'use_balanceTags',
			'use_smilies',
			'require_name_email',
			'comments_notify',
			'posts_per_rss',
			'rss_excerpt_length',
			'rss_use_excerpt',
			'mailserver_url',
			'mailserver_login',
			'mailserver_pass',
			'mailserver_port',
			'default_category',
			'default_comment_status',
			'default_ping_status',
			'default_pingback_flag',
			'default_post_edit_rows',
			'posts_per_page',
			'what_to_show',
			'date_format',
			'time_format',
			'links_updated_date_format',
			'links_recently_updated_prepend',
			'links_recently_updated_append',
			'links_recently_updated_time',
			'comment_moderation',
			'moderation_notify',
			'permalink_structure',
			'gzipcompression',
			'hack_file',
			'blog_charset',
			'moderation_keys',
			'active_plugins',
			'home',
			'category_base',
			'ping_sites',
			'advanced_edit',
			'comment_max_links',
			'gmt_offset',
			'default_email_category',
			'recently_edited',
			'use_linksupdate',
			'template',
			'stylesheet',
			'comment_whitelist',
			'blacklist_keys',
			'comment_registration',
			'open_proxy_check',
			'rss_language',
			'html_type',
			'use_trackback',
			'default_role',
			'db_version',
			'wp_user_roles',
			'uploads_use_yearmonth_folders',
			'upload_path',
			'secret',
			'blog_public',
			'default_link_category',
			'show_on_front',
			'default_link_category',
			'cron',
			'doing_cron',
			'sidebars_widgets',
			'widget_pages',
			'widget_calendar',
			'widget_archives',
			'widget_meta',
			'widget_categories',
			'widget_recent_entries',
			'widget_text',
			'widget_rss',
			'widget_recent_comments',
			'widget_wholinked',
			'widget_polls',
			'widget_media_audio',
			'widget_media_image',
			'widget_media_gallery',
			'widget_media_video',
			'widget_tag_cloud',
			'widget_nav_menu',
			'widget_custom_html',
			'tag_base',
			'page_on_front',
			'page_for_posts',
			'page_uris',
			'page_attachment_uris',
			'show_avatars',
			'avatar_rating',
			'upload_url_path',
			'thumbnail_size_w',
			'thumbnail_size_h',
			'thumbnail_crop',
			'medium_size_w',
			'medium_size_h',
			'dashboard_widget_options',
			'current_theme',
			'auth_salt',
			'avatar_default',
			'enable_app',
			'enable_xmlrpc',
			'logged_in_salt',
			'recently_activated',
			'random_seed',
			'large_size_w',
			'large_size_h',
			'image_default_link_type',
			'image_default_size',
			'image_default_align',
			'close_comments_for_old_posts',
			'close_comments_days_old',
			'thread_comments',
			'thread_comments_depth',
			'page_comments',
			'comments_per_page',
			'default_comments_page',
			'comment_order',
			'use_ssl',
			'sticky_posts',
			'dismissed_update_core',
			'update_themes',
			'nonce_salt',
			'update_core',
			'uninstall_plugins',
			'wporg_popular_tags',
			'stats_options',
			'stats_cache',
			'rewrite_rules',
			'update_plugins',
			'category_children',
			'timezone_string',
			'can_compress_scripts',
			'db_upgraded',
			'widget_search',
			'default_post_format',
			'link_manager_enabled',
			'initial_db_version',
			'theme_switched',
			'WPLANG',
			'wp_page_for_privacy_policy',
			'new_admin_email',
		);

		/** User role mapping on multisite */
		$wp_vital_options[] = 'wp_' . $blog_id . '_user_roles';

		return apply_filters( 'wp-options-editor-vital_options', $wp_vital_options );

	}

	public static function get_default_options() {

		$wp_default_options = array(
			'_site_transient_update_core',
			'_site_transient_timeout_theme_roots',
			'_site_transient_theme_roots',
			'_site_transient_update_themes',
			'_site_transient_update_plugins',
			'_transient_doing_cron',
			'_transient_plugins_delete_result_1',
			'_transient_plugin_slugs',
			'_transient_random_seed',
			'_transient_rewrite_rules',
			'_transient_update_core',
			'_transient_update_plugins',
			'_transient_update_themes',
			'widget_recent-posts',
			'widget_recent-comments',
		);

		return apply_filters( 'wp-options-editor-default_options', $wp_default_options );

	}

}