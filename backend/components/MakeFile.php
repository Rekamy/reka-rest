<?php
namespace backend\components;

use Yii;
use yii\gii\CodeFile;

class MakeFile extends CodeFile
{

    /**
     * @var array|Generator[] a list of generator configurations or instances. The array keys
     * are the generator IDs (e.g. "crud"), and the array elements are the corresponding generator
     * configurations or the instances.
     *
     * After the module is initialized, this property will become an array of generator instances
     * which are created based on the configurations previously taken by this property.
     *
     * Newly assigned generators will be merged with the [[coreGenerators()|core ones]], and the former
     * takes precedence in case when they have the same generator ID.
     */
    public $newFileMode = 0666;
    /**
     * @var int the permission to be set for newly generated directories.
     * This value will be used by PHP chmod function.
     * Defaults to 0777, meaning the directory can be read, written and executed by all users.
     */
    public $newDirMode = 0777;

	public function save()
	{
		if ($this->operation === self::OP_CREATE) {
			$dir = dirname($this->path);
			if (!is_dir($dir)) {
				$mask = @umask(0);
				$result = @mkdir($dir, $this->newDirMode, true);
				@umask($mask);
				if (!$result) {
					return "Unable to create the directory '$dir'.";
				}
			}
		}
		if (@file_put_contents($this->path, $this->content) === false) {
			return "Unable to write the file '{$this->path}'.";
		} else {
			$mask = @umask(0);
			@chmod($this->path, $this->newFileMode);
			@umask($mask);
		}

		return true;
	}

}
