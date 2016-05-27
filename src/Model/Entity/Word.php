<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Word Entity.
 *
 * @property int $id
 * @property string $name
 * @property int $category_id
 * @property \App\Model\Entity\Category $category
 * @property string $description
 * @property \Cake\I18n\Time $created_at
 * @property \Cake\I18n\Time $updated_at
 * @property \App\Model\Entity\Answer[] $answers
 * @property \App\Model\Entity\Result[] $results
 */
class Word extends Entity
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
        'id' => false,
    ];
}
