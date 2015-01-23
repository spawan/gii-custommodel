<?php
/**
 * This is the template for generating the model class of a specified table.
 */

/* @var $this yii\web\View */
/* @var $generator yii\gii\generators\model\Generator */
/* @var $tableName string full table name */
/* @var $className string class name */
/* @var $tableSchema yii\db\TableSchema */
/* @var $labels string[] list of attribute labels (name => label) */
/* @var $rules string[] list of validation rules */
/* @var $relations array list of relations (name => relation declaration) */

echo "<?php\n";
?>

namespace <?= $generator->ns ?>;

use Yii;
use <?= $generator->ns ?>\base\Base<?= $className ?>;
use <?= $generator->ns ?>\query\<?= $className ?>Query;

 class <?= $className ?> extends Base<?= $className ?>
{
    public static function find()
    {
        return new <?= $className ?>Query(get_called_class());
    }
    
     public function rules() {
        return ArrayHelper::merge(
            parent::rules(),
            [
                    [],
                ]);
       }
       
       public function attributeLabels() {
        return ArrayHelper::merge(
            parent::attributeLabels(),
            [
                    [],
                ]);
       }
}
