<?php
namespace MFFC\Models;
/**
 * @Entity @Table(name="mffc_article")
 **/
class ArticleModel extends BaseModel{


    /** @Id @Column(type="integer") **/
    protected $id;

    /** @Column(type="string") **/
    protected $title;

    /** @Column(type="string") **/
    protected $description;

    /** @Column(type="integer") **/
    protected $cid;

    /** @Column(type="string") **/
    protected $body;

    /** @Column(type="string") **/
    protected $image;


	public function __construct(){
		parent::__construct();
	}

	public function findOne($id){
		$result = array();
		$record = $this->entityManager->getRepository(__CLASS__ )->findOneBy(array('id' => $id));

	    $result['title'] = $record->getTitle();
	    $result['description'] = $record->getDescription();
	    $result['body'] = $record->getBody();
	    $result['image'] = $record->getImage();
		return $result;
	}

	public function findList($condition = array()){
		$result = array();
		$records = $this->entityManager->getRepository(__CLASS__ )->findBy($condition);
		$i = 0;
		foreach($records as $record){
		    $result[$i]['title'] = $record->getTitle();
		    $result[$i]['description'] = $record->getDescription();
		    $result[$i]['body'] = $record->getBody();
		    $result[$i]['image'] = $record->getImage();
		    $i++;
		}
		return $result;
	}

	public function getTitle(){
		return $this->title;
	}
	public function getDescription(){
		return $this->description;
	}
	public function getBody(){
		return $this->body;
	}
	public function getImage(){
		return $this->image;
	}

}