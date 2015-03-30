<?php

class TodolistsController extends AppController{

	function beforeFilter(){
		$this->Auth->allow(array('newlist','consulterlist','taillelist','consulterlistdetail','modifylist'));
	}




	public function newlist(){

			if($this->request->is('post')){
				$data = $this->request->data;

				// Conversion des dates dans le bon format
				$tableaudateDebut = explode("/",$data['Todolist']['dateBegin']);
				$data['Todolist']['dateBegin'] = $tableaudateDebut[2]."-".$tableaudateDebut[1]."-".$tableaudateDebut[0];
				$tableaudateEnd = explode("/",$data['Todolist']['dateEnd']);
				$data['Todolist']['dateEnd'] = $tableaudateEnd[2]."-".$tableaudateEnd[1]."-".$tableaudateEnd[0];

				// On envoie les données à la vue
				$this->Todolist->set($data);

				// On sauvegarde les données dans la BDD
				$this->Todolist->save($data);
				$this->Session->setFlash("ToDoList créee !");

				return $this->redirect($this->Auth->redirect(array('controller' => 'Todolists', 'action' => 'consulterlist')));
			}

	}

	public function modifylist(){

	}

	public function taillelist(){
		// retourne le nombre de todolist
		$taille = $this->Todolist->find('count');
		return $taille;

	}

	public function consulterlist($ligne){

		// On récupère le nom des todolists
		$list = $this->Todolist->find('all', array(
			'fields' => array('Todolist.name'),
			'order' => array('dateBegin DESC')	));

			return $list["$ligne"]["Todolist"]["name"];

	}

	public function consulterlistdetail($nom){

		// On recupere les données de la liste associées au nom
		$list = array('name' => $this->Todolist->find('all', array('fields' => array('Todolist.name'),'conditions' => array('Todolist.name' => $nom))),
			'text' => $this->Todolist->find('all', array('fields' => array('Todolist.text'),'conditions' => array('Todolist.name' => $nom))),
			'dateBegin' => $this->Todolist->find('all', array('fields' => array('Todolist.dateBegin'),'conditions' => array('Todolist.name' => $nom))),
			'dateEnd' => $this->Todolist->find('all', array('fields' => array('Todolist.dateEnd'),'conditions' => array('Todolist.name' => $nom))),
			'frequency' => $this->Todolist->find('all', array('fields' => array('Todolist.frequency'),'conditions' => array('Todolist.name' => $nom)))  );


			// On passe les variables à la vues 
			$this->set($list);

	}


}