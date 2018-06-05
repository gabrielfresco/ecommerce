<?php

require_once(dirname(__FILE__) . "/config.php");

class LogFiles
{
    private $datetime;
    private $message;
    private $title;

     /**
     * Create message
     * @param string $tle
     * @param string $msg
     */
    public function __construct($tle,$msg)
    {
        $dt = date('Y-m-d H:i:s');
        $this->datetime = $dt;
        $this->message = $msg;
        $this->title = $tle;
        $this->saveToFile();
    }

     /**
     * Save message to file
     */
    private function saveToFile()
    {
        $createMessage = "[".$this->datetime."] - ".$this->title." -> ".$this->message;
        file_put_contents(LOG_FILE, $createMessage. PHP_EOL, FILE_APPEND | LOCK_EX);
    }
}
?>
