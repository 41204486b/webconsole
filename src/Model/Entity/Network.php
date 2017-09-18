<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Network Entity
 *
 * @property int $id
 * @property string $IPv4_Address
 * @property string $IPv4_Subnetmask
 * @property string $IPv4_DefaultGateWay
 * @property int $MTU
 * @property string $Preferred_DNS_Server
 * @property string $Alternate_DNS_Server
 */
class Network extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
