<?php
	switch ($_SERVER["SCRIPT_NAME"]) {
		case "contact.php":
			$CURRENT_PAGE = "Contact"; 
			$PAGE_TITLE = "Contact Us";
			break;
		case "menu.php":
			$CURRENT_PAGE = "Menu"; 
			$PAGE_TITLE = "Menu";
			break;
		case "specials.php":
			$CURRENT_PAGE = "Specials"; 
			$PAGE_TITLE = "spec";
			break;
		case "events.php":
			$CURRENT_PAGE = "Events"; 
			$PAGE_TITLE = "events";
			break;
		case "contact.php":
			$CURRENT_PAGE = "Contact"; 
			$PAGE_TITLE = "Contact Us";
			break;
		default:
			$CURRENT_PAGE = "Index";
			$PAGE_TITLE = "SomerdaleBar";
	}
?>