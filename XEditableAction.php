<?php

/**
 * @inheritdoc
 */

namespace kotchuprik\xeditable;

use yii\base\Action;
use yii\db\ActiveRecord;
use yii\web\BadRequestHttpException;
use yii\web\NotFoundHttpException;
use yii\web\Response;

class XEditableAction extends Action
{
    public $modelClass;
    public $scenario = '';

    /**
     * @inheritdoc
     */
    public function run()
    {
        if (\Yii::$app->request->isAjax) {
            $pk = $_POST['pk'];
            $attribute = $_POST['name'];
            $value = $_POST['value'];

            $modelClass = $this->modelClass;

            /** @var ActiveRecord $model */
            $model = $modelClass::findOne($pk);
            if ($this->scenario) {
                $model->setScenario($this->scenario);
            }

            if ($model === null) {
                throw new NotFoundHttpException();
            }

            $model->$attribute = $value;

            if ($model->validate()) {
                try {
                    $model->update();

                    return new Response([
                        'content' => 'Updated!',
                    ]);
                } catch (\Exception $e) {
                    return new Response([
                        'content' => $e->getMessage(),
                        'statusCode' => 400,
                    ]);
                }
            } else {
                return new Response([
                    'content' => $model->getFirstError($attribute),
                    'statusCode' => 400,
                ]);
            }
        }
    }
}
