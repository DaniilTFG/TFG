<?php
namespace DaniilTFG;

class Log extends \core\LogAbstract implements \core\LogInterface {
	public static function log($str) {
		self::Instance()->log[] = $str;
	}

	public function _write() {
		if (!file_exists("Log")) {
			mkdir('Log', 0777, true);
		}

		$d = new \DateTime();
		$dateString = $d->format('d.m.Y_H.i.s.u');

		$fileName = $dateString . ".log";
		$file = fopen("Log/" . $fileName, "w");

		foreach($this->log as $val) {
			echo $line = $val . "\r\n";
			fwrite($file, $line);
		}
	}
	public static function write() {
		static::Instance()->_write();
	}
}
?>