<?php if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
/**
 * Tergeting settings
 *
 * @package     Wow_Plugin
 * @subpackage  Settings
 * @copyright   Copyright (c) 2018, Dmytro Lobov
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       1.0
 */


//region Schedule
$weekday = array(
	'label'   => esc_attr__( 'Day of the week', $this->plugin['text'] ),
	'attr'    => [
		'name'  => 'param[weekday]',
		'id'    => 'weekday',
		'value' => isset( $param['weekday'] ) ? $param['weekday'] : 'none',
	],
	'options' => [
		'none' => esc_attr__( 'Everyday', $this->plugin['text'] ),
		'1'    => esc_attr__( 'Monday', $this->plugin['text'] ),
		'2'    => esc_attr__( 'Tuesday', $this->plugin['text'] ),
		'3'    => esc_attr__( 'Wednesday', $this->plugin['text'] ),
		'4'    => esc_attr__( 'Thursday', $this->plugin['text'] ),
		'5'    => esc_attr__( 'Friday', $this->plugin['text'] ),
		'6'    => esc_attr__( 'Saturday', $this->plugin['text'] ),
		'7'    => esc_attr__( 'Sunday ', $this->plugin['text'] ),

	],
	'tooltip'    => esc_attr__( 'Select the day of the week when the popup will be displayed.', $this->plugin['text'] ),
	'icon'    => '',
	'func'    => '',
);

$time_start = array(
	'label' => esc_attr__( 'Time from', $this->plugin['text'] ),
	'attr'  => [
		'name'        => 'param[time_start]',
		'id'          => 'time_start',
		'value'       => isset( $param['time_start'] ) ? $param['time_start'] : '00:00',
	],
	'tooltip'  => esc_attr__( 'Specify what from time of the day to show the notice', $this->plugin['text'] ),
	'icon'  => '',
);

$time_end = array(
	'label' => esc_attr__( 'Time to', $this->plugin['text'] ),
	'attr'  => [
		'name'        => 'param[time_end]',
		'id'          => 'time_end',
		'value'       => isset( $param['time_end'] ) ? $param['time_end'] : '23:59',
	],
	'tooltip'  => esc_attr__( 'Specify what to time of the day to show the notice.', $this->plugin['text'] ),
	'icon'  => '',
);

$set_dates = array(
	'label' => esc_attr__( 'Set Dates', $this->plugin['text'] ),
	'attr'  => [
		'name'        => 'param[set_dates]',
		'id'          => 'set_dates',
		'value'       => isset( $param['set_dates'] ) ? $param['set_dates'] : '',
	],
	'tooltip'  => esc_attr__( 'Check this if you want to set the show popup between dates.', $this->plugin['text'] ),
	'icon'  => '',
	'func'  => 'setDate',
);

$date_start = array(
	'label' => esc_attr__( 'Date Start', $this->plugin['text'] ),
	'attr'  => [
		'name'        => 'param[date_start]',
		'id'          => 'date_start',
		'value'       => isset( $param['date_start'] ) ? $param['date_start'] : '',
	],
	'tooltip'  => esc_attr__( 'Set the date start.', $this->plugin['text'] ),
	'icon'  => '',
);

$date_end = array(
	'label' => esc_attr__( 'Date End', $this->plugin['text'] ),
	'attr'  => [
		'name'        => 'param[date_end]',
		'id'          => 'date_end',
		'value'       => isset( $param['date_end'] ) ? $param['date_end'] : '',
	],
	'tooltip'  => esc_attr__( 'Set the date end', $this->plugin['text'] ),
	'icon'  => '',
);


//endregion

//region Devices
$screen_more = array(
	'label'    => esc_attr__( 'Don\'t show on screens more', $this->plugin['text'] ),
	'attr'     => [
		'name'  => 'param[screen_more]',
		'id'    => 'screen_more',
		'value' => isset( $param['screen_more'] ) ? $param['screen_more'] : '1024',
		'min'   => '0',
		'step'  => '1',
	],
	'checkbox' => [
		'name'  => 'param[include_more_screen]',
		'class' => 'checkLabel',
		'id'    => 'include_more_screen',
		'value' => isset( $param['include_more_screen'] ) ? $param['include_more_screen'] : 0,
	],
	'addon'    => [
		'unit' => 'px',
	],
	'tooltip'     => esc_attr__( 'Specify the window breakpoint when the popup will be shown', $this->plugin['text'] ),
);

$mobil_show = ! empty( $param['mobil_show'] ) ? $param['mobil_show'] : 0;

$screen = array(
	'label'    => esc_attr__( 'Don\'t show on screens less', $this->plugin['text'] ),
	'attr'     => [
		'name'  => 'param[screen]',
		'id'    => 'screen',
		'value' => isset( $param['screen'] ) ? $param['screen'] : '480',
		'min'   => '0',
		'step'  => '0.01',
	],
	'checkbox' => [
		'name'  => 'param[include_mobile]',
		'class' => 'checkLabel',
		'id'    => 'include_mobile',
		'value' => isset( $param['include_mobile'] ) ? $param['include_mobile'] : $mobil_show,
	],
	'addon'    => [
		'unit' => 'px',
	],
	'tooltip'     => esc_attr__( 'Specify the window breakpoint ( min width)', $this->plugin['text'] ),
);
//endregion

//region Users Role
$item_user = array(
	'label'   => esc_attr__( 'Show for users', $this->plugin['text'] ),
	'attr'    => [
		'name'  => 'param[item_user]',
		'id'    => 'item_user',
		'value' => isset( $param['item_user'] ) ? $param['item_user'] : '',
	],
	'options' => [
		'1' => esc_attr__( 'All Users', $this->plugin['text'] ),
		'2' => esc_attr__( 'Authorized Users', $this->plugin['text'] ),
		'3' => esc_attr__( 'Unauthorized Users', $this->plugin['text'] ),
	],
	'icon'    => '',
	'func'    => 'userRole()',
);

// Users role
$add_users      = array( 'all' => array( 'name' => esc_attr__( 'All Users', $this->plugin['text'] ) ) );
$editable_role  = array_reverse( get_editable_roles() );
$editable_roles = array_merge( $add_users, $editable_role );
$users_arr      = array();
foreach ( $editable_roles as $role => $details ) {
	$name                           = translate_user_role( $details['name'] );
	$users_arr[ esc_attr( $role ) ] = $name;
}

$user_role = array(
	'label'   => esc_attr__( 'User Role', $this->plugin['text'] ),
	'attr'    => [
		'name'  => 'param[user_role]',
		'id'    => 'user_role',
		'value' => isset( $param['user_role'] ) ? $param['user_role'] : 'all',
	],
	'options' => $users_arr,
	'icon'    => '',
	'func'    => '',
);
//endregion

//region languages
$umodallang = isset( $param['umodallang '] ) ? $param['umodallang '] : '';

$lang = array(
	'label'    => esc_attr__( 'Enable language dependency', $this->plugin['text'] ),
	'checkbox' => [
		'name'  => 'param[depending_language]',
		'id'    => 'depending_language',
		'class' => 'checkLabel',
		'value' => isset( $param['depending_language'] ) ? $param['depending_language'] : '',
	],
	'attr'     => [
		'name'  => 'param[lang]',
		'id'    => 'lang',
		'value' => isset( $param['lang'] ) ? $param['lang'] : $umodallang,
	],
	'options'  => [
		'ar'  => 'العربية',
		'az'  => 'Azərbaycan dili',
		'bg'  => 'Български',
		'bn'  => 'বাংলা',
		'bs'  => 'Bosanski',
		'ca'  => 'Català',
		'ceb' => 'Cebuano',
		'cs'  => 'Čeština‎',
		'cy'  => 'Cymraeg',
		'da'  => 'Dansk',
		'de'  => 'Deutsch',
		'el'  => 'Ελληνικά',
		'en'  => 'English',
		'eo'  => 'Esperanto',
		'es'  => 'Español',
		'et'  => 'Eesti',
		'eu'  => 'Euskara',
		'fa'  => 'فارسی',
		'fi'  => 'Suomi',
		'fr'  => 'Français',
		'gd'  => 'Gàidhlig',
		'gl'  => 'Galego',
		'haz' => 'هزاره گی',
		'he'  => 'עִבְרִית',
		'hi'  => 'हिन्दी',
		'hr'  => 'Hrvatski',
		'hu'  => 'Magyar',
		'hy'  => 'Հայերեն',
		'id'  => 'Bahasa Indonesia',
		'is'  => 'Íslenska',
		'it'  => 'Italiano',
		'ja'  => '日本語',
		'ka'  => 'ქართული',
		'ko'  => '한국어',
		'lt'  => 'Lietuvių kalba',
		'mk'  => 'Македонски јазик',
		'mr'  => 'मराठी',
		'ms'  => 'Bahasa Melayu',
		'my'  => 'ဗမာစာ',
		'nb'  => 'Norsk bokmål',
		'nl'  => 'Nederlands',
		'nn'  => 'Norsk nynorsk',
		'oc'  => 'Occitan',
		'pl'  => 'Polski',
		'ps'  => 'پښتو',
		'pt'  => 'Português',
		'ro'  => 'Română',
		'ru'  => 'Русский',
		'sk'  => 'Slovenčina',
		'sl'  => 'Slovenščina',
		'sq'  => 'Shqip',
		'sr'  => 'Српски језик',
		'sv'  => 'Svenska',
		'th'  => 'ไทย',
		'tl'  => 'Tagalog',
		'tr'  => 'Türkçe',
		'ug'  => 'Uyƣurqə',
		'uk'  => 'Українська',
		'vi'  => 'Tiếng Việt',
		'zh'  => '简体中文',
	],
	'tooltip'     => esc_attr__( 'Choose the language in which the popup will be displayed.', $this->plugin['text'] ),
	'icon'     => '',
	'func'     => '',
);
//endregion

//region Display
$tax_args   = array(
	'public'   => true,
	'_builtin' => false,
);
$output     = 'names';
$operator   = 'and';
$taxonomies = get_taxonomies( $tax_args, $output, $operator );

$show_option = array(
	'all'        => esc_attr__( 'All posts and pages', $this->plugin['text'] ),
	'onlypost'   => esc_attr__( 'All posts', $this->plugin['text'] ),
	'onlypage'   => esc_attr__( 'All pages', $this->plugin['text'] ),
	'posts'      => esc_attr__( 'Posts with certain IDs', $this->plugin['text'] ),
	'pages'      => esc_attr__( 'Pages with certain IDs', $this->plugin['text'] ),
	'postsincat' => esc_attr__( 'Posts in Categorys with IDs', $this->plugin['text'] ),
	'expost'     => esc_attr__( 'All posts. except...', $this->plugin['text'] ),
	'expage'     => esc_attr__( 'All pages, except...', $this->plugin['text'] ),
	'shortecode' => esc_attr__( 'Where shortcode is inserted', $this->plugin['text'] ),
);
if ( $taxonomies ) {
	$show_option['taxonomy'] = esc_attr__( 'Taxonomy', $this->plugin['text'] );
}

$show = array(
	'label'   => esc_attr__( 'Display on', $this->plugin['text'] ),
	'attr'    => [
		'name'  => 'param[show]',
		'id'    => 'show',
		'value' => isset( $param['show'] ) ? $param['show'] : 'all',
	],
	'options' => $show_option,
	'tooltip'    => esc_attr__( 'Choose a condition to target to specific content.', $this->plugin['text'] ),
	'icon'    => '',
	'func'    => 'showChange()',
);


// Taxonomy
$taxonomy_option = array();
if ( $taxonomies ) {
	foreach ( $taxonomies as $taxonomy ) {
		$taxonomy_option[ $taxonomy ] = $taxonomy;
	}
}

$taxonomy = array(
	'label'   => esc_attr__( 'Taxonomy', $this->plugin['text'] ),
	'attr'    => [
		'name'  => 'param[taxonomy]',
		'id'    => 'taxonomy',
		'value' => isset( $param['taxonomy'] ) ? $param['taxonomy'] : '',
	],
	'options' => $taxonomy_option,
	'icon'    => '',
	'func'    => '',
);

$id_post = array(
	'label' => esc_attr__( 'ID\'s', $this->plugin['text'] ),
	'attr'  => [
		'name'        => 'param[id_post]',
		'id'          => 'id_post',
		'value'       => isset( $param['id_post'] ) ? $param['id_post'] : '',
		'placeholder' => esc_attr__( 'Enter IDs, separated by comma.', $this->plugin['text'] ),
	],
	'tooltip'  => esc_attr__( 'Enter IDs, separated by comma.', $this->plugin['text'] ),
	'icon'  => '',
);
//endregion

//region Other


//endregion



//region After Popup
// Previous popup
$arr_modal = $wpdb->get_results("SELECT * FROM " . $data . " order by title asc");
$previous_arr = array();
if ( $arr_modal ) {
	foreach ( $arr_modal as $key => $value) {
		$prev_id = $value->id;
		$prev_title = !empty( $value->title ) ? $value->title : __('Untitle Modal Window', $this->plugin['text']);
		if ($prev_id == $id && count( $arr_modal ) == 1 ) {
			$previous_arr[] = __('Not created yet', $this->plugin['text']);
		}
		elseif ($prev_id == $id) {
			continue;
		}
		else {
			$previous_arr['wow-modal-id-' . $prev_id] = $prev_title;
		}
	}
}
else {
	$previous_arr[] = __('Not created yet', $this->plugin['text']);
}

$previous_popup = array(
	'label'   => esc_attr__( 'Show after popup', $this->plugin['text'] ),
	'attr'    => [
		'name'  => 'param[popup]',
		'id'    => 'previous_popup',
		'value' => isset( $param['popup'] ) ? $param['popup'] : '',
	],
	'checkbox' => [
		'name'        => 'param[after_popup]',
		'id'          => 'after_popup',
		'value'       => isset( $param['after_popup'] ) ? $param['after_popup'] : '',
		'class' => 'checkLabel',
	],
	'options' => $previous_arr,
	'func'    => '',
	'tooltip'  => esc_attr__( 'The current popup will be shown to the user only if the user saw the previous set popup. The previous pop-up should have cookies.', $this->plugin['text'] ),

);
//endregion