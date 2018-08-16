<?php

class PaymentController extends Controller
{
	public function actionIndex()
	{
		$model=new Transactions();
		$this->render('index');
	}

	public function actionId($id){
		$result = Yii::app()->db->createCommand()
				->select('*')
				->from('transactions')
				->where('id_transaction=:id_transaction', array(':id_transaction'=>$id))
				->queryAll();
		$id_airline = $result[0]['id_airline'];


		$result = Yii::app()->db->createCommand()
				->update('transactions', 
					array(
						'id_cost'=>new CDbExpression($id_airline)
					),
					'id_transaction=:id_transaction', 
					array(':id_transaction'=>$id));
		return $this->render("index",[ 
            'id' => $id 
         ]);
	}

	public function actionPay($id){
		$result = Yii::app()->db->createCommand()
				->update('transactions', 
					array(
						'payment'=>new CDbExpression(1)
					),
					'id_transaction=:id_transaction', 
					array(':id_transaction'=>$id));

		$this->redirect(array('payment/id','id'=>$id, 'message'=>1));
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}