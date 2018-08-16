<?php
Yii::import('zii.widgets.CPortlet');
class MasterMenu extends CPortlet
{
	public $title='Tiket Termurah';
		
	protected function renderContent()
	{
		$this->render('tiketTermurah');
	}
}
?>