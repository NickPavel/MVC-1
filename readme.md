This is a very simplified MVC app starting with https://github.com/panique/huge

public
	favicon.ico
	index.php
	.htaccess
application
	autoload.php
	config
		config.development.php
	controller
		ErrorController.php
		IndexController.php
		NoteController.php
	core
		Application.php
		Config.php
		Controller.php
		DatabaseFactory.php
		Environment.php
		Redirect.php
		Request.php
		View.php
	install
		mvc.sql
	model
		NoteModel.php
	view
		error
			404.php
		index
			index.php
		note
			edit.php
			index.php
		templates
			footer.php
			header.php
readme.md
.htaccess
