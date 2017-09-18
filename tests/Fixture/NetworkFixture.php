<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * NetworkFixture
 *
 */
class NetworkFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'network';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'IPv4_Address' => ['type' => 'string', 'length' => 64, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'IPv4_Subnetmask' => ['type' => 'string', 'length' => 64, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'IPv4_DefaultGateWay' => ['type' => 'string', 'length' => 64, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'MTU' => ['type' => 'smallinteger', 'length' => 5, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'Preferred_DNS_Server' => ['type' => 'string', 'length' => 64, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Alternate_DNS_Server' => ['type' => 'string', 'length' => 64, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'IPv4_Address' => 'Lorem ipsum dolor sit amet',
            'IPv4_Subnetmask' => 'Lorem ipsum dolor sit amet',
            'IPv4_DefaultGateWay' => 'Lorem ipsum dolor sit amet',
            'MTU' => 1,
            'Preferred_DNS_Server' => 'Lorem ipsum dolor sit amet',
            'Alternate_DNS_Server' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
