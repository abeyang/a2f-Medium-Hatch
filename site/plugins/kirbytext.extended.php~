<?php

class kirbytextExtended extends kirbytext {
	function __construct($text, $markdown=true) {
		parent::__construct($text, $markdown);

		
			// dfine custom tags
			$this->addTags('event');

			//define custom attributes
			$this->addAttributes('date');
			$this->addAttributes('time');
			$this->addAttributes('location');
			$this->addAttributes('misc');

	}

	
	
	// define a function for each new tag you specify
	function event($params) {
		// do something with the passed params here.
		$name = $params['event'];
		$date = $params['date'];
		$time = $params['time'];
		$location = $params['location'];
		$misc = $params['misc'];

		//define default values for attributes

		if(!empty($misc))
		{
			return '<div class="event">
		    	  		<h3> ' . $name . '</h3>
		    	 		<div> ' . $date . ' ' . $time . '</div>
	      				<div> ' . $location . '</div>
    					<div> ' . $misc . '</div>
					</div>';
		}

		return '<div class="event">
					<h3> ' . $name.'</h3>
					<div> ' . $date . ' ' . $time . ' </div>
					<div> ' . $location . ' </div>
				</div>';
	}
}

?>
