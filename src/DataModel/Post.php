<?php

namespace Mediawiki\Flow\Api\DataModel;

class Post {

	private $id;
	private $content;
	private $inResponseTo;

	public function __construct( $id, $content, $inResponseTo = null ) {
		$this->id = $id;
		$this->content = $content;
		$this->inResponseTo = $inResponseTo;
	}

	/**
	 * @return mixed
	 */
	public function getContent() {
		return $this->content;
	}

	/**
	 * @return mixed
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @return null
	 */
	public function getInResponseTo() {
		return $this->inResponseTo;
	}


} 