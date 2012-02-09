<?php
namespace Labs;

class Controller_Admin_Cheatsheet extends \Controller {

	private static $types = array(
		'boolean' => 'b',
		'bool' => 'b',
		'true' => 'b',
		'string' => 's',
		'array' => 'a',
		'mixed' => 'm',
		'float' => 'f',
		'int' => 'i',
		'null' => 'n',
		'void' => '-',
		'image_driver' => 'o',
		'an array of instances with the loaded result, null when none found.' => 'a*',
		'the current mongo_db instance.' => 'o',
		'fuel\core\response object' => 'o',
		'fuel\core\request object' => 'o',
		'fuelcoresession_driver - is chainable' => 'o',
		'current view object' => 'o',
		'a new view object' => 'o',
	);

	private $count = array();
	private $classes = array(
		'http://docs.fuelphp.com/classes/agent/usage.html' => array(
			'summary' => 'Retrieve information about browser based on the clients User Agent string (<a href="http://docs.fuelphp.com/classes/agent/config.html">Configuration</a>).',
		),
		'http://docs.fuelphp.com/classes/arr.html' => array(
			'summary' => 'Set of helper functions for working with arrays.',
			'methods' => array(
				'assoc_to_keyval' => array(
					'args' => '([assoc], [key], [val])',
				),
				'filter_prefixed' => array(
					'args' => '(array, [pre], [remove])',
				),
				'to_assoc' => array(
					'return' => 'a*',
				),
				'get' => array(
					'return' => 'm*',
				),
				'delete' => array(
					'return' => 'b*',
				),
				'insert_after_key' => array(
					'args' => '(&array, value, pos)',
				),
				'insert_after_key' => array(
					'args' => '(&array, val, key)',
				),
				'insert_after_value' => array(
					'args' => '(&array, val, after)',
				),
			),
		),
		'http://docs.fuelphp.com/classes/asset.html' => array(
			'summary' => 'Grouping and displaying of assets (js, css, img).',
			'methods' => array(
				'find_file' => array(
					'return' => 's*',
				),
			),
		),
		'http://docs.fuelphp.com/classes/autoloader.html' => array(
			'summary' => 'Interact with the autoloading process.',
			'methods' => array(
				'add_namespace' => array(
					'args' => '(name, path)',
				),
				'add_namespaces' => array(
					'args' => '(name, [prepend])',
				),
				'namespace_path' => array(
					'return' => 's*',
					'args' => '(name)',
				),
				'alias_to_namespace' => array(
					'args' => '(class, [name])',
				),
				'add_core_namespace' => array(
					'args' => '(name, [prefix])',
				),
			),
		),
		'http://docs.fuelphp.com/classes/cache/usage.html' => array(
			'summary' => 'Cache the result of a resource heavy operation (<a href="http://docs.fuelphp.com/classes/cache/config.html">Configuration</a> & <a href="http://docs.fuelphp.com/classes/cache/advanced.html">Advanced</a>).',
			'methods' => array(
				'set' => array(
					'args' => '(id, [contents], [expiration], [dependencies])',
				),
				'get' => array(
					'return' => 'm',
					'args' => '(id, [use_expiration])',
				),
				'call' => array(
					'args' => '(id, cb, [args], [expiration], [dependencies])',
				),
			),
		),
		'http://docs.fuelphp.com/classes/cli.html' => array(
			'summary' => 'Interact with the command line.',
		),
		'http://docs.fuelphp.com/classes/config.html' => array(
			'summary' => 'Load in a config file, get a value or set a value.',
			'methods' => array(
				'get' => array(
					'return' => 'm*',
				),
				'set' => array(
					'return' => 'b',
				),
				'load' => array(
					'return' => 'a*',
				),
				'save' => array(
					'return' => 'b',
				),
			),
		),
		'http://docs.fuelphp.com/classes/cookie.html' => array(
			'summary' => 'Get, set and delete cookies.',
			'methods' => array(
				'set' => array(
					'args' => '(name, val, [end], [path], [domain], [secure], [http])',
				),
				'delete' => array(
					'args' => '(name, [path], [domain], [secure], [http])',
				),
			),
		),
		'http://docs.fuelphp.com/classes/crypt.html' => array(
			'summary' => 'Encrypt or decrypt a string.',
			'methods' => array(
				'encode' => array(
					'access' => '::',
				),
				'decode' => array(
					'access' => '::',
					'return' => 's*',
				),
			),
		),
		'http://docs.fuelphp.com/classes/database/db.html' => array(
			'summary' => 'Build and execute database queries and fetch the result (<a href="http://docs.fuelphp.com/classes/database/introduction.html">Introduction</a> & <a href="http://docs.fuelphp.com/classes/database/usage.html">Usage</a> & Builder <a href="http://docs.fuelphp.com/classes/database/qb_insert.html">Insert</a>, <a href="http://docs.fuelphp.com/classes/database/qb_delete.html">Select</a>, <a href="http://docs.fuelphp.com/classes/database/qb_update.html">Update</a>, <a href="http://docs.fuelphp.com/classes/database/qb_delete.html">Delete</a>, <a href="http://docs.fuelphp.com/classes/database/qb_where.html">Where</a>).',
			'methods' => array(
				'query' => array(
					'return' => 'o',
				),
				'last_query' => array(
					'return' => 's',
				),
				'select' => array(
					'return' => 'o',
				),
				'select_array' => array(
					'return' => 'o',
				),
				'insert' => array(
					'return' => 'o',
				),
				'update' => array(
					'return' => 'o',
				),
				'delete' => array(
					'return' => 'o',
				),
				'expr' => array(
					'return' => 'o',
				),
				'quote' => array(
					'return' => 'o',
				),
				'quote_identifier' => array(
					'return' => 'm',
				),
				'quote_table' => array(
					'return' => 'm',
				),
				'table_prefix' => array(
					'return' => 's',
				),
				'escape' => array(
					'return' => 's',
				),
				'list_columns' => array(
					'return' => 'a',
				),
				'list_tables' => array(
					'return' => 'a',
				),
				'datatype' => array(
					'return' => 'a',
				),
				'count_records' => array(
					'return' => 'i',
				),
				'count_last_query' => array(
					'return' => 'i',
				),
				'start_transaction' => array(
					'return' => 'b',
				),
				'commit_transaction' => array(
					'return' => 'b',
				),
				'rollback_transaction' => array(
					'return' => 'b',
				),
			),
		),
		'http://docs.fuelphp.com/classes/database/dbutil.html' => array(
			'pagebreak' => true,
			'summary' => 'Manage and perform routine operations on your databases.',
			'methods' => array(
				'create_database' => array(
					'return' => 'i',
				),
				'drop_database' => array(
					'return' => 'i',
				),
				'drop_table' => array(
					'return' => 'i',
				),
				'rename_table' => array(
					'return' => 'i',
				),
				'create_table' => array(
					'return' => 'i',
					'args' => '(name, fields, [pk], [i_n_e], [engine], [charset], [fk])',
				),
				'add_fields' => array(
					'return' => 'i',
				),
				'drop_fields' => array(
					'return' => 'i',
				),
				'modify_fields' => array(
					'return' => 'i',
				),
				'create_index' => array(
					'return' => 's',
					'args' => '(table, columns, name, [index])',
				),
				'drop_index' => array(
					'return' => 's',
				),
				'truncate_table' => array(
					'return' => 'i',
				),
				'analyze_table' => array(
					'return' => 'b',
				),
				'check_table' => array(
					'return' => 'b',
				),
				'optimize_table' => array(
					'return' => 'b',
				),
				'repair_table' => array(
					'return' => 'b',
				),
			),
		),
		'http://docs.fuelphp.com/classes/date.html' => array(
			'summary' => 'Helper functions for working with dates.',
			'methods' => array(
				'forge' => array(
					'return' => 'o',
				),
				'time' => array(
					'return' => 'o',
				),
				'create_from_string' => array(
					'return' => 'o',
				),
			),
		),
		'http://docs.fuelphp.com/classes/debug.html' => array(
			'summary' => 'Debugging variables, objects, arrays.',
		),
		'http://docs.fuelphp.com/classes/event.html' => array(
			'summary' => 'Interact with the Fuel Core without having to alter any core files.',
			'methods' => array(
				'trigger' => array(
					'return' => 'o',
				),
			),
		),
		'http://docs.fuelphp.com/classes/fieldset.html' => array(
			'summary' => 'Create a form and handle it\'s validation in an object oriented way. See Form and Validation classes.',
			'methods' => array(
				'forge' => array(
					'return' => 'o',
				),
				'instance' => array(
					'return' => 'o',
				),
				'validation' => array(
					'return' => 'o',
				),
				'form' => array(
					'return' => 'o',
				),
				'add' => array(
					'return' => 'o',
				),
				'field' => array(
					'return' => 'o*',
				),
				'add_model' => array(
					'return' => 'o',
				),
				'set_config' => array(
					'return' => 'o',
				),
				'get_config' => array(
					'return' => 'm*',
				),
				'populate' => array(
					'return' => 'o',
				),
				'repopulate' => array(
					'return' => 'o',
				),
				'build' => array(
					'return' => 's',
				),
				'input' => array(
					'return' => 's*',
				),
				'validated' => array(
					'return' => 's*',
				),
				'errors' => array(
					'return' => 's*',
				),
				'show_errors' => array(
					'return' => 'a',
				),
			),
		),
		'http://docs.fuelphp.com/classes/file/usage.html' => array(
			'summary' => 'Set of methods to working with files & directories  (<a href="http://docs.fuelphp.com/classes/file/intro.html">Introduction</a> & <a href="http://docs.fuelphp.com/classes/file/advanced.html">Advanced</a> & <a href="http://docs.fuelphp.com/classes/file/handlers.html">Handlers</a>).',
			'methods' => array(
				'create_dir' => array(
					'return' => 'b',
				),
				'read' => array(
					'return' => 'i*',
				),
				'read_dir' => array(
					'return' => 'a',
				),
				'rename' => array(
					'return' => 'b',
				),
				'rename_dir' => array(
					'return' => 'b',
				),
				'copy' => array(
					'return' => 'b',
				),
				'copy_dir' => array(
					'return' => 'b',
				),
				'delete' => array(
					'return' => 'b',
				),
				'delete_dir' => array(
					'return' => 'b',
				),
				'open_file' => array(
					'return' => 'r',
				),
				'close_file' => array(
					'return' => 'b',
				),
				'get' => array(
					'return' => 'o',
				),
				'get_url' => array(
					'return' => 's',
				),
				'get_permissions' => array(
					'return' => 'oc',
				),
				'get_time' => array(
					'return' => 'int',
				),
				'get_size' => array(
					'return' => 'int',
				),
				'file_info' => array(
					'return' => 'a',
				),
				'download' => array(
					'return' => '-',
				),
			),
		),
		'http://docs.fuelphp.com/classes/form.html' => array(
			'summary' => 'Create individual form elements or create a full form along with validation. See Fieldset class.',
			'methods' => array(
				'hidden' => array(
					'access' => '::',
					'return' => 's',
				),
				'password' => array(
					'access' => '::',
					'return' => 's',
				),
				'file' => array(
					'access' => '::',
					'return' => 's',
				),
				'reset' => array(
					'access' => '::',
					'return' => 's',
				),
				'submit' => array(
					'access' => '::',
					'return' => 's',
				),
			),
		),
		'http://docs.fuelphp.com/classes/format.html' => array(
			'summary' => 'Convert between various formats such as XML, JSON, CSV, etc.',
			'methods' => array(
				'factory' => array(
					'name' => 'forge',
					'return' => 'o',
				),
			),
		),
		'http://docs.fuelphp.com/classes/ftp.html' => array(
			'summary' => 'Upload, download, move and mirror files with remote servers over the FTP protocol.',
			'methods' => array(
				'factory' => array(
					'name' => 'forge',
					'return' => 'o',
				),
				'upload' => array(
					'args' => '(l_path, r_path, [mode], [permissions])',
				),
			),
		),
		'http://docs.fuelphp.com/classes/fuel.html' => array(
			'summary' => 'The Fuel class contains the core methods of the Fuel framework.',
			'methods' => array(
				'find_file' => array(
					'return' => 'm',
				),
			),
		),
		'http://docs.fuelphp.com/classes/html.html' => array(
			'pagebreak' => true,
			'summary' => 'HTML wrapper for nearly all HTML tags.',
			'methods' => array(
				'anchor' => array(
					'return' => 's',
				),
				'mail_to' => array(
					'return' => 's',
				),
				'mail_to_safe' => array(
					'return' => 's',
				),
				'img' => array(
					'return' => 's',
				),
				'meta' => array(
					'return' => 's',
				),
				'doctype' => array(
					'return' => 's',
				),
				'audio' => array(
					'return' => 's',
				),
				'ul' => array(
					'return' => 's',
				),
				'ol' => array(
					'return' => 's',
				),
			),
		),
		'http://docs.fuelphp.com/classes/image.html' => array(
			'summary' => 'Add common manipulations to an image such as resizing, cropping, and so on.',
			'methods' => array(
				'save_pa' => array(
					'args' => '(prepend, [append], [ext], [permissions])',
				),
			),
		),
		'http://docs.fuelphp.com/classes/inflector.html' => array(
			'summary' => 'Transforms words from singular to plural, class names to table names, modularized class names to ones without, and class names to foreign keys.',
			'methods' => array(
				'get_namespace' => array(
					'return' => 's',
				),
				'humanize' => array(
					'args' => '(lc_&_underscored_word)',
				),
			),
		),
		'http://docs.fuelphp.com/classes/input.html' => array(
			'summary' => 'Access HTTP parameters, load server variables and user agent details.',
			'methods' => array(
				'uri' => array(
					'return' => 's',
				),
				'file' => array(
					'return' => 's*',
				),
				'param' => array(
					'return' => 's*',
				),
			),
		),
		'http://docs.fuelphp.com/classes/lang.html' => array(
			'summary' => 'Set language variables using language files in your application.',
			'methods' => array(
				'get' => array(
					'return' => 's*',
				),
				'__' => array(
					'return' => 's*',
				),
			),
		),
		'http://docs.fuelphp.com/classes/log.html' => array(
			'summary' => 'Write messages to the log files.',
		),
		'http://docs.fuelphp.com/classes/migrate.html' => array(
			'summary' => 'Run, walk through and revert Migrations from your controllers.',
			'methods' => array(
				'version' => array(
					'return' => 'm',
				),
			),
		),
		'http://docs.fuelphp.com/classes/model_crud/methods.html' => array(
			'name' => 'Model_Crud',
			'summary' => 'Supplies CRUD functionalities in a standardized way. To use the Model_Crud class, create a class that extends \Model_Crud (<a href="http://docs.fuelphp.com/classes/model_crud/introduction.html">Introduction</a>).',
			'methods' => array(
				'forge' => array(
					'return' => 'o',
				),
				'find_by_pk' => array(
					'return' => 'o*',
				),
				'find_one_by' => array(
					'return' => 'o*',
				),
				'find_by_*' => array(
					'return' => 'a*',
				),
				'pre_find' => array(
					'return' => 'o',
				),
				'post_find' => array(
					'return' => 'a*',
				),
				'set' => array(
					'return' => 'o',
				),
				'save' => array(
					'return' => 'i*',
				),
				'delete' => array(
					'return' => 'i',
				),
				'is_new' => array(
					'return' => 'o',
				),
				'is_frozen' => array(
					'return' => 'o',
				),
				'validation' => array(
					'return' => 'o',
				),
				'to_array' => array(
					'return' => 'a',
				),
				'pre_save' => array(
					'return' => 'o',
				),
				'post_save' => array(
					'return' => 'a',
				),
				'pre_update' => array(
					'return' => 'o',
				),				'forge' => array(
					'return' => 'o',
				),
				'forge' => array(
					'return' => 'o',
				),
				'forge' => array(
					'return' => 'o',
				),
				'forge' => array(
					'return' => 'o',
				),
				'forge' => array(
					'return' => 'o',
				),
				'forge' => array(
					'return' => 'o',
				),
				'forge' => array(
					'return' => 'o',
				),

				'post_update' => array(
					'return' => 'o',
				),
				'pre_delete' => array(
					'return' => 'o',
				),
				'post_delete' => array(
					'return' => 'i',
				),
				'pre_validate' => array(
					'return' => 'o',
				),
				'post_validate' => array(
					'return' => 'o',
				),
				'prep_values' => array(
					'return' => 'o',
				),
			),
		),
		'http://docs.fuelphp.com/classes/mongo/methods.html' => array(
			'name' => 'Mongo_Db',
			'summary' => 'Interact with MongoDB databases (<a href="http://docs.fuelphp.com/classes/mongo/introduction.html">Introduction</a>).',
			'methods' => array(
				'instance' => array(
					'return' => 'o',
				),
				'get' => array(
					'return' => 'o',
				),
				'get_one' => array(
					'return' => 'o',
				),
				'get_where' => array(
					'return' => 'o',
				),
				'like' => array(
					'args' => '([field], [val], [flags], [start_*], [end_*])',
				),
				'count' => array(
					'return' => 'i',
				),
				'insert' => array(
					'return' => 'i*',
				),
				'update' => array(
					'return' => 'b',
				),
				'update_all' => array(
					'return' => 'b',
				),
				'delete' => array(
					'return' => 'b',
				),
				'delete_all' => array(
					'return' => 'b',
				),
				'command' => array(
					'return' => 'm',
				),
				'list_indexes' => array(
					'return' => 'a',
				),
			),
		),
		'http://docs.fuelphp.com/classes/num.html' => array(
			'pagebreak' => true,
			'summary' => 'Additional formatting methods for working with numeric values.',
			'methods' => array(
				'format_bytes' => array(
					'return' => 's*',
				),
				'quantity' => array(
					'return' => 's*',
				),
			),
		),
		'http://docs.fuelphp.com/classes/package.html' => array(
			'summary' => 'Load, unload, check if a package is loaded, or get all packages loaded.',
			'methods' => array(
				'loaded' => array(
					'return' => 'b*',
				),
			),
		),
		'http://docs.fuelphp.com/classes/pagination.html' => array(
			'summary' => 'Setup pagination for records you display.',
		),
		'http://docs.fuelphp.com/classes/redis.html' => array(
			'summary' => 'Interact with a Redis key-value store. Every valid redis command (see the <a href="http://redis.io/commands" target="_blank">Redis Documentation</a>) as a method of that object.',
		),
		'http://docs.fuelphp.com/classes/request.html' => array(
			'summary' => 'Processes URI requests. Need it to generate requests in an HMVC context.',
			'methods' => array(
				'parent' => array(
					'return' => 'o*',
				),
				'children' => array(
					'return' => 'a',
				),
				'show_404' => array(
					'return' => '-*',
				),
				'main' => array(
					'return' => 'o*',
				),
				'active' => array(
					'return' => 'o*',
				),
			),
		),
		'http://docs.fuelphp.com/classes/response.html' => array(
			'summary' => 'Methods to deal with HTTP response and browser output.',
		),
		'http://docs.fuelphp.com/classes/security.html' => array(
			'summary' => 'Allows you to have CSRF protection in your application.',
			'methods' => array(
				'e' => array(
					'return' => 's',
				),
			),
		),
		'http://docs.fuelphp.com/classes/session/usage.html' => array(
			'summary' => 'Maintain state for your application in the stateless environment of the web. Store variables on the server using a variety of storage solutions (<a href="http://docs.fuelphp.com/classes/session/config.html">Configuration</a> & <a href="http://docs.fuelphp.com/classes/session/advanced.html">Advanced</a>).',
			'methods' => array(
				'instance' => array(
					'return' => 'o*',
				),
				'get' => array(
					'return' => 'm',
				),
				'get_flash' => array(
					'return' => 'm',
				),
				'key' => array(
					'return' => 'm*',
				),
			),
		),
		'http://docs.fuelphp.com/classes/str.html' => array(
			'summary' => 'Set of methods to help with the manipulation of strings.',
			'methods' => array(
				'alternator' => array(
					'return' => 'c',
				),
			),
		),
		'http://docs.fuelphp.com/classes/upload/usage.html' => array(
			'summary' => 'Securely process files that have been uploaded to the application (<a href="http://docs.fuelphp.com/classes/upload/config.html">Configuration</a>).',
			'methods' => array(
				'is_valid' => array(
					'return' => 'b',
				),
				'register' => array(
					'return' => 'b',
				),
			),
		),
		'http://docs.fuelphp.com/classes/uri.html' => array(
			'summary' => 'Interact with the URI.',
			'methods' => array(
				'base' => array(
					'return' => 's',
				),
				'to_assoc' => array(
					'return' => 'a*',
				),
			),
		),
		'http://docs.fuelphp.com/classes/validation/methods.html' => array(
			'summary' => 'Helps you validate user input. Use Fieldset class for form & validation at the same time (<a href="http://docs.fuelphp.com/classes/validation/validation.html">Introduction</a> & <a href="http://docs.fuelphp.com/classes/validation/errors.html">Errors</a>).',
			'methods' => array(
				'forge' => array(
					'return' => 'o',
				),
				'instance' => array(
					'return' => 'o*',
				),
				'active' => array(
					'return' => 'o',
				),
				'active_field' => array(
					'return' => 'o',
				),
				'fieldset' => array(
					'return' => 'o',
				),
				'add_field' => array(
					'return' => 'o',
				),
				'set_message' => array(
					'return' => 'o',
				),
			),
		),
		'http://docs.fuelphp.com/classes/view.html' => array(
			'summary' => 'Object wrapper for HTML pages with embedded PHP, called "views".',
			'methods' => array(
				'render' => array(
					'return' => 's',
				),
			),
		),
	);

	public function action_index() {
		$self = $this;
		static::_rolling_curl(array_keys($this->classes), function($url, $html) use ($self) {
			$self->parse($url, $html);
		});

		$i = 0;
		while (count($this->count) < count($this->classes)) {
			sleep(1);
			$i++;
			if ($i > 15) {
				break;
			}
		}

		return \View::forge('labs_cheatsheet::cheatsheet', array(
			'classes' => $this->classes,
		), false);
	}

	public function parse($url, $html) {
        $doc = new \DOMDocument();
        @$doc->loadHTML($html);
        $doc->normalizeDocument();
        $main = $doc->getElementById('main');
        $classe = array(
	        'href' => $url,
            'name' => str_replace(' Class', '', $main->getElementsByTagName('h2')->item(0)->nodeValue),
            'summary' => $main->getElementsByTagName('p')->item(0)->nodeValue,
            'methods' => array(),
        );
        foreach ($main->getElementsByTagName('article') as $article) {
	        if ($article->getElementsByTagName('h4')->length) {
	            $h4 = $article->getElementsByTagName('h4')->item(0);
		        if (preg_match('/([\w\*]+)\((.*)\)$/', $h4->nodeValue, $name_args)) {
		            $args = array();
		            foreach (explode(',', $name_args[2]) as $arg) {
						$arg = str_replace('$', '', trim($arg));
			            preg_match('/^([^ ]+ )?([^ =]+)( =[^=]*)?$/', $arg, $matches);
			            if ($matches[3]) {
				            $args[] = '['.$matches[2].']';
			            } elseif ($arg) {
			                $args[] = $matches[2];
			            }
		            }
		            if (count($args)) {
		                $args = '('.implode(', ', $args).')';
		            } else {
			            $args = '()';
		            }

		            $access = '';
		            $return = '';
			        if ($article->getElementsByTagName('table')->length) {
			            foreach ($article->getElementsByTagName('table')->item(0)->getElementsByTagName('tbody')->item(0)->getElementsByTagName('tr') as $tr) {
				            if ($tr->getElementsByTagName('th')->item(0)->nodeValue === 'Static') {
					            $access = $tr->getElementsByTagName('td')->item(0)->nodeValue === 'Yes' ? '::' : '->';
				            }
				            if ($tr->getElementsByTagName('th')->item(0)->nodeValue === 'Returns') {
					            $return = $tr->getElementsByTagName('td')->item(0)->nodeValue;
					            break;
				            }
			            }
			        }

			        $name = $name_args[1];
			        if (isset($classe['methods'][$name]) && $name === 'pre_save') {
				        $name = 'pre_update';
			        }
		            $classe['methods'][$name] = array(
		                'href' => $url.($access ? '#method_' : '#function_').$name,
		                'name' => $name,
		                'args' => $args,
		                'access' => $access,
		                'return' => static::$types[strtolower($return)],
		            );
		        }
	        }
        }
		if (isset($this->classes[$url]['methods'])) {
			foreach ($this->classes[$url]['methods'] as $name => $method) {
				$classe['methods'][$name] = array_merge($classe['methods'][$name], $this->classes[$url]['methods'][$name]);
			}
			unset($this->classes[$url]['methods']);
		}
		$this->classes[$url] = array_merge($classe, $this->classes[$url]);
		$this->count[] = $url;
    }

	private static function _rolling_curl($urls, $callback, $custom_options = null)	{

		// make sure the rolling window isn't greater than the # of urls
		$rolling_window = 5;
		$rolling_window = (sizeof($urls) < $rolling_window) ? sizeof($urls) : $rolling_window;

	    $master = curl_multi_init();
	    $curl_arr = array();

	    // add additional curl options here
	    $std_options = array(
		    CURLOPT_RETURNTRANSFER => true,
	        CURLOPT_FOLLOWLOCATION => true,
	        CURLOPT_MAXREDIRS => 5
	    );
	    $options = ($custom_options) ? ($std_options + $custom_options) : $std_options;

	    // start the first batch of requests
		$mapping = array();
	    for ($i = 0; $i < $rolling_window; $i++) {
			$ch = curl_init();
		    $mapping[(string)$ch] = $i;
			$options[CURLOPT_URL] = $urls[$i];
			curl_setopt_array($ch, $options);
			curl_multi_add_handle($master, $ch);
		}

	    do {
		    while (($execrun = curl_multi_exec($master, $running)) == CURLM_CALL_MULTI_PERFORM) ;
		    if ($execrun != CURLM_OK)
			    break;
		    // a request was just completed -- find out which one
		    while ($done = curl_multi_info_read($master)) {
			    $info = curl_getinfo($done['handle']);
			    if ($info['http_code'] == 200) {
				    $output = curl_multi_getcontent($done['handle']);
				    $mapped = $mapping[(string)$done['handle']];

				    // request successful.  process output using the callback function.
				    $callback($urls[$mapped], $output);

				    // start a new request (it's important to do this before removing the old one)
				    $ch = curl_init();
				    $mapping[(string)$ch] = $i;
				    $options[CURLOPT_URL] = $urls[$i++]; // increment i
				    curl_setopt_array($ch, $options);
				    curl_multi_add_handle($master, $ch);

				    // remove the curl handle that just completed
				    curl_multi_remove_handle($master, $done['handle']);
			    } else {
				    // request failed.  add error handling.
			    }
		    }
	    } while ($running);

	    curl_multi_close($master);
	    return true;
	}
}