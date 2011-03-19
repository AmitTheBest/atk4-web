<?php
class page_download_success extends Page {
	function init(){
		parent::init();
		$f=$this->add('Form');
		$f->setLayout("download_success_form_layout");

		$this->js(true)->univ()->location('/distfiles/'.$_GET['file']);

		$this->template->trySet('file',addslashes(htmlspecialchars($_GET['file'])));
		$f->addField('text','t','Tweet This')
			->set('I just downloaded Agile Toolkit (PHP UI Framework). Check out their interactive introduction http://agiletoolkit.org/intro. #atk4');
		$f->addSubmit('Tweet');
		if($f->isSubmitted()){
			$f->js()->univ()->location('http://twitter.com?status='.rawurlencode($f->get('t')))->execute();
			exit;
		}
	}
	function defaultTemplate(){
		return array('page/download/success');
	}
}
