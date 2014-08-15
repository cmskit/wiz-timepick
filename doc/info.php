<?php
$config = <<<EOD
{
	"info":  {
		"name": "Timepicker",
		"description": {
			"en": "Timepicker",
			"de": "Timepicker"
		},
		"io":  [
			"seconds or datetime-string",
			"seconds or datetime-string"
		],
		"authors":  ["Christoph Taubmann"],
		"homepage": "http://cms-kit.org",
		"mail": "info@cms-kit.org",
		"copyright": "MIT",
		"credits":  [
			"[Trent Richardson](http://trentrichardson.com) MIT / GPL licenses"
		]
	},
	"system":  {
		"version": 0.8,
		"inputs":  [
			"INTEGER",
			"VARCHAR",
			"DATETIME",
			"TIMESTAMP"
		],
		"include":  ["wizard:timepick"],
		"translations":  [
			"en"
		]
	}
}
EOD;
?>
