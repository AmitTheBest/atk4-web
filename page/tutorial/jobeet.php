<?
class page_doc_jobeet extends Doc_Page {
	function init(){
		parent::init();
        //$this->api->dbConnect();

        /*
        $this->sidebar->template->set('title','Agile Jobeet Project');
		$this->subPage('day1','1: The Agile Toolkit') ;
		$this->subPage('day2','2: About Jobeet') ;
		$this->subPage('day3','3: The Data Model') ;
		$this->subPage('day4','4: Controller and View') ;
		$this->subPage('day5','5: The Routing') ;
		$this->subPage('day6','6: More with Model') ;
		$this->subPage('day7','7: Category Page') ;
		$this->subPage('day8','8: The Form') ;
		$this->subPage('..','To Be Continued') ;
        */
        return;
		$this->subPage('understanding','Understanding') ;
		$this->subPage('enhancing','Reading Agile Toolkit') ;
		$this->subPage('interaction','') ;
		$this->subPage('models','Model-based Grid') ;
		$this->subPage('styling','Styling and layouts') ;
		$this->subPage('ajax','AJAX and Dynamics') ;
		$this->subPage('limitations') ;

	}
    function render(){
        if($_GET['button'])return $this->js()->univ()->alert('Nothing happened :)')->execute();
        parent::render();
    }
}
