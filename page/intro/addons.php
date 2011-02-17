<?php
class page_intro_addons extends page_intro_generic {
	function init(){
		parent::init();
		$this->api->dbConnect();

		$p=$this->add('Doc_View');

		$p->add('H1')->set('Addons which actually help');

		$p->add('P')->set('
				Not often PHP developers are experienced a true cross-compatibility in software. Because of low requriements
				by the base PHP language, many libraries and add-ons are distributed as self-sufficient archives without.
				');

		$p->add('P')->set('
				In other words, each library you use does things in a different way. They don\'t talk or communicate. 
				They consume huge amount of memory / cpu and often implementing from scratch is a better alternative.
				');

		$p->add('P')->set('
				Another problem which plagues PHP libraries is that they lack support for built-in PHP functions and
				technologies such as libxml, libxslt and so on. Agile Toolkit always tries to use built-in features even if
				it requires to install additional PHP module.
				');


		$p=$this;

		$this->add('H2')->set('In Agile Toolkit — anything is an addon');

		$p->add('P')->set('
				Agile Toolkit looks for number of different resources as it is being executed. Those are PHP files, JS files,
				images, templates and so on. The job of locating those resources is handled by a component called PathFinder. 
				');


		$this->add('P')->set('
				PathFinder contains list of directories containing each type of resource. As developer you can easily extend
				Agile Toolkit by adding new directories. This can be done to share some resources between multiple projects
				you develop or to attach additional add-ons. For example, in most cases you would want to include support for
				Models. This support is optional and is added through addons like this:
				');

		$p->add('Doc_Code')
			->setDescr(<<<'EOD'
$this->api->addLocation('atk4-addons',array(
		'template'=>'misc/templates',
		'php'=>array('mvc',
			'billing/lib',
			'misc/lib',
			)
		))
->setParent($this->api->pathfinder->base_location);
EOD
);

		$this->add('P')->set('
				This code includes "atk4-addons", to find out more about this compliation of addons, <a
				href="/develop/addons">visit our addon page</a>.
				');


		$this->add('H2')->set('Add-on examples');
		$this->add('P')->set('
				When add-on is distributed, it includes the actual code, necessary templates, necessary pages or views and
				sometimes even documentation pages.
				');

		$p->add('Doc_Example')
			->setCode(<<<'EOD'
$this->api->addLocation(
	'atk4-addons/misc/templates/js','js')
	->setParent($this->api->pathfinder->base_location);
$p->js()->_load('univ.google.map');

$map=$p->add('View_Google_Map');
$map->renderMap(53.35,-6.26);
$map->width=390; $map->height=300;
EOD
);

		$this->add('H2')->set('To be continued..');

		$this->add('Button')
			->set('Next Page')
			->js('click')
			->univ()->redirect($this->api->getDestinationURL('../addons'));



	}
}
