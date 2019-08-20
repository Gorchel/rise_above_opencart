<?php

namespace Journal3\Utils;

class Str {

	public static function toBool($string) {
		$string = (string)$string;

		if ($string === '0') {
			return 'false';
		}

		if ($string === '1') {
			return 'true';
		}

		return '';
	}

	public static function fromBool($bool) {
		if ($bool === 'false') {
			return 0;
		}

		if ($bool === 'true') {
			return 1;
		}

		return 2;
	}

	public static function startsWith($string, $value) {
		return strpos($string, $value) === 0;
	}

	public static function endsWith($string, $value) {
		return substr($string, -strlen($value)) === $value;
	}

	public static function concatIfNotEmpty($src, $string) {
		return $src ? $src . $string : $src;
	}

	public static function contains($haystack, $needle) {
		return strpos($haystack, $needle) !== false;
	}

	public static function YoutubeId($url) {
		// http://stackoverflow.com/a/37186299

		$pattern =
			'%^# Match any youtube URL
                (?:https?://)?  # Optional scheme. Either http or https
                (?:www\.)?      # Optional www subdomain
                (?:             # Group host alternatives
                  youtu\.be/    # Either youtu.be,
                | youtube\.com  # or youtube.com
                  (?:           # Group path alternatives
                    /embed/     # Either /embed/
                  | /v/         # or /v/
                  | /watch\?v=  # or /watch\?v=
                  )             # End path alternatives.
                )               # End host alternatives.
                ([\w-]{10,12})  # Allow 10-12 for 11 char youtube id.
                $%x';

		$result = preg_match($pattern, $url, $matches);

		if ($result) {
			return $matches[1];
		}

		return false;
	}

	public static function VimeoId($url) {
		return substr(parse_url($url, PHP_URL_PATH), 1);
	}

}
