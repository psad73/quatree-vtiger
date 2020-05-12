Przywrócenie poprawnego kodowania znaków w mailach:
vtigercrm/vtlib/Vtiger/Mailer.php
```
function __construct(){
    parent::__construct();	    
    global $default_charset;    
    $this->initialize();
    $this->CharSet = $default_charset;
}
```