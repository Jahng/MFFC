<?php
namespace MFFC\Models;
/**
 * @Entity @Table(name="mffc_user")
 **/
class UserModel extends BaseModel{


    /** @Id @Column(type="integer") **/
    protected $id;

    /** @Column(type="string") **/
    protected $name;

    /** @Column(type="string") **/
    protected $email;

	public function __construct(){
		parent::__construct();
	}

	public function findAll(){
		$records = $this->entityManager->getRepository(__CLASS__ )->findAll();
		foreach ($records as $record) {
		    $result[]['name'] = $record->getName();
		}
		return $result;
	}

	public function getName(){
		return $this->name;
	}

}