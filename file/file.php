<?php 


class FileHandler
{	
	//public $file;
	function __construct()
	{
		$this->file = $_SERVER['DOCUMENT_ROOT'].'/gitrepo/php/file/sample.txt';
	}

	public function openReadHandle(){
		$this->readHandle = fopen( $this->file, 'r' ) or die( "Unable to open file in read mode!" );
	}

	public function openWriteHandle(){
		$this->writehandle = fopen( $this->file, 'w' ) or die( "Unable to open file in write mode!" );
	}


	public function readFile(){
		$read_content = fread( $this->readHandle , filesize($this->file ));
		return $read_content;
	}

	public function writeFile($fileContent){ 
		fwrite( $this->writehandle, $fileContent );
		
	}

	public function searchFile($search, $replace){
		
		$this->openReadHandle();
		$content = $this->readFile();
		$new_content = str_ireplace($search, $replace, $content);
		$this->openWriteHandler();
		$this->writeFile($new_content);

	}
	public function removeFileLine($count){ 
		$this->openReadHandle();
		

		$content = $this->readFile();
		$explode = explode("\n", $content);

		array_splice($explode, $count-1, 1);

		$newContents = implode("\n",$explode);

print_R($newContents);
		$this->openWriteHandle();
		$this->writeFile($newContents);


		//$explode[$count] = 'MARAPPATTI';
		//$write_content = implode("\n", $explode);
		//$this->writeFile($write_content);

	}

}

//$file 		  = $_SERVER['DOCUMENT_ROOT'].'/gitrepo/php/file/sample.txt';
//$handle 	  = fopen( $file, 'r+' ) or die( "Unable to open file!" );
//$read_content = fread( $handle , filesize($file ));

$createFile = new FileHandler();
//$createFile->searchFile('midhun','sajin');


$createFile->removeFileLine(2);

//print_r($GLOBALS);

//read the entire string
//$str=file_get_contents($file);
//$new_content = str_replace('Kui', 'sajinkui', $str);
//file_put_contents($file , $new_content);
//print_r($str);die();


//$file = new FileHandler();
//$file->searchFile('MY','LUTTAPPI');
//$file->replaceFileLine(0);
?>