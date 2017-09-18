<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Camera Model
 *
 * @method \App\Model\Entity\Camera get($primaryKey, $options = [])
 * @method \App\Model\Entity\Camera newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Camera[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Camera|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Camera patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Camera[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Camera findOrCreate($search, callable $callback = null, $options = [])
 */
class CameraTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('camera');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->notEmpty('id', 'create');

        $validator
            ->scalar('name')
            ->notEmpty('name');

        $validator
            ->scalar('host')
            ->notEmpty('host');

        $validator
            ->notEmpty('port');

        $validator
            ->scalar('enabled')
            ->notEmpty('enabled');

        $validator
            ->notEmpty('width');

        $validator
            ->notEmpty('height');

        $validator
            ->notEmpty('maxFPS');

        return $validator;
    }
}
